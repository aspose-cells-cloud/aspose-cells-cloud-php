<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostPivotTableUpdatePivotFieldsRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "TestCase.xlsx";
$remoteName = "TestCase.xlsx";

$pivotField = new \Aspose\Cells\Cloud\Model\PivotField();
$pivotField->setShowCompact('true' ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostPivotTableUpdatePivotFieldsRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet4");
$request->setPivotTableIndex( 0);
$request->setPivotFieldType( "Row");
$request->setPivotField( $pivotField);
$request->setNeedReCalculate( 'true');
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postPivotTableUpdatePivotFields($request);