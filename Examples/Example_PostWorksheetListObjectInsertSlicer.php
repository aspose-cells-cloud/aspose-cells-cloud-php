<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectInsertSlicerRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "TestTables.xlsx";
$remoteName = "TestTables.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetListObjectInsertSlicerRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setListObjectIndex( 0);
$request->setColumnIndex( 2);
$request->setDestCellName( "j9");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetListObjectInsertSlicer($request);