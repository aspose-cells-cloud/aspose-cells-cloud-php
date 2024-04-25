<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorkbookImportXMLRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Template.xlsx";
$dataXML = "data.xml";
$remoteName = "Template.xlsx";

$importXMLRequestXMLFileSource = new \Aspose\Cells\Cloud\Model\DataSource();
$importXMLRequestXMLFileSource->setDataSourceType("CloudFileSystem" ); 
$importXMLRequestXMLFileSource->setDataPath($remoteFolder . "/data.xml" ); 
$importXMLRequestImportPosition = new \Aspose\Cells\Cloud\Model\ImportPosition();
$importXMLRequestImportPosition->setSheetName("Sheet1" ); 
$importXMLRequestImportPosition->setRowIndex(3 ); 
$importXMLRequestImportPosition->setColumnIndex(4 ); 
$importXMLRequest = new \Aspose\Cells\Cloud\Model\ImportXMLRequest();
$importXMLRequest->setXMLFileSource($importXMLRequestXMLFileSource ); 
$importXMLRequest->setImportPosition($importXMLRequestImportPosition ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
CellsApiTestBase::ready(  $this->instance,$dataXML ,$remoteFolder . "/data.xml" ,  "");
 
$request = new PostWorkbookImportXMLRequest();
$request->setName( $remoteName);
$request->setImportXMLRequest( $importXMLRequest);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorkbookImportXML($request);