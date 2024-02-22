<?php declare(strict_types=1);
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
final class CellsControllerTest extends TestCase
{
    /// <summary>
    /// Test for PostClearContents of CellsController.
    /// </summary>

    public function testPostClearContents()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
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

        $resposne = $instance->postClearContents($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostClearFormats of CellsController.
    /// </summary>

    public function testPostClearFormats()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
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

        $resposne = $instance->postClearFormats($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostUpdateWorksheetRangeStyle of CellsController.
    /// </summary>

    public function testPostUpdateWorksheetRangeStyle()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $styleFont = new \Aspose\Cells\Cloud\Model\Font();
        $styleFont->setSize(16 ); 
        $style = new \Aspose\Cells\Cloud\Model\Style();
        $style->setFont($styleFont ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUpdateWorksheetRangeStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:C10");
        $request->setStyle( $style);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postUpdateWorksheetRangeStyle($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetMerge of CellsController.
    /// </summary>

    public function testPostWorksheetMerge()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetMergeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartRow( 1);
        $request->setStartColumn( 1);
        $request->setTotalRows( 4);
        $request->setTotalColumns( 4);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetUnmerge of CellsController.
    /// </summary>

    public function testPostWorksheetUnmerge()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetUnmergeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartRow( 1);
        $request->setStartColumn( 1);
        $request->setTotalRows( 4);
        $request->setTotalColumns( 4);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetUnmerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetCells of CellsController.
    /// </summary>

    public function testGetWorksheetCells()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetCellsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setOffest( 1);
        $request->setCount( 10);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetCells($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetCell of CellsController.
    /// </summary>

    public function testGetWorksheetCell()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetCellRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellOrMethodName( "A1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetCell($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetCellStyle of CellsController.
    /// </summary>

    public function testGetWorksheetCellStyle()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetCellStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "A1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetCellStyle($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetCellSetValue of CellsController.
    /// </summary>

    public function testPostWorksheetCellSetValue()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCellSetValueRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "A1");
        $request->setValue( "1");
        $request->setType( "int");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetCellSetValue($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostUpdateWorksheetCellStyle of CellsController.
    /// </summary>

    public function testPostUpdateWorksheetCellStyle()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $styleFont = new \Aspose\Cells\Cloud\Model\Font();
        $styleFont->setSize(16 ); 
        $style = new \Aspose\Cells\Cloud\Model\Style();
        $style->setFont($styleFont ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUpdateWorksheetCellStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "A1");
        $request->setStyle( $style);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postUpdateWorksheetCellStyle($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostSetCellRangeValue of CellsController.
    /// </summary>

    public function testPostSetCellRangeValue()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostSetCellRangeValueRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellarea( "A1:C10");
        $request->setValue( "Test");
        $request->setType( "string");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postSetCellRangeValue($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostCopyCellIntoCell of CellsController.
    /// </summary>

    public function testPostCopyCellIntoCell()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
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

        $resposne = $instance->postCopyCellIntoCell($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetCellHtmlString of CellsController.
    /// </summary>

    public function testGetCellHtmlString()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetCellHtmlStringRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "A1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getCellHtmlString($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostSetCellHtmlString of CellsController.
    /// </summary>

    public function testPostSetCellHtmlString()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostSetCellHtmlStringRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "A1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postSetCellHtmlString($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostCellCalculate of CellsController.
    /// </summary>

    public function testPostCellCalculate()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $options = new \Aspose\Cells\Cloud\Model\CalculationOptions();
        $options->setRecursive('true' ); 
        $options->setIgnoreError('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostCellCalculateRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "A1");
        $request->setOptions( $options);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postCellCalculate($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostCellCharacters of CellsController.
    /// </summary>

    public function testPostCellCharacters()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostCellCharactersRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "E36");
        $request->setOptions( $options);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postCellCharacters($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetColumns of CellsController.
    /// </summary>

    public function testGetWorksheetColumns()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setOffset( 1);
        $request->setCount( 10);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetColumns($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostSetWorksheetColumnWidth of CellsController.
    /// </summary>

    public function testPostSetWorksheetColumnWidth()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostSetWorksheetColumnWidthRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setColumnIndex( 1);
        $request->setWidth( 10.9);
        $request->setCount( 10);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postSetWorksheetColumnWidth($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetColumn of CellsController.
    /// </summary>

    public function testGetWorksheetColumn()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetColumnRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setColumnIndex( 1);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetColumn($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutInsertWorksheetColumns of CellsController.
    /// </summary>

    public function testPutInsertWorksheetColumns()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutInsertWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setColumnIndex( 1);
        $request->setColumns( 10);
        $request->setUpdateReference( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putInsertWorksheetColumns($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetColumns of CellsController.
    /// </summary>

    public function testDeleteWorksheetColumns()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setColumnIndex( 1);
        $request->setColumns( 10);
        $request->setUpdateReference( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetColumns($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostHideWorksheetColumns of CellsController.
    /// </summary>

    public function testPostHideWorksheetColumns()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostHideWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartColumn( 1);
        $request->setTotalColumns( 10);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postHideWorksheetColumns($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostUnhideWorksheetColumns of CellsController.
    /// </summary>

    public function testPostUnhideWorksheetColumns()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUnhideWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartColumn( 1);
        $request->setTotalColumns( 10);
        $request->setWidth( 10.9);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postUnhideWorksheetColumns($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostGroupWorksheetColumns of CellsController.
    /// </summary>

    public function testPostGroupWorksheetColumns()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostGroupWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFirstIndex( 1);
        $request->setLastIndex( 9);
        $request->setHide( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postGroupWorksheetColumns($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostUngroupWorksheetColumns of CellsController.
    /// </summary>

    public function testPostUngroupWorksheetColumns()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUngroupWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFirstIndex( 1);
        $request->setLastIndex( 9);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postUngroupWorksheetColumns($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostCopyWorksheetColumns of CellsController.
    /// </summary>

    public function testPostCopyWorksheetColumns()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostCopyWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSourceColumnIndex( 1);
        $request->setDestinationColumnIndex( 19);
        $request->setColumnNumber( 8);
        $request->setWorksheet( "Sheet2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postCopyWorksheetColumns($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostColumnStyle of CellsController.
    /// </summary>

    public function testPostColumnStyle()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $styleFont = new \Aspose\Cells\Cloud\Model\Font();
        $styleFont->setSize(16 ); 
        $style = new \Aspose\Cells\Cloud\Model\Style();
        $style->setFont($styleFont ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostColumnStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setColumnIndex( 1);
        $request->setStyle( $style);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postColumnStyle($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetRows of CellsController.
    /// </summary>

    public function testGetWorksheetRows()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setOffset( 1);
        $request->setCount( 10);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetRows($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetRow of CellsController.
    /// </summary>

    public function testGetWorksheetRow()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetRowRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRowIndex( 1);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetRow($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetRow of CellsController.
    /// </summary>

    public function testDeleteWorksheetRow()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetRowRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRowIndex( 1);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetRow($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetRows of CellsController.
    /// </summary>

    public function testDeleteWorksheetRows()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartrow( 1);
        $request->setTotalRows( 10);
        $request->setUpdateReference( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetRows($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutInsertWorksheetRows of CellsController.
    /// </summary>

    public function testPutInsertWorksheetRows()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutInsertWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartrow( 1);
        $request->setTotalRows( 10);
        $request->setUpdateReference( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putInsertWorksheetRows($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutInsertWorksheetRow of CellsController.
    /// </summary>

    public function testPutInsertWorksheetRow()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutInsertWorksheetRowRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRowIndex( 1);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putInsertWorksheetRow($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostUpdateWorksheetRow of CellsController.
    /// </summary>

    public function testPostUpdateWorksheetRow()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUpdateWorksheetRowRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRowIndex( 1);
        $request->setHeight( 10.8);
        $request->setCount( 9);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postUpdateWorksheetRow($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostHideWorksheetRows of CellsController.
    /// </summary>

    public function testPostHideWorksheetRows()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostHideWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartrow( 1);
        $request->setTotalRows( 6);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postHideWorksheetRows($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostUnhideWorksheetRows of CellsController.
    /// </summary>

    public function testPostUnhideWorksheetRows()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUnhideWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartrow( 1);
        $request->setTotalRows( 8);
        $request->setHeight( 10.9);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postUnhideWorksheetRows($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostGroupWorksheetRows of CellsController.
    /// </summary>

    public function testPostGroupWorksheetRows()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostGroupWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFirstIndex( 1);
        $request->setLastIndex( 9);
        $request->setHide( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postGroupWorksheetRows($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostUngroupWorksheetRows of CellsController.
    /// </summary>

    public function testPostUngroupWorksheetRows()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUngroupWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFirstIndex( 1);
        $request->setLastIndex( 9);
        $request->setIsAll( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postUngroupWorksheetRows($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostCopyWorksheetRows of CellsController.
    /// </summary>

    public function testPostCopyWorksheetRows()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostCopyWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSourceRowIndex( 1);
        $request->setDestinationRowIndex( 12);
        $request->setRowNumber( 5);
        $request->setWorksheet( "Sheet2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postCopyWorksheetRows($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostRowStyle of CellsController.
    /// </summary>

    public function testPostRowStyle()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $styleFont = new \Aspose\Cells\Cloud\Model\Font();
        $styleFont->setSize(16 ); 
        $style = new \Aspose\Cells\Cloud\Model\Style();
        $style->setFont($styleFont ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostRowStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRowIndex( 1);
        $request->setStyle( $style);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postRowStyle($request);
        $this->assertTrue($resposne !==null );
    }
}