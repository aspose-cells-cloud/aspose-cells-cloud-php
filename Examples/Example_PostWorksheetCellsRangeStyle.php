<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeStyleRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$rangeOperateStyleFont = new \Aspose\Cells\Cloud\Model\Font();
$rangeOperateStyleFont->setSize(16 ); 
$rangeOperateStyle = new \Aspose\Cells\Cloud\Model\Style();
$rangeOperateStyle->setFont($rangeOperateStyleFont ); 
$rangeOperateRange = new \Aspose\Cells\Cloud\Model\Range();
$rangeOperateRange->setColumnCount(1 ); 
$rangeOperateRange->setColumnWidth(10.0 ); 
$rangeOperateRange->setFirstRow(1 ); 
$rangeOperateRange->setRowCount(10 ); 
$rangeOperate = new \Aspose\Cells\Cloud\Model\RangeSetStyleRequest();
$rangeOperate->setStyle($rangeOperateStyle ); 
$rangeOperate->setRange($rangeOperateRange ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetCellsRangeStyleRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setRangeOperate( $rangeOperate);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetCellsRangeStyle($request);