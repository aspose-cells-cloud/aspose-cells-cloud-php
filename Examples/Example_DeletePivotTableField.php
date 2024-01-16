<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\DeletePivotTableFieldRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "TestCase.xlsx";
$remoteName = "TestCase.xlsx";

$pivotTableFieldRequestData = array (
    0
);
$pivotTableFieldRequest = new \Aspose\Cells\Cloud\Model\PivotTableFieldRequest();
$pivotTableFieldRequest->setData($pivotTableFieldRequestData ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new DeletePivotTableFieldRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet4");
$request->setPivotTableIndex( 0);
$request->setPivotFieldType( "Row");
$request->setPivotTableFieldRequest( $pivotTableFieldRequest);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->deletePivotTableField($request);