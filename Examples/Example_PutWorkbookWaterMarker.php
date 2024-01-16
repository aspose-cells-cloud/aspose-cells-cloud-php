<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorkbookWaterMarkerRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$textWaterMarkerRequest = new \Aspose\Cells\Cloud\Model\TextWaterMarkerRequest();
$textWaterMarkerRequest->setText("Aspose Cells Cloud" ); 
$textWaterMarkerRequest->setFontSize(12 ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorkbookWaterMarkerRequest();
$request->setName( $remoteName);
$request->setTextWaterMarkerRequest( $textWaterMarkerRequest);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorkbookWaterMarker($request);