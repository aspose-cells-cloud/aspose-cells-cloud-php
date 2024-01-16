<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\DeleteMetadataRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$book1Xlsx = "Book1.xlsx";

$mapFiles = array ();
$mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
 
$request = new DeleteMetadataRequest();
$request->setFile( $mapFiles);
$request->setType( "all");
$$cellsApi->deleteMetadata($request);