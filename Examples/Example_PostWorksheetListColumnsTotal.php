<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetListColumnsTotalRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$tableTotalRequeststableTotalRequest0 = new \Aspose\Cells\Cloud\Model\TableTotalRequest();
$tableTotalRequeststableTotalRequest0->setListColumnIndex(1 ); 
$tableTotalRequeststableTotalRequest0->setTotalsCalculation("Average" ); 
$tableTotalRequests = array (
    $tableTotalRequeststableTotalRequest0
);
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetListColumnsTotalRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet7");
$request->setListObjectIndex( 0);
$request->setTableTotalRequests( $tableTotalRequests);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetListColumnsTotal($request);