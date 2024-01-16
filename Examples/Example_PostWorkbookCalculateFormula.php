<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorkbookCalculateFormulaRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$options = new \Aspose\Cells\Cloud\Model\CalculationOptions();
$options->setIgnoreError('true' ); 
$options->setRecursive('true' ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorkbookCalculateFormulaRequest();
$request->setName( $remoteName);
$request->setOptions( $options);
$request->setIgnoreError( 'true');
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorkbookCalculateFormula($request);