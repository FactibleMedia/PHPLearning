<?php
$client = new SoapClient("http://www.ocrwebservice.com/services/OCRWebService.asmx?WSDL"
, array("trace"=>1, "exceptions"=>1)

);

$params = new StdClass();
$params->user_name = "FEDRMAX";
$params->license_code = "D3EC94C3-5F20-4E0C-ABF6-3151BE1ED449";


$inimage = new StdClass();



// $handle = fopen("C:\\sample_image.jpg", 'r');
$handle = fopen("sample_image.png", 'r');
// $card_image = fread($handle, filesize("C:\\sample_image.jpg"));
$card_image = fread($handle, filesize("sample_image.png"));
fclose($handle);

$inimage->fileName = "sample_image.png";
$inimage->fileData = $card_image;

$params->OCRWSInputImage = $inimage;

$settings = new StdClass();
$settings->ocrLanguages = array("ENGLISH");
$settings->outputDocumentFormat  = "TXT";
$settings->convertToBW = FALSE;
$settings->getOCRText = TRUE;
$settings->createOutputDocument = FALSE;
$settings->multiPageDoc = FALSE;
$settings->ocrWords = FALSE;

$params->OCRWSSetting = $settings;

try 
{
$result = $client->OCRWebServiceRecognize($params);
} 
catch (SoapFault $fault) 
{
print($client->__getLastRequest());
print($client->__getLastRequestHeaders());
}
// var_dump($result);
print_r($result);
print("Done");
?>