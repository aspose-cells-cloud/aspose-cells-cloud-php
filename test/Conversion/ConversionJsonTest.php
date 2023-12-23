<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConversionJsonTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\PutConvertWorkbookRequest; 

use PHPUnit\Framework\TestCase;
class ConversionJsonTest extends \PHPUnit_Framework_TestCase
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
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_csv()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "csv";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_xls()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "xls";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_html()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "html";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_mhtml()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "mhtml";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_ods()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "ods";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_pdf()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "pdf";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_xml()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "xml";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_txt()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "txt";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_xlsb()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "xlsb";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_xps()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "xps";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_md()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "md";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_numbers()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "numbers";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_svg()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "svg";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_docx()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "docx";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_pptx()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "pptx";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_json()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "json";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_sql()
    {
        $remoteFolder = "TestData/In";

        $localName = "codegen-spec.json";
        $remoteName = "codegen-spec.json";

        $format = "sql";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }
}