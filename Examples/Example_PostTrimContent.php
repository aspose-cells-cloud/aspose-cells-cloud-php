<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostTrimContentRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "BookText.xlsx";
$remoteName = "BookText.xlsx";

$trimContentOptionsDataSource = new \Aspose\Cells\Cloud\Model\DataSource();
$trimContentOptionsDataSource->setDataSourceType("CloudFileSystem" ); 
$trimContentOptionsDataSource->setDataPath("BookText.xlsx" ); 
$trimContentOptionsScopeOptions = new \Aspose\Cells\Cloud\Model\ScopeOptions();
$trimContentOptionsScopeOptions->setScope("EntireWorkbook" ); 
$trimContentOptions = new \Aspose\Cells\Cloud\Model\TrimContentOptions();
$trimContentOptions->setDataSource($trimContentOptionsDataSource ); 
$trimContentOptions->setTrimLeading('true' ); 
$trimContentOptions->setTrimTrailing('true' ); 
$trimContentOptions->setTrimSpaceBetweenWordTo1('true' ); 
$trimContentOptions->setRemoveAllLineBreaks('true' ); 
$trimContentOptions->setScopeOptions($trimContentOptionsScopeOptions ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostTrimContentRequest();
$request->setTrimContentOptions( $trimContentOptions);
$$cellsApi->postTrimContent($request);