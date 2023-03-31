<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SparklineGroupsControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetSparklineGroupRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetSparklineGroupsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetSparklineGroupRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetSparklineGroupsRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetSparklineGroupRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetSparklineGroupRequest; 

use PHPUnit\Framework\TestCase;
class SparklineGroupsControllerTest extends \PHPUnit_Framework_TestCase
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
    /// Test for GetWorksheetSparklineGroups of SparklineGroupsController.
    /// </summary>

    public function testGetWorksheetSparklineGroups()
    {
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetSparklineGroupsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetSparklineGroups($request);
    }

    /// <summary>
    /// Test for GetWorksheetSparklineGroup of SparklineGroupsController.
    /// </summary>

    public function testGetWorksheetSparklineGroup()
    {
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetSparklineGroupRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSparklineIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetSparklineGroup($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetSparklineGroups of SparklineGroupsController.
    /// </summary>

    public function testDeleteWorksheetSparklineGroups()
    {
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetSparklineGroupsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetSparklineGroups($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetSparklineGroup of SparklineGroupsController.
    /// </summary>

    public function testDeleteWorksheetSparklineGroup()
    {
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetSparklineGroupRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSparklineIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetSparklineGroup($request);
    }

    /// <summary>
    /// Test for PutWorksheetSparklineGroup of SparklineGroupsController.
    /// </summary>

    public function testPutWorksheetSparklineGroup()
    {
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetSparklineGroupRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setType( "Line");
        $request->setDataRange( "C6:E13");
        $request->setIsVertical( 'false');
        $request->setLocationRange( "G6:G13");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putWorksheetSparklineGroup($request);
    }

    /// <summary>
    /// Test for PostWorksheetSparklineGroup of SparklineGroupsController.
    /// </summary>

    public function testPostWorksheetSparklineGroup()
    {
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        $sparklineGroup = new \Aspose\Cells\Cloud\Model\SparklineGroup();
        $sparklineGroup->setDisplayHidden('true' ); 
        $sparklineGroup->setPlotRightToLeft('true' ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetSparklineGroupRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSparklineGroupIndex( 0);
        $request->setSparklineGroup( $sparklineGroup);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetSparklineGroup($request);
    }
}