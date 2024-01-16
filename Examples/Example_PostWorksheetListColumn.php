<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetListColumnRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$listColumn = new \Aspose\Cells\Cloud\Model\ListColumn();
$listColumn->setName("test cloumn" ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetListColumnRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet7");
$request->setListObjectIndex( 0);
$request->setColumnIndex( 0);
$request->setListColumn( $listColumn);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetListColumn($request);