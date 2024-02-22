<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WorksheetControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\PostWorksheetTextReplaceRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetTextSearchRequest; 
use \Aspose\Cells\Cloud\Request\PutActiveWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\PutAddNewWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\PutChangeVisibilityWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\PutInsertNewWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\PutProtectWorksheetRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetBackgroundRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetCommentRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetFreezePanesRequest; 

use PHPUnit\Framework\TestCase;
final class WorksheetControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetWorksheet of WorksheetController.
    /// </summary>

    public function testGetWorksheets()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetsRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheets($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetWithFormat of WorksheetController.
    /// </summary>

    public function testGetWorksheetWithFormat()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetWithFormatRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFormat( "png");
        $request->setPageIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetWithFormat($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutChangeVisibilityWorksheet of WorksheetController.
    /// </summary>

    public function testPutChangeVisibilityWorksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutChangeVisibilityWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIsVisible( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putChangeVisibilityWorksheet($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutActiveWorksheet of WorksheetController.
    /// </summary>

    public function testPutActiveWorksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutActiveWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putActiveWorksheet($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutInsertNewWorksheet of WorksheetController.
    /// </summary>

    public function testPutInsertNewWorksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutInsertNewWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 1);
        $request->setSheettype( "VB");
        $request->setNewsheetname( "VBASheet");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putInsertNewWorksheet($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutAddNewWorksheet of WorksheetController.
    /// </summary>

    public function testPutAddNewWorksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutAddNewWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setPosition( 0);
        $request->setSheettype( "VB");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putAddNewWorksheet($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheet of WorksheetController.
    /// </summary>

    public function testDeleteWorksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheet($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheet of WorksheetController.
    /// </summary>

    public function testDeleteWorksheets()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $matchCondition = new \Aspose\Cells\Cloud\Model\MatchConditionRequest();
        $matchCondition->setRegexPattern("{*}" ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetsRequest();
        $request->setName( $remoteName);
        $request->setMatchCondition( $matchCondition);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheets($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostMoveWorksheet of WorksheetController.
    /// </summary>

    public function testPostMoveWorksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $moving = new \Aspose\Cells\Cloud\Model\WorksheetMovingRequest();
        $moving->setDestinationWorksheet("Sheet4" ); 
        $moving->setPosition("After" ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostMoveWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setMoving( $moving);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postMoveWorksheet($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutProtectWorksheet of WorksheetController.
    /// </summary>

    public function testPutProtectWorksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $protectParameter = new \Aspose\Cells\Cloud\Model\ProtectSheetParameter();
        $protectParameter->setProtectionType("ALL" ); 
        $protectParameter->setPassword("123" ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutProtectWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setProtectParameter( $protectParameter);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putProtectWorksheet($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteUnprotectWorksheet of WorksheetController.
    /// </summary>

    public function testDeleteUnprotectWorksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $protectParameter = new \Aspose\Cells\Cloud\Model\ProtectSheetParameter();
        $protectParameter->setProtectionType("ALL" ); 
        $protectParameter->setPassword("123" ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteUnprotectWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setProtectParameter( $protectParameter);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteUnprotectWorksheet($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetTextItems of WorksheetController.
    /// </summary>

    public function testGetWorksheetTextItems()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetTextItemsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetTextItems($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetComments of WorksheetController.
    /// </summary>

    public function testGetWorksheetComments()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetCommentsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetComments($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetComment of WorksheetController.
    /// </summary>

    public function testGetWorksheetComment()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetCommentRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "B3");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetComment($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetComment of WorksheetController.
    /// </summary>

    public function testPutWorksheetComment()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $comment = new \Aspose\Cells\Cloud\Model\Comment();
        $comment->setAuthor("aspose cells developer" ); 
        $comment->setNote("aspose cells cloud api add comment." ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetCommentRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "C1");
        $request->setComment( $comment);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetComment($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetComment of WorksheetController.
    /// </summary>

    public function testPostWorksheetComment()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $comment = new \Aspose\Cells\Cloud\Model\Comment();
        $comment->setAuthor("aspose cells developer" ); 
        $comment->setNote("aspose cells cloud api update comment." ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCommentRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "B3");
        $request->setComment( $comment);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetComment($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetComment of WorksheetController.
    /// </summary>

    public function testDeleteWorksheetComment()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetCommentRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellName( "B3");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetComment($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetComments of WorksheetController.
    /// </summary>

    public function testDeleteWorksheetComments()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetCommentsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetComments($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetMergedCells of WorksheetController.
    /// </summary>

    public function testGetWorksheetMergedCells()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetMergedCellsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetMergedCells($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetMergedCell of WorksheetController.
    /// </summary>

    public function testGetWorksheetMergedCell()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetMergedCellRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setMergedCellIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetMergedCell($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetCalculateFormula of WorksheetController.
    /// </summary>

    public function testGetWorksheetCalculateFormula()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetCalculateFormulaRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFormula( "=NOW()");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetCalculateFormula($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetCalculateFormula of WorksheetController.
    /// </summary>

    public function testPostWorksheetCalculateFormula()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetCalculateFormulaRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFormula( "=NOW()");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetCalculateFormula($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetTextSearch of WorksheetController.
    /// </summary>

    public function testPostWorksheetTextSearch()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetTextSearchRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setText( "123");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetTextSearch($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetTextReplace of WorksheetController.
    /// </summary>

    public function testPostWorksheetTextReplace()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetTextReplaceRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setOldValue( "123");
        $request->setNewValue( "456");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetTextReplace($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetRangeSort of WorksheetController.
    /// </summary>

    public function testPostWorksheetRangeSort()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $dataSorter = new \Aspose\Cells\Cloud\Model\DataSorter();
        $dataSorter->setCaseSensitive('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetRangeSortRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellArea( "A1:C10");
        $request->setDataSorter( $dataSorter);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetRangeSort($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostAutofitWorksheetRow of WorksheetController.
    /// </summary>

    public function testPostAutofitWorksheetRow()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostAutofitWorksheetRowRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRowIndex( 1);
        $request->setFirstColumn( 1);
        $request->setLastColumn( 8);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postAutofitWorksheetRow($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostAutofitWorksheetRows of WorksheetController.
    /// </summary>

    public function testPostAutofitWorksheetRows()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostAutofitWorksheetRowsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartRow( 1);
        $request->setEndRow( 9);
        $request->setOnlyAuto( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postAutofitWorksheetRows($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostAutofitWorksheetColumns of WorksheetController.
    /// </summary>

    public function testPostAutofitWorksheetColumns()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostAutofitWorksheetColumnsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartColumn( 1);
        $request->setEndColumn( 9);
        $request->setOnlyAuto( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postAutofitWorksheetColumns($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetBackground of WorksheetController.
    /// </summary>

    public function testPutWorksheetBackground()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $waterMarkPNG = "WaterMark.png";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $instance,$waterMarkPNG ,$remoteFolder . "/WaterMark.png" ,  "");
     
        $request = new PutWorksheetBackgroundRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setPicPath( $remoteFolder . "/WaterMark.png");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetBackground($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetBackground of WorksheetController.
    /// </summary>

    public function testDeleteWorksheetBackground()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetBackgroundRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetBackground($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetFreezePanes of WorksheetController.
    /// </summary>

    public function testPutWorksheetFreezePanes()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetFreezePanesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRow( 1);
        $request->setColumn( 1);
        $request->setFreezedRows( 4);
        $request->setFreezedColumns( 5);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetFreezePanes($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetFreezePanes of WorksheetController.
    /// </summary>

    public function testDeleteWorksheetFreezePanes()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetFreezePanesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRow( 1);
        $request->setColumn( 1);
        $request->setFreezedRows( 4);
        $request->setFreezedColumns( 5);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetFreezePanes($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostCopyWorksheet of WorksheetController.
    /// </summary>

    public function testPostCopyWorksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $options = new \Aspose\Cells\Cloud\Model\CopyOptions();
        $options->setColumnCharacterWidth('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostCopyWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet15");
        $request->setSourceSheet( "Sheet6");
        $request->setOptions( $options);
        $request->setSourceWorkbook( "");
        $request->setSourceFolder( "");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postCopyWorksheet($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostRenameWorksheet of WorksheetController.
    /// </summary>

    public function testPostRenameWorksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostRenameWorksheetRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet5");
        $request->setNewname( "Sheet55");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postRenameWorksheet($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostUpdateWorksheetProperty of WorksheetController.
    /// </summary>

    public function testPostUpdateWorksheetProperty()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $sheet = new \Aspose\Cells\Cloud\Model\Worksheet();
        $sheet->setName("sheet65" ); 
        $sheet->setIsGridlinesVisible('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUpdateWorksheetPropertyRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet5");
        $request->setSheet( $sheet);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postUpdateWorksheetProperty($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetNamedRanges of WorksheetController.
    /// </summary>

    public function testGetNamedRanges()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetNamedRangesRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getNamedRanges($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetNamedRangeValue of WorksheetController.
    /// </summary>

    public function testGetNamedRangeValue()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetNamedRangeValueRequest();
        $request->setName( $remoteName);
        $request->setNamerange( "Name_2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getNamedRangeValue($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostUpdateWorksheetZoom of WorksheetController.
    /// </summary>

    public function testPostUpdateWorksheetZoom()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUpdateWorksheetZoomRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setValue( 90);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postUpdateWorksheetZoom($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetPageCount of WorksheetController.
    /// </summary>

    public function testGetWorksheetPageCount()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetPageCountRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetPageCount($request);
        $this->assertTrue($resposne !==null );
    }
}