<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetCellsRangeRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorksheetCellsRangeRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setRange( "A1:C6");
$request->setShift( "Down");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorksheetCellsRange($request);