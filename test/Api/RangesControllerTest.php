<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RangesControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetCellsRangeRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetCellsRangeValueRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeColumnWidthRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeMergeRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeMoveToRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeOutlineBorderRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeRowHeightRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangesRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeStyleRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeUnMergeRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeValueRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetCellsRangeRequest; 

use PHPUnit\Framework\TestCase;
class RangesControllerTest extends \PHPUnit_Framework_TestCase
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
    /// Test for PostWorksheetCellsRanges of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRanges()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $rangeOperateSource = new \Aspose\Cells\Cloud\Model\Range();
        $rangeOperateSource->setColumnCount(1 ); 
        $rangeOperateSource->setColumnWidth(10.0 ); 
        $rangeOperateSource->setFirstRow(1 ); 
        $rangeOperateSource->setRowCount(10 ); 
        $rangeOperateTarget = new \Aspose\Cells\Cloud\Model\Range();
        $rangeOperateTarget->setColumnCount(1 ); 
        $rangeOperateTarget->setColumnWidth(10.0 ); 
        $rangeOperateTarget->setFirstRow(10 ); 
        $rangeOperateTarget->setRowCount(10 ); 
        $rangeOperate = new \Aspose\Cells\Cloud\Model\RangeCopyRequest();
        $rangeOperate->setOperate("copydata" ); 
        $rangeOperate->setSource($rangeOperateSource ); 
        $rangeOperate->setTarget($rangeOperateTarget ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRangeOperate( $rangeOperate);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetCellsRanges($request);
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeMerge of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeMerge()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $range = new \Aspose\Cells\Cloud\Model\Range();
        $range->setColumnCount(1 ); 
        $range->setColumnWidth(10.0 ); 
        $range->setFirstRow(1 ); 
        $range->setRowCount(10 ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeMergeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( $range);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetCellsRangeMerge($request);
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeUnMerge of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeUnMerge()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $range = new \Aspose\Cells\Cloud\Model\Range();
        $range->setColumnCount(1 ); 
        $range->setColumnWidth(10.0 ); 
        $range->setFirstRow(1 ); 
        $range->setRowCount(10 ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeUnMergeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( $range);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetCellsRangeUnMerge($request);
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeStyle of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeStyle()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $rangeOperateStyleFont = new \Aspose\Cells\Cloud\Model\Font();
        $rangeOperateStyleFont->setSize(16 ); 
        $rangeOperateStyle = new \Aspose\Cells\Cloud\Model\Style();
        $rangeOperateStyle->setFont($rangeOperateStyleFont ); 
        $rangeOperateRange = new \Aspose\Cells\Cloud\Model\Range();
        $rangeOperateRange->setColumnCount(1 ); 
        $rangeOperateRange->setColumnWidth(10.0 ); 
        $rangeOperateRange->setFirstRow(1 ); 
        $rangeOperateRange->setRowCount(10 ); 
        $rangeOperate = new \Aspose\Cells\Cloud\Model\RangeSetStyleRequest();
        $rangeOperate->setStyle($rangeOperateStyle ); 
        $rangeOperate->setRange($rangeOperateRange ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRangeOperate( $rangeOperate);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetCellsRangeStyle($request);
    }

    /// <summary>
    /// Test for GetWorksheetCellsRangeValue of RangesController.
    /// </summary>

    public function testGetWorksheetCellsRangeValue()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetCellsRangeValueRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setNamerange( "Name_2");
        $request->setFirstRow( 0);
        $request->setFirstColumn( 0);
        $request->setRowCount( 3);
        $request->setColumnCount( 2);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetCellsRangeValue($request);
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeValue of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeValue()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $range = new \Aspose\Cells\Cloud\Model\Range();
        $range->setColumnCount(1 ); 
        $range->setColumnWidth(10.0 ); 
        $range->setFirstRow(1 ); 
        $range->setRowCount(10 ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeValueRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( $range);
        $request->setValue( "100");
        $request->setIsConverted( 'true');
        $request->setSetStyle( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetCellsRangeValue($request);
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeMoveTo of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeMoveTo()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $range = new \Aspose\Cells\Cloud\Model\Range();
        $range->setColumnCount(1 ); 
        $range->setColumnWidth(10.0 ); 
        $range->setFirstRow(1 ); 
        $range->setRowCount(10 ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeMoveToRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( $range);
        $request->setDestRow( 10);
        $request->setDestColumn( 10);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetCellsRangeMoveTo($request);
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeOutlineBorder of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeOutlineBorder()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $rangeOperateborderColor = new \Aspose\Cells\Cloud\Model\Color();
        $rangeOperateborderColor->setR(48 ); 
        $rangeOperateborderColor->setG(48 ); 
        $rangeOperateborderColor->setB(48 ); 
        $rangeOperateRange = new \Aspose\Cells\Cloud\Model\Range();
        $rangeOperateRange->setColumnCount(1 ); 
        $rangeOperateRange->setColumnWidth(10.0 ); 
        $rangeOperateRange->setFirstRow(1 ); 
        $rangeOperateRange->setRowCount(10 ); 
        $rangeOperate = new \Aspose\Cells\Cloud\Model\RangeSetOutlineBorderRequest();
        $rangeOperate->setborderEdge("LeftBorder" ); 
        $rangeOperate->setborderStyle("Dotted" ); 
        $rangeOperate->setborderColor($rangeOperateborderColor ); 
        $rangeOperate->setRange($rangeOperateRange ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeOutlineBorderRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRangeOperate( $rangeOperate);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetCellsRangeOutlineBorder($request);
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeColumnWidth of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeColumnWidth()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $range = new \Aspose\Cells\Cloud\Model\Range();
        $range->setColumnCount(1 ); 
        $range->setColumnWidth(10.0 ); 
        $range->setFirstRow(1 ); 
        $range->setRowCount(10 ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeColumnWidthRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( $range);
        $request->setValue( 10.7);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetCellsRangeColumnWidth($request);
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeRowHeight of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeRowHeight()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $range = new \Aspose\Cells\Cloud\Model\Range();
        $range->setColumnCount(1 ); 
        $range->setColumnWidth(10.0 ); 
        $range->setFirstRow(1 ); 
        $range->setRowCount(10 ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeRowHeightRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( $range);
        $request->setValue( 10.9);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetCellsRangeRowHeight($request);
    }

    /// <summary>
    /// Test for PutWorksheetCellsRange of RangesController.
    /// </summary>

    public function testPutWorksheetCellsRange()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetCellsRangeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:C6");
        $request->setShift( "Down");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putWorksheetCellsRange($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetCellsRange of RangesController.
    /// </summary>

    public function testDeleteWorksheetCellsRange()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetCellsRangeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:C6");
        $request->setShift( "Up");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetCellsRange($request);
    }
}