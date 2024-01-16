<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostPivotTableCellStyleRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "TestCase.xlsx";
$remoteName = "TestCase.xlsx";

$styleFont = new \Aspose\Cells\Cloud\Model\Font();
$styleFont->setSize(16 ); 
$style = new \Aspose\Cells\Cloud\Model\Style();
$style->setFont($styleFont ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostPivotTableCellStyleRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet4");
$request->setPivotTableIndex( 0);
$request->setColumn( 1);
$request->setRow( 1);
$request->setStyle( $style);
$request->setNeedReCalculate( 'true');
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postPivotTableCellStyle($request);