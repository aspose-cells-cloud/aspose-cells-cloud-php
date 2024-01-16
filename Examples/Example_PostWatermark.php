<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWatermarkRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$assemblyTestXlsx = "assemblytest.xlsx";
$dataSourceXlsx = "datasource.xlsx";

$mapFiles = array ();
$mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
$mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
 
$request = new PostWatermarkRequest();
$request->setFile( $mapFiles);
$request->setText( "aspose.cells cloud sdk");
$request->setColor( "#773322");
$$cellsApi->postWatermark($request);