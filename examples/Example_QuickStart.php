<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\GetAsposeCellsCloudStatusRequest;
use \Aspose\Cells\Cloud\Request\ConvertSpreadsheetRequest;
//  get CellsCloudClientId from https://dashboard.aspose.cloud/#/applications
//  get CellsCloudClientSecret from https://dashboard.aspose.cloud/#/applications
//  $instance = new CellsApi($CellsCloudClientId,$CellsCloudClientSecret));

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"));
$response = $cellsApi->convertSpreadsheet(new ConvertSpreadsheetRequest( 'EmployeeSalesSummary.xlsx', 'pdf'),"EmployeeSalesSummary.pdf");
$response = $cellsApi->getAsposeCellsCloudStatus( new GetAsposeCellsCloudStatusRequest());
print($response);