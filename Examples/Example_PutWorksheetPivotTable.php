<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetPivotTableRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "TestCase.xlsx";
$remoteName = "TestCase.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorksheetPivotTableRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet4");
$request->setFolder( $remoteFolder);
$request->setSourceData( "=Sheet1!C6:E13");
$request->setDestCellName( "C1");
$request->setTableName( "TestPivot");
$request->setUseSameSource( 'true');
$request->setStorageName( "");
$$cellsApi->putWorksheetPivotTable($request);