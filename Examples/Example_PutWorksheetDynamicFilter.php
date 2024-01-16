<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetDynamicFilterRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorksheetDynamicFilterRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setRange( "A1:B1");
$request->setFieldIndex( 0);
$request->setDynamicFilterType( "BelowAverage");
$request->setMatchBlanks( 'false');
$request->setRefresh( 'true');
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorksheetDynamicFilter($request);