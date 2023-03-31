<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ShapesControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetShapeRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetShapesRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetShapeRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetShapesRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetGroupShapeRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetShapeRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetUngroupShapeRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetShapeRequest; 

use PHPUnit\Framework\TestCase;
class ShapesControllerTest extends \PHPUnit_Framework_TestCase
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
    /// Test for GetWorksheetShapes of ShapesController.
    /// </summary>

    public function testGetWorksheetShapes()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetShapesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetShapes($request);
    }

    /// <summary>
    /// Test for GetWorksheetShape of ShapesController.
    /// </summary>

    public function testGetWorksheetShape()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetShapeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setShapeindex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetShape($request);
    }

    /// <summary>
    /// Test for PutWorksheetShape of ShapesController.
    /// </summary>

    public function testPutWorksheetShape()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $shapeDTO = new \Aspose\Cells\Cloud\Model\Shape();

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetShapeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setShapeDTO( $shapeDTO);
        $request->setDrawingType( "arc");
        $request->setUpperLeftRow( 1);
        $request->setUpperLeftColumn( 1);
        $request->setTop( 10);
        $request->setLeft( 10);
        $request->setWidth( 100);
        $request->setHeight( 100);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putWorksheetShape($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetShapes of ShapesController.
    /// </summary>

    public function testDeleteWorksheetShapes()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetShapesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetShapes($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetShape of ShapesController.
    /// </summary>

    public function testDeleteWorksheetShape()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetShapeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setShapeindex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetShape($request);
    }

    /// <summary>
    /// Test for PostWorksheetShape of ShapesController.
    /// </summary>

    public function testPostWorksheetShape()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $dto = new \Aspose\Cells\Cloud\Model\Shape();
        $dto->setLowerRightColumn(10 ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetShapeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setShapeindex( 0);
        $request->setDto( $dto);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetShape($request);
    }

    /// <summary>
    /// Test for PostWorksheetGroupShape of ShapesController.
    /// </summary>

    public function testPostWorksheetGroupShape()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $listShape = array (
            0,
            1
        );
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetGroupShapeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setListShape( $listShape);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetGroupShape($request);
    }

    /// <summary>
    /// Test for PostWorksheetUngroupShape of ShapesController.
    /// </summary>

    public function testPostWorksheetUngroupShape()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetUngroupShapeRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setShapeindex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorksheetUngroupShape($request);
    }
}