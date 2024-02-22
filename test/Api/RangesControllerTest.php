<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RangesControllerTests.php.cs">
 *   Copyright (c) 2024 Aspose.Cells Cloud
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
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangesCopyRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeSortRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeStyleRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeUnMergeRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeValueRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetCellsRangeRequest; 

use PHPUnit\Framework\TestCase;
final class RangesControllerTest extends TestCase
{
    /// <summary>
    /// Test for PostWorksheetCellsRanges of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangesCopy()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangesCopyRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRangeOperate( $rangeOperate);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetCellsRangesCopy($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeMerge of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeMerge()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $range = new \Aspose\Cells\Cloud\Model\Range();
        $range->setColumnCount(1 ); 
        $range->setColumnWidth(10.0 ); 
        $range->setFirstRow(1 ); 
        $range->setRowCount(10 ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeMergeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( $range);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetCellsRangeMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeUnMerge of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeUnMerge()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $range = new \Aspose\Cells\Cloud\Model\Range();
        $range->setColumnCount(1 ); 
        $range->setColumnWidth(10.0 ); 
        $range->setFirstRow(1 ); 
        $range->setRowCount(10 ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeUnMergeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( $range);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetCellsRangeUnMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeStyle of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeStyle()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRangeOperate( $rangeOperate);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetCellsRangeStyle($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetCellsRangeValue of RangesController.
    /// </summary>

    public function testGetWorksheetCellsRangeValue()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
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

        $resposne = $instance->getWorksheetCellsRangeValue($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeValue of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeValue()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $range = new \Aspose\Cells\Cloud\Model\Range();
        $range->setColumnCount(1 ); 
        $range->setColumnWidth(10.0 ); 
        $range->setFirstRow(1 ); 
        $range->setRowCount(10 ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeValueRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( $range);
        $request->setValue( "100");
        $request->setIsConverted( 'true');
        $request->setSetStyle( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetCellsRangeValue($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeMoveTo of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeMoveTo()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $range = new \Aspose\Cells\Cloud\Model\Range();
        $range->setColumnCount(1 ); 
        $range->setColumnWidth(10.0 ); 
        $range->setFirstRow(1 ); 
        $range->setRowCount(10 ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeMoveToRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( $range);
        $request->setDestRow( 10);
        $request->setDestColumn( 10);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetCellsRangeMoveTo($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeOutlineBorder of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeOutlineBorder()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeOutlineBorderRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRangeOperate( $rangeOperate);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetCellsRangeOutlineBorder($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeColumnWidth of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeColumnWidth()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $range = new \Aspose\Cells\Cloud\Model\Range();
        $range->setColumnCount(1 ); 
        $range->setColumnWidth(10.0 ); 
        $range->setFirstRow(1 ); 
        $range->setRowCount(10 ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeColumnWidthRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( $range);
        $request->setValue( 10.7);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetCellsRangeColumnWidth($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeRowHeight of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeRowHeight()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $range = new \Aspose\Cells\Cloud\Model\Range();
        $range->setColumnCount(1 ); 
        $range->setColumnWidth(10.0 ); 
        $range->setFirstRow(1 ); 
        $range->setRowCount(10 ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeRowHeightRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( $range);
        $request->setValue( 10.9);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetCellsRangeRowHeight($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetCellsRange of RangesController.
    /// </summary>

    public function testPutWorksheetCellsRange()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetCellsRangeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:C6");
        $request->setShift( "Down");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetCellsRange($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetCellsRange of RangesController.
    /// </summary>

    public function testDeleteWorksheetCellsRange()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetCellsRangeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:C6");
        $request->setShift( "Up");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetCellsRange($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetCellsRangeSort of RangesController.
    /// </summary>

    public function testPostWorksheetCellsRangeSort()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Group.xlsx";
        $remoteName = "Group.xlsx";

        $rangeSortRequestDataSorter = new \Aspose\Cells\Cloud\Model\DataSorter();
        $rangeSortRequestDataSorter->setCaseSensitive('true' ); 
        $rangeSortRequestCellArea = new \Aspose\Cells\Cloud\Model\Range();
        $rangeSortRequestCellArea->setColumnCount(3 ); 
        $rangeSortRequestCellArea->setFirstColumn(0 ); 
        $rangeSortRequestCellArea->setFirstRow(0 ); 
        $rangeSortRequestCellArea->setRowCount(15 ); 
        $rangeSortRequest = new \Aspose\Cells\Cloud\Model\RangeSortRequest();
        $rangeSortRequest->setDataSorter($rangeSortRequestDataSorter ); 
        $rangeSortRequest->setCellArea($rangeSortRequestCellArea ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellsRangeSortRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "book1");
        $request->setRangeSortRequest( $rangeSortRequest);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetCellsRangeSort($request);
        $this->assertTrue($resposne !==null );
    }
}