<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WorksheetValidationsControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetValidationRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetValidationsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetValidationRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetValidationsRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetValidationRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetValidationRequest; 

use PHPUnit\Framework\TestCase;
final class WorksheetValidationsControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetWorksheetValidations of WorksheetValidationsController.
    /// </summary>

    public function testGetWorksheetValidations()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetValidationsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetValidations($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetValidation of WorksheetValidationsController.
    /// </summary>

    public function testGetWorksheetValidation()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetValidationRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setValidationIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetValidation($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetValidation of WorksheetValidationsController.
    /// </summary>

    public function testPutWorksheetValidation()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetValidationRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:C10");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetValidation($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetValidation of WorksheetValidationsController.
    /// </summary>

    public function testPostWorksheetValidation()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $validation = new \Aspose\Cells\Cloud\Model\Validation();
        $validation->setFormula1("=A1" ); 
        $validation->setType("Custom" ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetValidationRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setValidationIndex( 0);
        $request->setValidation( $validation);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetValidation($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetValidation of WorksheetValidationsController.
    /// </summary>

    public function testDeleteWorksheetValidation()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetValidationRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setValidationIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetValidation($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetValidations of WorksheetValidationsController.
    /// </summary>

    public function testDeleteWorksheetValidations()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetValidationsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetValidations($request);
        $this->assertTrue($resposne !==null );
    }
}