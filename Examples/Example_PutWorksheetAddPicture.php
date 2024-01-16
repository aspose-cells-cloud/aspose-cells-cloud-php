<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetAddPictureRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$waterMarkPNG = "WaterMark.png";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
CellsApiTestBase::ready(  $this->instance,$waterMarkPNG ,$remoteFolder . "/WaterMark.png" ,  "");
 
$request = new PutWorksheetAddPictureRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet6");
$request->setUpperLeftRow( 1);
$request->setUpperLeftColumn( 1);
$request->setLowerRightRow( 10);
$request->setLowerRightColumn( 10);
$request->setPicturePath( $remoteFolder . "/WaterMark.png");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorksheetAddPicture($request);