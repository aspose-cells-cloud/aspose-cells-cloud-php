<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeUnMergeRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$range = new \Aspose\Cells\Cloud\Model\Range();
$range->setColumnCount(1 ); 
$range->setColumnWidth(10.0 ); 
$range->setFirstRow(1 ); 
$range->setRowCount(10 ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetCellsRangeUnMergeRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setRange( $range);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetCellsRangeUnMerge($request);