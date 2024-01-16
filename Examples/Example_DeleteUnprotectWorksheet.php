<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\DeleteUnprotectWorksheetRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$protectParameter = new \Aspose\Cells\Cloud\Model\ProtectSheetParameter();
$protectParameter->setProtectionType("ALL" ); 
$protectParameter->setPassword("123" ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new DeleteUnprotectWorksheetRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setProtectParameter( $protectParameter);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->deleteUnprotectWorksheet($request);