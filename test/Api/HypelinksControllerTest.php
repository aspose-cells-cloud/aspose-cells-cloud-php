<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="HypelinksControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetHyperlinkRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetHyperlinksRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetHyperlinkRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetHyperlinksRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetHyperlinkRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetHyperlinkRequest; 

use PHPUnit\Framework\TestCase;
final class HypelinksControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetWorksheetHyperlinks of HypelinksController.
    /// </summary>

    public function testGetWorksheetHyperlinks()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetHyperlinksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetHyperlinks($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetHyperlink of HypelinksController.
    /// </summary>

    public function testGetWorksheetHyperlink()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetHyperlinkRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setHyperlinkIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetHyperlink($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetHyperlink of HypelinksController.
    /// </summary>

    public function testDeleteWorksheetHyperlink()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetHyperlinkRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setHyperlinkIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetHyperlink($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetHyperlink of HypelinksController.
    /// </summary>

    public function testPostWorksheetHyperlink()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $hyperlink = new \Aspose\Cells\Cloud\Model\Hyperlink();
        $hyperlink->setAddress("https://products.aspose.cloud/cells/" ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetHyperlinkRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setHyperlinkIndex( 0);
        $request->setHyperlink( $hyperlink);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetHyperlink($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetHyperlink of HypelinksController.
    /// </summary>

    public function testPutWorksheetHyperlink()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetHyperlinkRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFirstRow( 1);
        $request->setFirstColumn( 1);
        $request->setTotalRows( 2);
        $request->setTotalColumns( 3);
        $request->setAddress( "https://products.aspose.cloud/cells/");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetHyperlink($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetHyperlinks of HypelinksController.
    /// </summary>

    public function testDeleteWorksheetHyperlinks()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetHyperlinksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetHyperlinks($request);
        $this->assertTrue($resposne !==null );
    }
}