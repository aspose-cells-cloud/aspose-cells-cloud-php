<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostReplaceRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$dataSourceXlsx = "datasource.xlsx";

$mapFiles = array ();
$mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
 
$request = new PostReplaceRequest();
$request->setFile( $mapFiles);
$request->setText( "12");
$request->setNewtext( "newtext");
$$cellsApi->postReplace($request);