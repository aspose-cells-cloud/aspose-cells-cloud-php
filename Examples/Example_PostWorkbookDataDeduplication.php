<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorkbookDataDeduplicationRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "BookCsvDuplicateData.csv";
$remoteName = "BookCsvDuplicateData.csv";

$deduplicationRegionRanges = array (
);
$deduplicationRegion = new \Aspose\Cells\Cloud\Model\DeduplicationRegion();
$deduplicationRegion->setRanges($deduplicationRegionRanges ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorkbookDataDeduplicationRequest();
$request->setName( $remoteName);
$request->setDeduplicationRegion( $deduplicationRegion);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorkbookDataDeduplication($request);