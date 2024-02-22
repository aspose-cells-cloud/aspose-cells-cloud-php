<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="OleObjectsControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetOleObjectRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetOleObjectsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetOleObjectRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetOleObjectsRequest; 
use \Aspose\Cells\Cloud\Request\PostUpdateWorksheetOleObjectRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetOleObjectRequest; 

use PHPUnit\Framework\TestCase;
final class OleObjectsControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetWorksheetOleObjects of OleObjectsController.
    /// </summary>

    public function testGetWorksheetOleObjects()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetOleObjectsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetOleObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetOleObject of OleObjectsController.
    /// </summary>

    public function testGetWorksheetOleObject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetOleObjectRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setObjectNumber( 0);
        $request->setFormat( "png");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetOleObject($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetOleObjects of OleObjectsController.
    /// </summary>

    public function testDeleteWorksheetOleObjects()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetOleObjectsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetOleObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetOleObject of OleObjectsController.
    /// </summary>

    public function testDeleteWorksheetOleObject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetOleObjectRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setOleObjectIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetOleObject($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostUpdateWorksheetOleObject of OleObjectsController.
    /// </summary>

    public function testPostUpdateWorksheetOleObject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $ole = new \Aspose\Cells\Cloud\Model\OleObject();
        $ole->setLeft(10 ); 
        $ole->setRight(10 ); 
        $ole->setHeight(90 ); 
        $ole->setWidth(78 ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUpdateWorksheetOleObjectRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setOleObjectIndex( 0);
        $request->setOle( $ole);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postUpdateWorksheetOleObject($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetOleObject of OleObjectsController.
    /// </summary>

    public function testPutWorksheetOleObject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $oLEDoc = "OLEDoc.docx";
        $wordJPG = "word.jpg";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $instance,$oLEDoc ,"OLEDoc.docx" ,  "");
        CellsApiTestBase::ready(  $instance,$wordJPG ,"word.jpg" ,  "");
     
        $request = new PutWorksheetOleObjectRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet6");
        $request->setUpperLeftRow( 1);
        $request->setUpperLeftColumn( 1);
        $request->setHeight( 100);
        $request->setWidth( 80);
        $request->setOleFile( "OLEDoc.docx");
        $request->setImageFile( "word.jpg");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetOleObject($request);
        $this->assertTrue($resposne !==null );
    }
}