<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostBatchProtectRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localBook1 = "Book1.xlsx";
$remoteBook1 = "Book1.xlsx";
$localMyDoc = "myDocument.xlsx";
$remoteMyDoc = "myDocument.xlsx";

$batchProtectRequestMatchCondition = new \Aspose\Cells\Cloud\Model\MatchConditionRequest();
$batchProtectRequestMatchCondition->setRegexPattern("(^Book)(.+)(xlsx$)" ); 
$batchProtectRequest = new \Aspose\Cells\Cloud\Model\BatchProtectRequest();
$batchProtectRequest->setSourceFolder($remoteFolder ); 
$batchProtectRequest->setProtectionType("All" ); 
$batchProtectRequest->setPassword("123456" ); 
$batchProtectRequest->setOutFolder("OutResult" ); 
$batchProtectRequest->setMatchCondition($batchProtectRequestMatchCondition ); 
CellsApiTestBase::ready(  $this->instance,$localBook1 ,$remoteFolder . "/" . $remoteBook1 ,  "");
CellsApiTestBase::ready(  $this->instance,$localMyDoc ,$remoteFolder . "/" . $remoteMyDoc ,  "");
 
$request = new PostBatchProtectRequest();
$request->setBatchProtectRequest( $batchProtectRequest);
$$cellsApi->postBatchProtect($request);