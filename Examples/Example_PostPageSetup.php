<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostPageSetupRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$pageSetup = new \Aspose\Cells\Cloud\Model\PageSetup();
$pageSetup->setBlackAndWhite('true' ); 
$pageSetup->setCenterHorizontally('true' ); 
$pageSetup->setCenterVertically('true' ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostPageSetupRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setPageSetup( $pageSetup);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postPageSetup($request);