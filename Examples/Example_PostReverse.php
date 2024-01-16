<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostReverseRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$book1Xlsx = "Book1.xlsx";

$rotateType = "rows";
$format = "pdf";

$mapFiles = array ();
$mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
 
$request = new PostReverseRequest();
$request->setFile( $mapFiles);
$request->setRotateType( $rotateType);
$request->setOutFormat( $format);
$$cellsApi->postReverse($request);