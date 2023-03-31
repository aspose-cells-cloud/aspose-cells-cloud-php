<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WorksheetControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteUnprotectWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetBackgroundRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetCommentRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetCommentsRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetFreezePanesRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetsRequest; 
use \Aspose\Cells\Cloud\Request\GetNamedRangesRequest; 
use \Aspose\Cells\Cloud\Request\GetNamedRangeValueRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetCalculateFormulaRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetCommentRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetCommentsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetMergedCellRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetMergedCellsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetPageCountRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetTextItemsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetWithFormatRequest; 
use \Aspose\Cells\Cloud\Request\PostAutofitWorksheetColumnsRequest; 
use \Aspose\Cells\Cloud\Request\PostAutofitWorksheetRowRequest; 
use \Aspose\Cells\Cloud\Request\PostAutofitWorksheetRowsRequest; 
use \Aspose\Cells\Cloud\Request\PostCopyWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\PostMoveWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\PostRenameWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\PostUpdateWorksheetPropertyRequest; 
use \Aspose\Cells\Cloud\Request\PostUpdateWorksheetZoomRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCalculateFormulaRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCommentRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetRangeSortRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetTextSearchRequest; 
use \Aspose\Cells\Cloud\Request\PostWorsheetTextReplaceRequest; 
use \Aspose\Cells\Cloud\Request\PutActiveWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\PutAddNewWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\PutChangeVisibilityWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\PutInsertNewWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\PutProtectWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetBackgroundRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetCommentRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetFreezePanesRequest; 

use PHPUnit\Framework\TestCase;
class WorksheetControllerTest extends \PHPUnit_Framework_TestCase
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
        $this->instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
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
    /// Test for GetWorksheet of WorksheetController.
    /// </summary>

    public function testGetWorksheets()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetsRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheets($request);
    }

    /// <summary>
    /// Test for GetWorksheetWithFormat of WorksheetController.
    /// </summary>

    public function testGetWorksheetWithFormat()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetWithFormatRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFormat( "png");
        $request->setPageIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetWithFormat($request);
    }

    /// <summary>
    /// Test for PutChangeVisibilityWorksheet of WorksheetController.
    /// </summary>

    public function testPutChangeVisibilityWorksheet()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutChangeVisibilityWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIsVisible( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putChangeVisibilityWorksheet($request);
    }

    /// <summary>
    /// Test for PutActiveWorksheet of WorksheetController.
    /// </summary>

    public function testPutActiveWorksheet()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutActiveWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putActiveWorksheet($request);
    }

    /// <summary>
    /// Test for PutInsertNewWorksheet of WorksheetController.
    /// </summary>

    public function testPutInsertNewWorksheet()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutInsertNewWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 1);
        $request->setSheettype( "VB");
        $request->setNewsheetname( "VBASheet");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putInsertNewWorksheet($request);
    }

    /// <summary>
    /// Test for PutAddNewWorksheet of WorksheetController.
    /// </summary>

    public function testPutAddNewWorksheet()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutAddNewWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setPosition( 0);
        $request->setSheettype( "VB");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putAddNewWorksheet($request);
    }

    /// <summary>
    /// Test for DeleteWorksheet of WorksheetController.
    /// </summary>

    public function testDeleteWorksheet()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheet($request);
    }

    /// <summary>
    /// Test for DeleteWorksheet of WorksheetController.
    /// </summary>

    public function testDeleteWorksheets()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $matchCondition = new \Aspose\Cells\Cloud\Model\MatchConditionRequest();
        $matchCondition->setRegexPattern("{*}" ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetsRequest();
        $request->setName( $remoteName);
        $request->setMatchCondition( $matchCondition);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheets($request);
    }

    /// <summary>
    /// Test for PostMoveWorksheet of WorksheetController.
    /// </summary>

    public function testPostMoveWorksheet()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $moving = new \Aspose\Cells\Cloud\Model\WorksheetMovingRequest();
        $moving->setDestinationWorksheet("Sheet4" ); 
        $moving->setPosition("After" ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostMoveWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setMoving( $moving);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postMoveWorksheet($request);
    }

    /// <summary>
    /// Test for PutProtectWorksheet of WorksheetController.
    /// </summary>

    public function testPutProtectWorksheet()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $protectParameter = new \Aspose\Cells\Cloud\Model\ProtectSheetParameter();
        $protectParameter->setProtectionType("ALL" ); 
        $protectParameter->setPassword("123" ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutProtectWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setProtectParameter( $protectParameter);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putProtectWorksheet($request);
    }

    /// <summary>
    /// Test for DeleteUnprotectWorksheet of WorksheetController.
    /// </summary>

    public function testDeleteUnprotectWorksheet()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $protectParameter = new \Aspose\Cells\Cloud\Model\ProtectSheetParameter();
        $protectParameter->setProtectionType("ALL" ); 
        $protectParameter->setPassword("123" ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteUnprotectWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setProtectParameter( $protectParameter);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteUnprotectWorksheet($request);
    }

    /// <summary>
    /// Test for GetWorksheetTextItems of WorksheetController.
    /// </summary>

    public function testGetWorksheetTextItems()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetTextItemsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetTextItems($request);
    }

    /// <summary>
    /// Test for GetWorksheetComments of WorksheetController.
    /// </summary>

    public function testGetWorksheetComments()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetCommentsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetComments($request);
    }

    /// <summary>
    /// Test for GetWorksheetComment of WorksheetController.
    /// </summary>

    public function testGetWorksheetComment()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetCommentRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "B3");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetComment($request);
    }

    /// <summary>
    /// Test for PutWorksheetComment of WorksheetController.
    /// </summary>

    public function testPutWorksheetComment()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $comment = new \Aspose\Cells\Cloud\Model\Comment();
        $comment->setAuthor("aspose cells developer" ); 
        $comment->setNote("aspose cells cloud api add comment." ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetCommentRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "C1");
        $request->setComment( $comment);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putWorksheetComment($request);
    }

    /// <summary>
    /// Test for PostWorksheetComment of WorksheetController.
    /// </summary>

    public function testPostWorksheetComment()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $comment = new \Aspose\Cells\Cloud\Model\Comment();
        $comment->setAuthor("aspose cells developer" ); 
        $comment->setNote("aspose cells cloud api update comment." ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCommentRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "B3");
        $request->setComment( $comment);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetComment($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetComment of WorksheetController.
    /// </summary>

    public function testDeleteWorksheetComment()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetCommentRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "B3");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetComment($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetComments of WorksheetController.
    /// </summary>

    public function testDeleteWorksheetComments()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetCommentsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetComments($request);
    }

    /// <summary>
    /// Test for GetWorksheetMergedCells of WorksheetController.
    /// </summary>

    public function testGetWorksheetMergedCells()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetMergedCellsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetMergedCells($request);
    }

    /// <summary>
    /// Test for GetWorksheetMergedCell of WorksheetController.
    /// </summary>

    public function testGetWorksheetMergedCell()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetMergedCellRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setMergedCellIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetMergedCell($request);
    }

    /// <summary>
    /// Test for GetWorksheetCalculateFormula of WorksheetController.
    /// </summary>

    public function testGetWorksheetCalculateFormula()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetCalculateFormulaRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFormula( "=NOW()");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetCalculateFormula($request);
    }

    /// <summary>
    /// Test for PostWorksheetCalculateFormula of WorksheetController.
    /// </summary>

    public function testPostWorksheetCalculateFormula()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCalculateFormulaRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFormula( "=NOW()");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetCalculateFormula($request);
    }

    /// <summary>
    /// Test for PostWorksheetTextSearch of WorksheetController.
    /// </summary>

    public function testPostWorksheetTextSearch()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetTextSearchRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setText( "123");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetTextSearch($request);
    }

    /// <summary>
    /// Test for PostWorsheetTextReplace of WorksheetController.
    /// </summary>

    public function testPostWorsheetTextReplace()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorsheetTextReplaceRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setOldValue( "123");
        $request->setNewValue( "456");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorsheetTextReplace($request);
    }

    /// <summary>
    /// Test for PostWorksheetRangeSort of WorksheetController.
    /// </summary>

    public function testPostWorksheetRangeSort()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $dataSorter = new \Aspose\Cells\Cloud\Model\DataSorter();
        $dataSorter->setCaseSensitive('true' ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetRangeSortRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellArea( "A1:C10");
        $request->setDataSorter( $dataSorter);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetRangeSort($request);
    }

    /// <summary>
    /// Test for PostAutofitWorksheetRow of WorksheetController.
    /// </summary>

    public function testPostAutofitWorksheetRow()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostAutofitWorksheetRowRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRowIndex( 1);
        $request->setFirstColumn( 1);
        $request->setLastColumn( 8);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postAutofitWorksheetRow($request);
    }

    /// <summary>
    /// Test for PostAutofitWorksheetRows of WorksheetController.
    /// </summary>

    public function testPostAutofitWorksheetRows()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostAutofitWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartRow( 1);
        $request->setEndRow( 9);
        $request->setOnlyAuto( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postAutofitWorksheetRows($request);
    }

    /// <summary>
    /// Test for PostAutofitWorksheetColumns of WorksheetController.
    /// </summary>

    public function testPostAutofitWorksheetColumns()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostAutofitWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartColumn( 1);
        $request->setEndColumn( 9);
        $request->setOnlyAuto( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postAutofitWorksheetColumns($request);
    }

    /// <summary>
    /// Test for PutWorksheetBackground of WorksheetController.
    /// </summary>

    public function testPutWorksheetBackground()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $waterMarkPNG = "WaterMark.png";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $this->instance,$waterMarkPNG ,$remoteFolder . "/WaterMark.png" ,  "");
     
        $request = new PutWorksheetBackgroundRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setPicPath( $remoteFolder . "/WaterMark.png");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putWorksheetBackground($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetBackground of WorksheetController.
    /// </summary>

    public function testDeleteWorksheetBackground()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetBackgroundRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetBackground($request);
    }

    /// <summary>
    /// Test for PutWorksheetFreezePanes of WorksheetController.
    /// </summary>

    public function testPutWorksheetFreezePanes()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetFreezePanesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRow( 1);
        $request->setColumn( 1);
        $request->setFreezedRows( 4);
        $request->setFreezedColumns( 5);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putWorksheetFreezePanes($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetFreezePanes of WorksheetController.
    /// </summary>

    public function testDeleteWorksheetFreezePanes()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetFreezePanesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRow( 1);
        $request->setColumn( 1);
        $request->setFreezedRows( 4);
        $request->setFreezedColumns( 5);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetFreezePanes($request);
    }

    /// <summary>
    /// Test for PostCopyWorksheet of WorksheetController.
    /// </summary>

    public function testPostCopyWorksheet()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $options = new \Aspose\Cells\Cloud\Model\CopyOptions();
        $options->setColumnCharacterWidth('true' ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostCopyWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet15");
        $request->setSourceSheet( "Sheet6");
        $request->setOptions( $options);
        $request->setSourceWorkbook( "");
        $request->setSourceFolder( "");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postCopyWorksheet($request);
    }

    /// <summary>
    /// Test for PostRenameWorksheet of WorksheetController.
    /// </summary>

    public function testPostRenameWorksheet()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostRenameWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet5");
        $request->setNewname( "Sheet55");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postRenameWorksheet($request);
    }

    /// <summary>
    /// Test for PostUpdateWorksheetProperty of WorksheetController.
    /// </summary>

    public function testPostUpdateWorksheetProperty()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $sheet = new \Aspose\Cells\Cloud\Model\Worksheet();
        $sheet->setName("sheet65" ); 
        $sheet->setIsGridlinesVisible('true' ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUpdateWorksheetPropertyRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet5");
        $request->setSheet( $sheet);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postUpdateWorksheetProperty($request);
    }

    /// <summary>
    /// Test for GetNamedRanges of WorksheetController.
    /// </summary>

    public function testGetNamedRanges()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetNamedRangesRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getNamedRanges($request);
    }

    /// <summary>
    /// Test for GetNamedRangeValue of WorksheetController.
    /// </summary>

    public function testGetNamedRangeValue()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetNamedRangeValueRequest();
        $request->setName( $remoteName);
        $request->setNamerange( "Name_2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getNamedRangeValue($request);
    }

    /// <summary>
    /// Test for PostUpdateWorksheetZoom of WorksheetController.
    /// </summary>

    public function testPostUpdateWorksheetZoom()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUpdateWorksheetZoomRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setValue( 90);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postUpdateWorksheetZoom($request);
    }

    /// <summary>
    /// Test for GetWorksheetPageCount of WorksheetController.
    /// </summary>

    public function testGetWorksheetPageCount()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetPageCountRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetPageCount($request);
    }
}