<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="HypelinksControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorkSheetHyperlinkRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorkSheetHyperlinksRequest; 
use \Aspose\Cells\Cloud\Request\GetWorkSheetHyperlinkRequest; 
use \Aspose\Cells\Cloud\Request\GetWorkSheetHyperlinksRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkSheetHyperlinkRequest; 
use \Aspose\Cells\Cloud\Request\PutWorkSheetHyperlinkRequest; 

use PHPUnit\Framework\TestCase;
class HypelinksControllerTest extends \PHPUnit_Framework_TestCase
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
    /// Test for GetWorkSheetHyperlinks of HypelinksController.
    /// </summary>

    public function testGetWorkSheetHyperlinks()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkSheetHyperlinksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorkSheetHyperlinks($request);
    }

    /// <summary>
    /// Test for GetWorkSheetHyperlink of HypelinksController.
    /// </summary>

    public function testGetWorkSheetHyperlink()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkSheetHyperlinkRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setHyperlinkIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorkSheetHyperlink($request);
    }

    /// <summary>
    /// Test for DeleteWorkSheetHyperlink of HypelinksController.
    /// </summary>

    public function testDeleteWorkSheetHyperlink()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorkSheetHyperlinkRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setHyperlinkIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorkSheetHyperlink($request);
    }

    /// <summary>
    /// Test for PostWorkSheetHyperlink of HypelinksController.
    /// </summary>

    public function testPostWorkSheetHyperlink()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $hyperlink = new \Aspose\Cells\Cloud\Model\Hyperlink();
        $hyperlink->setAddress("https://products.aspose.cloud/cells/" ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkSheetHyperlinkRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setHyperlinkIndex( 0);
        $request->setHyperlink( $hyperlink);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorkSheetHyperlink($request);
    }

    /// <summary>
    /// Test for PutWorkSheetHyperlink of HypelinksController.
    /// </summary>

    public function testPutWorkSheetHyperlink()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorkSheetHyperlinkRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFirstRow( 1);
        $request->setFirstColumn( 1);
        $request->setTotalRows( 2);
        $request->setTotalColumns( 3);
        $request->setAddress( "https://products.aspose.cloud/cells/");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putWorkSheetHyperlink($request);
    }

    /// <summary>
    /// Test for DeleteWorkSheetHyperlinks of HypelinksController.
    /// </summary>

    public function testDeleteWorkSheetHyperlinks()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorkSheetHyperlinksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorkSheetHyperlinks($request);
    }
}