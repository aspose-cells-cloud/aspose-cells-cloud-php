<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostImportDataRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$importOptionData = array (
    1,
    2,
    3,
    4
);
$importOption = new \Aspose\Cells\Cloud\Model\ImportIntArrayOption();
$importOption->setDestinationWorksheet("Sheet1" ); 
$importOption->setFirstColumn(1 ); 
$importOption->setFirstRow(3 ); 
$importOption->setImportDataType("IntArray" ); 
$importOption->setIsInsert('true' ); 
$importOption->setIsVertical('true' ); 
$importOption->setData($importOptionData ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostImportDataRequest();
$request->setName( $remoteName);
$request->setImportOption( $importOption);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postImportData($request);