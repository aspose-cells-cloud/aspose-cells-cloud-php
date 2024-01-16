<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostProtectRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$assemblyTestXlsx = "assemblytest.xlsx";
$dataSourceXlsx = "datasource.xlsx";

$mapFiles = array ();
$protectWorkbookRequest = new \Aspose\Cells\Cloud\Model\ProtectWorkbookRequest();
$protectWorkbookRequest->setAwaysOpenReadOnly('true' ); 
$protectWorkbookRequest->setEncryptWithPassword("123456" ); 
$mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
$mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
 
$request = new PostProtectRequest();
$request->setFile( $mapFiles);
$request->setProtectWorkbookRequest( $protectWorkbookRequest);
$request->setPassword( "123456");
$$cellsApi->postProtect($request);