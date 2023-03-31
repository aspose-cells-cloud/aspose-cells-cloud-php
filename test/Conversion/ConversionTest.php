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
        $this->instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
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

    public function testWorkbookSaveAs_csv_DotNetSDKOutResultPostExcelSaveAscsv()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "csv";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.csv";

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

    public function testWorkbookSaveAs_xls_DotNetSDKOutResultPostExcelSaveAsxls()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xls";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.xls";

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

    public function testWorkbookSaveAs_html_DotNetSDKOutResultPostExcelSaveAshtml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "html";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.html";

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

    public function testWorkbookSaveAs_mhtml_DotNetSDKOutResultPostExcelSaveAsmhtml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "mhtml";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.mhtml";

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

    public function testWorkbookSaveAs_ods_DotNetSDKOutResultPostExcelSaveAsods()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "ods";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.ods";

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

    public function testWorkbookSaveAs_pdf_DotNetSDKOutResultPostExcelSaveAspdf()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pdf";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.pdf";

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

    public function testWorkbookSaveAs_xml_DotNetSDKOutResultPostExcelSaveAsxml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xml";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.xml";

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

    public function testWorkbookSaveAs_txt_DotNetSDKOutResultPostExcelSaveAstxt()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "txt";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.txt";

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

    public function testWorkbookSaveAs_tif_DotNetSDKOutResultPostExcelSaveAstif()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "tif";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.tif";

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

    public function testWorkbookSaveAs_xlsb_DotNetSDKOutResultPostExcelSaveAsxlsb()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsb";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.xlsb";

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

    public function testWorkbookSaveAs_xlsm_DotNetSDKOutResultPostExcelSaveAsxlsm()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsm";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.xlsm";

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

    public function testWorkbookSaveAs_xlsx_DotNetSDKOutResultPostExcelSaveAsxlsx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsx";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.xlsx";

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

    public function testWorkbookSaveAs_xltm_DotNetSDKOutResultPostExcelSaveAsxltm()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xltm";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.xltm";

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

    public function testWorkbookSaveAs_xltx_DotNetSDKOutResultPostExcelSaveAsxltx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xltx";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.xltx";

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

    public function testWorkbookSaveAs_xps_DotNetSDKOutResultPostExcelSaveAsxps()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xps";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.xps";

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

    public function testWorkbookSaveAs_png_DotNetSDKOutResultPostExcelSaveAspng()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "png";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.png";

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

    public function testWorkbookSaveAs_jpg_DotNetSDKOutResultPostExcelSaveAsjpg()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "jpg";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.jpg";

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

    public function testWorkbookSaveAs_gif_DotNetSDKOutResultPostExcelSaveAsgif()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "gif";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.gif";

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

    public function testWorkbookSaveAs_emf_DotNetSDKOutResultPostExcelSaveAsemf()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "emf";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.emf";

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

    public function testWorkbookSaveAs_bmp_DotNetSDKOutResultPostExcelSaveAsbmp()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "bmp";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.bmp";

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

    public function testWorkbookSaveAs_md_DotNetSDKOutResultPostExcelSaveAsmd()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "md";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.md";

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

    public function testWorkbookSaveAs_numbers_DotNetSDKOutResultPostExcelSaveAsnumbers()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "numbers";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.numbers";

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

    public function testWorkbookSaveAs_wmf_DotNetSDKOutResultPostExcelSaveAswmf()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "wmf";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.wmf";

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

    public function testWorkbookSaveAs_svg_DotNetSDKOutResultPostExcelSaveAssvg()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "svg";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.svg";

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

    public function testWorkbookSaveAs_docx_DotNetSDKOutResultPostExcelSaveAsdocx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "docx";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.docx";

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

    public function testWorkbookSaveAs_pptx_DotNetSDKOutResultPostExcelSaveAspptx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pptx";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.pptx";

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

    public function testWorkbookSaveAs_json_DotNetSDKOutResultPostExcelSaveAsjson()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "json";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.json";

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

    public function testWorkbookSaveAs_sql_DotNetSDKOutResultPostExcelSaveAssql()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "sql";
        $newfilename = "dotNetSDK/OutResult/PostExcelSaveAs.sql";

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

    public function testGetWorkbookFormat_xlsm()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsm";

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

    public function testGetWorkbookFormat_xlsx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsx";

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

    public function testGetWorkbookFormat_xltm()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xltm";

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

    public function testGetWorkbookFormat_xltx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xltx";

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

    public function testGetWorkbookFormat_jpg()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "jpg";

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

    public function testGetWorkbookFormat_gif()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "gif";

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

    public function testGetWorkbookFormat_emf()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "emf";

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

    public function testGetWorkbookFormat_bmp()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "bmp";

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

    public function testConvertWorkbook_xlsm()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsm";

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

    public function testConvertWorkbook_xlsx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsx";

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

    public function testConvertWorkbook_xltm()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xltm";

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

    public function testConvertWorkbook_xltx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xltx";

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

    public function testConvertWorkbook_jpg()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "jpg";

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

    public function testConvertWorkbook_gif()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "gif";

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

    public function testConvertWorkbook_emf()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "emf";

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

    public function testConvertWorkbook_bmp()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "bmp";

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

    public function testConvertWorkbookSaveCloud_csv_DotNetSDKOutResultConvertWorkbookcsv()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "csv";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.csv";

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

    public function testConvertWorkbookSaveCloud_xls_DotNetSDKOutResultConvertWorkbookxls()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xls";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.xls";

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

    public function testConvertWorkbookSaveCloud_html_DotNetSDKOutResultConvertWorkbookhtml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "html";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.html";

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

    public function testConvertWorkbookSaveCloud_mhtml_DotNetSDKOutResultConvertWorkbookmhtml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "mhtml";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.mhtml";

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

    public function testConvertWorkbookSaveCloud_ods_DotNetSDKOutResultConvertWorkbookods()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "ods";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.ods";

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

    public function testConvertWorkbookSaveCloud_pdf_DotNetSDKOutResultConvertWorkbookpdf()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pdf";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.pdf";

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

    public function testConvertWorkbookSaveCloud_xml_DotNetSDKOutResultConvertWorkbookxml()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xml";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.xml";

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

    public function testConvertWorkbookSaveCloud_txt_DotNetSDKOutResultConvertWorkbooktxt()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "txt";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.txt";

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

    public function testConvertWorkbookSaveCloud_tif_DotNetSDKOutResultConvertWorkbooktif()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "tif";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.tif";

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

    public function testConvertWorkbookSaveCloud_xlsb_DotNetSDKOutResultConvertWorkbookxlsb()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsb";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.xlsb";

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

    public function testConvertWorkbookSaveCloud_xlsm_DotNetSDKOutResultConvertWorkbookxlsm()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsm";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.xlsm";

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

    public function testConvertWorkbookSaveCloud_xlsx_DotNetSDKOutResultConvertWorkbookxlsx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsx";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.xlsx";

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

    public function testConvertWorkbookSaveCloud_xltm_DotNetSDKOutResultConvertWorkbookxltm()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xltm";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.xltm";

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

    public function testConvertWorkbookSaveCloud_xltx_DotNetSDKOutResultConvertWorkbookxltx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xltx";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.xltx";

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

    public function testConvertWorkbookSaveCloud_xps_DotNetSDKOutResultConvertWorkbookxps()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xps";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.xps";

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

    public function testConvertWorkbookSaveCloud_png_DotNetSDKOutResultConvertWorkbookpng()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "png";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.png";

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

    public function testConvertWorkbookSaveCloud_jpg_DotNetSDKOutResultConvertWorkbookjpg()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "jpg";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.jpg";

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

    public function testConvertWorkbookSaveCloud_gif_DotNetSDKOutResultConvertWorkbookgif()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "gif";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.gif";

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

    public function testConvertWorkbookSaveCloud_emf_DotNetSDKOutResultConvertWorkbookemf()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "emf";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.emf";

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

    public function testConvertWorkbookSaveCloud_bmp_DotNetSDKOutResultConvertWorkbookbmp()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "bmp";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.bmp";

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

    public function testConvertWorkbookSaveCloud_md_DotNetSDKOutResultConvertWorkbookmd()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "md";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.md";

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

    public function testConvertWorkbookSaveCloud_numbers_DotNetSDKOutResultConvertWorkbooknumbers()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "numbers";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.numbers";

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

    public function testConvertWorkbookSaveCloud_wmf_DotNetSDKOutResultConvertWorkbookwmf()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "wmf";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.wmf";

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

    public function testConvertWorkbookSaveCloud_svg_DotNetSDKOutResultConvertWorkbooksvg()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "svg";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.svg";

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

    public function testConvertWorkbookSaveCloud_docx_DotNetSDKOutResultConvertWorkbookdocx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "docx";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.docx";

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

    public function testConvertWorkbookSaveCloud_pptx_DotNetSDKOutResultConvertWorkbookpptx()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pptx";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.pptx";

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

    public function testConvertWorkbookSaveCloud_json_DotNetSDKOutResultConvertWorkbookjson()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "json";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.json";

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

    public function testConvertWorkbookSaveCloud_sql_DotNetSDKOutResultConvertWorkbooksql()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "sql";
        $outPath = "dotNetSDK/OutResult/ConvertWorkbook.sql";

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