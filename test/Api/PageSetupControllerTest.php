<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageSetupControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteHeaderFooterRequest; 
use \Aspose\Cells\Cloud\Request\GetFooterRequest; 
use \Aspose\Cells\Cloud\Request\GetHeaderRequest; 
use \Aspose\Cells\Cloud\Request\GetPageSetupRequest; 
use \Aspose\Cells\Cloud\Request\PostFitTallToPagesRequest; 
use \Aspose\Cells\Cloud\Request\PostFitWideToPagesRequest; 
use \Aspose\Cells\Cloud\Request\PostFooterRequest; 
use \Aspose\Cells\Cloud\Request\PostHeaderRequest; 
use \Aspose\Cells\Cloud\Request\PostPageSetupRequest; 

use PHPUnit\Framework\TestCase;
final class PageSetupControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetPageSetup of PageSetupController.
    /// </summary>

    public function testGetPageSetup()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetPageSetupRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getPageSetup($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostPageSetup of PageSetupController.
    /// </summary>

    public function testPostPageSetup()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $pageSetup = new \Aspose\Cells\Cloud\Model\PageSetup();
        $pageSetup->setBlackAndWhite('true' ); 
        $pageSetup->setCenterHorizontally('true' ); 
        $pageSetup->setCenterVertically('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostPageSetupRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setPageSetup( $pageSetup);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postPageSetup($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteHeaderFooter of PageSetupController.
    /// </summary>

    public function testDeleteHeaderFooter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteHeaderFooterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteHeaderFooter($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetHeader of PageSetupController.
    /// </summary>

    public function testGetHeader()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetHeaderRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getHeader($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostHeader of PageSetupController.
    /// </summary>

    public function testPostHeader()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostHeaderRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSection( 1);
        $request->setScript( "Update add header");
        $request->setIsFirstPage( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postHeader($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetFooter of PageSetupController.
    /// </summary>

    public function testGetFooter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetFooterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getFooter($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostFooter of PageSetupController.
    /// </summary>

    public function testPostFooter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostFooterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSection( 1);
        $request->setScript( "add footer script");
        $request->setIsFirstPage( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postFooter($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostFitWideToPages of PageSetupController.
    /// </summary>

    public function testPostFitWideToPages()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostFitWideToPagesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postFitWideToPages($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostFitTallToPages of PageSetupController.
    /// </summary>

    public function testPostFitTallToPages()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostFitTallToPagesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postFitTallToPages($request);
        $this->assertTrue($resposne !==null );
    }
}