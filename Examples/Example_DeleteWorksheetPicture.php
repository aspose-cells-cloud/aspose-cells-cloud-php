<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\DeleteWorksheetPictureRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new DeleteWorksheetPictureRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet6");
$request->setPictureIndex( 0);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->deleteWorksheetPicture($request);