<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageBreaksControllerTests.php.cs">
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
final class PageBreaksControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetVerticalPageBreaks of PageBreaksController.
    /// </summary>

    public function testGetVerticalPageBreaks()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetVerticalPageBreaksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getVerticalPageBreaks($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetHorizontalPageBreaks of PageBreaksController.
    /// </summary>

    public function testGetHorizontalPageBreaks()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetHorizontalPageBreaksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getHorizontalPageBreaks($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetVerticalPageBreak of PageBreaksController.
    /// </summary>

    public function testGetVerticalPageBreak()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetVerticalPageBreakRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getVerticalPageBreak($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetHorizontalPageBreak of PageBreaksController.
    /// </summary>

    public function testGetHorizontalPageBreak()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetHorizontalPageBreakRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getHorizontalPageBreak($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutVerticalPageBreak of PageBreaksController.
    /// </summary>

    public function testPutVerticalPageBreak()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
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

        $resposne = $instance->putVerticalPageBreak($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutHorizontalPageBreak of PageBreaksController.
    /// </summary>

    public function testPutHorizontalPageBreak()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
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

        $resposne = $instance->putHorizontalPageBreak($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteVerticalPageBreaks of PageBreaksController.
    /// </summary>

    public function testDeleteVerticalPageBreaks()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteVerticalPageBreaksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setColumn( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteVerticalPageBreaks($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteHorizontalPageBreaks of PageBreaksController.
    /// </summary>

    public function testDeleteHorizontalPageBreaks()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteHorizontalPageBreaksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRow( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteHorizontalPageBreaks($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteVerticalPageBreak of PageBreaksController.
    /// </summary>

    public function testDeleteVerticalPageBreak()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteVerticalPageBreakRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteVerticalPageBreak($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteHorizontalPageBreak of PageBreaksController.
    /// </summary>

    public function testDeleteHorizontalPageBreak()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteHorizontalPageBreakRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteHorizontalPageBreak($request);
        $this->assertTrue($resposne !==null );
    }
}