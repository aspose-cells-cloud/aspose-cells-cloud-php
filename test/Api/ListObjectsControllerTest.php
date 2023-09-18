<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ListObjectsControllerTests.php.cs">
 *   Copyright (c) 2023 Aspose.Cells Cloud
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
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectSortTableRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectInsertSlicerRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectRemoveDuplicatesRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetListObjectSummarizeWithPivotTableRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetListObjectRequest; 

use PHPUnit\Framework\TestCase;
class ListObjectsControllerTest extends \PHPUnit_Framework_TestCase
{

	protected  $instance;
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**ve
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /// <summary>
    /// Test for GetWorksheetListObjects of ListObjectsController.
    /// </summary>

    public function testGetWorksheetListObjects()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetListObjectsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetListObjects($request);
    }

    /// <summary>
    /// Test for GetWorksheetListObject of ListObjectsController.
    /// </summary>

    public function testGetWorksheetListObject()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetListObjectRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListobjectindex( 0);
        $request->setFormat( "pdf");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetListObject($request);
    }

    /// <summary>
    /// Test for PutWorksheetListObject of ListObjectsController.
    /// </summary>

    public function testPutWorksheetListObject()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
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
        $this->instance->putWorksheetListObject($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetListObjects of ListObjectsController.
    /// </summary>

    public function testDeleteWorksheetListObjects()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetListObjectsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetListObjects($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetListObject of ListObjectsController.
    /// </summary>

    public function testDeleteWorksheetListObject()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetListObjectRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetListObject($request);
    }

    /// <summary>
    /// Test for PostWorksheetListObject of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListObject()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $listObject = new \Aspose\Cells\Cloud\Model\ListObject();
        $listObject->setShowHeaderRow('true' ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListObjectRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setListObject( $listObject);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetListObject($request);
    }

    /// <summary>
    /// Test for PostWorksheetListObjectConvertToRange of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListObjectConvertToRange()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListObjectConvertToRangeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetListObjectConvertToRange($request);
    }

    /// <summary>
    /// Test for PostWorksheetListObjectSummarizeWithPivotTable of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListObjectSummarizeWithPivotTable()
    {
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
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListObjectSummarizeWithPivotTableRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setDestsheetName( "Sheet2");
        $request->setCreatePivotTableRequest( $createPivotTableRequest);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetListObjectSummarizeWithPivotTable($request);
    }

    /// <summary>
    /// Test for PostWorksheetListObjectSortTable of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListObjectSortTable()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $dataSorter = new \Aspose\Cells\Cloud\Model\DataSorter();
        $dataSorter->setCaseSensitive('true' ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListObjectSortTableRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setDataSorter( $dataSorter);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetListObjectSortTable($request);
    }

    /// <summary>
    /// Test for PostWorksheetListColumn of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListColumn()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $listColumn = new \Aspose\Cells\Cloud\Model\ListColumn();
        $listColumn->setName("test cloumn" ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListColumnRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setColumnIndex( 0);
        $request->setListColumn( $listColumn);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetListColumn($request);
    }

    /// <summary>
    /// Test for PostWorksheetListColumnsTotal of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListColumnsTotal()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $tableTotalRequeststableTotalRequest0 = new \Aspose\Cells\Cloud\Model\TableTotalRequest();
        $tableTotalRequeststableTotalRequest0->setListColumnIndex(1 ); 
        $tableTotalRequeststableTotalRequest0->setTotalsCalculation("Average" ); 
        $tableTotalRequests = array (
            $tableTotalRequeststableTotalRequest0
        );
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListColumnsTotalRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet7");
        $request->setListObjectIndex( 0);
        $request->setTableTotalRequests( $tableTotalRequests);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetListColumnsTotal($request);
    }
    /// <summary>
    /// Test for PostWorksheetListObjectRemoveDuplicates of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListObjectRemoveDuplicates()
    {
        $remoteFolder = "TestData/In";

        $localName = "TestTables.xlsx";
        $remoteName = "TestTables.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListObjectRemoveDuplicatesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet2");
        $request->setListObjectIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetListObjectRemoveDuplicates($request);
    }

    /// <summary>
    /// Test for TestPostWorksheetListObjectInsertSlicer of ListObjectsController.
    /// </summary>

    public function testPostWorksheetListObjectInsertSlicer()
    {
        $remoteFolder = "TestData/In";

        $localName = "TestTables.xlsx";
        $remoteName = "TestTables.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetListObjectInsertSlicerRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setListObjectIndex( 0);
        $request->setColumnIndex( 2);
        $request->setDestCellName( "j9");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetListObjectInsertSlicer($request);
    }    
}