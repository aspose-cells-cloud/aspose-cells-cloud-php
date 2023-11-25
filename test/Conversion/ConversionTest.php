<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConversionTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\GetWorkbookRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbookSaveAsRequest; 
use \Aspose\Cells\Cloud\Request\PutConvertWorkbookRequest; 

use PHPUnit\Framework\TestCase;
class ConversionTest extends \PHPUnit_Framework_TestCase
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
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_csv_OutResultPostExcelSaveAscsv()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "csv";
        $newfilename = "outResult/PostExcelSaveAs.csv";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_xls_OutResultPostExcelSaveAsxls()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xls";
        $newfilename = "outResult/PostExcelSaveAs.xls";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_html_OutResultPostExcelSaveAshtml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "html";
        $newfilename = "outResult/PostExcelSaveAs.html";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_mhtml_OutResultPostExcelSaveAsmhtml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "mhtml";
        $newfilename = "outResult/PostExcelSaveAs.mhtml";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_ods_OutResultPostExcelSaveAsods()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "ods";
        $newfilename = "outResult/PostExcelSaveAs.ods";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_pdf_OutResultPostExcelSaveAspdf()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pdf";
        $newfilename = "outResult/PostExcelSaveAs.pdf";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_xml_OutResultPostExcelSaveAsxml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xml";
        $newfilename = "outResult/PostExcelSaveAs.xml";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_txt_OutResultPostExcelSaveAstxt()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "txt";
        $newfilename = "outResult/PostExcelSaveAs.txt";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_tif_OutResultPostExcelSaveAstif()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "tif";
        $newfilename = "outResult/PostExcelSaveAs.tif";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_xlsb_OutResultPostExcelSaveAsxlsb()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsb";
        $newfilename = "outResult/PostExcelSaveAs.xlsb";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_xlsm_OutResultPostExcelSaveAsxlsm()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsm";
        $newfilename = "outResult/PostExcelSaveAs.xlsm";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_xlsx_OutResultPostExcelSaveAsxlsx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsx";
        $newfilename = "outResult/PostExcelSaveAs.xlsx";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_xltm_OutResultPostExcelSaveAsxltm()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xltm";
        $newfilename = "outResult/PostExcelSaveAs.xltm";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_xltx_OutResultPostExcelSaveAsxltx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xltx";
        $newfilename = "outResult/PostExcelSaveAs.xltx";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_xps_OutResultPostExcelSaveAsxps()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xps";
        $newfilename = "outResult/PostExcelSaveAs.xps";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_png_OutResultPostExcelSaveAspng()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "png";
        $newfilename = "outResult/PostExcelSaveAs.png";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_md_OutResultPostExcelSaveAsmd()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "md";
        $newfilename = "outResult/PostExcelSaveAs.md";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_numbers_OutResultPostExcelSaveAsnumbers()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "numbers";
        $newfilename = "outResult/PostExcelSaveAs.numbers";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_svg_OutResultPostExcelSaveAssvg()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "svg";
        $newfilename = "outResult/PostExcelSaveAs.svg";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_docx_OutResultPostExcelSaveAsdocx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "docx";
        $newfilename = "outResult/PostExcelSaveAs.docx";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_pptx_OutResultPostExcelSaveAspptx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pptx";
        $newfilename = "outResult/PostExcelSaveAs.pptx";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_json_OutResultPostExcelSaveAsjson()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "json";
        $newfilename = "outResult/PostExcelSaveAs.json";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_sql_OutResultPostExcelSaveAssql()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "sql";
        $newfilename = "outResult/PostExcelSaveAs.sql";

        $saveOptions = new \Aspose\Cells\Cloud\Model\PdfSaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);
        $this->instance->postWorkbookSaveAs($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_csv()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "csv";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_xls()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xls";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_html()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "html";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_mhtml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "mhtml";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_ods()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "ods";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_pdf()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pdf";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_xml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xml";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_txt()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "txt";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_tif()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "tif";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_xlsb()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsb";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_xps()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xps";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_png()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "png";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_md()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "md";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_numbers()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "numbers";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_wmf()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "wmf";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_svg()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "svg";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_docx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "docx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_pptx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pptx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_json()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "json";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_sql()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "sql";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);
        $this->instance->getWorkbook($request);
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_csv()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

    public function testConvertWorkbook_tif()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "tif";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

    public function testConvertWorkbook_png()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "png";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

    public function testConvertWorkbook_wmf()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "wmf";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

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

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "sql";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_csv_OutResultConvertWorkbookcsv()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "csv";
        $outPath = "outResult/ConvertWorkbook.csv";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_xls_OutResultConvertWorkbookxls()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xls";
        $outPath = "outResult/ConvertWorkbook.xls";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_html_OutResultConvertWorkbookhtml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "html";
        $outPath = "outResult/ConvertWorkbook.html";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_mhtml_OutResultConvertWorkbookmhtml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "mhtml";
        $outPath = "outResult/ConvertWorkbook.mhtml";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_ods_OutResultConvertWorkbookods()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "ods";
        $outPath = "outResult/ConvertWorkbook.ods";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_pdf_OutResultConvertWorkbookpdf()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pdf";
        $outPath = "outResult/ConvertWorkbook.pdf";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_xml_OutResultConvertWorkbookxml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xml";
        $outPath = "outResult/ConvertWorkbook.xml";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_txt_OutResultConvertWorkbooktxt()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "txt";
        $outPath = "outResult/ConvertWorkbook.txt";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_tif_OutResultConvertWorkbooktif()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "tif";
        $outPath = "outResult/ConvertWorkbook.tif";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_xlsb_OutResultConvertWorkbookxlsb()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsb";
        $outPath = "outResult/ConvertWorkbook.xlsb";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_xlsm_OutResultConvertWorkbookxlsm()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsm";
        $outPath = "outResult/ConvertWorkbook.xlsm";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_xlsx_OutResultConvertWorkbookxlsx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsx";
        $outPath = "outResult/ConvertWorkbook.xlsx";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_xltm_OutResultConvertWorkbookxltm()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xltm";
        $outPath = "outResult/ConvertWorkbook.xltm";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_xltx_OutResultConvertWorkbookxltx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xltx";
        $outPath = "outResult/ConvertWorkbook.xltx";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_xps_OutResultConvertWorkbookxps()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xps";
        $outPath = "outResult/ConvertWorkbook.xps";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_png_OutResultConvertWorkbookpng()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "png";
        $outPath = "outResult/ConvertWorkbook.png";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_md_OutResultConvertWorkbookmd()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "md";
        $outPath = "outResult/ConvertWorkbook.md";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_numbers_OutResultConvertWorkbooknumbers()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "numbers";
        $outPath = "outResult/ConvertWorkbook.numbers";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_svg_OutResultConvertWorkbooksvg()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "svg";
        $outPath = "outResult/ConvertWorkbook.svg";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_docx_OutResultConvertWorkbookdocx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "docx";
        $outPath = "outResult/ConvertWorkbook.docx";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_pptx_OutResultConvertWorkbookpptx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pptx";
        $outPath = "outResult/ConvertWorkbook.pptx";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_json_OutResultConvertWorkbookjson()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "json";
        $outPath = "outResult/ConvertWorkbook.json";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_sql_OutResultConvertWorkbooksql()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "sql";
        $outPath = "outResult/ConvertWorkbook.sql";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);
        $this->instance->putConvertWorkbook($request);
    }
}