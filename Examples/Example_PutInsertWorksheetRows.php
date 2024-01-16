<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutInsertWorksheetRowsRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutInsertWorksheetRowsRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setStartrow( 1);
$request->setTotalRows( 10);
$request->setUpdateReference( 'true');
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putInsertWorksheetRows($request);