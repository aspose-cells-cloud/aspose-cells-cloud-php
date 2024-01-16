<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorkbookSettingsRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$settings = new \Aspose\Cells\Cloud\Model\WorkbookSettings();
$settings->setAutoCompressPictures('true' ); 
$settings->setHidePivotFieldList('true' ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorkbookSettingsRequest();
$request->setName( $remoteName);
$request->setSettings( $settings);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorkbookSettings($request);