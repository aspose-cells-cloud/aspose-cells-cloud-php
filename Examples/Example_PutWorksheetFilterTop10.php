<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetFilterTop10Request;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorksheetFilterTop10Request();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setRange( "A1:B1");
$request->setFieldIndex( 0);
$request->setIsTop( 'true');
$request->setIsPercent( 'true');
$request->setItemCount( 1);
$request->setMatchBlanks( 'false');
$request->setRefresh( 'true');
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorksheetFilterTop10($request);