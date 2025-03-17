<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="LightCellsTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteMetadataRequest; 
use \Aspose\Cells\Cloud\Request\GetMetadataRequest; 
use \Aspose\Cells\Cloud\Request\PostAssembleRequest; 
use \Aspose\Cells\Cloud\Request\PostClearObjectsRequest; 
use \Aspose\Cells\Cloud\Request\PostCompressRequest; 
use \Aspose\Cells\Cloud\Request\PostExportRequest; 
use \Aspose\Cells\Cloud\Request\PostMergeRequest; 
use \Aspose\Cells\Cloud\Request\PostMetadataRequest; 
use \Aspose\Cells\Cloud\Request\PostProtectRequest; 
use \Aspose\Cells\Cloud\Request\PostRepairRequest; 
use \Aspose\Cells\Cloud\Request\PostReplaceRequest; 
use \Aspose\Cells\Cloud\Request\PostReverseRequest; 
use \Aspose\Cells\Cloud\Request\PostSearchRequest; 
use \Aspose\Cells\Cloud\Request\PostSplitRequest; 
use \Aspose\Cells\Cloud\Request\PostUnlockRequest; 
use \Aspose\Cells\Cloud\Request\PostWatermarkRequest; 

use PHPUnit\Framework\TestCase;
final class LightCellsTest extends TestCase
{
    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_csv()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "csv";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_xls()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "xls";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_html()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "html";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_mhtml()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "mhtml";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_ods()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "ods";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_pdf()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "pdf";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_xml()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "xml";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_txt()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "txt";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_tif()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "tif";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_xlsb()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "xlsb";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_xlsx()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "xlsx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_xps()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "xps";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_png()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "png";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_jpg()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "jpg";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_md()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "md";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }


    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_svg()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "svg";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_docx()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "docx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_pptx()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "pptx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_json()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "json";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSplit_sql()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $outFormat = "sql";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSplitRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $outFormat);

        $resposne = $instance->postSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_csv()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "csv";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xls()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xls";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_html()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "html";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_mhtml()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "mhtml";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_ods()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "ods";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_pdf()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "pdf";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xml()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xml";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_txt()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "txt";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_tif()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "tif";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xlsb()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsb";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xlsm()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsm";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xlsx()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xltm()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xltm";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xltx()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xltx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_xps()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xps";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_png()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "png";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_jpg()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "jpg";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_gif()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "gif";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_emf()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "emf";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_bmp()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "bmp";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_md()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "md";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }


    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_wmf()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "wmf";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_svg()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "svg";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_docx()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "docx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_pptx()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "pptx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_json()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "json";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostAssemble_sql()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "sql";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostAssembleRequest();
        $request->setFile( $mapFiles);
        $request->setDatasource( "ds");
        $request->setOutFormat( $format);

        $resposne = $instance->postAssemble($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_csv_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xls_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_html_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_mhtml_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_ods_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pdf_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xml_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_txt_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_tif_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsb_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsm_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsx_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xltm_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xltx_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xps_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_png_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_jpg_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_gif_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_emf_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_bmp_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_md_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }



    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_wmf_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_svg_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_docx_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pptx_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_json_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_sql_workbook()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_csv_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xls_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_html_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_mhtml_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_ods_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pdf_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xml_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_txt_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_tif_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsb_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsm_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsx_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xltm_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xltx_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xps_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_png_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_jpg_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_gif_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_emf_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_bmp_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_md_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_wmf_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_svg_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_docx_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pptx_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_json_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_sql_worksheet()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pdf_chart()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_tif_chart()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_png_chart()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_jpg_chart()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_gif_chart()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_emf_chart()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_bmp_chart()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_png_picture()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_jpg_picture()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_gif_picture()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_emf_picture()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_bmp_picture()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_csv_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xls_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_html_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_mhtml_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_ods_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pdf_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xml_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_txt_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_tif_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsb_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsm_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xlsx_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xltm_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xltx_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_xps_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_png_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_jpg_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_gif_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_emf_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_bmp_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_md_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }


    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_wmf_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_svg_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_docx_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_pptx_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_json_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_sql_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_png_oleobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_jpg_oleobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_gif_oleobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_emf_oleobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostExport_bmp_oleobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postExport($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostCompress_50()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $compressLevel = 50;

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostCompressRequest();
        $request->setFile( $mapFiles);
        $request->setCompressLevel( $compressLevel);

        $resposne = $instance->postCompress($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostCompress_90()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $compressLevel = 90;

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostCompressRequest();
        $request->setFile( $mapFiles);
        $request->setCompressLevel( $compressLevel);

        $resposne = $instance->postCompress($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_csv_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "csv";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xls_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xls";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_html_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "html";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_mhtml_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "mhtml";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_ods_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "ods";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_pdf_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "pdf";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xml_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xml";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_txt_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "txt";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_tif_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "tif";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xlsb_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsb";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xlsm_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsm";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xlsx_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xlsx";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xltm_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xltm";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xltx_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xltx";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_xps_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "xps";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_png_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "png";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_jpg_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "jpg";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_gif_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "gif";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_emf_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "emf";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_bmp_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "bmp";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_md_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "md";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }


    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_wmf_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "wmf";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_svg_true()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "svg";
        $mergeToOneSheet = 'true';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_docx_false()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "docx";
        $mergeToOneSheet = 'false';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_pptx_false()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "pptx";
        $mergeToOneSheet = 'false';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_json_false()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "json";
        $mergeToOneSheet = 'false';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMerge_sql_false()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $format = "sql";
        $mergeToOneSheet = 'false';

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostMergeRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);
        $request->setMergeToOneSheet( $mergeToOneSheet);

        $resposne = $instance->postMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostUnlock()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $needUnlockXlsx = "needUnlock.xlsx";

        $mapFiles = array ();
        $mapFiles[$needUnlockXlsx] = CellsApiTestBase::getfullfilename($needUnlockXlsx);
     
        $request = new PostUnlockRequest();
        $request->setFile( $mapFiles);
        $request->setPassword( "123456");

        $resposne = $instance->postUnlock($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostProtect()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $mapFiles = array ();
        $protectWorkbookRequest = new \Aspose\Cells\Cloud\Model\ProtectWorkbookRequest();
        $protectWorkbookRequest->setAwaysOpenReadOnly('true' ); 
        $protectWorkbookRequest->setEncryptWithPassword("123456" ); 
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostProtectRequest();
        $request->setFile( $mapFiles);
        $request->setProtectWorkbookRequest( $protectWorkbookRequest);
        $request->setPassword( "123456");

        $resposne = $instance->postProtect($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostProtect_ProtectWorkbookRequest()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $mapFiles = array ();
        $protectWorkbookRequest = new \Aspose\Cells\Cloud\Model\ProtectWorkbookRequest();
        $protectWorkbookRequest->setAwaysOpenReadOnly('true' ); 
        $protectWorkbookRequest->setEncryptWithPassword("123456" ); 
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostProtectRequest();
        $request->setFile( $mapFiles);
        $request->setProtectWorkbookRequest( $protectWorkbookRequest);

        $resposne = $instance->postProtect($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostSearch()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostSearchRequest();
        $request->setFile( $mapFiles);
        $request->setText( "12");

        $resposne = $instance->postSearch($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReplace()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostReplaceRequest();
        $request->setFile( $mapFiles);
        $request->setText( "12");
        $request->setNewtext( "newtext");

        $resposne = $instance->postReplace($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReplaceOnlySheetname()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postReplace($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostWatermark()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $assemblyTestXlsx = "assemblytest.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $mapFiles = array ();
        $mapFiles[$assemblyTestXlsx] = CellsApiTestBase::getfullfilename($assemblyTestXlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostWatermarkRequest();
        $request->setFile( $mapFiles);
        $request->setText( "aspose.cells cloud sdk");
        $request->setColor( "#773322");

        $resposne = $instance->postWatermark($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_chart()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "chart";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);

        $resposne = $instance->postClearObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_comment()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "comment";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);

        $resposne = $instance->postClearObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_picture()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "picture";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);

        $resposne = $instance->postClearObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_shape()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "shape";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);

        $resposne = $instance->postClearObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_listobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "listobject";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);

        $resposne = $instance->postClearObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_hyperlink()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "hyperlink";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);

        $resposne = $instance->postClearObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_oleobject()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "oleobject";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);

        $resposne = $instance->postClearObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_pivottable()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "pivottable";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);

        $resposne = $instance->postClearObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_validation()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "validation";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);

        $resposne = $instance->postClearObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostClearObjects_Background()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";
        $dataSourceXlsx = "datasource.xlsx";

        $objecttype = "background";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
        $mapFiles[$dataSourceXlsx] = CellsApiTestBase::getfullfilename($dataSourceXlsx);
     
        $request = new PostClearObjectsRequest();
        $request->setFile( $mapFiles);
        $request->setObjecttype( $objecttype);

        $resposne = $instance->postClearObjects($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for repair workbook as one of the available formats.
    /// </summary>

    public function testPostRepair_xlsx()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";

        $format = "xlsx";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostRepairRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);

        $resposne = $instance->postRepair($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for repair workbook as one of the available formats.
    /// </summary>

    public function testPostRepair_pdf()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";

        $format = "pdf";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostRepairRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);

        $resposne = $instance->postRepair($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for repair workbook as one of the available formats.
    /// </summary>

    public function testPostRepair_csv()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";

        $format = "csv";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostRepairRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);

        $resposne = $instance->postRepair($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for repair workbook as one of the available formats.
    /// </summary>

    public function testPostRepair_png()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";

        $format = "png";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostRepairRequest();
        $request->setFile( $mapFiles);
        $request->setOutFormat( $format);

        $resposne = $instance->postRepair($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReverse_rows_pdf()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";

        $rotateType = "rows";
        $format = "pdf";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostReverseRequest();
        $request->setFile( $mapFiles);
        $request->setRotateType( $rotateType);
        $request->setOutFormat( $format);

        $resposne = $instance->postReverse($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReverse_cols_pdf()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";

        $rotateType = "cols";
        $format = "pdf";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostReverseRequest();
        $request->setFile( $mapFiles);
        $request->setRotateType( $rotateType);
        $request->setOutFormat( $format);

        $resposne = $instance->postReverse($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReverse_both_pdf()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";

        $rotateType = "both";
        $format = "pdf";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostReverseRequest();
        $request->setFile( $mapFiles);
        $request->setRotateType( $rotateType);
        $request->setOutFormat( $format);

        $resposne = $instance->postReverse($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReverse_rows_csv()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";

        $rotateType = "rows";
        $format = "csv";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostReverseRequest();
        $request->setFile( $mapFiles);
        $request->setRotateType( $rotateType);
        $request->setOutFormat( $format);

        $resposne = $instance->postReverse($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReverse_cols_png()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";

        $rotateType = "cols";
        $format = "png";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostReverseRequest();
        $request->setFile( $mapFiles);
        $request->setRotateType( $rotateType);
        $request->setOutFormat( $format);

        $resposne = $instance->postReverse($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostReverse_both_xlsx()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";

        $rotateType = "both";
        $format = "xlsx";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new PostReverseRequest();
        $request->setFile( $mapFiles);
        $request->setRotateType( $rotateType);
        $request->setOutFormat( $format);

        $resposne = $instance->postReverse($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testGetMetadata()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new GetMetadataRequest();
        $request->setFile( $mapFiles);
        $request->setType( "all");

        $resposne = $instance->getMetadata($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testDeleteMetadata()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $book1Xlsx = "Book1.xlsx";

        $mapFiles = array ();
        $mapFiles[$book1Xlsx] = CellsApiTestBase::getfullfilename($book1Xlsx);
     
        $request = new DeleteMetadataRequest();
        $request->setFile( $mapFiles);
        $request->setType( "all");

        $resposne = $instance->deleteMetadata($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testPostMetadata()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

        $resposne = $instance->postMetadata($request);
        $this->assertTrue($resposne !==null );
    }
}