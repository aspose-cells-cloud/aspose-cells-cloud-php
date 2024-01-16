<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutDocumentPropertyRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$property = new \Aspose\Cells\Cloud\Model\CellsDocumentProperty();
$property->setName("Author" ); 
$property->setValue("cells developer" ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutDocumentPropertyRequest();
$request->setName( $remoteName);
$request->setProperty( $property);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putDocumentProperty($request);