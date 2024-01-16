<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\MoveFileRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new MoveFileRequest();
$request->setSrcPath( $remoteFolder . "/" . $remoteName);
$request->setDestPath( "OutResult/" . $remoteName);
$request->setSrcStorageName( "");
$request->setDestStorageName( "");
$request->setVersionId( "");
$$cellsApi->moveFile($request);