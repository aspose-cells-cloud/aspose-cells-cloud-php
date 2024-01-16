<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostPivotTableFieldHideItemRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "TestCase.xlsx";
$remoteName = "TestCase.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostPivotTableFieldHideItemRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet4");
$request->setPivotTableIndex( 0);
$request->setPivotFieldType( "Row");
$request->setFieldIndex( 0);
$request->setItemIndex( 1);
$request->setIsHide( 'true');
$request->setNeedReCalculate( 'true');
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postPivotTableFieldHideItem($request);