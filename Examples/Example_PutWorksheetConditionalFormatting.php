<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetConditionalFormattingRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$formatcondition = new \Aspose\Cells\Cloud\Model\FormatCondition();
$formatcondition->setType("CellValue" ); 
$formatcondition->setOperator("Between" ); 
$formatcondition->setFormula1("v1" ); 
$formatcondition->setFormula2("v2" ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorksheetConditionalFormattingRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setFormatcondition( $formatcondition);
$request->setCellArea( "A1:C10");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorksheetConditionalFormatting($request);