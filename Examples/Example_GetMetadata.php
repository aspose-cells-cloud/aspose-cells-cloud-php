<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\GetMetadataRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$book1Xlsx = "Book1.xlsx";

$mapFiles = array ();
$mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
 
$request = new GetMetadataRequest();
$request->setFile( $mapFiles);
$request->setType( "all");
$$cellsApi->getMetadata($request);