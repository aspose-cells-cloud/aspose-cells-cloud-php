<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostUpdateWorksheetRowRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostUpdateWorksheetRowRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setRowIndex( 1);
$request->setHeight( 10.8);
$request->setCount( 9);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postUpdateWorksheetRow($request);