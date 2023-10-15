<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="LightCellsTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteMetadataRequest; 
use \Aspose\Cells\Cloud\Request\GetMetadataRequest; 
use \Aspose\Cells\Cloud\Request\PostAssembleRequest; 
use \Aspose\Cells\Cloud\Request\PostClearObjectsRequest; 
use \Aspose\Cells\Cloud\Request\PostCompressRequest; 
use \Aspose\Cells\Cloud\Request\PostExportRequest; 
use \Aspose\Cells\Cloud\Request\PostMergeRequest; 
use \Aspose\Cells\Cloud\Request\PostMetadataRequest; 
use \Aspose\Cells\Cloud\Request\PostProtectRequest; 
use \Aspose\Cells\Cloud\Request\PostReplaceRequest; 
use \Aspose\Cells\Cloud\Request\PostReverseRequest; 
use \Aspose\Cells\Cloud\Request\PostRepairRequest; 
use \Aspose\Cells\Cloud\Request\PostSearchRequest; 
use \Aspose\Cells\Cloud\Request\PostSplitRequest; 
use \Aspose\Cells\Cloud\Request\PostUnlockRequest; 
use \Aspose\Cells\Cloud\Request\PostWatermarkRequest; 
use \Aspose\Cells\Cloud\Model\ProtectWorkbookRequest;
use PHPUnit\Framework\TestCase;
class LightCellsTest extends \PHPUnit_Framework_TestCase
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

    public function testPostSplit_csv()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "csv";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_xls()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xls";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_html()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "html";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_mhtml()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "mhtml";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_ods()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "ods";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_pdf()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "pdf";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_xml()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xml";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_txt()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "txt";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_tif()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "tif";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_xlsb()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsb";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_xlsm()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsm";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_xlsx()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_xltm()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xltm";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_xltx()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xltx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_xps()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xps";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_png()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "png";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_jpg()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "jpg";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_gif()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "gif";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_emf()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "emf";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_bmp()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "bmp";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_md()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "md";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_numbers()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "numbers";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_wmf()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "wmf";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_svg()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "svg";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_docx()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "docx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_pptx()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "pptx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_json()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "json";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_sql()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "sql";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postSplit($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_csv()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "csv";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xls()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xls";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_html()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "html";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_mhtml()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "mhtml";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_ods()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "ods";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_pdf()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "pdf";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xml()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xml";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_txt()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "txt";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_tif()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "tif";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xlsb()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsb";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xlsm()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsm";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xlsx()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xltm()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xltm";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xltx()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xltx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xps()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xps";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_png()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "png";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_jpg()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "jpg";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_gif()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "gif";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_emf()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "emf";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_bmp()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "bmp";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_md()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "md";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_numbers()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "numbers";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_wmf()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "wmf";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_svg()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "svg";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_docx()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "docx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_pptx()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "pptx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_json()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "json";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_sql()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "sql";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setFormat( $format);
        $this->instance->postAssemble($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_csv_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "csv";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xls_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xls";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_html_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "html";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_mhtml_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "mhtml";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_ods_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "ods";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pdf_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "pdf";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xml_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xml";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_txt_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "txt";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_tif_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "tif";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsb_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xlsb";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsm_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xlsm";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsx_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xlsx";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xltm_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xltm";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xltx_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xltx";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xps_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xps";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_png_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "png";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_jpg_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "jpg";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_gif_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "gif";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_emf_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "emf";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_bmp_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "bmp";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_md_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "md";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_numbers_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "numbers";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_wmf_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "wmf";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_svg_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "svg";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_docx_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "docx";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pptx_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "pptx";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_json_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "json";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_sql_workbook()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "sql";
        $objectType = "workbook";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_csv_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "csv";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xls_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xls";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_html_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "html";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_mhtml_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "mhtml";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_ods_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "ods";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pdf_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "pdf";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xml_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xml";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_txt_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "txt";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_tif_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "tif";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsb_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xlsb";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsm_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xlsm";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsx_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xlsx";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xltm_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xltm";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xltx_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xltx";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xps_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xps";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_png_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "png";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_jpg_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "jpg";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_gif_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "gif";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_emf_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "emf";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_bmp_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "bmp";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_md_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "md";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_numbers_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "numbers";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_wmf_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "wmf";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_svg_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "svg";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_docx_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "docx";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pptx_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "pptx";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_json_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "json";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_sql_worksheet()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "sql";
        $objectType = "worksheet";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pdf_chart()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "pdf";
        $objectType = "chart";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_tif_chart()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "tif";
        $objectType = "chart";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_png_chart()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "png";
        $objectType = "chart";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_jpg_chart()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "jpg";
        $objectType = "chart";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_gif_chart()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "gif";
        $objectType = "chart";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_emf_chart()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "emf";
        $objectType = "chart";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_bmp_chart()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "bmp";
        $objectType = "chart";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_png_picture()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "png";
        $objectType = "picture";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_jpg_picture()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "jpg";
        $objectType = "picture";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_gif_picture()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "gif";
        $objectType = "picture";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_emf_picture()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "emf";
        $objectType = "picture";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_bmp_picture()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "bmp";
        $objectType = "picture";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_csv_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "csv";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xls_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xls";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_html_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "html";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_mhtml_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "mhtml";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_ods_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "ods";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pdf_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "pdf";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xml_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xml";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_txt_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "txt";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_tif_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "tif";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsb_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xlsb";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsm_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xlsm";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsx_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xlsx";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xltm_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xltm";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xltx_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xltx";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xps_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "xps";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_png_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "png";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_jpg_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "jpg";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_gif_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "gif";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_emf_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "emf";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_bmp_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "bmp";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_md_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "md";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_numbers_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "numbers";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_wmf_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "wmf";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_svg_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "svg";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_docx_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "docx";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pptx_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "pptx";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_json_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "json";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_sql_listobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "sql";
        $objectType = "listobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_png_oleobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "png";
        $objectType = "oleobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_jpg_oleobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "jpg";
        $objectType = "oleobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_gif_oleobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "gif";
        $objectType = "oleobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_emf_oleobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "emf";
        $objectType = "oleobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_bmp_oleobject()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $book1Xlsx = "Book1.xlsx";

        $format = "bmp";
        $objectType = "oleobject";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostExportRequest();
        $request->setFile( $mapFiles);
        $request->setObjectType( $objectType);
        $request->setFormat( $format);
        $this->instance->postExport($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostCompress_50()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $compressLevel = 50;

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostCompressRequest();
        $request->setFile( $mapFiles);
        $request->setCompressLevel( $compressLevel);
        $this->instance->postCompress($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostCompress_90()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $compressLevel = 90;

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostCompressRequest();
        $request->setFile( $mapFiles);
        $request->setCompressLevel( $compressLevel);
        $this->instance->postCompress($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_csv_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "csv";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xls_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xls";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_html_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "html";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_mhtml_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "mhtml";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_ods_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "ods";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_pdf_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "pdf";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xml_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xml";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_txt_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "txt";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_tif_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "tif";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xlsb_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsb";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xlsm_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsm";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xlsx_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsx";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xltm_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xltm";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xltx_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xltx";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xps_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xps";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_png_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "png";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_jpg_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "jpg";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_gif_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "gif";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_emf_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "emf";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_bmp_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "bmp";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_md_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "md";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_numbers_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "numbers";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_wmf_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "wmf";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_svg_true()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "svg";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_docx_false()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "docx";
        $mergeToOneSheet = 'false';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_pptx_false()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "pptx";
        $mergeToOneSheet = 'false';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_json_false()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "json";
        $mergeToOneSheet = 'false';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_sql_false()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "sql";
        $mergeToOneSheet = 'false';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);
        $this->instance->postMerge($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostUnlock()
    {
        $needUnlockXlsx = "needUnlock.xlsx";

        $mapFiles = array ();
        $mapFiles[$needUnlockXlsx] = CellsApiTestBase::getfullfilename($needUnlockXlsx);
     
        $request = new PostUnlockRequest();
        $request->setFile( $mapFiles);
        $request->setPassword( "123456");
        $this->instance->postUnlock($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostProtect()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostProtectRequest();
        $request->setFile( $mapFiles);
        $protectWorkbookRequest = new ProtectWorkbookRequest();
        $protectWorkbookRequest->setAwaysOpenReadOnly('true');
        $request->setProtectWorkbookRequest($protectWorkbookRequest);
        $this->instance->postProtect($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSearch()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSearchRequest();
        $request->setFile( $mapFiles);
        $request->setText( "12");
        $this->instance->postSearch($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReplace()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostReplaceRequest();
        $request->setFile( $mapFiles);
        $request->setText( "12");
        $request->setNewtext( "newtext");
        $this->instance->postReplace($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReplaceOnlySheetname()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostReplaceRequest();
        $request->setFile( $mapFiles);
        $request->setText( "12");
        $request->setNewtext( "newtext");
        $request->setSheetname( "Sheet1");
        $this->instance->postReplace($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostWatermark()
    {
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostWatermarkRequest();
        $request->setFile( $mapFiles);
        $request->setText( "aspose.cells cloud sdk");
        $request->setColor( "#773322");
        $this->instance->postWatermark($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_chart()
    {
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "chart";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);
        $this->instance->postClearObjects($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_comment()
    {
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "comment";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);
        $this->instance->postClearObjects($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_picture()
    {
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "picture";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);
        $this->instance->postClearObjects($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_shape()
    {
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "shape";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);
        $this->instance->postClearObjects($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_listobject()
    {
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "listobject";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);
        $this->instance->postClearObjects($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_hyperlink()
    {
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "hyperlink";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);
        $this->instance->postClearObjects($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_oleobject()
    {
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "oleobject";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);
        $this->instance->postClearObjects($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_pivottable()
    {
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "pivottable";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);
        $this->instance->postClearObjects($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_validation()
    {
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "validation";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);
        $this->instance->postClearObjects($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_Background()
    {
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "background";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);
        $this->instance->postClearObjects($request);
    }
    /// <summary>
    /// Test for repair workbook as one of the available formats.
    /// </summary>

    public function testPostRepair_xlsx()
    {
        $book1Xlsx = "Book1.xlsx";

        $format = "xlsx";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostRepairRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postRepair($request);
    }

    /// <summary>
    /// Test for repair workbook as one of the available formats.
    /// </summary>

    public function testPostRepair_pdf()
    {
        $book1Xlsx = "Book1.xlsx";

        $format = "pdf";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostRepairRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postRepair($request);
    }

    /// <summary>
    /// Test for repair workbook as one of the available formats.
    /// </summary>

    public function testPostRepair_csv()
    {
        $book1Xlsx = "Book1.xlsx";

        $format = "csv";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostRepairRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postRepair($request);
    }

    /// <summary>
    /// Test for repair workbook as one of the available formats.
    /// </summary>

    public function testPostRepair_png()
    {
        $book1Xlsx = "Book1.xlsx";

        $format = "png";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostRepairRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $this->instance->postRepair($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReverse_rows_pdf()
    {
        $book1Xlsx = "Book1.xlsx";

        $rotateType = "rows";
        $format = "pdf";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostReverseRequest();
        $request->setFile( $mapFiles);
        $request->setRotateType( $rotateType);
        $request->setFormat( $format);
        $this->instance->postReverse($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReverse_cols_pdf()
    {
        $book1Xlsx = "Book1.xlsx";

        $rotateType = "cols";
        $format = "pdf";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostReverseRequest();
        $request->setFile( $mapFiles);
        $request->setRotateType( $rotateType);
        $request->setFormat( $format);
        $this->instance->postReverse($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReverse_both_pdf()
    {
        $book1Xlsx = "Book1.xlsx";

        $rotateType = "both";
        $format = "pdf";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostReverseRequest();
        $request->setFile( $mapFiles);
        $request->setRotateType( $rotateType);
        $request->setFormat( $format);
        $this->instance->postReverse($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReverse_rows_csv()
    {
        $book1Xlsx = "Book1.xlsx";

        $rotateType = "rows";
        $format = "csv";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostReverseRequest();
        $request->setFile( $mapFiles);
        $request->setRotateType( $rotateType);
        $request->setFormat( $format);
        $this->instance->postReverse($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReverse_cols_png()
    {
        $book1Xlsx = "Book1.xlsx";

        $rotateType = "cols";
        $format = "png";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostReverseRequest();
        $request->setFile( $mapFiles);
        $request->setRotateType( $rotateType);
        $request->setFormat( $format);
        $this->instance->postReverse($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReverse_both_xlsx()
    {
        $book1Xlsx = "Book1.xlsx";

        $rotateType = "both";
        $format = "xlsx";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostReverseRequest();
        $request->setFile( $mapFiles);
        $request->setRotateType( $rotateType);
        $request->setFormat( $format);
        $this->instance->postReverse($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testGetMetadata()
    {
        $book1Xlsx = "Book1.xlsx";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new GetMetadataRequest();
        $request->setFile( $mapFiles);
        $request->setType( "all");
        $this->instance->getMetadata($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testDeleteMetadata()
    {
        $book1Xlsx = "Book1.xlsx";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new DeleteMetadataRequest();
        $request->setFile( $mapFiles);
        $request->setType( "all");
        $this->instance->deleteMetadata($request);
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMetadata()
    {
        $book1Xlsx = "Book1.xlsx";

        $mapFiles = array ();
        $cellsDocumentscellsDocument0 = new \Aspose\Cells\Cloud\Model\CellsDocumentProperty();
        $cellsDocumentscellsDocument0->setName("Author" ); 
        $cellsDocumentscellsDocument0->setValue("roy.wang" ); 
        $cellsDocuments = array (
            $cellsDocumentscellsDocument0
        );
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostMetadataRequest();
        $request->setFile( $mapFiles);
        $request->setCellsDocuments( $cellsDocuments);
        $this->instance->postMetadata($request);
    }
}