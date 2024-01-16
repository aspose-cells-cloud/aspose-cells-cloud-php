<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeOutlineBorderRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$rangeOperateborderColor = new \Aspose\Cells\Cloud\Model\Color();
$rangeOperateborderColor->setR(48 ); 
$rangeOperateborderColor->setG(48 ); 
$rangeOperateborderColor->setB(48 ); 
$rangeOperateRange = new \Aspose\Cells\Cloud\Model\Range();
$rangeOperateRange->setColumnCount(1 ); 
$rangeOperateRange->setColumnWidth(10.0 ); 
$rangeOperateRange->setFirstRow(1 ); 
$rangeOperateRange->setRowCount(10 ); 
$rangeOperate = new \Aspose\Cells\Cloud\Model\RangeSetOutlineBorderRequest();
$rangeOperate->setborderEdge("LeftBorder" ); 
$rangeOperate->setborderStyle("Dotted" ); 
$rangeOperate->setborderColor($rangeOperateborderColor ); 
$rangeOperate->setRange($rangeOperateRange ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetCellsRangeOutlineBorderRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setRangeOperate( $rangeOperate);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetCellsRangeOutlineBorder($request);