<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeSortRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Group.xlsx";
$remoteName = "Group.xlsx";

$rangeSortRequestDataSorter = new \Aspose\Cells\Cloud\Model\DataSorter();
$rangeSortRequestDataSorter->setCaseSensitive('true' ); 
$rangeSortRequestCellArea = new \Aspose\Cells\Cloud\Model\Range();
$rangeSortRequestCellArea->setColumnCount(3 ); 
$rangeSortRequestCellArea->setFirstColumn(0 ); 
$rangeSortRequestCellArea->setFirstRow(0 ); 
$rangeSortRequestCellArea->setRowCount(15 ); 
$rangeSortRequest = new \Aspose\Cells\Cloud\Model\RangeSortRequest();
$rangeSortRequest->setDataSorter($rangeSortRequestDataSorter ); 
$rangeSortRequest->setCellArea($rangeSortRequestCellArea ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetCellsRangeSortRequest();
$request->setName( $remoteName);
$request->setSheetName( "book1");
$request->setRangeSortRequest( $rangeSortRequest);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetCellsRangeSort($request);