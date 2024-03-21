<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorkbookDataFillRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "BookCsvDuplicateData.csv";
$remoteName = "BookCsvDuplicateData.csv";

$dataFillDataFillDefaultValue = new \Aspose\Cells\Cloud\Model\DataFillValue();
$dataFillDataFillDefaultValue->setDefaultDate("2024-01-01" ); 
$dataFillDataFillDefaultValue->setDefaultNumber(0 ); 
$dataFillDataFillDefaultValue->setDefaultBoolean('false' ); 
$dataFill = new \Aspose\Cells\Cloud\Model\DataFill();
$dataFill->setDataFillDefaultValue($dataFillDataFillDefaultValue ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorkbookDataFillRequest();
$request->setName( $remoteName);
$request->setDataFill( $dataFill);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorkbookDataFill($request);