<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostAssembleRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$assemblyTestXlsx = "assemblytest.xlsx";
$dataSourceXlsx = "datasource.xlsx";

$format = "csv";

$mapFiles = array ();
$mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
$mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
 
$request = new PostAssembleRequest();
$request->setFile( $mapFiles);
$request->setDatasource( "ds");
$request->setOutFormat( $format);
$$cellsApi->postAssemble($request);