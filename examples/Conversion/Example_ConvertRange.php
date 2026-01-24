<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\ConvertRangeToImageRequest;
use \Aspose\Cells\Cloud\Request\ConvertRangeToPdfRequest;
use \Aspose\Cells\Cloud\Request\ConvertRangeToJsonRequest;
use \Aspose\Cells\Cloud\Request\ConvertRangeToHtmlRequest;
use \Aspose\Cells\Cloud\Request\ExportRangeAsFormatRequest;
use \Aspose\Cells\Cloud\Request\UploadFileRequest;

$EmployeeSalesSummaryXlsx = "EmployeeSalesSummary.xlsx";

// get CellsCloudClientId from https://dashboard.aspose.cloud/#/applications
// get CellsCloudClientSecret from https://dashboard.aspose.cloud/#/applications
// $instance = new CellsApi($CellsCloudClientId,$CellsCloudClientSecret));
$instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"));
// Upload a local Excel file to Cells Cloud Storage.
$request = new  UploadFileRequest( );
$request->setUploadFiles($EmployeeSalesSummaryXlsx);
$request->setPath($EmployeeSalesSummaryXlsx);
$instance->uploadFile($request);
// Now, Export a list object of cloud Excel file to another format file directly, and directly save to local file.
$request = new ExportRangeAsFormatRequest();
$request->setName( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "SalesChartData");
$request->setRange( "B28:L36");
$request->setFormat( "pdf");
$instance->exportRangeAsFormat($request, "export-range-out.pdf");

// Local file processing
// Convert a Worksheet Range to an Image file。
$request = new ConvertRangeToImageRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "Sales");
$request->setRange( "B28:L36");
$request->setFormat( "svg");
$instance->convertRangeToImage($request, "convert-range-out.svg");
// Convert a Worksheet Range to a HTML file。
$request = new ConvertRangeToHtmlRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "Sales");
$request->setRange( "B28:L36");
$instance->convertRangeToImage($request, "convert-range-out.html");
// Convert a Worksheet Range to a PDF file。
$request = new ConvertRangeToPdfRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "SalesChartData");
$request->setRange( "B28:L36");
$instance->convertRangeToPdf($request, "convert-range-out.pdf");
// Convert a Worksheet Range to a JSON file。
$request = new ConvertRangeToJsonRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "SalesChartData");
$request->setRange( "B28:L36");
$instance->convertRangeToJson($request, "convert-range-out.json");