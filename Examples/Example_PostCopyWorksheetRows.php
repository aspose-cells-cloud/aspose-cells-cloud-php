<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostCopyWorksheetRowsRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostCopyWorksheetRowsRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setSourceRowIndex( 1);
$request->setDestinationRowIndex( 12);
$request->setRowNumber( 5);
$request->setWorksheet( "Sheet2");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postCopyWorksheetRows($request);