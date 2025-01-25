<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ChartAreaControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\GetChartAreaBorderRequest; 
use \Aspose\Cells\Cloud\Request\GetChartAreaFillFormatRequest; 
use \Aspose\Cells\Cloud\Request\GetChartAreaRequest; 

use PHPUnit\Framework\TestCase;
final class ChartAreaControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetChartArea of ChartAreaController.
    /// </summary>

    public function testGetChartArea()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetChartAreaRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getChartArea($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetChartAreaFillFormat of ChartAreaController.
    /// </summary>

    public function testGetChartAreaFillFormat()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetChartAreaFillFormatRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getChartAreaFillFormat($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetChartAreaBorder of ChartAreaController.
    /// </summary>

    public function testGetChartAreaBorder()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetChartAreaBorderRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setChartIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getChartAreaBorder($request);
        $this->assertTrue($resposne !==null );
    }
}