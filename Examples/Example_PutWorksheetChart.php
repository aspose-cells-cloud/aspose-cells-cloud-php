<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetChartRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorksheetChartRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet4");
$request->setChartType( "Pie");
$request->setUpperLeftRow( 5);
$request->setUpperLeftColumn( 5);
$request->setLowerRightRow( 10);
$request->setLowerRightColumn( 10);
$request->setArea( "C7:D11");
$request->setIsVertical( 'true');
$request->setTitle( "Aspose Chart");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorksheetChart($request);