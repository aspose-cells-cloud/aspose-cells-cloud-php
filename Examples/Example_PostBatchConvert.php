<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostBatchConvertRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localBook1 = "Book1.xlsx";
$remoteBook1 = "Book1.xlsx";
$localMyDoc = "myDocument.xlsx";
$remoteMyDoc = "myDocument.xlsx";

$batchConvertRequestMatchCondition = new \Aspose\Cells\Cloud\Model\MatchConditionRequest();
$batchConvertRequestMatchCondition->setRegexPattern("(^Book)(.+)(xlsx$)" ); 
$batchConvertRequest = new \Aspose\Cells\Cloud\Model\BatchConvertRequest();
$batchConvertRequest->setSourceFolder($remoteFolder ); 
$batchConvertRequest->setFormat("pdf" ); 
$batchConvertRequest->setOutFolder("OutResult" ); 
$batchConvertRequest->setMatchCondition($batchConvertRequestMatchCondition ); 
CellsApiTestBase::ready(  $this->instance,$localBook1 ,$remoteFolder . "/" . $remoteBook1 ,  "");
CellsApiTestBase::ready(  $this->instance,$localMyDoc ,$remoteFolder . "/" . $remoteMyDoc ,  "");
 
$request = new PostBatchConvertRequest();
$request->setBatchConvertRequest( $batchConvertRequest);
$$cellsApi->postBatchConvert($request);