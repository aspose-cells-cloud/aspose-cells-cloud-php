<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostCopyWorksheetColumnsRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostCopyWorksheetColumnsRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setSourceColumnIndex( 1);
$request->setDestinationColumnIndex( 19);
$request->setColumnNumber( 8);
$request->setWorksheet( "Sheet2");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postCopyWorksheetColumns($request);