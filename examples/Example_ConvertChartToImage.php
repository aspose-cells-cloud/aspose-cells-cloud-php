<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\UploadFileRequest;
use \Aspose\Cells\Cloud\Request\GetWorksheetChartRequest;
use \Aspose\Cells\Cloud\Request\ConvertChartToImageRequest;

$EmployeeSalesSummaryXlsx = "EmployeeSalesSummary.xlsx";

//  get CellsCloudClientId from https://dashboard.aspose.cloud/#/applications
//  get CellsCloudClientSecret from https://dashboard.aspose.cloud/#/applications
//  $instance = new CellsApi($CellsCloudClientId,$CellsCloudClientSecret));
$instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"));
// Cloud file processing
//  1. Cells Cloud V3.0: Convert chart to image 
//  1.1. Upload a local Excel file to Cells Cloud Storage.
$request = new  UploadFileRequest( );
$request->setUploadFiles($EmployeeSalesSummaryXlsx);
$request->setPath($EmployeeSalesSummaryXlsx);
$instance->uploadFile($request);
//  1.2 Get chart image from Excel worksheet.
$getWorksheetChartRequest = new GetWorksheetChartRequest ();
$getWorksheetChartRequest->setName($EmployeeSalesSummaryXlsx);
$getWorksheetChartRequest->setSheetName("Sales");
$getWorksheetChartRequest->setChartNumber(0);
$getWorksheetChartRequest->setFormat("png");

// $getWorksheetChartRequest->setOnePagePerSheet("false");
$response = $instance->GetWorksheetChart($getWorksheetChartRequest, "out1.png");
//  Local file processing
//  2. Cells Cloud V3.0: Convert chart to image 
$convertChartToImageRequest =new ConvertChartToImageRequest();
$convertChartToImageRequest->setSpreadsheet($EmployeeSalesSummaryXlsx);
$convertChartToImageRequest->setWorksheet("Sales");
$convertChartToImageRequest->setChartIndex(0);
$convertChartToImageRequest->setFormat("png");
$instance->convertChartToImage($convertChartToImageRequest ,"out2.png" );
