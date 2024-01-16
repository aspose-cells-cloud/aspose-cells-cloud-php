<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostUpdateWorksheetOleObjectRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$ole = new \Aspose\Cells\Cloud\Model\OleObject();
$ole->setLeft(10 ); 
$ole->setRight(10 ); 
$ole->setHeight(90 ); 
$ole->setWidth(78 ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostUpdateWorksheetOleObjectRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet6");
$request->setOleObjectIndex( 0);
$request->setOle( $ole);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postUpdateWorksheetOleObject($request);