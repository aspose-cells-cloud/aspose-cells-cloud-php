<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutDocumentProtectFromChangesRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$password = new \Aspose\Cells\Cloud\Model\PasswordRequest();
$password->setPassword("123456" ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutDocumentProtectFromChangesRequest();
$request->setName( $remoteName);
$request->setPassword( $password);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putDocumentProtectFromChanges($request);