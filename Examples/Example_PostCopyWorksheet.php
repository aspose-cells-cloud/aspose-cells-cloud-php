<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostCopyWorksheetRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$options = new \Aspose\Cells\Cloud\Model\CopyOptions();
$options->setColumnCharacterWidth('true' ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostCopyWorksheetRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet15");
$request->setSourceSheet( "Sheet6");
$request->setOptions( $options);
$request->setSourceWorkbook( "");
$request->setSourceFolder( "");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postCopyWorksheet($request);