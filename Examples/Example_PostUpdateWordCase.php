<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostUpdateWordCaseRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "BookText.xlsx";
$remoteName = "BookText.xlsx";

$wordCaseOptionsDataSource = new \Aspose\Cells\Cloud\Model\DataSource();
$wordCaseOptionsDataSource->setDataSourceType("CloudFileSystem" ); 
$wordCaseOptionsDataSource->setDataPath("BookText.xlsx" ); 
$wordCaseOptionsScopeOptions = new \Aspose\Cells\Cloud\Model\ScopeOptions();
$wordCaseOptionsScopeOptions->setScope("EntireWorkbook" ); 
$wordCaseOptions = new \Aspose\Cells\Cloud\Model\WordCaseOptions();
$wordCaseOptions->setDataSource($wordCaseOptionsDataSource ); 
$wordCaseOptions->setWordCaseType("None" ); 
$wordCaseOptions->setScopeOptions($wordCaseOptionsScopeOptions ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostUpdateWordCaseRequest();
$request->setWordCaseOptions( $wordCaseOptions);
$$cellsApi->postUpdateWordCase($request);