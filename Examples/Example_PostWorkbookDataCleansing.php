<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorkbookDataCleansingRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "BookCsvDuplicateData.csv";
$remoteName = "BookCsvDuplicateData.csv";

$dataCleansingDataFillDataFillDefaultValue = new \Aspose\Cells\Cloud\Model\DataFillValue();
$dataCleansingDataFillDataFillDefaultValue->setDefaultDate("2024-01-01" ); 
$dataCleansingDataFillDataFillDefaultValue->setDefaultNumber(0 ); 
$dataCleansingDataFillDataFillDefaultValue->setDefaultBoolean('false' ); 
$dataCleansingDataFill = new \Aspose\Cells\Cloud\Model\DataFill();
$dataCleansingDataFill->setDataFillDefaultValue($dataCleansingDataFillDataFillDefaultValue ); 
$dataCleansing = new \Aspose\Cells\Cloud\Model\DataCleansing();
$dataCleansing->setNeedFillData('true' ); 
$dataCleansing->setDataFill($dataCleansingDataFill ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorkbookDataCleansingRequest();
$request->setName( $remoteName);
$request->setDataCleansing( $dataCleansing);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorkbookDataCleansing($request);