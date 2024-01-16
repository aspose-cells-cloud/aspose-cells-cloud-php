<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BatchControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\PostBatchConvertRequest; 
use \Aspose\Cells\Cloud\Request\PostBatchLockRequest; 
use \Aspose\Cells\Cloud\Request\PostBatchProtectRequest; 
use \Aspose\Cells\Cloud\Request\PostBatchUnlockRequest; 

use PHPUnit\Framework\TestCase;
class BatchControllerTest extends \PHPUnit_Framework_TestCase
{

	protected  $instance;
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**ve
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /// <summary>
    /// Test for PostBatchConvert of BatchController.
    /// </summary>

    public function testPostBatchConvert()
    {
        $remoteFolder = "TestData/In";

        $localBook1 = "Book1.xlsx";
        $remoteBook1 = "Book1.xlsx";
        $localMyDoc = "myDocument.xlsx";
        $remoteMyDoc = "myDocument.xlsx";

        $batchConvertRequestMatchCondition = new \Aspose\Cells\Cloud\Model\MatchConditionRequest();
        $batchConvertRequestMatchCondition->setRegexPattern("(^Book)(.+)(xlsx$)" ); 
        $batchConvertRequest = new \Aspose\Cells\Cloud\Model\BatchConvertRequest();
        $batchConvertRequest->setSourceFolder($remoteFolder ); 
        $batchConvertRequest->setFormat("pdf" ); 
        $batchConvertRequest->setOutFolder("OutResult" ); 
        $batchConvertRequest->setMatchCondition($batchConvertRequestMatchCondition ); 
        CellsApiTestBase::ready(  $this->instance,$localBook1 ,$remoteFolder . "/" . $remoteBook1 ,  "");
        CellsApiTestBase::ready(  $this->instance,$localMyDoc ,$remoteFolder . "/" . $remoteMyDoc ,  "");
     
        $request = new PostBatchConvertRequest();
        $request->setBatchConvertRequest( $batchConvertRequest);
        $this->instance->postBatchConvert($request);
    }

    /// <summary>
    /// Test for PostBatchProtect of BatchController.
    /// </summary>

    public function testPostBatchProtect()
    {
        $remoteFolder = "TestData/In";

        $localBook1 = "Book1.xlsx";
        $remoteBook1 = "Book1.xlsx";
        $localMyDoc = "myDocument.xlsx";
        $remoteMyDoc = "myDocument.xlsx";

        $batchProtectRequestMatchCondition = new \Aspose\Cells\Cloud\Model\MatchConditionRequest();
        $batchProtectRequestMatchCondition->setRegexPattern("(^Book)(.+)(xlsx$)" ); 
        $batchProtectRequest = new \Aspose\Cells\Cloud\Model\BatchProtectRequest();
        $batchProtectRequest->setSourceFolder($remoteFolder ); 
        $batchProtectRequest->setProtectionType("All" ); 
        $batchProtectRequest->setPassword("123456" ); 
        $batchProtectRequest->setOutFolder("OutResult" ); 
        $batchProtectRequest->setMatchCondition($batchProtectRequestMatchCondition ); 
        CellsApiTestBase::ready(  $this->instance,$localBook1 ,$remoteFolder . "/" . $remoteBook1 ,  "");
        CellsApiTestBase::ready(  $this->instance,$localMyDoc ,$remoteFolder . "/" . $remoteMyDoc ,  "");
     
        $request = new PostBatchProtectRequest();
        $request->setBatchProtectRequest( $batchProtectRequest);
        $this->instance->postBatchProtect($request);
    }

    /// <summary>
    /// Test for PostBatchLock of BatchController.
    /// </summary>

    public function testPostBatchLock()
    {
        $remoteFolder = "TestData/In";

        $localBook1 = "Book1.xlsx";
        $remoteBook1 = "Book1.xlsx";
        $localMyDoc = "myDocument.xlsx";
        $remoteMyDoc = "myDocument.xlsx";

        $batchLockRequestMatchCondition = new \Aspose\Cells\Cloud\Model\MatchConditionRequest();
        $batchLockRequestMatchCondition->setRegexPattern("(^Book)(.+)(xlsx$)" ); 
        $batchLockRequest = new \Aspose\Cells\Cloud\Model\BatchLockRequest();
        $batchLockRequest->setSourceFolder($remoteFolder ); 
        $batchLockRequest->setPassword("123456" ); 
        $batchLockRequest->setOutFolder("OutResult" ); 
        $batchLockRequest->setMatchCondition($batchLockRequestMatchCondition ); 
        CellsApiTestBase::ready(  $this->instance,$localBook1 ,$remoteFolder . "/" . $remoteBook1 ,  "");
        CellsApiTestBase::ready(  $this->instance,$localMyDoc ,$remoteFolder . "/" . $remoteMyDoc ,  "");
     
        $request = new PostBatchLockRequest();
        $request->setBatchLockRequest( $batchLockRequest);
        $this->instance->postBatchLock($request);
    }

    /// <summary>
    /// Test for PostBatchUnlock of BatchController.
    /// </summary>

    public function testPostBatchUnlock()
    {
        $remoteFolder = "TestData/In";

        $localBook1 = "Book1.xlsx";
        $remoteBook1 = "Book1.xlsx";
        $localMyDoc = "myDocument.xlsx";
        $remoteMyDoc = "myDocument.xlsx";

        $batchLockRequestMatchCondition = new \Aspose\Cells\Cloud\Model\MatchConditionRequest();
        $batchLockRequestMatchCondition->setRegexPattern("(^Book)(.+)(xlsx$)" ); 
        $batchLockRequest = new \Aspose\Cells\Cloud\Model\BatchLockRequest();
        $batchLockRequest->setSourceFolder($remoteFolder ); 
        $batchLockRequest->setPassword("123456" ); 
        $batchLockRequest->setOutFolder("OutResult" ); 
        $batchLockRequest->setMatchCondition($batchLockRequestMatchCondition ); 
        CellsApiTestBase::ready(  $this->instance,$localBook1 ,$remoteFolder . "/" . $remoteBook1 ,  "");
        CellsApiTestBase::ready(  $this->instance,$localMyDoc ,$remoteFolder . "/" . $remoteMyDoc ,  "");
     
        $request = new PostBatchUnlockRequest();
        $request->setBatchLockRequest( $batchLockRequest);
        $this->instance->postBatchUnlock($request);
    }
}