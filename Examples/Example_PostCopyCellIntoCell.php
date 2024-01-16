<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostCopyCellIntoCellRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostCopyCellIntoCellRequest();
$request->setName( $remoteName);
$request->setDestCellName( "C1");
$request->setSheetName( "Sheet1");
$request->setWorksheet( "Sheet2");
$request->setCellname( "A1");
$request->setRow( 1);
$request->setColumn( 1);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postCopyCellIntoCell($request);