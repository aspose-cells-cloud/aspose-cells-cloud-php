<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectSummarizeWithPivotTableRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$createPivotTableRequestPivotFieldColumns = array (
    2
);
$createPivotTableRequestPivotFieldData = array (
    1
);
$createPivotTableRequestPivotFieldRows = array (
    0
);
$createPivotTableRequest = new \Aspose\Cells\Cloud\Model\CreatePivotTableRequest();
$createPivotTableRequest->setDestCellName("C1" ); 
$createPivotTableRequest->setName("testp" ); 
$createPivotTableRequest->setSourceData("=Sheet2!A1:E8" ); 
$createPivotTableRequest->setUseSameSource('true' ); 
$createPivotTableRequest->setPivotFieldColumns($createPivotTableRequestPivotFieldColumns ); 
$createPivotTableRequest->setPivotFieldData($createPivotTableRequestPivotFieldData ); 
$createPivotTableRequest->setPivotFieldRows($createPivotTableRequestPivotFieldRows ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetListObjectSummarizeWithPivotTableRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet7");
$request->setListObjectIndex( 0);
$request->setDestsheetName( "Sheet2");
$request->setCreatePivotTableRequest( $createPivotTableRequest);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetListObjectSummarizeWithPivotTable($request);