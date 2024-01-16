<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\DeleteWorksheetFreezePanesRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new DeleteWorksheetFreezePanesRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setRow( 1);
$request->setColumn( 1);
$request->setFreezedRows( 4);
$request->setFreezedColumns( 5);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->deleteWorksheetFreezePanes($request);