<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\TranslationSpreadsheetRequest;
use \Aspose\Cells\Cloud\Request\ConvertSpreadsheetRequest;

$EmployeeSalesSummaryXlsx = "EmployeeSalesSummary.xlsx";
//  get CellsCloudClientId from https://dashboard.aspose.cloud/#/applications
//  get CellsCloudClientSecret from https://dashboard.aspose.cloud/#/applications
//  $instance = new CellsApi($CellsCloudClientId,$CellsCloudClientSecret));
$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"));
$response = $cellsApi->convertSpreadsheet(new TranslationSpreadsheetRequest( 'EmployeeSalesSummary.xlsx', 'zh'),"EmployeeSalesSummary-zh.xlsx");

$convertSpreadsheetRequest = new ConvertSpreadsheetRequest();
$convertSpreadsheetRequest->setSpreadsheet($EmployeeSalesSummaryXlsx);
$convertSpreadsheetRequest->setFormat("ods");
$cellsApi->convertSpreadsheet($convertSpreadsheetRequest ,"EmployeeSalesSummaryXlsx.ods" );
$response = $cellsApi->convertSpreadsheet(new TranslationSpreadsheetRequest( 'EmployeeSalesSummaryXlsx.ods', 'zh'),"EmployeeSalesSummaryOds-zh.xlsx");
