<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetFormatConditionConditionRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorksheetFormatConditionConditionRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setIndex( 0);
$request->setType( "CellValue");
$request->setOperatorType( "Between");
$request->setFormula1( "v1");
$request->setFormula2( "v2");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorksheetFormatConditionCondition($request);