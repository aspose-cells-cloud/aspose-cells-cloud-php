<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\GetWorksheetChartRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new GetWorksheetChartRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet4");
$request->setChartNumber( 0);
$request->setFormat( "png");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->getWorksheetChart($request);