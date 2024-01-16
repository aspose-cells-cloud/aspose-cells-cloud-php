<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorkbookGetSmartMarkerResultRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$reportDataXML = "ReportData.xml";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
CellsApiTestBase::ready(  $this->instance,$reportDataXML ,$remoteFolder . "/ReportData.xml" ,  "");
 
$request = new PostWorkbookGetSmartMarkerResultRequest();
$request->setName( $remoteName);
$request->setXmlFile( $remoteFolder . "/ReportData.xml");
$request->setFolder( $remoteFolder);
$request->setOutPath( "OutResult/SmartMarkerResult.xlsx");
$request->setStorageName( "");
$request->setOutStorageName( "");
$$cellsApi->postWorkbookGetSmartMarkerResult($request);