<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\SplitSpreadsheetRequest;

//  get CellsCloudClientId from https://dashboard.aspose.cloud/#/applications
//  get CellsCloudClientSecret from https://dashboard.aspose.cloud/#/applications
//  $instance = new CellsApi($CellsCloudClientId,$CellsCloudClientSecret));

$instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"));
$request = new SplitSpreadsheetRequest();
$request->setSpreadsheet( "EmployeeSalesSummary.xlsx");
$response = $instance->splitSpreadsheet($request,"split-out.zip");
$zip = new ZipArchive();
if ($zip->open("split-out.zip") !== true) {
    echo "Error: Unable to open ZIP file";
}else{
    $result = $zip->extractTo(".");
}
$zip->close(); 
