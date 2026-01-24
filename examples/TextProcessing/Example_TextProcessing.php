<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\TrimCharacterRequest;
use \Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankRowsRequest;
use \Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankWorksheetsRequest;
use \Aspose\Cells\Cloud\Request\RemoveDuplicatesRequest;
//  get CellsCloudClientId from https://dashboard.aspose.cloud/#/applications
//  get CellsCloudClientSecret from https://dashboard.aspose.cloud/#/applications
//  $instance = new CellsApi($CellsCloudClientId,$CellsCloudClientSecret));

$instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"));

$request = new TrimCharacterRequest();
$request->setSpreadsheet( "BookText.xlsx");
$request->setWorksheet("HumanResources");
$request->setRange("A1:C12");
$request->setTrimSpaceBetweenWordTo1("true");
$response = $instance->trimCharacter($request,"out-text1.xlsx");

$request = new TrimCharacterRequest();
$request->setSpreadsheet( "BookText.xlsx");
$request->setWorksheet("Text");
$request->setRange("J1:J6");
$request->setTrimTrailing("false");
$request->setTrimSpaceBetweenWordTo1("true");
$response = $instance->trimCharacter($request,"out-text2.xlsx");

$request = new TrimCharacterRequest();
$request->setSpreadsheet( "BookText.xlsx");
$request->setWorksheet("Text");
$request->setRange("J7:J7");
$request->setTrimTrailing("false");
$request->setTrimSpaceBetweenWordTo1("true");
$request->setRemoveExtraLineBreaks("true");
$response = $instance->trimCharacter($request,"out-text3.xlsx");
