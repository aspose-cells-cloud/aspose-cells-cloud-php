<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="XmlControllerTests.php.cs">
 *   Copyright (c) 2023 Aspose.Cells Cloud
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
use \Aspose\Cells\Cloud\Request\PostWorkbookExportXMLRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbookImportXMLRequest; 

use PHPUnit\Framework\TestCase;
class XmlControllerTest extends \PHPUnit_Framework_TestCase
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
    /// Test for PostWorkbookExportXML of XmlController.
    /// </summary>

    public function testPostWorkbookExportXML()
    {
        $remoteFolder = "TestData/In";

        $localName = "Template.xlsx";
        $remoteName = "Template.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookExportXMLRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorkbookExportXML($request);
    }

    /// <summary>
    /// Test for PostWorkbookImortXML of XmlController.
    /// </summary>

    public function testPostWorkbookImportXML()
    {
        $remoteFolder = "TestData/In";

        $localName = "Template.xlsx";
        $dataXML = "data.xml";
        $remoteName = "Template.xlsx";

        $importXMLRequestXMLFileSource = new \Aspose\Cells\Cloud\Model\FileSource();
        $importXMLRequestXMLFileSource->setFileSourceType("CloudFileSystem" ); 
        $importXMLRequestXMLFileSource->setFilePath($remoteFolder . "/data.xml" ); 
        $importXMLRequestImportPosition = new \Aspose\Cells\Cloud\Model\ImportPosition();
        $importXMLRequestImportPosition->setSheetName("Sheet1" ); 
        $importXMLRequestImportPosition->setRowIndex(3 ); 
        $importXMLRequestImportPosition->setColumnIndex(4 ); 
        $importXMLRequest = new \Aspose\Cells\Cloud\Model\ImportXMLRequest();
        $importXMLRequest->setXMLFileSource($importXMLRequestXMLFileSource ); 
        $importXMLRequest->setImportPosition($importXMLRequestImportPosition ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $this->instance,$dataXML ,$remoteFolder . "/data.xml" ,  "");
     
        $request = new PostWorkbookImportXMLRequest();
        $request->setName( $remoteName);
        $request->setImportXMLRequest( $importXMLRequest);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorkbookImportXML($request);
    }
}