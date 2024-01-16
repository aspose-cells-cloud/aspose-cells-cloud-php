<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostMoveWorksheetRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$moving = new \Aspose\Cells\Cloud\Model\WorksheetMovingRequest();
$moving->setDestinationWorksheet("Sheet4" ); 
$moving->setPosition("After" ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostMoveWorksheetRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setMoving( $moving);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postMoveWorksheet($request);