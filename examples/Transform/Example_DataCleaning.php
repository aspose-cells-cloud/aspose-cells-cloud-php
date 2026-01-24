<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankColumnsRequest;
use \Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankRowsRequest;
use \Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankWorksheetsRequest;
use \Aspose\Cells\Cloud\Request\RemoveDuplicatesRequest;
//  get CellsCloudClientId from https://dashboard.aspose.cloud/#/applications
//  get CellsCloudClientSecret from https://dashboard.aspose.cloud/#/applications
//  $instance = new CellsApi($CellsCloudClientId,$CellsCloudClientSecret));

$instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"));
$request = new RemoveSpreadsheetBlankColumnsRequest();
$request->setSpreadsheet( "BookText.xlsx");
$response = $instance->removeSpreadsheetBlankColumns($request,"out1.xlsx");

$request = new RemoveSpreadsheetBlankRowsRequest();
$request->setSpreadsheet( "BookText.xlsx");
$response = $instance->removeSpreadsheetBlankRows($request,"out2.xlsx");

$request = new RemoveSpreadsheetBlankWorksheetsRequest();
$request->setSpreadsheet( "BookText.xlsx");
$response = $instance->removeSpreadsheetBlankWorksheets($request,"out3.xlsx");

$request = new RemoveDuplicatesRequest();
$request->setSpreadsheet( "BookText.xlsx");
$response = $instance->removeDuplicates($request,"out4.xlsx");
