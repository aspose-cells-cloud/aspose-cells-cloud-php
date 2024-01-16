<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostUnlockRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$needUnlockXlsx = "needUnlock.xlsx";

$mapFiles = array ();
$mapFiles[$needUnlockXlsx] = CellsApiTestBase::getfullfilename($needUnlockXlsx);
 
$request = new PostUnlockRequest();
$request->setFile( $mapFiles);
$request->setPassword( "123456");
$$cellsApi->postUnlock($request);