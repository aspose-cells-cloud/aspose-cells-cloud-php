<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorkbookCreateRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$reportDataXML = "ReportData.xml";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
CellsApiTestBase::ready(  $this->instance,$reportDataXML ,$remoteFolder . "/ReportData.xml" ,  "");
 
$request = new PutWorkbookCreateRequest();
$request->setName( "PutWorkbookCreate.xlsx");
$request->setTemplateFile( $remoteFolder . "/" . $remoteName);
$request->setDataFile( $remoteFolder . "/ReportData.xml");
$request->setIsWriteOver( 'true');
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$request->setCheckExcelRestriction( 'true');
$$cellsApi->putWorkbookCreate($request);