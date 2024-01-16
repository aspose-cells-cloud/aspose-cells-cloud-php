<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\GetWorksheetPivotTablesRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "TestCase.xlsx";
$remoteName = "TestCase.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new GetWorksheetPivotTablesRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet4");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->getWorksheetPivotTables($request);