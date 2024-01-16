<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostUpdateWorksheetZoomRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostUpdateWorksheetZoomRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setValue( 90);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postUpdateWorksheetZoom($request);