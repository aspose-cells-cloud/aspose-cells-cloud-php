<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorkbookNameRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$newName = new \Aspose\Cells\Cloud\Model\Name();
$newName->setText("name_1804" ); 
$newName->setComment("KeepSourceFormatting" ); 
$newName->setRefersTo('=Sheet1!$I$4' ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorkbookNameRequest();
$request->setName( $remoteName);
$request->setNewName( $newName);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorkbookName($request);