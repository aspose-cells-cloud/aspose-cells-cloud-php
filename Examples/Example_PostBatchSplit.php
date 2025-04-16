<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostBatchSplitRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localBook1 = "Book1.xlsx";
$remoteBook1 = "Book1.xlsx";
$localMyDoc = "myDocument.xlsx";
$remoteMyDoc = "myDocument.xlsx";

$batchSplitRequestMatchCondition = new \Aspose\Cells\Cloud\Model\MatchConditionRequest();
$batchSplitRequestMatchCondition->setRegexPattern("(^Book)(.+)(xlsx$)" ); 
$batchSplitRequest = new \Aspose\Cells\Cloud\Model\BatchSplitRequest();
$batchSplitRequest->setSourceFolder($remoteFolder ); 
$batchSplitRequest->setFormat("Pdf" ); 
$batchSplitRequest->setOutFolder("OutResult" ); 
$batchSplitRequest->setMatchCondition($batchSplitRequestMatchCondition ); 
CellsApiTestBase::ready(  $this->instance,$localBook1 ,$remoteFolder . "/" . $remoteBook1 ,  "");
CellsApiTestBase::ready(  $this->instance,$localMyDoc ,$remoteFolder . "/" . $remoteMyDoc ,  "");
 
$request = new PostBatchSplitRequest();
$request->setBatchSplitRequest( $batchSplitRequest);
$$cellsApi->postBatchSplit($request);