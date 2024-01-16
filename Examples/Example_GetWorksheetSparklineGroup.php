<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\GetWorksheetSparklineGroupRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "TestCase.xlsx";
$remoteName = "TestCase.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new GetWorksheetSparklineGroupRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setSparklineIndex( 0);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->getWorksheetSparklineGroup($request);