<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorkbookExportXMLRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Template.xlsx";
$remoteName = "Template.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorkbookExportXMLRequest();
$request->setName( $remoteName);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorkbookExportXML($request);