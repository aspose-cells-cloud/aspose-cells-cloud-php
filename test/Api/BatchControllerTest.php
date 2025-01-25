<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BatchControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\PostBatchConvertRequest; 
use \Aspose\Cells\Cloud\Request\PostBatchLockRequest; 
use \Aspose\Cells\Cloud\Request\PostBatchProtectRequest; 
use \Aspose\Cells\Cloud\Request\PostBatchUnlockRequest; 

use PHPUnit\Framework\TestCase;
final class BatchControllerTest extends TestCase
{
    /// <summary>
    /// Test for PostBatchConvert of BatchController.
    /// </summary>

    public function testPostBatchConvert()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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
        CellsApiTestBase::ready(  $instance,$localBook1 ,$remoteFolder . "/" . $remoteBook1 ,  "");
        CellsApiTestBase::ready(  $instance,$localMyDoc ,$remoteFolder . "/" . $remoteMyDoc ,  "");
     
        $request = new PostBatchConvertRequest();
        $request->setBatchConvertRequest( $batchConvertRequest);

        $resposne = $instance->postBatchConvert($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostBatchProtect of BatchController.
    /// </summary>

    public function testPostBatchProtect()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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
        CellsApiTestBase::ready(  $instance,$localBook1 ,$remoteFolder . "/" . $remoteBook1 ,  "");
        CellsApiTestBase::ready(  $instance,$localMyDoc ,$remoteFolder . "/" . $remoteMyDoc ,  "");
     
        $request = new PostBatchProtectRequest();
        $request->setBatchProtectRequest( $batchProtectRequest);

        $resposne = $instance->postBatchProtect($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostBatchLock of BatchController.
    /// </summary>

    public function testPostBatchLock()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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
        CellsApiTestBase::ready(  $instance,$localBook1 ,$remoteFolder . "/" . $remoteBook1 ,  "");
        CellsApiTestBase::ready(  $instance,$localMyDoc ,$remoteFolder . "/" . $remoteMyDoc ,  "");
     
        $request = new PostBatchLockRequest();
        $request->setBatchLockRequest( $batchLockRequest);

        $resposne = $instance->postBatchLock($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostBatchUnlock of BatchController.
    /// </summary>

    public function testPostBatchUnlock()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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
        CellsApiTestBase::ready(  $instance,$localBook1 ,$remoteFolder . "/" . $remoteBook1 ,  "");
        CellsApiTestBase::ready(  $instance,$localMyDoc ,$remoteFolder . "/" . $remoteMyDoc ,  "");
     
        $request = new PostBatchUnlockRequest();
        $request->setBatchLockRequest( $batchLockRequest);

        $resposne = $instance->postBatchUnlock($request);
        $this->assertTrue($resposne !==null );
    }
}