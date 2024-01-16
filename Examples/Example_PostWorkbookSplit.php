<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorkbookSplitRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorkbookSplitRequest();
$request->setName( $remoteName);
$request->setFormat( "png");
$request->setOutFolder( "OutResult");
$request->setFrom( 1);
$request->setTo( 5);
$request->setHorizontalResolution( 96);
$request->setVerticalResolution( 96);
$request->setSplitNameRule( "sheetname");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$request->setOutStorageName( "");
$$cellsApi->postWorkbookSplit($request);