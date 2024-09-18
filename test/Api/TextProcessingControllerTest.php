<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TextProcessingControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\PostAddTextContentRequest; 
use \Aspose\Cells\Cloud\Request\PostTrimContentRequest; 
use \Aspose\Cells\Cloud\Request\PostUpdateWordCaseRequest; 

use PHPUnit\Framework\TestCase;
final class TextProcessingControllerTest extends TestCase
{
    /// <summary>
    /// Test for PostAddTextContent of TextProcessingController.
    /// </summary>

    public function testPostAddTextContent()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "BookText.xlsx";
        $remoteName = "BookText.xlsx";

        $addTextOptionsDataSource = new \Aspose\Cells\Cloud\Model\DataSource();
        $addTextOptionsDataSource->setDataSourceType("CloudFileSystem" ); 
        $addTextOptionsDataSource->setDataPath("BookText.xlsx" ); 
        $addTextOptions = new \Aspose\Cells\Cloud\Model\AddTextOptions();
        $addTextOptions->setDataSource($addTextOptionsDataSource ); 
        $addTextOptions->setText("Aspose.Cells Cloud is an excellent product." ); 
        $addTextOptions->setWorksheet("202401" ); 
        $addTextOptions->setSelectPoistion("AtTheBeginning" ); 
        $addTextOptions->setSkipEmptyCells('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostAddTextContentRequest();
        $request->setAddTextOptions( $addTextOptions);

        $resposne = $instance->postAddTextContent($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostTrimContent of TextProcessingController.
    /// </summary>

    public function testPostTrimContent()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "BookText.xlsx";
        $remoteName = "BookText.xlsx";

        $trimContentOptionsDataSource = new \Aspose\Cells\Cloud\Model\DataSource();
        $trimContentOptionsDataSource->setDataSourceType("CloudFileSystem" ); 
        $trimContentOptionsDataSource->setDataPath("BookText.xlsx" ); 
        $trimContentOptionsScopeOptions = new \Aspose\Cells\Cloud\Model\ScopeOptions();
        $trimContentOptionsScopeOptions->setScope("EntireWorkbook" ); 
        $trimContentOptions = new \Aspose\Cells\Cloud\Model\TrimContentOptions();
        $trimContentOptions->setDataSource($trimContentOptionsDataSource ); 
        $trimContentOptions->setTrimLeading('true' ); 
        $trimContentOptions->setTrimTrailing('true' ); 
        $trimContentOptions->setTrimSpaceBetweenWordTo1('true' ); 
        $trimContentOptions->setRemoveAllLineBreaks('true' ); 
        $trimContentOptions->setScopeOptions($trimContentOptionsScopeOptions ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostTrimContentRequest();
        $request->setTrimContentOptions( $trimContentOptions);

        $resposne = $instance->postTrimContent($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostUpdateWordCase of TextProcessingController.
    /// </summary>

    public function testPostUpdateWordCase()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "BookText.xlsx";
        $remoteName = "BookText.xlsx";

        $wordCaseOptionsDataSource = new \Aspose\Cells\Cloud\Model\DataSource();
        $wordCaseOptionsDataSource->setDataSourceType("CloudFileSystem" ); 
        $wordCaseOptionsDataSource->setDataPath("BookText.xlsx" ); 
        $wordCaseOptionsScopeOptions = new \Aspose\Cells\Cloud\Model\ScopeOptions();
        $wordCaseOptionsScopeOptions->setScope("EntireWorkbook" ); 
        $wordCaseOptions = new \Aspose\Cells\Cloud\Model\WordCaseOptions();
        $wordCaseOptions->setDataSource($wordCaseOptionsDataSource ); 
        $wordCaseOptions->setWordCaseType("None" ); 
        $wordCaseOptions->setScopeOptions($wordCaseOptionsScopeOptions ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostUpdateWordCaseRequest();
        $request->setWordCaseOptions( $wordCaseOptions);

        $resposne = $instance->postUpdateWordCase($request);
        $this->assertTrue($resposne !==null );
    }
}