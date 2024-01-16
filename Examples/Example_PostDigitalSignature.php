<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostDigitalSignatureRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$roywangPFX = "roywang.pfx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
CellsApiTestBase::ready(  $this->instance,$roywangPFX ,$remoteFolder . "/roywang.pfx" ,  "");
 
$request = new PostDigitalSignatureRequest();
$request->setName( $remoteName);
$request->setDigitalsignaturefile( $remoteFolder . "/roywang.pfx");
$request->setPassword( "123456");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postDigitalSignature($request);