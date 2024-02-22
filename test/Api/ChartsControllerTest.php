<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ChartsControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetChartLegendRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetChartRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetChartsRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetChartTitleRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetChartLegendRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetChartRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetChartsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetChartTitleRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetChartLegendRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetChartRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetChartTitleRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetChartLegendRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetChartRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetChartTitleRequest; 

use PHPUnit\Framework\TestCase;
final class ChartsControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetWorksheetCharts of ChartsController.
    /// </summary>

    public function testGetWorksheetCharts()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetChartsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetCharts($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetChart of ChartsController.
    /// </summary>

    public function testGetWorksheetChart()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetChartRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartNumber( 0);
        $request->setFormat( "png");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetChart($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetChart of ChartsController.
    /// </summary>

    public function testPutWorksheetChart()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetChartRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartType( "Pie");
        $request->setUpperLeftRow( 5);
        $request->setUpperLeftColumn( 5);
        $request->setLowerRightRow( 10);
        $request->setLowerRightColumn( 10);
        $request->setArea( "C7:D11");
        $request->setIsVertical( 'true');
        $request->setTitle( "Aspose Chart");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetChart($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetChart of ChartsController.
    /// </summary>

    public function testDeleteWorksheetChart()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetChartRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetChart($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetChart of ChartsController.
    /// </summary>

    public function testPostWorksheetChart()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $chart = new \Aspose\Cells\Cloud\Model\Chart();
        $chart->setShowLegend('true' ); 
        $chart->setShowDataTable('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetChartRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartIndex( 0);
        $request->setChart( $chart);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetChart($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetChartLegend of ChartsController.
    /// </summary>

    public function testGetWorksheetChartLegend()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetChartLegendRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetChartLegend($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetChartLegend of ChartsController.
    /// </summary>

    public function testPostWorksheetChartLegend()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $legend = new \Aspose\Cells\Cloud\Model\Legend();
        $legend->setPosition("Top" ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetChartLegendRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartIndex( 0);
        $request->setLegend( $legend);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetChartLegend($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetChartLegend of ChartsController.
    /// </summary>

    public function testPutWorksheetChartLegend()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetChartLegendRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetChartLegend($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetChartLegend of ChartsController.
    /// </summary>

    public function testDeleteWorksheetChartLegend()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetChartLegendRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetChartLegend($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetCharts of ChartsController.
    /// </summary>

    public function testDeleteWorksheetCharts()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetChartsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetCharts($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetChartTitle of ChartsController.
    /// </summary>

    public function testGetWorksheetChartTitle()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetChartTitleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetChartTitle($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetChartTitle of ChartsController.
    /// </summary>

    public function testPostWorksheetChartTitle()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $title = new \Aspose\Cells\Cloud\Model\Title();
        $title->setIsVisible('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetChartTitleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartIndex( 0);
        $request->setTitle( $title);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetChartTitle($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetChartTitle of ChartsController.
    /// </summary>

    public function testPutWorksheetChartTitle()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $title = new \Aspose\Cells\Cloud\Model\Title();
        $title->setIsVisible('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetChartTitleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartIndex( 0);
        $request->setTitle( $title);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetChartTitle($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetChartTitle of ChartsController.
    /// </summary>

    public function testDeleteWorksheetChartTitle()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetChartTitleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetChartTitle($request);
        $this->assertTrue($resposne !==null );
    }
}