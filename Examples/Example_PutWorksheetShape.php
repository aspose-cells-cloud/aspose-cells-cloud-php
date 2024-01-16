<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetShapeRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$shapeDTO = new \Aspose\Cells\Cloud\Model\Shape();

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorksheetShapeRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setShapeDTO( $shapeDTO);
$request->setDrawingType( "arc");
$request->setUpperLeftRow( 1);
$request->setUpperLeftColumn( 1);
$request->setTop( 10);
$request->setLeft( 10);
$request->setWidth( 100);
$request->setHeight( 100);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorksheetShape($request);