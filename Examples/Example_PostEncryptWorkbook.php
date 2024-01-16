<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostEncryptWorkbookRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$encryption = new \Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest();
$encryption->setPassword("123456" ); 
$encryption->setEncryptionType("XOR" ); 
$encryption->setKeyLength(128 ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostEncryptWorkbookRequest();
$request->setName( $remoteName);
$request->setEncryption( $encryption);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postEncryptWorkbook($request);