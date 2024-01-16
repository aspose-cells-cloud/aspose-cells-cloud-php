<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostMetadataRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$book1Xlsx = "Book1.xlsx";

$mapFiles = array ();
$cellsDocumentscellsDocument0 = new \Aspose\Cells\Cloud\Model\CellsDocumentProperty();
$cellsDocumentscellsDocument0->setName("Author" ); 
$cellsDocumentscellsDocument0->setValue("roy.wang" ); 
$cellsDocuments = array (
    $cellsDocumentscellsDocument0
);
$mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
 
$request = new PostMetadataRequest();
$request->setFile( $mapFiles);
$request->setCellsDocuments( $cellsDocuments);
$$cellsApi->postMetadata($request);