<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataProcessingControllerTests.php.cs">
 *   Copyright (c) 2025 Aspose.Cells Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 *--------------------------------------------------------------------------------------------------------------------
*/

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostDataTransformationRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbookDataCleansingRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbookDataDeduplicationRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbookDataFillRequest; 

use PHPUnit\Framework\TestCase;
final class DataProcessingControllerTest extends TestCase
{
    /// <summary>
    /// Test for PostWorkbookDataCleansing of DataProcessingController.
    /// </summary>

    public function testPostWorkbookDataCleansing()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "BookCsvDuplicateData.csv";
        $remoteName = "BookCsvDuplicateData.csv";

        $dataCleansingDataFillDataFillDefaultValue = new \Aspose\Cells\Cloud\Model\DataFillValue();
        $dataCleansingDataFillDataFillDefaultValue->setDefaultDate("2024-01-01" ); 
        $dataCleansingDataFillDataFillDefaultValue->setDefaultNumber(0 ); 
        $dataCleansingDataFillDataFillDefaultValue->setDefaultBoolean('false' ); 
        $dataCleansingDataFill = new \Aspose\Cells\Cloud\Model\DataFill();
        $dataCleansingDataFill->setDataFillDefaultValue($dataCleansingDataFillDataFillDefaultValue ); 
        $dataCleansing = new \Aspose\Cells\Cloud\Model\DataCleansing();
        $dataCleansing->setNeedFillData('true' ); 
        $dataCleansing->setDataFill($dataCleansingDataFill ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookDataCleansingRequest();
        $request->setName( $remoteName);
        $request->setDataCleansing( $dataCleansing);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorkbookDataCleansing($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorkbookDataDeduplication of DataProcessingController.
    /// </summary>

    public function testPostWorkbookDataDeduplication()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "BookCsvDuplicateData.csv";
        $remoteName = "BookCsvDuplicateData.csv";

        $deduplicationRegionRanges = array (
        );
        $deduplicationRegion = new \Aspose\Cells\Cloud\Model\DeduplicationRegion();
        $deduplicationRegion->setRanges($deduplicationRegionRanges ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookDataDeduplicationRequest();
        $request->setName( $remoteName);
        $request->setDeduplicationRegion( $deduplicationRegion);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorkbookDataDeduplication($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorkbookDataFill of DataProcessingController.
    /// </summary>

    public function testPostWorkbookDataFill()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "BookCsvDuplicateData.csv";
        $remoteName = "BookCsvDuplicateData.csv";

        $dataFillDataFillDefaultValue = new \Aspose\Cells\Cloud\Model\DataFillValue();
        $dataFillDataFillDefaultValue->setDefaultDate("2024-01-01" ); 
        $dataFillDataFillDefaultValue->setDefaultNumber(0 ); 
        $dataFillDataFillDefaultValue->setDefaultBoolean('false' ); 
        $dataFill = new \Aspose\Cells\Cloud\Model\DataFill();
        $dataFill->setDataFillDefaultValue($dataFillDataFillDefaultValue ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookDataFillRequest();
        $request->setName( $remoteName);
        $request->setDataFill( $dataFill);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorkbookDataFill($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostDataTransformation of DataProcessingController.
    /// </summary>

    public function testPostDataTransformation()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostDataTransformationRequest();
        $request->setDataTransformationRequest( $dataTransformationRequest);

        $resposne = $instance->postDataTransformation($request);
        $this->assertTrue($resposne !==null );
    }
}