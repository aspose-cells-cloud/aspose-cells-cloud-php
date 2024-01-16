<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetListObjectRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorksheetListObjectRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet7");
$request->setStartRow( 1);
$request->setStartColumn( 1);
$request->setEndRow( 6);
$request->setEndColumn( 6);
$request->setFolder( $remoteFolder);
$request->setHasHeaders( 'true');
$request->setDisplayName( "true");
$request->setShowTotals( 'false');
$request->setStorageName( "");
$$cellsApi->putWorksheetListObject($request);