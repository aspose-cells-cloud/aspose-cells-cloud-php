<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostLockRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$needlockXlsx = "needlock.xlsx";

$mapFiles = array ();
$mapFiles[$needlockXlsx] = CellsApiTestBase::getfullfilename($needlockXlsx);
 
$request = new PostLockRequest();
$request->setFile( $mapFiles);
$request->setPassword( "123456");
$$cellsApi->postLock($request);