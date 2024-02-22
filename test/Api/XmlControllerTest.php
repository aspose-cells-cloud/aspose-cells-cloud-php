<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="XmlControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\PostWorkbookExportXMLRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbookImportXMLRequest; 

use PHPUnit\Framework\TestCase;
final class XmlControllerTest extends TestCase
{
    /// <summary>
    /// Test for PostWorkbookExportXML of XmlController.
    /// </summary>

    public function testPostWorkbookExportXML()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Template.xlsx";
        $remoteName = "Template.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookExportXMLRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorkbookExportXML($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorkbookImortXML of XmlController.
    /// </summary>

    public function testPostWorkbookImportXML()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $instance,$dataXML ,$remoteFolder . "/data.xml" ,  "");
     
        $request = new PostWorkbookImportXMLRequest();
        $request->setName( $remoteName);
        $request->setImportXMLRequest( $importXMLRequest);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorkbookImportXML($request);
        $this->assertTrue($resposne !==null );
    }
}