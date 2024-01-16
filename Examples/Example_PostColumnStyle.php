<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostColumnStyleRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$styleFont = new \Aspose\Cells\Cloud\Model\Font();
$styleFont->setSize(16 ); 
$style = new \Aspose\Cells\Cloud\Model\Style();
$style->setFont($styleFont ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostColumnStyleRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setColumnIndex( 1);
$request->setStyle( $style);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postColumnStyle($request);