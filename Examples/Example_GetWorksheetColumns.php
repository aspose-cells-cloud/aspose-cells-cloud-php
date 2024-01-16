<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\GetWorksheetColumnsRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new GetWorksheetColumnsRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setOffset( 1);
$request->setCount( 10);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->getWorksheetColumns($request);