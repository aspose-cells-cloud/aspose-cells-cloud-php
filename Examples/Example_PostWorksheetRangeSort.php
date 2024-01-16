<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetRangeSortRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$dataSorter = new \Aspose\Cells\Cloud\Model\DataSorter();
$dataSorter->setCaseSensitive('true' ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetRangeSortRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setCellArea( "A1:C10");
$request->setDataSorter( $dataSorter);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetRangeSort($request);