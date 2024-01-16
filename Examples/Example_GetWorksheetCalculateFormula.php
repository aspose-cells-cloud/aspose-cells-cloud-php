<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\GetWorksheetCalculateFormulaRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new GetWorksheetCalculateFormulaRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setFormula( "=NOW()");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->getWorksheetCalculateFormula($request);