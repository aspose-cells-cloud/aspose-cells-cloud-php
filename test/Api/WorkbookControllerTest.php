<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WorkbookControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeleteDecryptWorkbookRequest; 
use \Aspose\Cells\Cloud\Request\DeleteDocumentUnProtectFromChangesRequest; 
use \Aspose\Cells\Cloud\Request\DeleteUnProtectWorkbookRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorkbookBackgroundRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorkbookNameRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorkbookNamesRequest; 
use \Aspose\Cells\Cloud\Request\GetPageCountRequest; 
use \Aspose\Cells\Cloud\Request\GetWorkbookDefaultStyleRequest; 
use \Aspose\Cells\Cloud\Request\GetWorkbookNameRequest; 
use \Aspose\Cells\Cloud\Request\GetWorkbookNamesRequest; 
use \Aspose\Cells\Cloud\Request\GetWorkbookNameValueRequest; 
use \Aspose\Cells\Cloud\Request\GetWorkbookSettingsRequest; 
use \Aspose\Cells\Cloud\Request\GetWorkbookTextItemsRequest; 
use \Aspose\Cells\Cloud\Request\PostAutofitWorkbookColumnsRequest; 
use \Aspose\Cells\Cloud\Request\PostAutofitWorkbookRowsRequest; 
use \Aspose\Cells\Cloud\Request\PostDigitalSignatureRequest; 
use \Aspose\Cells\Cloud\Request\PostEncryptWorkbookRequest; 
use \Aspose\Cells\Cloud\Request\PostImportDataRequest; 
use \Aspose\Cells\Cloud\Request\PostProtectWorkbookRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbookCalculateFormulaRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbookGetSmartMarkerResultRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbookNameRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbookSettingsRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbooksMergeRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbookSplitRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbooksTextSearchRequest; 
use \Aspose\Cells\Cloud\Request\PostWorkbookTextReplaceRequest; 
use \Aspose\Cells\Cloud\Request\PutDocumentProtectFromChangesRequest; 
use \Aspose\Cells\Cloud\Request\PutWorkbookBackgroundRequest; 
use \Aspose\Cells\Cloud\Request\PutWorkbookCreateRequest; 
use \Aspose\Cells\Cloud\Request\PutWorkbookNameRequest; 
use \Aspose\Cells\Cloud\Request\PutWorkbookWaterMarkerRequest; 

use PHPUnit\Framework\TestCase;
final class WorkbookControllerTest extends TestCase
{
    /// <summary>
    /// Test for PostDigitalSignature of WorkbookController.
    /// </summary>

    public function testPostDigitalSignature()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $roywangPFX = "roywang.pfx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $instance,$roywangPFX ,$remoteFolder . "/roywang.pfx" ,  "");
     
        $request = new PostDigitalSignatureRequest();
        $request->setName( $remoteName);
        $request->setDigitalsignaturefile( $remoteFolder . "/roywang.pfx");
        $request->setPassword( "123456");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postDigitalSignature($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostEncryptWorkbook of WorkbookController.
    /// </summary>

    public function testPostEncryptWorkbook()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $encryption = new \Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest();
        $encryption->setPassword("123456" ); 
        $encryption->setEncryptionType("XOR" ); 
        $encryption->setKeyLength(128 ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostEncryptWorkbookRequest();
        $request->setName( $remoteName);
        $request->setEncryption( $encryption);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postEncryptWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteDecryptWorkbook of WorkbookController.
    /// </summary>

    public function testDeleteDecryptWorkbook()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $encryption = new \Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest();
        $encryption->setPassword("123456" ); 
        $encryption->setEncryptionType("XOR" ); 
        $encryption->setKeyLength(128 ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteDecryptWorkbookRequest();
        $request->setName( $remoteName);
        $request->setEncryption( $encryption);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteDecryptWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostProtectWorkbook of WorkbookController.
    /// </summary>

    public function testPostProtectWorkbook()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $protectWorkbookRequest = new \Aspose\Cells\Cloud\Model\ProtectWorkbookRequest();
        $protectWorkbookRequest->setEncryptWithPassword("123456" ); 
        $protectWorkbookRequest->setProtectWorkbookStructure("ALL" ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostProtectWorkbookRequest();
        $request->setName( $remoteName);
        $request->setProtectWorkbookRequest( $protectWorkbookRequest);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postProtectWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteUnProtectWorkbook of WorkbookController.
    /// </summary>

    public function testDeleteUnProtectWorkbook()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteUnProtectWorkbookRequest();
        $request->setName( $remoteName);
        $request->setPassword( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteUnProtectWorkbook($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorkbookDefaultStyle of WorkbookController.
    /// </summary>

    public function testGetWorkbookDefaultStyle()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookDefaultStyleRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorkbookDefaultStyle($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorkbookTextItems of WorkbookController.
    /// </summary>

    public function testGetWorkbookTextItems()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookTextItemsRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorkbookTextItems($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorkbookNames of WorkbookController.
    /// </summary>

    public function testGetWorkbookNames()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookNamesRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorkbookNames($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorkbookName of WorkbookController.
    /// </summary>

    public function testPutWorkbookName()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $newName = new \Aspose\Cells\Cloud\Model\Name();
        $newName->setText("name_1804" ); 
        $newName->setComment("KeepSourceFormatting" ); 
        $newName->setRefersTo('=Sheet1!$I$4' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorkbookNameRequest();
        $request->setName( $remoteName);
        $request->setNewName( $newName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorkbookName($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorkbookName of WorkbookController.
    /// </summary>

    public function testGetWorkbookName()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookNameRequest();
        $request->setName( $remoteName);
        $request->setNameName( "Name_2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorkbookName($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorkbookName of WorkbookController.
    /// </summary>

    public function testPostWorkbookName()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $newName = new \Aspose\Cells\Cloud\Model\Name();
        $newName->setText("name_1804" ); 
        $newName->setComment("KeepSourceFormatting" ); 
        $newName->setRefersTo('=Sheet1!$I$4' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookNameRequest();
        $request->setName( $remoteName);
        $request->setNameName( "Name_2");
        $request->setNewName( $newName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorkbookName($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorkbookNameValue of WorkbookController.
    /// </summary>

    public function testGetWorkbookNameValue()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookNameValueRequest();
        $request->setName( $remoteName);
        $request->setNameName( "Name_2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorkbookNameValue($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorkbookNames of WorkbookController.
    /// </summary>

    public function testDeleteWorkbookNames()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorkbookNamesRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorkbookNames($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorkbookName of WorkbookController.
    /// </summary>

    public function testDeleteWorkbookName()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorkbookNameRequest();
        $request->setName( $remoteName);
        $request->setNameName( "Name_2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorkbookName($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutDocumentProtectFromChanges of WorkbookController.
    /// </summary>

    public function testPutDocumentProtectFromChanges()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $password = new \Aspose\Cells\Cloud\Model\PasswordRequest();
        $password->setPassword("123456" ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutDocumentProtectFromChangesRequest();
        $request->setName( $remoteName);
        $request->setPassword( $password);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putDocumentProtectFromChanges($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteDocumentUnProtectFromChanges of WorkbookController.
    /// </summary>

    public function testDeleteDocumentUnProtectFromChanges()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteDocumentUnProtectFromChangesRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteDocumentUnProtectFromChanges($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorkbooksMerge of WorkbookController.
    /// </summary>

    public function testPostWorkbooksMerge()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $myDocumentXLSX = "myDocument.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $instance,$myDocumentXLSX ,$remoteFolder . "/myDocument.xlsx" ,  "");
     
        $request = new PostWorkbooksMergeRequest();
        $request->setName( $remoteName);
        $request->setMergeWith( $remoteFolder . "/myDocument.xlsx");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $request->setMergedStorageName( "");

        $resposne = $instance->postWorkbooksMerge($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorkbooksTextSearch of WorkbookController.
    /// </summary>

    public function testPostWorkbooksTextSearch()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbooksTextSearchRequest();
        $request->setName( $remoteName);
        $request->setText( "1234");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorkbooksTextSearch($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorkbooksTextReplace of WorkbookController.
    /// </summary>

    public function testPostWorkbookTextReplace()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookTextReplaceRequest();
        $request->setName( $remoteName);
        $request->setOldValue( "1234");
        $request->setNewValue( "5678");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorkbookTextReplace($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorkbookGetSmartMarkerResult of WorkbookController.
    /// </summary>

    public function testPostWorkbookGetSmartMarkerResult()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $reportDataXML = "ReportData.xml";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $instance,$reportDataXML ,$remoteFolder . "/ReportData.xml" ,  "");
     
        $request = new PostWorkbookGetSmartMarkerResultRequest();
        $request->setName( $remoteName);
        $request->setXmlFile( $remoteFolder . "/ReportData.xml");
        $request->setFolder( $remoteFolder);
        $request->setOutPath( "OutResult/SmartMarkerResult.xlsx");
        $request->setStorageName( "");
        $request->setOutStorageName( "");

        $resposne = $instance->postWorkbookGetSmartMarkerResult($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorkbookCreate of WorkbookController.
    /// </summary>

    public function testPutWorkbookCreate()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $reportDataXML = "ReportData.xml";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $instance,$reportDataXML ,$remoteFolder . "/ReportData.xml" ,  "");
     
        $request = new PutWorkbookCreateRequest();
        $request->setName( "PutWorkbookCreate.xlsx");
        $request->setTemplateFile( $remoteFolder . "/" . $remoteName);
        $request->setDataFile( $remoteFolder . "/ReportData.xml");
        $request->setIsWriteOver( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $request->setCheckExcelRestriction( 'true');

        $resposne = $instance->putWorkbookCreate($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorkbookSplit of WorkbookController.
    /// </summary>

    public function testPostWorkbookSplit()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSplitRequest();
        $request->setName( $remoteName);
        $request->setFormat( "png");
        $request->setOutFolder( "OutResult");
        $request->setFrom( 1);
        $request->setTo( 5);
        $request->setHorizontalResolution( 96);
        $request->setVerticalResolution( 96);
        $request->setSplitNameRule( "sheetname");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $request->setOutStorageName( "");

        $resposne = $instance->postWorkbookSplit($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostImportData of WorkbookController.
    /// </summary>

    public function testPostImportData()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $importOptionData = array (
            1,
            2,
            3,
            4
        );
        $importOption = new \Aspose\Cells\Cloud\Model\ImportIntArrayOption();
        $importOption->setDestinationWorksheet("Sheet1" ); 
        $importOption->setFirstColumn(1 ); 
        $importOption->setFirstRow(3 ); 
        $importOption->setImportDataType("IntArray" ); 
        $importOption->setIsInsert('true' ); 
        $importOption->setIsVertical('true' ); 
        $importOption->setData($importOptionData ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostImportDataRequest();
        $request->setName( $remoteName);
        $request->setImportOption( $importOption);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postImportData($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorkbookCalculateFormula of WorkbookController.
    /// </summary>

    public function testPostWorkbookCalculateFormula()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $options = new \Aspose\Cells\Cloud\Model\CalculationOptions();
        $options->setIgnoreError('true' ); 
        $options->setRecursive('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookCalculateFormulaRequest();
        $request->setName( $remoteName);
        $request->setOptions( $options);
        $request->setIgnoreError( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorkbookCalculateFormula($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostAutofitWorkbookRows of WorkbookController.
    /// </summary>

    public function testPostAutofitWorkbookRows()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostAutofitWorkbookRowsRequest();
        $request->setName( $remoteName);
        $request->setStartRow( 1);
        $request->setEndRow( 100);
        $request->setOnlyAuto( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postAutofitWorkbookRows($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostAutofitWorkbookColumns of WorkbookController.
    /// </summary>

    public function testPostAutofitWorkbookColumns()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostAutofitWorkbookColumnsRequest();
        $request->setName( $remoteName);
        $request->setStartColumn( 1);
        $request->setEndColumn( 20);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postAutofitWorkbookColumns($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorkbookSettings of WorkbookController.
    /// </summary>

    public function testGetWorkbookSettings()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookSettingsRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorkbookSettings($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorkbookSettings of WorkbookController.
    /// </summary>

    public function testPostWorkbookSettings()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $settings = new \Aspose\Cells\Cloud\Model\WorkbookSettings();
        $settings->setAutoCompressPictures('true' ); 
        $settings->setHidePivotFieldList('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSettingsRequest();
        $request->setName( $remoteName);
        $request->setSettings( $settings);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorkbookSettings($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorkbookBackground of WorkbookController.
    /// </summary>

    public function testPutWorkbookBackground()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $waterMarkPNG = "WaterMark.png";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $instance,$waterMarkPNG ,$remoteFolder . "/WaterMark.png" ,  "");
     
        $request = new PutWorkbookBackgroundRequest();
        $request->setName( $remoteName);
        $request->setPicPath( $remoteFolder . "/WaterMark.png");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorkbookBackground($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorkbookBackground of WorkbookController.
    /// </summary>

    public function testDeleteWorkbookBackground()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorkbookBackgroundRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorkbookBackground($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorkbookWaterMarker of WorkbookController.
    /// </summary>

    public function testPutWorkbookWaterMarker()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $textWaterMarkerRequest = new \Aspose\Cells\Cloud\Model\TextWaterMarkerRequest();
        $textWaterMarkerRequest->setText("Aspose Cells Cloud" ); 
        $textWaterMarkerRequest->setFontSize(12 ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorkbookWaterMarkerRequest();
        $request->setName( $remoteName);
        $request->setTextWaterMarkerRequest( $textWaterMarkerRequest);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorkbookWaterMarker($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetPageCount of WorkbookController.
    /// </summary>

    public function testGetPageCount()
    {
        $instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetPageCountRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getPageCount($request);
        $this->assertTrue($resposne !==null );
    }
}