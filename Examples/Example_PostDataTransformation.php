<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostDataTransformationRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "BookTableL2W.xlsx";
$remoteName = "BookTableL2W.xlsx";

$dataTransformationRequestLoadDataLoadTo = new \Aspose\Cells\Cloud\Model\LoadTo();
$dataTransformationRequestLoadDataLoadTo->setbeginColumnIndex(2 ); 
$dataTransformationRequestLoadDataLoadTo->setbeginRowIndex(3 ); 
$dataTransformationRequestLoadDataLoadTo->setWorksheet("L2W" ); 
$dataTransformationRequestLoadDataDataQueryDataItem = new \Aspose\Cells\Cloud\Model\DataItem();
$dataTransformationRequestLoadDataDataQueryDataItem->setDataItemType("Table" ); 
$dataTransformationRequestLoadDataDataQueryDataItem->setValue("Table1" ); 
$dataTransformationRequestLoadDataDataQueryDataSource = new \Aspose\Cells\Cloud\Model\DataSource();
$dataTransformationRequestLoadDataDataQueryDataSource->setDataSourceType("CloudFileSystem" ); 
$dataTransformationRequestLoadDataDataQueryDataSource->setDataPath("BookTableL2W.xlsx" ); 
$dataTransformationRequestLoadDataDataQuery = new \Aspose\Cells\Cloud\Model\DataQuery();
$dataTransformationRequestLoadDataDataQuery->setName("DataQuery" ); 
$dataTransformationRequestLoadDataDataQuery->setDataItem($dataTransformationRequestLoadDataDataQueryDataItem ); 
$dataTransformationRequestLoadDataDataQuery->setDataSource($dataTransformationRequestLoadDataDataQueryDataSource ); 
$dataTransformationRequestLoadDataDataQuery->setDataSourceDataType("ListObject" ); 
$dataTransformationRequestLoadData = new \Aspose\Cells\Cloud\Model\LoadData();
$dataTransformationRequestLoadData->setLoadTo($dataTransformationRequestLoadDataLoadTo ); 
$dataTransformationRequestLoadData->setDataQuery($dataTransformationRequestLoadDataDataQuery ); 
$dataTransformationRequestAppliedStepsAppliedStep0AppliedOperateUnpivotColumnNames = array (
    "2017",
    "2018",
    "2019"
);
$dataTransformationRequestAppliedStepsAppliedStep0AppliedOperate = new \Aspose\Cells\Cloud\Model\UnpivotColumn();
$dataTransformationRequestAppliedStepsAppliedStep0AppliedOperate->setAppliedOperateType("UnpivotColumn" ); 
$dataTransformationRequestAppliedStepsAppliedStep0AppliedOperate->setValueMapName("Count" ); 
$dataTransformationRequestAppliedStepsAppliedStep0AppliedOperate->setColumnMapName("Date" ); 
$dataTransformationRequestAppliedStepsAppliedStep0AppliedOperate->setUnpivotColumnNames($dataTransformationRequestAppliedStepsAppliedStep0AppliedOperateUnpivotColumnNames ); 
$dataTransformationRequestAppliedStepsAppliedStep0 = new \Aspose\Cells\Cloud\Model\AppliedStep();
$dataTransformationRequestAppliedStepsAppliedStep0->setStepName("UnpivotColumn" ); 
$dataTransformationRequestAppliedStepsAppliedStep0->setAppliedOperate($dataTransformationRequestAppliedStepsAppliedStep0AppliedOperate ); 
$dataTransformationRequestAppliedSteps = array (
    $dataTransformationRequestAppliedStepsAppliedStep0
);
$dataTransformationRequest = new \Aspose\Cells\Cloud\Model\DataTransformationRequest();
$dataTransformationRequest->setLoadData($dataTransformationRequestLoadData ); 
$dataTransformationRequest->setAppliedSteps($dataTransformationRequestAppliedSteps ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostDataTransformationRequest();
$request->setDataTransformationRequest( $dataTransformationRequest);
$$cellsApi->postDataTransformation($request);