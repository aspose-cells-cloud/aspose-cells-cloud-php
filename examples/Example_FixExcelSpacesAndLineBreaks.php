<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostTrimContentRequest;
use  \Aspose\Cells\Cloud\Model\FileInfo;
use  \Aspose\Cells\Cloud\Model\ScopeOptions;
use  \Aspose\Cells\Cloud\Model\DataSource;
use \Aspose\Cells\Cloud\Model\TrimContentOptions;

//  get CellsCloudClientId from https://dashboard.aspose.cloud/#/applications
//  get CellsCloudClientSecret from https://dashboard.aspose.cloud/#/applications
//  $cellsApi = new CellsApi($CellsCloudClientId,$CellsCloudClientSecret));

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"));
$dataSource = new DataSource( );
$dataSource->setDataSourceType("RequestFiles" );
$fileInfo = new FileInfo();
$fileInfo->setFilename( "EmployeeSalesSummary.xlsx");
$fileInfo->setFileContent(base64_encode(file_get_contents("EmployeeSalesSummary.xlsx")));
$scopeOptions = new ScopeOptions();
$scopeOptions->setScope("Workbook");
$trimContentOptions = new TrimContentOptions( );
$trimContentOptions->setDataSource($dataSource);
$trimContentOptions->setFileInfo($fileInfo);
$trimContentOptions->setScopeOptions($scopeOptions);
$trimContentOptions->setTrimLeading(true);
$trimContentOptions->setRemoveAllLineBreaks(true);
$trimContentOptions->setTrimNonBreakingSpaces(true);
$response = $cellsApi->PostTrimContent(new PostTrimContentRequest( $trimContentOptions));
print ($response->getFilename());
$decodedData = base64_decode($response->getFileContent());
file_put_contents("EmployeeSalesSummary-Trim.xlsx", $decodedData);

