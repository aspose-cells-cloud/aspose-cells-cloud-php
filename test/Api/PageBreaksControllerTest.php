<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageBreaksControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteHorizontalPageBreakRequest; 
use \Aspose\Cells\Cloud\Request\DeleteHorizontalPageBreaksRequest; 
use \Aspose\Cells\Cloud\Request\DeleteVerticalPageBreakRequest; 
use \Aspose\Cells\Cloud\Request\DeleteVerticalPageBreaksRequest; 
use \Aspose\Cells\Cloud\Request\GetHorizontalPageBreakRequest; 
use \Aspose\Cells\Cloud\Request\GetHorizontalPageBreaksRequest; 
use \Aspose\Cells\Cloud\Request\GetVerticalPageBreakRequest; 
use \Aspose\Cells\Cloud\Request\GetVerticalPageBreaksRequest; 
use \Aspose\Cells\Cloud\Request\PutHorizontalPageBreakRequest; 
use \Aspose\Cells\Cloud\Request\PutVerticalPageBreakRequest; 

use PHPUnit\Framework\TestCase;
class PageBreaksControllerTest extends \PHPUnit_Framework_TestCase
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
    /// Test for GetVerticalPageBreaks of PageBreaksController.
    /// </summary>

    public function testGetVerticalPageBreaks()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetVerticalPageBreaksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getVerticalPageBreaks($request);
    }

    /// <summary>
    /// Test for GetHorizontalPageBreaks of PageBreaksController.
    /// </summary>

    public function testGetHorizontalPageBreaks()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetHorizontalPageBreaksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getHorizontalPageBreaks($request);
    }

    /// <summary>
    /// Test for GetVerticalPageBreak of PageBreaksController.
    /// </summary>

    public function testGetVerticalPageBreak()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetVerticalPageBreakRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getVerticalPageBreak($request);
    }

    /// <summary>
    /// Test for GetHorizontalPageBreak of PageBreaksController.
    /// </summary>

    public function testGetHorizontalPageBreak()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetHorizontalPageBreakRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getHorizontalPageBreak($request);
    }

    /// <summary>
    /// Test for PutVerticalPageBreak of PageBreaksController.
    /// </summary>

    public function testPutVerticalPageBreak()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutVerticalPageBreakRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellname( "A1");
        $request->setColumn( 1);
        $request->setRow( 1);
        $request->setStartRow( 1);
        $request->setEndRow( 1);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putVerticalPageBreak($request);
    }

    /// <summary>
    /// Test for PutHorizontalPageBreak of PageBreaksController.
    /// </summary>

    public function testPutHorizontalPageBreak()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutHorizontalPageBreakRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setCellname( "A1");
        $request->setRow( 1);
        $request->setColumn( 1);
        $request->setStartColumn( 1);
        $request->setEndColumn( 1);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putHorizontalPageBreak($request);
    }

    /// <summary>
    /// Test for DeleteVerticalPageBreaks of PageBreaksController.
    /// </summary>

    public function testDeleteVerticalPageBreaks()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteVerticalPageBreaksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setColumn( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteVerticalPageBreaks($request);
    }

    /// <summary>
    /// Test for DeleteHorizontalPageBreaks of PageBreaksController.
    /// </summary>

    public function testDeleteHorizontalPageBreaks()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteHorizontalPageBreaksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRow( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteHorizontalPageBreaks($request);
    }

    /// <summary>
    /// Test for DeleteVerticalPageBreak of PageBreaksController.
    /// </summary>

    public function testDeleteVerticalPageBreak()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteVerticalPageBreakRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteVerticalPageBreak($request);
    }

    /// <summary>
    /// Test for DeleteHorizontalPageBreak of PageBreaksController.
    /// </summary>

    public function testDeleteHorizontalPageBreak()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteHorizontalPageBreakRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteHorizontalPageBreak($request);
    }
}