<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostBatchUnlockRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localBook1 = "Book1.xlsx";
$remoteBook1 = "Book1.xlsx";
$localMyDoc = "myDocument.xlsx";
$remoteMyDoc = "myDocument.xlsx";

$batchLockRequestMatchCondition = new \Aspose\Cells\Cloud\Model\MatchConditionRequest();
$batchLockRequestMatchCondition->setRegexPattern("(^Book)(.+)(xlsx$)" ); 
$batchLockRequest = new \Aspose\Cells\Cloud\Model\BatchLockRequest();
$batchLockRequest->setSourceFolder($remoteFolder ); 
$batchLockRequest->setPassword("123456" ); 
$batchLockRequest->setOutFolder("OutResult" ); 
$batchLockRequest->setMatchCondition($batchLockRequestMatchCondition ); 
CellsApiTestBase::ready(  $this->instance,$localBook1 ,$remoteFolder . "/" . $remoteBook1 ,  "");
CellsApiTestBase::ready(  $this->instance,$localMyDoc ,$remoteFolder . "/" . $remoteMyDoc ,  "");
 
$request = new PostBatchUnlockRequest();
$request->setBatchLockRequest( $batchLockRequest);
$$cellsApi->postBatchUnlock($request);