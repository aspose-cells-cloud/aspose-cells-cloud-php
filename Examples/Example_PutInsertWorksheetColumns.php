<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutInsertWorksheetColumnsRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutInsertWorksheetColumnsRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setColumnIndex( 1);
$request->setColumns( 10);
$request->setUpdateReference( 'true');
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putInsertWorksheetColumns($request);