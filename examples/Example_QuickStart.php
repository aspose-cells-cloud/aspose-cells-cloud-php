<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutConvertWorkbookRequest;

#get CellsCloudClientId from https://dashboard.aspose.cloud/#/applications
#get CellsCloudClientSecret from https://dashboard.aspose.cloud/#/applications

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"));
$response = $cellsApi->putConvertWorkbook(new PutConvertWorkbookRequest( 'examples\EmployeeSalesSummary.xlsx', 'pdf'));
copy($response->getPathname(),"EmployeeSalesSummary.pdf");
