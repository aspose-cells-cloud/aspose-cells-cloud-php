<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostCompressRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$assemblyTestXlsx = "assemblytest.xlsx";
$dataSourceXlsx = "datasource.xlsx";

$compressLevel = 50;

$mapFiles = array ();
$mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
$mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
 
$request = new PostCompressRequest();
$request->setFile( $mapFiles);
$request->setCompressLevel( $compressLevel);
$$cellsApi->postCompress($request);