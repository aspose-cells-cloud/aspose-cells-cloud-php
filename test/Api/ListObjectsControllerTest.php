<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ListObjectsControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetListObjectRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetListObjectsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetListObjectRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetListObjectsRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetListColumnRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetListColumnsTotalRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectConvertToRangeRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectInsertSlicerRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectRemoveDuplicatesRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectSortTableRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectSummarizeWithPivotTableRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetListObjectRequest; 

use PHPUnit\Framework\TestCase;
final class ListObjectsControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetWorksheetListObjects of ListObjectsController.
    /// </summary>

    public function testGetWorksheetListObjects()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetListObjectsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetListObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetListObject of ListObjectsController.
    /// </summary>

    public function testGetWorksheetListObject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetListObjectRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListobjectindex( 0);
        $request->setFormat( "pdf");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetListObject($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetListObject of ListObjectsController.
    /// </summary>

    public function testPutWorksheetListObject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetListObjectRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setStartRow( 1);
        $request->setStartColumn( 1);
        $request->setEndRow( 6);
        $request->setEndColumn( 6);
        $request->setFolder( $remoteFolder);
        $request->setHasHeaders( 'true');
        $request->setDisplayName( "true");
        $request->setShowTotals( 'false');
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetListObject($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetListObjects of ListObjectsController.
    /// </summary>

    public function testDeleteWorksheetListObjects()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetListObjectsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetListObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetListObject of ListObjectsController.
    /// </summary>

    public function testDeleteWorksheetListObject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetListObjectRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetListObject($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetListObject of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListObject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $listObject = new \Aspose\Cells\Cloud\Model\ListObject();
        $listObject->setShowHeaderRow('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListObjectRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setListObject( $listObject);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetListObject($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetListObjectConvertToRange of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListObjectConvertToRange()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListObjectConvertToRangeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetListObjectConvertToRange($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetListObjectSummarizeWithPivotTable of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListObjectSummarizeWithPivotTable()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $createPivotTableRequestPivotFieldColumns = array (
            2
        );
        $createPivotTableRequestPivotFieldData = array (
            1
        );
        $createPivotTableRequestPivotFieldRows = array (
            0
        );
        $createPivotTableRequest = new \Aspose\Cells\Cloud\Model\CreatePivotTableRequest();
        $createPivotTableRequest->setDestCellName("C1" ); 
        $createPivotTableRequest->setName("testp" ); 
        $createPivotTableRequest->setSourceData("=Sheet2!A1:E8" ); 
        $createPivotTableRequest->setUseSameSource('true' ); 
        $createPivotTableRequest->setPivotFieldColumns($createPivotTableRequestPivotFieldColumns ); 
        $createPivotTableRequest->setPivotFieldData($createPivotTableRequestPivotFieldData ); 
        $createPivotTableRequest->setPivotFieldRows($createPivotTableRequestPivotFieldRows ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListObjectSummarizeWithPivotTableRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setDestsheetName( "Sheet2");
        $request->setCreatePivotTableRequest( $createPivotTableRequest);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetListObjectSummarizeWithPivotTable($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetListObjectSortTable of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListObjectSortTable()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $dataSorter = new \Aspose\Cells\Cloud\Model\DataSorter();
        $dataSorter->setCaseSensitive('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListObjectSortTableRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setDataSorter( $dataSorter);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetListObjectSortTable($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetListColumn of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListColumn()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $listColumn = new \Aspose\Cells\Cloud\Model\ListColumn();
        $listColumn->setName("test cloumn" ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListColumnRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setColumnIndex( 0);
        $request->setListColumn( $listColumn);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetListColumn($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetListColumnsTotal of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListColumnsTotal()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $tableTotalRequeststableTotalRequest0 = new \Aspose\Cells\Cloud\Model\TableTotalRequest();
        $tableTotalRequeststableTotalRequest0->setListColumnIndex(1 ); 
        $tableTotalRequeststableTotalRequest0->setTotalsCalculation("Average" ); 
        $tableTotalRequests = array (
            $tableTotalRequeststableTotalRequest0
        );
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListColumnsTotalRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setTableTotalRequests( $tableTotalRequests);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetListColumnsTotal($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetListObjectRemoveDuplicates of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListObjectRemoveDuplicates()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestTables.xlsx";
        $remoteName = "TestTables.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListObjectRemoveDuplicatesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet2");
        $request->setListObjectIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetListObjectRemoveDuplicates($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for TestPostWorksheetListObjectInsertSlicer of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListObjectInsertSlicer()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestTables.xlsx";
        $remoteName = "TestTables.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListObjectInsertSlicerRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setListObjectIndex( 0);
        $request->setColumnIndex( 2);
        $request->setDestCellName( "j9");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetListObjectInsertSlicer($request);
        $this->assertTrue($resposne !==null );
    }
}