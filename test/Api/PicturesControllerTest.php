<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PicturesControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetPictureRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorkSheetPicturesRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetPicturesRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetPictureWithFormatRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkSheetPictureRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetAddPictureRequest; 

use PHPUnit\Framework\TestCase;
class PicturesControllerTest extends \PHPUnit_Framework_TestCase
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
    /// Test for GetWorksheetPictures of PicturesController.
    /// </summary>

    public function testGetWorksheetPictures()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetPicturesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetPictures($request);
    }

    /// <summary>
    /// Test for GetWorksheetPictureWithFormat of PicturesController.
    /// </summary>

    public function testGetWorksheetPictureWithFormat()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetPictureWithFormatRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setPictureNumber( 0);
        $request->setFormat( "png");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorksheetPictureWithFormat($request);
    }

    /// <summary>
    /// Test for PutWorksheetAddPicture of PicturesController.
    /// </summary>

    public function testPutWorksheetAddPicture()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $waterMarkPNG = "WaterMark.png";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $this->instance,$waterMarkPNG ,$remoteFolder . "/WaterMark.png" ,  "");
     
        $request = new PutWorksheetAddPictureRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setUpperLeftRow( 1);
        $request->setUpperLeftColumn( 1);
        $request->setLowerRightRow( 10);
        $request->setLowerRightColumn( 10);
        $request->setPicturePath( $remoteFolder . "/WaterMark.png");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putWorksheetAddPicture($request);
    }

    /// <summary>
    /// Test for PostWorkSheetPicture of PicturesController.
    /// </summary>

    public function testPostWorkSheetPicture()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $picture = new \Aspose\Cells\Cloud\Model\Picture();
        $picture->setLeft(10 ); 
        $picture->setBottom(10 ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkSheetPictureRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setPictureIndex( 0);
        $request->setPicture( $picture);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorkSheetPicture($request);
    }

    /// <summary>
    /// Test for DeleteWorksheetPicture of PicturesController.
    /// </summary>

    public function testDeleteWorksheetPicture()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetPictureRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setPictureIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorksheetPicture($request);
    }

    /// <summary>
    /// Test for DeleteWorkSheetPictures of PicturesController.
    /// </summary>

    public function testDeleteWorkSheetPictures()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorkSheetPicturesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorkSheetPictures($request);
    }
}