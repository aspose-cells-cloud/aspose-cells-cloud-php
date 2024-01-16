<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CellsControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetColumnsRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetRowRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetRowsRequest; 
use \Aspose\Cells\Cloud\Request\GetCellHtmlStringRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetCellRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetCellsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetCellStyleRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetColumnRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetColumnsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetRowRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetRowsRequest; 
use \Aspose\Cells\Cloud\Request\PostCellCalculateRequest; 
use \Aspose\Cells\Cloud\Request\PostCellCharactersRequest; 
use \Aspose\Cells\Cloud\Request\PostClearContentsRequest; 
use \Aspose\Cells\Cloud\Request\PostClearFormatsRequest; 
use \Aspose\Cells\Cloud\Request\PostColumnStyleRequest; 
use \Aspose\Cells\Cloud\Request\PostCopyCellIntoCellRequest; 
use \Aspose\Cells\Cloud\Request\PostCopyWorksheetColumnsRequest; 
use \Aspose\Cells\Cloud\Request\PostCopyWorksheetRowsRequest; 
use \Aspose\Cells\Cloud\Request\PostGroupWorksheetColumnsRequest; 
use \Aspose\Cells\Cloud\Request\PostGroupWorksheetRowsRequest; 
use \Aspose\Cells\Cloud\Request\PostHideWorksheetColumnsRequest; 
use \Aspose\Cells\Cloud\Request\PostHideWorksheetRowsRequest; 
use \Aspose\Cells\Cloud\Request\PostRowStyleRequest; 
use \Aspose\Cells\Cloud\Request\PostSetCellHtmlStringRequest; 
use \Aspose\Cells\Cloud\Request\PostSetCellRangeValueRequest; 
use \Aspose\Cells\Cloud\Request\PostSetWorksheetColumnWidthRequest; 
use \Aspose\Cells\Cloud\Request\PostUngroupWorksheetColumnsRequest; 
use \Aspose\Cells\Cloud\Request\PostUngroupWorksheetRowsRequest; 
use \Aspose\Cells\Cloud\Request\PostUnhideWorksheetColumnsRequest; 
use \Aspose\Cells\Cloud\Request\PostUnhideWorksheetRowsRequest; 
use \Aspose\Cells\Cloud\Request\PostUpdateWorksheetCellStyleRequest; 
use \Aspose\Cells\Cloud\Request\PostUpdateWorksheetRangeStyleRequest; 
use \Aspose\Cells\Cloud\Request\PostUpdateWorksheetRowRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetCellSetValueRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetMergeRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetUnmergeRequest; 
use \Aspose\Cells\Cloud\Request\PutInsertWorksheetColumnsRequest; 
use \Aspose\Cells\Cloud\Request\PutInsertWorksheetRowRequest; 
use \Aspose\Cells\Cloud\Request\PutInsertWorksheetRowsRequest; 

use PHPUnit\Framework\TestCase;
class CellsControllerTest extends \PHPUnit_Framework_TestCase
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
    /// Test for PostClearContents of CellsController.
    /// </summary>

    public function testPostClearContents()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostClearContentsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:C10");
        $request->setStartRow( 1);
        $request->setStartColumn( 1);
        $request->setEndRow( 3);
        $request->setEndColumn( 3);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postClearContents($request);
    }

    /// <summary>
    /// Test for PostClearFormats of CellsController.
    /// </summary>

    public function testPostClearFormats()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostClearFormatsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:C10");
        $request->setStartRow( 1);
        $request->setStartColumn( 1);
        $request->setEndRow( 3);
        $request->setEndColumn( 3);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postClearFormats($request);
    }

    /// <summary>
    /// Test for PostUpdateWorksheetRangeStyle of CellsController.
    /// </summary>

    public function testPostUpdateWorksheetRangeStyle()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $styleFont = new \Aspose\Cells\Cloud\Model\Font();
        $styleFont->setSize(16 ); 
        $style = new \Aspose\Cells\Cloud\Model\Style();
        $style->setFont($styleFont ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUpdateWorksheetRangeStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:C10");
        $request->setStyle( $style);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postUpdateWorksheetRangeStyle($request);
    }

    /// <summary>
    /// Test for PostWorksheetMerge of CellsController.
    /// </summary>

    public function testPostWorksheetMerge()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetMergeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartRow( 1);
        $request->setStartColumn( 1);
        $request->setTotalRows( 4);
        $request->setTotalColumns( 4);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetMerge($request);
    }

    /// <summary>
    /// Test for PostWorksheetUnmerge of CellsController.
    /// </summary>

    public function testPostWorksheetUnmerge()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetUnmergeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartRow( 1);
        $request->setStartColumn( 1);
        $request->setTotalRows( 4);
        $request->setTotalColumns( 4);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetUnmerge($request);
    }

    /// <summary>
    /// Test for GetWorksheetCells of CellsController.
    /// </summary>

    public function testGetWorksheetCells()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetCellsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setOffest( 1);
        $request->setCount( 10);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetCells($request);
    }

    /// <summary>
    /// Test for GetWorksheetCell of CellsController.
    /// </summary>

    public function testGetWorksheetCell()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetCellRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellOrMethodName( "A1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetCell($request);
    }

    /// <summary>
    /// Test for GetWorksheetCellStyle of CellsController.
    /// </summary>

    public function testGetWorksheetCellStyle()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetCellStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "A1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetCellStyle($request);
    }

    /// <summary>
    /// Test for PostWorksheetCellSetValue of CellsController.
    /// </summary>

    public function testPostWorksheetCellSetValue()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellSetValueRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "A1");
        $request->setValue( "1");
        $request->setType( "int");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetCellSetValue($request);
    }

    /// <summary>
    /// Test for PostUpdateWorksheetCellStyle of CellsController.
    /// </summary>

    public function testPostUpdateWorksheetCellStyle()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $styleFont = new \Aspose\Cells\Cloud\Model\Font();
        $styleFont->setSize(16 ); 
        $style = new \Aspose\Cells\Cloud\Model\Style();
        $style->setFont($styleFont ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUpdateWorksheetCellStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "A1");
        $request->setStyle( $style);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postUpdateWorksheetCellStyle($request);
    }

    /// <summary>
    /// Test for PostSetCellRangeValue of CellsController.
    /// </summary>

    public function testPostSetCellRangeValue()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostSetCellRangeValueRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellarea( "A1:C10");
        $request->setValue( "Test");
        $request->setType( "string");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postSetCellRangeValue($request);
    }

    /// <summary>
    /// Test for PostCopyCellIntoCell of CellsController.
    /// </summary>

    public function testPostCopyCellIntoCell()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostCopyCellIntoCellRequest();
        $request->setName( $remoteName);
        $request->setDestCellName( "C1");
        $request->setSheetName( "Sheet1");
        $request->setWorksheet( "Sheet2");
        $request->setCellname( "A1");
        $request->setRow( 1);
        $request->setColumn( 1);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postCopyCellIntoCell($request);
    }

    /// <summary>
    /// Test for GetCellHtmlString of CellsController.
    /// </summary>

    public function testGetCellHtmlString()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetCellHtmlStringRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "A1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getCellHtmlString($request);
    }

    /// <summary>
    /// Test for PostSetCellHtmlString of CellsController.
    /// </summary>

    public function testPostSetCellHtmlString()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostSetCellHtmlStringRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "A1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postSetCellHtmlString($request);
    }

    /// <summary>
    /// Test for PostCellCalculate of CellsController.
    /// </summary>

    public function testPostCellCalculate()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $options = new \Aspose\Cells\Cloud\Model\CalculationOptions();
        $options->setRecursive('true' ); 
        $options->setIgnoreError('true' ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostCellCalculateRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "A1");
        $request->setOptions( $options);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postCellCalculate($request);
    }

    /// <summary>
    /// Test for PostCellCharacters of CellsController.
    /// </summary>

    public function testPostCellCharacters()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $optionsvalue0Font = new \Aspose\Cells\Cloud\Model\Font();
        $optionsvalue0Font->setIsBold('true' ); 
        $optionsvalue0Font->setSize(16 ); 
        $optionsvalue0 = new \Aspose\Cells\Cloud\Model\FontSetting();
        $optionsvalue0->setLength(5 ); 
        $optionsvalue0->setStartIndex(0 ); 
        $optionsvalue0->setFont($optionsvalue0Font ); 
        $options = array (
            $optionsvalue0
        );
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostCellCharactersRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "E36");
        $request->setOptions( $options);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postCellCharacters($request);
    }

    /// <summary>
    /// Test for GetWorksheetColumns of CellsController.
    /// </summary>

    public function testGetWorksheetColumns()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setOffset( 1);
        $request->setCount( 10);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetColumns($request);
    }

    /// <summary>
    /// Test for PostSetWorksheetColumnWidth of CellsController.
    /// </summary>

    public function testPostSetWorksheetColumnWidth()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostSetWorksheetColumnWidthRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setColumnIndex( 1);
        $request->setWidth( 10.9);
        $request->setCount( 10);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postSetWorksheetColumnWidth($request);
    }

    /// <summary>
    /// Test for GetWorksheetColumn of CellsController.
    /// </summary>

    public function testGetWorksheetColumn()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetColumnRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setColumnIndex( 1);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetColumn($request);
    }

    /// <summary>
    /// Test for PutInsertWorksheetColumns of CellsController.
    /// </summary>

    public function testPutInsertWorksheetColumns()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutInsertWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setColumnIndex( 1);
        $request->setColumns( 10);
        $request->setUpdateReference( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putInsertWorksheetColumns($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetColumns of CellsController.
    /// </summary>

    public function testDeleteWorksheetColumns()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setColumnIndex( 1);
        $request->setColumns( 10);
        $request->setUpdateReference( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetColumns($request);
    }

    /// <summary>
    /// Test for PostHideWorksheetColumns of CellsController.
    /// </summary>

    public function testPostHideWorksheetColumns()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostHideWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartColumn( 1);
        $request->setTotalColumns( 10);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postHideWorksheetColumns($request);
    }

    /// <summary>
    /// Test for PostUnhideWorksheetColumns of CellsController.
    /// </summary>

    public function testPostUnhideWorksheetColumns()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUnhideWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartColumn( 1);
        $request->setTotalColumns( 10);
        $request->setWidth( 10.9);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postUnhideWorksheetColumns($request);
    }

    /// <summary>
    /// Test for PostGroupWorksheetColumns of CellsController.
    /// </summary>

    public function testPostGroupWorksheetColumns()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostGroupWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFirstIndex( 1);
        $request->setLastIndex( 9);
        $request->setHide( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postGroupWorksheetColumns($request);
    }

    /// <summary>
    /// Test for PostUngroupWorksheetColumns of CellsController.
    /// </summary>

    public function testPostUngroupWorksheetColumns()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUngroupWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFirstIndex( 1);
        $request->setLastIndex( 9);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postUngroupWorksheetColumns($request);
    }

    /// <summary>
    /// Test for PostCopyWorksheetColumns of CellsController.
    /// </summary>

    public function testPostCopyWorksheetColumns()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostCopyWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSourceColumnIndex( 1);
        $request->setDestinationColumnIndex( 19);
        $request->setColumnNumber( 8);
        $request->setWorksheet( "Sheet2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postCopyWorksheetColumns($request);
    }

    /// <summary>
    /// Test for PostColumnStyle of CellsController.
    /// </summary>

    public function testPostColumnStyle()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $styleFont = new \Aspose\Cells\Cloud\Model\Font();
        $styleFont->setSize(16 ); 
        $style = new \Aspose\Cells\Cloud\Model\Style();
        $style->setFont($styleFont ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostColumnStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setColumnIndex( 1);
        $request->setStyle( $style);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postColumnStyle($request);
    }

    /// <summary>
    /// Test for GetWorksheetRows of CellsController.
    /// </summary>

    public function testGetWorksheetRows()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setOffset( 1);
        $request->setCount( 10);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetRows($request);
    }

    /// <summary>
    /// Test for GetWorksheetRow of CellsController.
    /// </summary>

    public function testGetWorksheetRow()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetRowRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRowIndex( 1);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetRow($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetRow of CellsController.
    /// </summary>

    public function testDeleteWorksheetRow()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetRowRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRowIndex( 1);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetRow($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetRows of CellsController.
    /// </summary>

    public function testDeleteWorksheetRows()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartrow( 1);
        $request->setTotalRows( 10);
        $request->setUpdateReference( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetRows($request);
    }

    /// <summary>
    /// Test for PutInsertWorksheetRows of CellsController.
    /// </summary>

    public function testPutInsertWorksheetRows()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutInsertWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartrow( 1);
        $request->setTotalRows( 10);
        $request->setUpdateReference( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putInsertWorksheetRows($request);
    }

    /// <summary>
    /// Test for PutInsertWorksheetRow of CellsController.
    /// </summary>

    public function testPutInsertWorksheetRow()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutInsertWorksheetRowRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRowIndex( 1);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putInsertWorksheetRow($request);
    }

    /// <summary>
    /// Test for PostUpdateWorksheetRow of CellsController.
    /// </summary>

    public function testPostUpdateWorksheetRow()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUpdateWorksheetRowRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRowIndex( 1);
        $request->setHeight( 10.8);
        $request->setCount( 9);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postUpdateWorksheetRow($request);
    }

    /// <summary>
    /// Test for PostHideWorksheetRows of CellsController.
    /// </summary>

    public function testPostHideWorksheetRows()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostHideWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartrow( 1);
        $request->setTotalRows( 6);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postHideWorksheetRows($request);
    }

    /// <summary>
    /// Test for PostUnhideWorksheetRows of CellsController.
    /// </summary>

    public function testPostUnhideWorksheetRows()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUnhideWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartrow( 1);
        $request->setTotalRows( 8);
        $request->setHeight( 10.9);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postUnhideWorksheetRows($request);
    }

    /// <summary>
    /// Test for PostGroupWorksheetRows of CellsController.
    /// </summary>

    public function testPostGroupWorksheetRows()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostGroupWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFirstIndex( 1);
        $request->setLastIndex( 9);
        $request->setHide( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postGroupWorksheetRows($request);
    }

    /// <summary>
    /// Test for PostUngroupWorksheetRows of CellsController.
    /// </summary>

    public function testPostUngroupWorksheetRows()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUngroupWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFirstIndex( 1);
        $request->setLastIndex( 9);
        $request->setIsAll( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postUngroupWorksheetRows($request);
    }

    /// <summary>
    /// Test for PostCopyWorksheetRows of CellsController.
    /// </summary>

    public function testPostCopyWorksheetRows()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostCopyWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSourceRowIndex( 1);
        $request->setDestinationRowIndex( 12);
        $request->setRowNumber( 5);
        $request->setWorksheet( "Sheet2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postCopyWorksheetRows($request);
    }

    /// <summary>
    /// Test for PostRowStyle of CellsController.
    /// </summary>

    public function testPostRowStyle()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $styleFont = new \Aspose\Cells\Cloud\Model\Font();
        $styleFont->setSize(16 ); 
        $style = new \Aspose\Cells\Cloud\Model\Style();
        $style->setFont($styleFont ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostRowStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRowIndex( 1);
        $request->setStyle( $style);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postRowStyle($request);
    }
}