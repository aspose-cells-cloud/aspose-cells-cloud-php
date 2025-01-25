<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PicturesControllerTests.php.cs">
 *   Copyright (c) 2025 Aspose.Cells Cloud
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetPicturesRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetPicturesRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetPictureWithFormatRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetPictureRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetAddPictureRequest; 

use PHPUnit\Framework\TestCase;
final class PicturesControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetWorksheetPictures of PicturesController.
    /// </summary>

    public function testGetWorksheetPictures()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetPicturesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetPictures($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetPictureWithFormat of PicturesController.
    /// </summary>

    public function testGetWorksheetPictureWithFormat()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetPictureWithFormatRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setPictureNumber( 0);
        $request->setFormat( "png");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetPictureWithFormat($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetAddPicture of PicturesController.
    /// </summary>

    public function testPutWorksheetAddPicture()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $waterMarkPNG = "WaterMark.png";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $instance,$waterMarkPNG ,$remoteFolder . "/WaterMark.png" ,  "");
     
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

        $resposne = $instance->putWorksheetAddPicture($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetPicture of PicturesController.
    /// </summary>

    public function testPostWorksheetPicture()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $picture = new \Aspose\Cells\Cloud\Model\Picture();
        $picture->setLeft(10 ); 
        $picture->setBottom(10 ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetPictureRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setPictureIndex( 0);
        $request->setPicture( $picture);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetPicture($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetPicture of PicturesController.
    /// </summary>

    public function testDeleteWorksheetPicture()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetPictureRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setPictureIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetPicture($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetPictures of PicturesController.
    /// </summary>

    public function testDeleteWorksheetPictures()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetPicturesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetPictures($request);
        $this->assertTrue($resposne !==null );
    }
}