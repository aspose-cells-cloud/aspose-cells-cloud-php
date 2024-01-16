<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetHyperlinkRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorksheetHyperlinkRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setFirstRow( 1);
$request->setFirstColumn( 1);
$request->setTotalRows( 2);
$request->setTotalColumns( 3);
$request->setAddress( "https://products.aspose.cloud/cells/");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorksheetHyperlink($request);