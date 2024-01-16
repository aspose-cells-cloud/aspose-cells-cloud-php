<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostSplitRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$assemblyTestXlsx = "assemblytest.xlsx";
$dataSourceXlsx = "datasource.xlsx";

$outFormat = "csv";

$mapFiles = array ();
$mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
$mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
 
$request = new PostSplitRequest();
$request->setFile( $mapFiles);
$request->setOutFormat( $outFormat);
$$cellsApi->postSplit($request);