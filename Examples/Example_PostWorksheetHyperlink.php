<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetHyperlinkRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$hyperlink = new \Aspose\Cells\Cloud\Model\Hyperlink();
$hyperlink->setAddress("https://products.aspose.cloud/cells/" ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetHyperlinkRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setHyperlinkIndex( 0);
$request->setHyperlink( $hyperlink);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetHyperlink($request);