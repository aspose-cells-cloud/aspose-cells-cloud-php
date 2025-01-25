<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PropertiesControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteDocumentPropertiesRequest; 
use \Aspose\Cells\Cloud\Request\DeleteDocumentPropertyRequest; 
use \Aspose\Cells\Cloud\Request\GetDocumentPropertiesRequest; 
use \Aspose\Cells\Cloud\Request\GetDocumentPropertyRequest; 
use \Aspose\Cells\Cloud\Request\PutDocumentPropertyRequest; 

use PHPUnit\Framework\TestCase;
final class PropertiesControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetDocumentProperties of PropertiesController.
    /// </summary>

    public function testGetDocumentProperties()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetDocumentPropertiesRequest();
        $request->setName( $remoteName);
        $request->setType( "All");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getDocumentProperties($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetDocumentProperty of PropertiesController.
    /// </summary>

    public function testGetDocumentProperty()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetDocumentPropertyRequest();
        $request->setName( $remoteName);
        $request->setPropertyName( "Author");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getDocumentProperty($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutDocumentProperty of PropertiesController.
    /// </summary>

    public function testPutDocumentProperty()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $property = new \Aspose\Cells\Cloud\Model\CellsDocumentProperty();
        $property->setName("Author" ); 
        $property->setValue("cells developer" ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutDocumentPropertyRequest();
        $request->setName( $remoteName);
        $request->setProperty( $property);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putDocumentProperty($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteDocumentProperty of PropertiesController.
    /// </summary>

    public function testDeleteDocumentProperty()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteDocumentPropertyRequest();
        $request->setName( $remoteName);
        $request->setPropertyName( "Author");
        $request->setType( "All");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteDocumentProperty($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteDocumentProperties of PropertiesController.
    /// </summary>

    public function testDeleteDocumentProperties()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteDocumentPropertiesRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteDocumentProperties($request);
        $this->assertTrue($resposne !==null );
    }
}