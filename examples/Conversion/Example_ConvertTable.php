<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\UploadFileRequest;
use \Aspose\Cells\Cloud\Request\ExportTableAsFormatRequest;
use \Aspose\Cells\Cloud\Request\ConvertTableToImageRequest;
use \Aspose\Cells\Cloud\Request\ConvertWorksheetToPdfRequest;
use \Aspose\Cells\Cloud\Request\ConvertTableToJsonRequest;
use \Aspose\Cells\Cloud\Request\ConvertTableToHtmlRequest;

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
// Now, Export a list object of cloud Excel file to another format file directly, and directly save to local file.
$request = new ExportTableAsFormatRequest();
$request->setName( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "SalesChartData");
$request->setTableName( "Table1");
$request->setFormat( "md");
$instance->exportTableAsFormat($request, "export-table-out.md");
// Local file processing
// Convert a Worksheet Table to an Image file。
$request = new ConvertTableToImageRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "SalesChartData");
$request->setTableName( "Table1");
$request->setFormat( "svg");
$instance->convertTableToImage($request, "convert-table-out.svg");
// Convert a Worksheet Table to a HTML file。
$request = new ConvertTableToHtmlRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "SalesChartData");
$request->setTableName( "Table1");
$instance->convertTableToImage($request, "convert-table-out.html");
// Convert a Worksheet Table to a PDF file。
$request = new ConvertWorksheetToPdfRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "SalesChartData");
$request->setTableName( "Table1");
$instance->convertWorksheetToPdf($request, "convert-table-out.pdf");
// Convert a Worksheet Table to a JSON file。
$request = new ConvertTableToJsonRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "SalesChartData");
$request->setTableName( "Table1");
$instance->convertTableToJson($request, "convert-table-out.json");