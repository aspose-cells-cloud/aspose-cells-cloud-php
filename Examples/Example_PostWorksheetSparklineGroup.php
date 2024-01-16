<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetSparklineGroupRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "TestCase.xlsx";
$remoteName = "TestCase.xlsx";

$sparklineGroup = new \Aspose\Cells\Cloud\Model\SparklineGroup();
$sparklineGroup->setDisplayHidden('true' ); 
$sparklineGroup->setPlotRightToLeft('true' ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetSparklineGroupRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setSparklineGroupIndex( 0);
$request->setSparklineGroup( $sparklineGroup);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetSparklineGroup($request);