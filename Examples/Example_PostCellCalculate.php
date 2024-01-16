<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostCellCalculateRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$options = new \Aspose\Cells\Cloud\Model\CalculationOptions();
$options->setRecursive('true' ); 
$options->setIgnoreError('true' ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostCellCalculateRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setCellName( "A1");
$request->setOptions( $options);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postCellCalculate($request);