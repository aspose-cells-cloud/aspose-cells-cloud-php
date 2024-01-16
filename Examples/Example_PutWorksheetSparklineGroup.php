<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetSparklineGroupRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "TestCase.xlsx";
$remoteName = "TestCase.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorksheetSparklineGroupRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setType( "Line");
$request->setDataRange( "C6:E13");
$request->setIsVertical( 'false');
$request->setLocationRange( "G6:G13");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorksheetSparklineGroup($request);