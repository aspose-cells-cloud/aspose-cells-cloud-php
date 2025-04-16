<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorkbookSaveAsRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$format = "csv";
$newfilename = "outResult/PostExcelSaveAs.csv";

$saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
$saveOptions->setSaveFormat($format ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorkbookSaveAsRequest();
$request->setName( $remoteName);
$request->setNewfilename( $newfilename);
$request->setSaveOptions( $saveOptions);
$request->setFolder( $remoteFolder);
$$cellsApi->postWorkbookSaveAs($request);