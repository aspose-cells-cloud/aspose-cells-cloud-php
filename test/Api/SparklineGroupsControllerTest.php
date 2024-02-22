<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SparklineGroupsControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteWorksheetSparklineGroupRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetSparklineGroupsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetSparklineGroupRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetSparklineGroupsRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetSparklineGroupRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetSparklineGroupRequest; 

use PHPUnit\Framework\TestCase;
final class SparklineGroupsControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetWorksheetSparklineGroups of SparklineGroupsController.
    /// </summary>

    public function testGetWorksheetSparklineGroups()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetSparklineGroupsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetSparklineGroups($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetSparklineGroup of SparklineGroupsController.
    /// </summary>

    public function testGetWorksheetSparklineGroup()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetSparklineGroupRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSparklineIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetSparklineGroup($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetSparklineGroups of SparklineGroupsController.
    /// </summary>

    public function testDeleteWorksheetSparklineGroups()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetSparklineGroupsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetSparklineGroups($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetSparklineGroup of SparklineGroupsController.
    /// </summary>

    public function testDeleteWorksheetSparklineGroup()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetSparklineGroupRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSparklineIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetSparklineGroup($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetSparklineGroup of SparklineGroupsController.
    /// </summary>

    public function testPutWorksheetSparklineGroup()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetSparklineGroupRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setType( "Line");
        $request->setDataRange( "C6:E13");
        $request->setIsVertical( 'false');
        $request->setLocationRange( "G6:G13");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetSparklineGroup($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetSparklineGroup of SparklineGroupsController.
    /// </summary>

    public function testPostWorksheetSparklineGroup()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        $sparklineGroup = new \Aspose\Cells\Cloud\Model\SparklineGroup();
        $sparklineGroup->setDisplayHidden('true' ); 
        $sparklineGroup->setPlotRightToLeft('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetSparklineGroupRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSparklineGroupIndex( 0);
        $request->setSparklineGroup( $sparklineGroup);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetSparklineGroup($request);
        $this->assertTrue($resposne !==null );
    }
}