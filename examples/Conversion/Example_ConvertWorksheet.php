<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\UploadFileRequest;
use \Aspose\Cells\Cloud\Request\ExportWorksheetAsFormatRequest;
use \Aspose\Cells\Cloud\Request\ConvertWorksheetToImageRequest;
use \Aspose\Cells\Cloud\Request\ConvertWorksheetToPdfRequest;
//use \Aspose\Cells\Cloud\Request\ConvertWorksheetToJsonRequest;
use \Aspose\Cells\Cloud\Request\ConvertWorksheetToHtmlRequest;

$EmployeeSalesSummaryXlsx = "EmployeeSalesSummary.xlsx";

//  get CellsCloudClientId from https://dashboard.aspose.cloud/#/applications
//  get CellsCloudClientSecret from https://dashboard.aspose.cloud/#/applications
//  $instance = new CellsApi($CellsCloudClientId,$CellsCloudClientSecret));
$instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"));
// Upload a local Excel file to Cells Cloud Storage.
$request = new  UploadFileRequest( );
$request->setUploadFiles($EmployeeSalesSummaryXlsx);
$request->setPath($EmployeeSalesSummaryXlsx);
$instance->uploadFile($request);
// Now, Export a worksheet of cloud Excel file to a svg format file directly, and directly save to local file.
$request = new ExportWorksheetAsFormatRequest();
$request->setName( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "Sales");
$request->setFormat( "svg");
$instance->exportWorksheetAsFormat($request, "export-out3.svg");
// Now, Export a worksheet of cloud Excel file to a markdown format file directly, and directly save to local file.
$request = new ExportWorksheetAsFormatRequest();
$request->setName( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "Sales");
$request->setFormat( "md");
$instance->exportWorksheetAsFormat($request, "export-worksheet-out.md");
//  Local file processing
$request = new ConvertWorksheetToImageRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "Sales");
$request->setFormat( "svg");
$instance->convertWorksheetToImage($request, "convert-worksheet-out.svg");

$request = new ConvertWorksheetToPdfRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "SalesChartData");
$instance->convertWorksheetToPdf($request, "convert-worksheet-out.pdf");

$request = new ConvertWorksheetToHtmlRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "Sales");
$instance->convertWorksheetToHtml($request, "convert-worksheet-out.html");
//
//$request = new ConvertWorksheetToJsonRequest();
//$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
//$request->setWorksheet( "SalesChartData");
//$instance->convertWorksheetToJson($request, "convert-worksheet-out.json");