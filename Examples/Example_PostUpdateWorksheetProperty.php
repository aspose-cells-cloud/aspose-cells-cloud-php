<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostUpdateWorksheetPropertyRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$sheet = new \Aspose\Cells\Cloud\Model\Worksheet();
$sheet->setName("sheet65" ); 
$sheet->setIsGridlinesVisible('true' ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostUpdateWorksheetPropertyRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet5");
$request->setSheet( $sheet);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postUpdateWorksheetProperty($request);