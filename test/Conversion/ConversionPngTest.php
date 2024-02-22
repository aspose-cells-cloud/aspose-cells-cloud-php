<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConversionPngTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\PutConvertWorkbookRequest; 

use PHPUnit\Framework\TestCase;
final class ConversionPngTest extends TestCase
{
    /// <summary>
    /// Test for get workbook as one of the available formats.
    /// </summary>

    public function testConvertWorkbook_html()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "cloud.png";
        $remoteName = "cloud.png";

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
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "cloud.png";
        $remoteName = "cloud.png";

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
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "cloud.png";
        $remoteName = "cloud.png";

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
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "cloud.png";
        $remoteName = "cloud.png";

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
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "cloud.png";
        $remoteName = "cloud.png";

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

    public function testConvertWorkbook_tif()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "cloud.png";
        $remoteName = "cloud.png";

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

    public function testConvertWorkbook_xps()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "cloud.png";
        $remoteName = "cloud.png";

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

    public function testConvertWorkbook_jpg()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "cloud.png";
        $remoteName = "cloud.png";

        $format = "jpg";

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
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "cloud.png";
        $remoteName = "cloud.png";

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

    public function testConvertWorkbook_numbers()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "cloud.png";
        $remoteName = "cloud.png";

        $format = "numbers";

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
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "cloud.png";
        $remoteName = "cloud.png";

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
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "cloud.png";
        $remoteName = "cloud.png";

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
}