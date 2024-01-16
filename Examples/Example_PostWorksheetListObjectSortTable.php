<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectSortTableRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$dataSorter = new \Aspose\Cells\Cloud\Model\DataSorter();
$dataSorter->setCaseSensitive('true' ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetListObjectSortTableRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet7");
$request->setListObjectIndex( 0);
$request->setDataSorter( $dataSorter);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetListObjectSortTable($request);