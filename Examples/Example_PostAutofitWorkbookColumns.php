<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostAutofitWorkbookColumnsRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostAutofitWorkbookColumnsRequest();
$request->setName( $remoteName);
$request->setStartColumn( 1);
$request->setEndColumn( 20);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postAutofitWorkbookColumns($request);