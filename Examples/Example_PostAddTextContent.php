<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostAddTextContentRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "BookText.xlsx";
$remoteName = "BookText.xlsx";

$addTextOptionsDataSource = new \Aspose\Cells\Cloud\Model\DataSource();
$addTextOptionsDataSource->setDataSourceType("CloudFileSystem" ); 
$addTextOptionsDataSource->setDataPath("BookText.xlsx" ); 
$addTextOptions = new \Aspose\Cells\Cloud\Model\AddTextOptions();
$addTextOptions->setDataSource($addTextOptionsDataSource ); 
$addTextOptions->setText("Aspose.Cells Cloud is an excellent product." ); 
$addTextOptions->setWorksheet("202401" ); 
$addTextOptions->setSelectPoistion("AtTheBeginning" ); 
$addTextOptions->setSkipEmptyCells('true' ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostAddTextContentRequest();
$request->setAddTextOptions( $addTextOptions);
$$cellsApi->postAddTextContent($request);