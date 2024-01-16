<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostClearFormatsRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostClearFormatsRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setRange( "A1:C10");
$request->setStartRow( 1);
$request->setStartColumn( 1);
$request->setEndRow( 3);
$request->setEndColumn( 3);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postClearFormats($request);