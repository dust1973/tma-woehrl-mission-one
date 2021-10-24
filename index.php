<?php
declare(strict_types=1);
namespace FUCHSA\WOEHRL\TMAService;

use Dotenv\Dotenv;
use FUCHSA\WOEHRL\TMAService\Structs\ApiAuthentication;
use FUCHSA\WOEHRL\TMAService\Structs\EmailAttachment;
use FUCHSA\WOEHRL\TMAService\Structs\EmailAttachments;
use FUCHSA\WOEHRL\TMAService\Structs\Field;
use FUCHSA\WOEHRL\TMAService\Structs\FieldBoolean;
use FUCHSA\WOEHRL\TMAService\Structs\FieldDate;
use FUCHSA\WOEHRL\TMAService\Structs\FieldDateTime;
use FUCHSA\WOEHRL\TMAService\Structs\FieldDecimal;
use FUCHSA\WOEHRL\TMAService\Structs\FieldHtml;
use FUCHSA\WOEHRL\TMAService\Structs\FieldInteger;
use FUCHSA\WOEHRL\TMAService\Structs\FieldMultiSelect;
use FUCHSA\WOEHRL\TMAService\Structs\Fields;
use FUCHSA\WOEHRL\TMAService\Structs\FieldSingleSelect;
use FUCHSA\WOEHRL\TMAService\Structs\FieldString;
use FUCHSA\WOEHRL\TMAService\Structs\FieldXml;
use FUCHSA\WOEHRL\TMAService\Structs\GetInfo;
use FUCHSA\WOEHRL\TMAService\Structs\GetInfoRequest;
use FUCHSA\WOEHRL\TMAService\Structs\GetInfoResponse;
use FUCHSA\WOEHRL\TMAService\Structs\MultiSelectValue;
use FUCHSA\WOEHRL\TMAService\Structs\Send;
use FUCHSA\WOEHRL\TMAService\Structs\SendRequest;
use FUCHSA\WOEHRL\TMAService\Structs\SendResponse;
use FUCHSA\WOEHRL\TMAService\Structs\Subscriber;
use FUCHSA\WOEHRL\TMAService\Services\SendService;
use FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailInfo;
use FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailReactionInfo;

// require PSR-4 autoloading (assumes, that composer dump-autoload was executed before)
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$context = stream_context_create([
    'http' => [
        'user_agent' => 'PHP/SOAP'
    ],
    //'ssl' => [
    // set some SSL/TLS specific options
    //'verify_peer' => false,
    //'verify_peer_name' => false,
    //'allow_self_signed' => true
    //]
]);
$options = array(
    'soap_version' => SOAP_1_2,
    'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,
    'exceptions' => true,
    'trace' => 1,
    'encoding' => 'utf-8',
    'cache_wsdl' => WSDL_CACHE_NONE,
    'stream_context' => $context,
    'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
    'location' => $_ENV['server'],
    'classmap' => array(
        'Send' => SendService::class,
        'ApiAuthentication' => ApiAuthentication::class,
        'SendResponse' => SendResponse::class,
        'GetInfo' => GetInfo::class,
        'GetInfoResponse' => GetInfoResponse::class,
        'SendRequest' => SendRequest::class,
        'Subscriber' => Subscriber::class,
        'Fields' => Fields::class,
        'Field' => Field::class,
        'FieldSingleSelect' => FieldSingleSelect::class,
        'FieldHtml' => FieldHtml::class,
        'FieldXml' => FieldXml::class,
        'FieldDateTime' => FieldDateTime::class,
        'FieldMultiSelect' => FieldMultiSelect::class,
        'MultiSelectValue' => MultiSelectValue::class,
        'FieldBoolean' => FieldBoolean::class,
        'FieldDate' => FieldDate::class,
        'FieldDecimal' => FieldDecimal::class,
        'FieldInteger' => FieldInteger::class,
        'FieldString' => FieldString::class,
        'EmailAttachments' => EmailAttachments::class,
        'EmailAttachment' => EmailAttachment::class,
        'GetInfoRequest' => GetInfoRequest::class,
        'TransactionalMailInfo' => TransactionalMailInfo::class,
        'TransactionalMailReactionInfo' => TransactionalMailReactionInfo::class,
    )
);


try {


    $apiAuthentication = new ApiAuthentication();
    $apiAuthentication->setApiKey($_ENV['apiKey']);
    $apiAuthentication->setCustomerId($_ENV['customerId']);

    $soapheaders = [];
    $soapheaders[1] = new \SoapHeader($nameSpace = 'http://mission-one.de/tmaservice201708',
        'ApiAuthentication', $apiAuthentication, false);
    $soapheaders[0] = new \SoapHeader('http://www.w3.org/2005/08/addressing',
        'Action', 'http://mission-one.de/tmaservice201708/ITransactionalMail/Send', false);


    $subscriberBuffer = new Subscriber();
    $subscriberBuffer->setEmail($_ENV['email']);
    //$subscriberBuffer->setEmailAttachments(null);

    $fieldsBuffer = new Fields();

    $anredeField = new FieldSingleSelect();
    $anredeField->setName("gender");
    $anredeField->setValue($_ENV['gender']);

    $firstNameField = new FieldString();
    $firstNameField->setName("first_name");
    $firstNameField->setValue($_ENV['first_name']);

    $lastNameField = new FieldString();
    $lastNameField->setName("last_name");
    $lastNameField->setValue($_ENV['last_name']);

    $uidField = new FieldString();
    $uidField->setName("identifikationsnummer");
    $uidField->setValue($_ENV['identifikationsnummer']);

    $fieldsBuffer->addToField($anredeField);
    $fieldsBuffer->addToField($firstNameField);
    $fieldsBuffer->addToField($lastNameField);
    $fieldsBuffer->addToField($uidField);

    $subscriberBuffer->setFields($fieldsBuffer);


    $parameters = new SendRequest();
    $parameters->setTransactionalDispatchPublicId($_ENV['transactionalDispatchPublicId']);

    $parameters->setNewsletterId($_ENV['newsletterId']);
    $parameters->setSubscriber($subscriberBuffer);

    $request = new Send($parameters);
    $client = new SendService($_ENV['wsdl'], $options);
    $client->setSoapHeaders($soapheaders);

    $result = $client->Send($request);

    //echo $client->__getLastRequest() . "\n";
    //echo $client->__getLastResponse() . "\n";
    //echo $client->__getLastResponseHeaders() . "\n";
    //echo $client->__getLastRequestHeaders() . "\n";
    //die;
    //$client = $tma->Send($request);
    print "<pre>";
    var_dump($result);
    print "</pre>";

} catch (Exception $e) {
    echo "<h2>Exception Error!</h2>";
    echo $e->getMessage();
}
