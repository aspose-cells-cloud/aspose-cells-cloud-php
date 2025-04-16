<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConversionTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\GetWorkbookRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbookSaveAsRequest; 
use \Aspose\Cells\Cloud\Request\PutConvertWorkbookRequest; 

use PHPUnit\Framework\TestCase;
final class ConversionTest extends TestCase
{
    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_csv_OutResultPostExcelSaveAscsv()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "csv";
        $newfilename = "outResult/PostExcelSaveAs.csv";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_html_OutResultPostExcelSaveAshtml()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "html";
        $newfilename = "outResult/PostExcelSaveAs.html";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_mhtml_OutResultPostExcelSaveAsmhtml()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "mhtml";
        $newfilename = "outResult/PostExcelSaveAs.mhtml";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_ods_OutResultPostExcelSaveAsods()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "ods";
        $newfilename = "outResult/PostExcelSaveAs.ods";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_pdf_OutResultPostExcelSaveAspdf()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pdf";
        $newfilename = "outResult/PostExcelSaveAs.pdf";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_xml_OutResultPostExcelSaveAsxml()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xml";
        $newfilename = "outResult/PostExcelSaveAs.xml";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_txt_OutResultPostExcelSaveAstxt()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "txt";
        $newfilename = "outResult/PostExcelSaveAs.txt";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_tif_OutResultPostExcelSaveAstif()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "tif";
        $newfilename = "outResult/PostExcelSaveAs.tif";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_xlsb_OutResultPostExcelSaveAsxlsb()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsb";
        $newfilename = "outResult/PostExcelSaveAs.xlsb";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_xps_OutResultPostExcelSaveAsxps()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xps";
        $newfilename = "outResult/PostExcelSaveAs.xps";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_png_OutResultPostExcelSaveAspng()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "png";
        $newfilename = "outResult/PostExcelSaveAs.png";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_md_OutResultPostExcelSaveAsmd()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "md";
        $newfilename = "outResult/PostExcelSaveAs.md";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_svg_OutResultPostExcelSaveAssvg()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "svg";
        $newfilename = "outResult/PostExcelSaveAs.svg";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_docx_OutResultPostExcelSaveAsdocx()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "docx";
        $newfilename = "outResult/PostExcelSaveAs.docx";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_pptx_OutResultPostExcelSaveAspptx()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pptx";
        $newfilename = "outResult/PostExcelSaveAs.pptx";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_json_OutResultPostExcelSaveAsjson()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "json";
        $newfilename = "outResult/PostExcelSaveAs.json";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for save workbook as one of the available formats.
    /// </summary>

    public function testWorkbookSaveAs_sql_OutResultPostExcelSaveAssql()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "sql";
        $newfilename = "outResult/PostExcelSaveAs.sql";

        $saveOptions = new \Aspose\Cells\Cloud\Model\SaveOptions();
        $saveOptions->setSaveFormat($format ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSaveAsRequest();
        $request->setName( $remoteName);
        $request->setNewfilename( $newfilename);
        $request->setSaveOptions( $saveOptions);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->postWorkbookSaveAs($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_csv()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "csv";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_html()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "html";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_mhtml()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "mhtml";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_ods()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "ods";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_pdf()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pdf";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_xml()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xml";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_txt()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "txt";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_tif()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "tif";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_xps()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xps";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_png()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "png";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_md()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "md";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_svg()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "svg";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_docx()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "docx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_pptx()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pptx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_json()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "json";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testGetWorkbookFormat_sql()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "sql";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookRequest();
        $request->setName( $remoteName);
        $request->setFormat( $format);
        $request->setFolder( $remoteFolder);

        $resposne = $instance->getWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_csv()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "csv";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_xls()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xls";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_html()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "html";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_mhtml()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "mhtml";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_ods()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "ods";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_pdf()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pdf";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_xml()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xml";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_txt()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "txt";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_tif()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "tif";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_xlsb()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsb";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_xps()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xps";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_png()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "png";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_md()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "md";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_svg()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "svg";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_docx()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "docx";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_pptx()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pptx";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_json()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "json";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_sql()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "sql";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_csv_OutResultConvertWorkbookcsv()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "csv";
        $outPath = "outResult/ConvertWorkbook.csv";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_xls_OutResultConvertWorkbookxls()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xls";
        $outPath = "outResult/ConvertWorkbook.xls";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_html_OutResultConvertWorkbookhtml()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "html";
        $outPath = "outResult/ConvertWorkbook.html";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_mhtml_OutResultConvertWorkbookmhtml()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "mhtml";
        $outPath = "outResult/ConvertWorkbook.mhtml";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_ods_OutResultConvertWorkbookods()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "ods";
        $outPath = "outResult/ConvertWorkbook.ods";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_pdf_OutResultConvertWorkbookpdf()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pdf";
        $outPath = "outResult/ConvertWorkbook.pdf";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_xml_OutResultConvertWorkbookxml()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xml";
        $outPath = "outResult/ConvertWorkbook.xml";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_txt_OutResultConvertWorkbooktxt()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "txt";
        $outPath = "outResult/ConvertWorkbook.txt";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_tif_OutResultConvertWorkbooktif()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "tif";
        $outPath = "outResult/ConvertWorkbook.tif";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_xlsb_OutResultConvertWorkbookxlsb()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xlsb";
        $outPath = "outResult/ConvertWorkbook.xlsb";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_xltm_OutResultConvertWorkbookxltm()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xltm";
        $outPath = "outResult/ConvertWorkbook.xltm";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_xps_OutResultConvertWorkbookxps()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "xps";
        $outPath = "outResult/ConvertWorkbook.xps";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_png_OutResultConvertWorkbookpng()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "png";
        $outPath = "outResult/ConvertWorkbook.png";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_md_OutResultConvertWorkbookmd()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "md";
        $outPath = "outResult/ConvertWorkbook.md";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_svg_OutResultConvertWorkbooksvg()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "svg";
        $outPath = "outResult/ConvertWorkbook.svg";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_docx_OutResultConvertWorkbookdocx()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "docx";
        $outPath = "outResult/ConvertWorkbook.docx";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_pptx_OutResultConvertWorkbookpptx()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "pptx";
        $outPath = "outResult/ConvertWorkbook.pptx";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_json_OutResultConvertWorkbookjson()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "json";
        $outPath = "outResult/ConvertWorkbook.json";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for converting workbook to one of the available formats.
    /// </summary>

    public function testConvertWorkbookSaveCloud_sql_OutResultConvertWorkbooksql()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $format = "sql";
        $outPath = "outResult/ConvertWorkbook.sql";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutConvertWorkbookRequest();
        $request->setFile( $mapFiles);
        $request->setFormat( $format);
        $request->setOutPath( $outPath);

        $resposne = $instance->putConvertWorkbook($request);
        $this->assertTrue($resposne !==null );
    }
}