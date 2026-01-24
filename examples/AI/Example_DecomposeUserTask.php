<?php
require_once('vendor\autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\DecomposeUserTaskRequest;
use \Aspose\Cells\Cloud\Request\ConvertSpreadsheetRequest;
//  get CellsCloudClientId from https://dashboard.aspose.cloud/#/applications
//  get CellsCloudClientSecret from https://dashboard.aspose.cloud/#/applications
//  $instance = new CellsApi($CellsCloudClientId,$CellsCloudClientSecret));

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"));
$response = $cellsApi->decomposeUserTask(new DecomposeUserTaskRequest( "Develop a web API for a task-splitting feature on the existing system."),"decomposeUserTask.xlsx");
