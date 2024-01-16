<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostCellCharactersRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$optionsvalue0Font = new \Aspose\Cells\Cloud\Model\Font();
$optionsvalue0Font->setIsBold('true' ); 
$optionsvalue0Font->setSize(16 ); 
$optionsvalue0 = new \Aspose\Cells\Cloud\Model\FontSetting();
$optionsvalue0->setLength(5 ); 
$optionsvalue0->setStartIndex(0 ); 
$optionsvalue0->setFont($optionsvalue0Font ); 
$options = array (
    $optionsvalue0
);
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostCellCharactersRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setCellName( "E36");
$request->setOptions( $options);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postCellCharacters($request);