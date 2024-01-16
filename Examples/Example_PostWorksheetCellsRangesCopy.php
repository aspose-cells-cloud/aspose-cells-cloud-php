<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangesCopyRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$rangeOperateSource = new \Aspose\Cells\Cloud\Model\Range();
$rangeOperateSource->setColumnCount(1 ); 
$rangeOperateSource->setColumnWidth(10.0 ); 
$rangeOperateSource->setFirstRow(1 ); 
$rangeOperateSource->setRowCount(10 ); 
$rangeOperateTarget = new \Aspose\Cells\Cloud\Model\Range();
$rangeOperateTarget->setColumnCount(1 ); 
$rangeOperateTarget->setColumnWidth(10.0 ); 
$rangeOperateTarget->setFirstRow(10 ); 
$rangeOperateTarget->setRowCount(10 ); 
$rangeOperate = new \Aspose\Cells\Cloud\Model\RangeCopyRequest();
$rangeOperate->setOperate("copydata" ); 
$rangeOperate->setSource($rangeOperateSource ); 
$rangeOperate->setTarget($rangeOperateTarget ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetCellsRangesCopyRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setRangeOperate( $rangeOperate);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetCellsRangesCopy($request);