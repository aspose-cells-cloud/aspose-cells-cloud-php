<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostProtectWorkbookRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$protectWorkbookRequest = new \Aspose\Cells\Cloud\Model\ProtectWorkbookRequest();
$protectWorkbookRequest->setEncryptWithPassword("123456" ); 
$protectWorkbookRequest->setProtectWorkbookStructure("ALL" ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostProtectWorkbookRequest();
$request->setName( $remoteName);
$request->setProtectWorkbookRequest( $protectWorkbookRequest);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postProtectWorkbook($request);