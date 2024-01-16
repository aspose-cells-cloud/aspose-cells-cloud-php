<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$listObject = new \Aspose\Cells\Cloud\Model\ListObject();
$listObject->setShowHeaderRow('true' ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetListObjectRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet7");
$request->setListObjectIndex( 0);
$request->setListObject( $listObject);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetListObject($request);