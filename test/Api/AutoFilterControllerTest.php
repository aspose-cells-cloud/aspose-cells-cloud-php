<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AutoFilterControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetDateFilterRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetFilterRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetAutoFilterRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetAutoFilterRefreshRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetMatchBlanksRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetMatchNonBlanksRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetColorFilterRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetCustomFilterRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetDateFilterRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetDynamicFilterRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetFilterRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetFilterTop10Request; 
use \Aspose\Cells\Cloud\Request\PutWorksheetIconFilterRequest; 

use PHPUnit\Framework\TestCase;
final class AutoFilterControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetWorksheetAutoFilter of AutoFilterController.
    /// </summary>

    public function testGetWorksheetAutoFilter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetAutoFilterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetAutoFilter($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetDateFilter of AutoFilterController.
    /// </summary>

    public function testPutWorksheetDateFilter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetDateFilterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:B1");
        $request->setFieldIndex( 0);
        $request->setDateTimeGroupingType( "Year");
        $request->setYear( 1920);
        $request->setMatchBlanks( 'false');
        $request->setRefresh( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetDateFilter($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetFilter of AutoFilterController.
    /// </summary>

    public function testPutWorksheetFilter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetFilterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:B1");
        $request->setFieldIndex( 0);
        $request->setCriteria( "Year");
        $request->setMatchBlanks( 'false');
        $request->setRefresh( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetFilter($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetIconFilter of AutoFilterController.
    /// </summary>

    public function testPutWorksheetIconFilter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetIconFilterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:B1");
        $request->setFieldIndex( 0);
        $request->setIconSetType( "ArrowsGray3");
        $request->setIconId( 1);
        $request->setMatchBlanks( 'false');
        $request->setRefresh( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetIconFilter($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetCustomFilter of AutoFilterController.
    /// </summary>

    public function testPutWorksheetCustomFilter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetCustomFilterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:B1");
        $request->setFieldIndex( 0);
        $request->setOperatorType1( "LessOrEqual");
        $request->setCriteria1( "1");
        $request->setMatchBlanks( 'false');
        $request->setRefresh( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetCustomFilter($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetDynamicFilter of AutoFilterController.
    /// </summary>

    public function testPutWorksheetDynamicFilter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetDynamicFilterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:B1");
        $request->setFieldIndex( 0);
        $request->setDynamicFilterType( "BelowAverage");
        $request->setMatchBlanks( 'false');
        $request->setRefresh( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetDynamicFilter($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetFilterTop10 of AutoFilterController.
    /// </summary>

    public function testPutWorksheetFilterTop10()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetFilterTop10Request();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:B1");
        $request->setFieldIndex( 0);
        $request->setIsTop( 'true');
        $request->setIsPercent( 'true');
        $request->setItemCount( 1);
        $request->setMatchBlanks( 'false');
        $request->setRefresh( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetFilterTop10($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetColorFilter of AutoFilterController.
    /// </summary>

    public function testPutWorksheetColorFilter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $colorFilterForegroundColorColor = new \Aspose\Cells\Cloud\Model\Color();
        $colorFilterForegroundColorColor->setR(48 ); 
        $colorFilterForegroundColorColor->setG(48 ); 
        $colorFilterForegroundColorColor->setB(48 ); 
        $colorFilterForegroundColor = new \Aspose\Cells\Cloud\Model\CellsColor();
        $colorFilterForegroundColor->setType("Automatic" ); 
        $colorFilterForegroundColor->setColor($colorFilterForegroundColorColor ); 
        $colorFilter = new \Aspose\Cells\Cloud\Model\ColorFilterRequest();
        $colorFilter->setPattern("Solid" ); 
        $colorFilter->setForegroundColor($colorFilterForegroundColor ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetColorFilterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setRange( "A1:B1");
        $request->setFieldIndex( 0);
        $request->setColorFilter( $colorFilter);
        $request->setMatchBlanks( 'true');
        $request->setRefresh( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetColorFilter($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetMatchBlanks of AutoFilterController.
    /// </summary>

    public function testPostWorksheetMatchBlanks()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetMatchBlanksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFieldIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetMatchBlanks($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetMatchNonBlanks of AutoFilterController.
    /// </summary>

    public function testPostWorksheetMatchNonBlanks()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetMatchNonBlanksRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFieldIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetMatchNonBlanks($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetAutoFilterRefresh of AutoFilterController.
    /// </summary>

    public function testPostWorksheetAutoFilterRefresh()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetAutoFilterRefreshRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetAutoFilterRefresh($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetDateFilter of AutoFilterController.
    /// </summary>

    public function testDeleteWorksheetDateFilter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetDateFilterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFieldIndex( 0);
        $request->setDateTimeGroupingType( "Year");
        $request->setYear( 1920);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetDateFilter($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetFilter of AutoFilterController.
    /// </summary>

    public function testDeleteWorksheetFilter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetFilterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFieldIndex( 0);
        $request->setCriteria( "year");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetFilter($request);
        $this->assertTrue($resposne !==null );
    }
}