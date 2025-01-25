<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConditionalFormattingsControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetConditionalFormattingAreaRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetConditionalFormattingRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetConditionalFormattingsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetConditionalFormattingRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetConditionalFormattingsRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetConditionalFormattingRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetFormatConditionAreaRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetFormatConditionConditionRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetFormatConditionRequest; 

use PHPUnit\Framework\TestCase;
final class ConditionalFormattingsControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetWorksheetConditionalFormattings of ConditionalFormattingsController.
    /// </summary>

    public function testGetWorksheetConditionalFormattings()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetConditionalFormattingsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetConditionalFormattings($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetConditionalFormatting of ConditionalFormattingsController.
    /// </summary>

    public function testGetWorksheetConditionalFormatting()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetConditionalFormattingRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetConditionalFormatting($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetConditionalFormatting of ConditionalFormattingsController.
    /// </summary>

    public function testPutWorksheetConditionalFormatting()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $formatcondition = new \Aspose\Cells\Cloud\Model\FormatCondition();
        $formatcondition->setType("CellValue" ); 
        $formatcondition->setOperator("Between" ); 
        $formatcondition->setFormula1("v1" ); 
        $formatcondition->setFormula2("v2" ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetConditionalFormattingRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFormatcondition( $formatcondition);
        $request->setCellArea( "A1:C10");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetConditionalFormatting($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetFormatCondition of ConditionalFormattingsController.
    /// </summary>

    public function testPutWorksheetFormatCondition()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetFormatConditionRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 0);
        $request->setCellArea( "A1:C10");
        $request->setType( "CellValue");
        $request->setOperatorType( "Between");
        $request->setFormula1( "v1");
        $request->setFormula2( "v2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetFormatCondition($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetFormatConditionArea of ConditionalFormattingsController.
    /// </summary>

    public function testPutWorksheetFormatConditionArea()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetFormatConditionAreaRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 0);
        $request->setCellArea( "A1:C10");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetFormatConditionArea($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetFormatConditionCondition of ConditionalFormattingsController.
    /// </summary>

    public function testPutWorksheetFormatConditionCondition()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetFormatConditionConditionRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 0);
        $request->setType( "CellValue");
        $request->setOperatorType( "Between");
        $request->setFormula1( "v1");
        $request->setFormula2( "v2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetFormatConditionCondition($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetConditionalFormattings of ConditionalFormattingsController.
    /// </summary>

    public function testDeleteWorksheetConditionalFormattings()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetConditionalFormattingsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetConditionalFormattings($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetConditionalFormatting of ConditionalFormattingsController.
    /// </summary>

    public function testDeleteWorksheetConditionalFormatting()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetConditionalFormattingRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetConditionalFormatting($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetConditionalFormattingArea of ConditionalFormattingsController.
    /// </summary>

    public function testDeleteWorksheetConditionalFormattingArea()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetConditionalFormattingAreaRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setStartRow( 1);
        $request->setStartColumn( 1);
        $request->setTotalRows( 4);
        $request->setTotalColumns( 6);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetConditionalFormattingArea($request);
        $this->assertTrue($resposne !==null );
    }
}