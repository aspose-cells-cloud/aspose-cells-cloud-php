<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WorkbookControllerTests.php.cs">
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
class WorkbookControllerTest extends \PHPUnit_Framework_TestCase
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
    /// Test for PostDigitalSignature of WorkbookController.
    /// </summary>

    public function testPostDigitalSignature()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $roywangPFX = "roywang.pfx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $this->instance,$roywangPFX ,$remoteFolder . "/roywang.pfx" ,  "");
     
        $request = new PostDigitalSignatureRequest();
        $request->setName( $remoteName);
        $request->setDigitalsignaturefile( $remoteFolder . "/roywang.pfx");
        $request->setPassword( "123456");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postDigitalSignature($request);
    }

    /// <summary>
    /// Test for PostEncryptWorkbook of WorkbookController.
    /// </summary>

    public function testPostEncryptWorkbook()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $encryption = new \Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest();
        $encryption->setPassword("123456" ); 
        $encryption->setEncryptionType("XOR" ); 
        $encryption->setKeyLength(128 ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostEncryptWorkbookRequest();
        $request->setName( $remoteName);
        $request->setEncryption( $encryption);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postEncryptWorkbook($request);
    }

    /// <summary>
    /// Test for DeleteDecryptWorkbook of WorkbookController.
    /// </summary>

    public function testDeleteDecryptWorkbook()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $encryption = new \Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest();
        $encryption->setPassword("123456" ); 
        $encryption->setEncryptionType("XOR" ); 
        $encryption->setKeyLength(128 ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteDecryptWorkbookRequest();
        $request->setName( $remoteName);
        $request->setEncryption( $encryption);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteDecryptWorkbook($request);
    }

    /// <summary>
    /// Test for PostProtectWorkbook of WorkbookController.
    /// </summary>

    public function testPostProtectWorkbook()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $protection = new \Aspose\Cells\Cloud\Model\ProtectWorkbookRequest();
        $protection->setEncryptWithPassword("123456" ); 
        $protection->setAwaysOpenReadOnly( 'true' ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostProtectWorkbookRequest();
        $request->setName( $remoteName);
        $request->setProtectWorkbookRequest( $protection);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postProtectWorkbook($request);
    }

    /// <summary>
    /// Test for DeleteUnProtectWorkbook of WorkbookController.
    /// </summary>

    public function testDeleteUnProtectWorkbook()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteUnProtectWorkbookRequest();
        $request->setName( $remoteName);
        $request->setPassword("123456" );
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteUnProtectWorkbook($request);
    }

    /// <summary>
    /// Test for GetWorkbookDefaultStyle of WorkbookController.
    /// </summary>

    public function testGetWorkbookDefaultStyle()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookDefaultStyleRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorkbookDefaultStyle($request);
    }

    /// <summary>
    /// Test for GetWorkbookTextItems of WorkbookController.
    /// </summary>

    public function testGetWorkbookTextItems()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookTextItemsRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorkbookTextItems($request);
    }

    /// <summary>
    /// Test for GetWorkbookNames of WorkbookController.
    /// </summary>

    public function testGetWorkbookNames()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookNamesRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorkbookNames($request);
    }

    /// <summary>
    /// Test for PutWorkbookName of WorkbookController.
    /// </summary>

    public function testPutWorkbookName()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $newName = new \Aspose\Cells\Cloud\Model\Name();
        $newName->setText("name_1804" ); 
        $newName->setComment("KeepSourceFormatting" ); 
        $newName->setRefersTo('=Sheet1!$I$4' ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorkbookNameRequest();
        $request->setName( $remoteName);
        $request->setNewName( $newName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putWorkbookName($request);
    }

    /// <summary>
    /// Test for GetWorkbookName of WorkbookController.
    /// </summary>

    public function testGetWorkbookName()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookNameRequest();
        $request->setName( $remoteName);
        $request->setNameName( "Name_2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorkbookName($request);
    }

    /// <summary>
    /// Test for PostWorkbookName of WorkbookController.
    /// </summary>

    public function testPostWorkbookName()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $newName = new \Aspose\Cells\Cloud\Model\Name();
        $newName->setText("name_1804" ); 
        $newName->setComment("KeepSourceFormatting" ); 
        $newName->setRefersTo('=Sheet1!$I$4' ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookNameRequest();
        $request->setName( $remoteName);
        $request->setNameName( "Name_2");
        $request->setNewName( $newName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorkbookName($request);
    }

    /// <summary>
    /// Test for GetWorkbookNameValue of WorkbookController.
    /// </summary>

    public function testGetWorkbookNameValue()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookNameValueRequest();
        $request->setName( $remoteName);
        $request->setNameName( "Name_2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorkbookNameValue($request);
    }

    /// <summary>
    /// Test for DeleteWorkbookNames of WorkbookController.
    /// </summary>

    public function testDeleteWorkbookNames()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorkbookNamesRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorkbookNames($request);
    }

    /// <summary>
    /// Test for DeleteWorkbookName of WorkbookController.
    /// </summary>

    public function testDeleteWorkbookName()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorkbookNameRequest();
        $request->setName( $remoteName);
        $request->setNameName( "Name_2");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorkbookName($request);
    }

    /// <summary>
    /// Test for PutDocumentProtectFromChanges of WorkbookController.
    /// </summary>

    public function testPutDocumentProtectFromChanges()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $password = new \Aspose\Cells\Cloud\Model\PasswordRequest();
        $password->setPassword("123456" ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutDocumentProtectFromChangesRequest();
        $request->setName( $remoteName);
        $request->setPassword( $password);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putDocumentProtectFromChanges($request);
    }

    /// <summary>
    /// Test for DeleteDocumentUnProtectFromChanges of WorkbookController.
    /// </summary>

    public function testDeleteDocumentUnProtectFromChanges()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteDocumentUnProtectFromChangesRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteDocumentUnProtectFromChanges($request);
    }

    /// <summary>
    /// Test for PostWorkbooksMerge of WorkbookController.
    /// </summary>

    public function testPostWorkbooksMerge()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $myDocumentXLSX = "myDocument.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $this->instance,$myDocumentXLSX ,$remoteFolder . "/myDocument.xlsx" ,  "");
     
        $request = new PostWorkbooksMergeRequest();
        $request->setName( $remoteName);
        $request->setMergeWith( $remoteFolder . "/myDocument.xlsx");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $request->setMergedStorageName( "");
        $this->instance->postWorkbooksMerge($request);
    }

    /// <summary>
    /// Test for PostWorkbooksTextSearch of WorkbookController.
    /// </summary>

    public function testPostWorkbooksTextSearch()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbooksTextSearchRequest();
        $request->setName( $remoteName);
        $request->setText( "1234");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorkbooksTextSearch($request);
    }

    /// <summary>
    /// Test for PostWorkbooksTextReplace of WorkbookController.
    /// </summary>

    public function testPostWorkbookTextReplace()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookTextReplaceRequest();
        $request->setName( $remoteName);
        $request->setOldValue( "1234");
        $request->setNewValue( "5678");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorkbookTextReplace($request);
    }

    /// <summary>
    /// Test for PostWorkbookGetSmartMarkerResult of WorkbookController.
    /// </summary>

    public function testPostWorkbookGetSmartMarkerResult()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $reportDataXML = "ReportData.xml";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $this->instance,$reportDataXML ,$remoteFolder . "/ReportData.xml" ,  "");
     
        $request = new PostWorkbookGetSmartMarkerResultRequest();
        $request->setName( $remoteName);
        $request->setXmlFile( $remoteFolder . "/ReportData.xml");
        $request->setFolder( $remoteFolder);
        $request->setOutPath( "OutResult/SmartMarkerResult.xlsx");
        $request->setStorageName( "");
        $request->setOutStorageName( "");
        $this->instance->postWorkbookGetSmartMarkerResult($request);
    }

    /// <summary>
    /// Test for PutWorkbookCreate of WorkbookController.
    /// </summary>

    public function testPutWorkbookCreate()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $reportDataXML = "ReportData.xml";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $this->instance,$reportDataXML ,$remoteFolder . "/ReportData.xml" ,  "");
     
        $request = new PutWorkbookCreateRequest();
        $request->setName( "PutWorkbookCreate.xlsx");
        $request->setTemplateFile( $remoteFolder . "/" . $remoteName);
        $request->setDataFile( $remoteFolder . "/ReportData.xml");
        $request->setIsWriteOver( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $request->setCheckExcelRestriction( 'true');
        $this->instance->putWorkbookCreate($request);
    }

    /// <summary>
    /// Test for PostWorkbookSplit of WorkbookController.
    /// </summary>

    public function testPostWorkbookSplit()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSplitRequest();
        $request->setName( $remoteName);
        $request->setFormat( "png");
        $request->setOutFolder( "OutResult");
        $request->setFrom( 1);
        $request->setTo( 5);
        $request->setSplitNameRule( "sheetname");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $request->setOutStorageName( "");
        $this->instance->postWorkbookSplit($request);
    }

    /// <summary>
    /// Test for PostImportData of WorkbookController.
    /// </summary>

    public function testPostImportData()
    {
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
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostImportDataRequest();
        $request->setName( $remoteName);
        $request->setImportOption( $importOption);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postImportData($request);
    }

    /// <summary>
    /// Test for PostWorkbookCalculateFormula of WorkbookController.
    /// </summary>

    public function testPostWorkbookCalculateFormula()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $options = new \Aspose\Cells\Cloud\Model\CalculationOptions();
        $options->setIgnoreError('true' ); 
        $options->setRecursive('true' ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookCalculateFormulaRequest();
        $request->setName( $remoteName);
        $request->setOptions( $options);
        $request->setIgnoreError( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorkbookCalculateFormula($request);
    }

    /// <summary>
    /// Test for PostAutofitWorkbookRows of WorkbookController.
    /// </summary>

    public function testPostAutofitWorkbookRows()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostAutofitWorkbookRowsRequest();
        $request->setName( $remoteName);
        $request->setStartRow( 1);
        $request->setEndRow( 100);
        $request->setOnlyAuto( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postAutofitWorkbookRows($request);
    }

    /// <summary>
    /// Test for PostAutofitWorkbookColumns of WorkbookController.
    /// </summary>

    public function testPostAutofitWorkbookColumns()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostAutofitWorkbookColumnsRequest();
        $request->setName( $remoteName);
        $request->setStartColumn( 1);
        $request->setEndColumn( 20);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postAutofitWorkbookColumns($request);
    }

    /// <summary>
    /// Test for GetWorkbookSettings of WorkbookController.
    /// </summary>

    public function testGetWorkbookSettings()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorkbookSettingsRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getWorkbookSettings($request);
    }

    /// <summary>
    /// Test for PostWorkbookSettings of WorkbookController.
    /// </summary>

    public function testPostWorkbookSettings()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $settings = new \Aspose\Cells\Cloud\Model\WorkbookSettings();
        $settings->setAutoCompressPictures('true' ); 
        $settings->setHidePivotFieldList('true' ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorkbookSettingsRequest();
        $request->setName( $remoteName);
        $request->setSettings( $settings);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postWorkbookSettings($request);
    }

    /// <summary>
    /// Test for PutWorkbookBackground of WorkbookController.
    /// </summary>

    public function testPutWorkbookBackground()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $waterMarkPNG = "WaterMark.png";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
        CellsApiTestBase::ready(  $this->instance,$waterMarkPNG ,$remoteFolder . "/WaterMark.png" ,  "");
     
        $request = new PutWorkbookBackgroundRequest();
        $request->setName( $remoteName);
        $request->setPicPath( $remoteFolder . "/WaterMark.png");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putWorkbookBackground($request);
    }

    /// <summary>
    /// Test for DeleteWorkbookBackground of WorkbookController.
    /// </summary>

    public function testDeleteWorkbookBackground()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorkbookBackgroundRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteWorkbookBackground($request);
    }

    /// <summary>
    /// Test for PutWorkbookWaterMarker of WorkbookController.
    /// </summary>

    public function testPutWorkbookWaterMarker()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $textWaterMarkerRequest = new \Aspose\Cells\Cloud\Model\TextWaterMarkerRequest();
        $textWaterMarkerRequest->setText("Aspose Cells Cloud" ); 
        $textWaterMarkerRequest->setFontSize(12 ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorkbookWaterMarkerRequest();
        $request->setName( $remoteName);
        $request->setTextWaterMarkerRequest( $textWaterMarkerRequest);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->putWorkbookWaterMarker($request);
    }

    /// <summary>
    /// Test for GetPageCount of WorkbookController.
    /// </summary>

    public function testGetPageCount()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetPageCountRequest();
        $request->setName( $remoteName);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getPageCount($request);
    }
}