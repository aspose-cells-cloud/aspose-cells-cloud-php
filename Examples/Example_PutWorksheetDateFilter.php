<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetDateFilterRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorksheetDateFilterRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setRange( "A1:B1");
$request->setFieldIndex( 0);
$request->setDateTimeGroupingType( "Year");
$request->setYear( 1920);
$request->setMatchBlanks( 'false');
$request->setRefresh( 'true');
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorksheetDateFilter($request);