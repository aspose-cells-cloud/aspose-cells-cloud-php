<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\GetWorksheetCellsRangeValueRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new GetWorksheetCellsRangeValueRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setNamerange( "Name_2");
$request->setFirstRow( 0);
$request->setFirstColumn( 0);
$request->setRowCount( 3);
$request->setColumnCount( 2);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->getWorksheetCellsRangeValue($request);