<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PivotTablesControllerTests.php.cs">
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
use \Aspose\Cells\Cloud\Request\DeletePivotTableFieldRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetPivotTableFilterRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetPivotTableFiltersRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetPivotTableRequest; 
use \Aspose\Cells\Cloud\Request\DeleteWorksheetPivotTablesRequest; 
use \Aspose\Cells\Cloud\Request\GetPivotTableFieldRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetPivotTableFilterRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetPivotTableFiltersRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetPivotTableRequest; 
use \Aspose\Cells\Cloud\Request\GetWorksheetPivotTablesRequest; 
use \Aspose\Cells\Cloud\Request\PostPivotTableCellStyleRequest; 
use \Aspose\Cells\Cloud\Request\PostPivotTableFieldHideItemRequest; 
use \Aspose\Cells\Cloud\Request\PostPivotTableFieldMoveToRequest; 
use \Aspose\Cells\Cloud\Request\PostPivotTableStyleRequest; 
use \Aspose\Cells\Cloud\Request\PostPivotTableUpdatePivotFieldRequest; 
use \Aspose\Cells\Cloud\Request\PostPivotTableUpdatePivotFieldsRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetPivotTableCalculateRequest; 
use \Aspose\Cells\Cloud\Request\PostWorksheetPivotTableMoveRequest; 
use \Aspose\Cells\Cloud\Request\PutPivotTableFieldRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetPivotTableFilterRequest; 
use \Aspose\Cells\Cloud\Request\PutWorksheetPivotTableRequest; 

use PHPUnit\Framework\TestCase;
final class PivotTablesControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetWorksheetPivotTables of PivotTablesController.
    /// </summary>

    public function testGetWorksheetPivotTables()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetPivotTablesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetPivotTables($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetPivotTable of PivotTablesController.
    /// </summary>

    public function testGetWorksheetPivotTable()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetPivotTableRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivottableIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetPivotTable($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetPivotTableField of PivotTablesController.
    /// </summary>

    public function testGetPivotTableField()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetPivotTableFieldRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setPivotFieldIndex( 0);
        $request->setPivotFieldType( "Row");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getPivotTableField($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetPivotTableFilters of PivotTablesController.
    /// </summary>

    public function testGetWorksheetPivotTableFilters()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetPivotTableFiltersRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetPivotTableFilters($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for GetWorksheetPivotTableFilter of PivotTablesController.
    /// </summary>

    public function testGetWorksheetPivotTableFilter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetWorksheetPivotTableFilterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet3");
        $request->setPivotTableIndex( 0);
        $request->setFilterIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getWorksheetPivotTableFilter($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetPivotTable of PivotTablesController.
    /// </summary>

    public function testPutWorksheetPivotTable()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetPivotTableRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setFolder( $remoteFolder);
        $request->setSourceData( "=Sheet1!C6:E13");
        $request->setDestCellName( "C1");
        $request->setTableName( "TestPivot");
        $request->setUseSameSource( 'true');
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetPivotTable($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutPivotTableField of PivotTablesController.
    /// </summary>

    public function testPutPivotTableField()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        $pivotTableFieldRequestData = array (
            0
        );
        $pivotTableFieldRequest = new \Aspose\Cells\Cloud\Model\PivotTableFieldRequest();
        $pivotTableFieldRequest->setData($pivotTableFieldRequestData ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutPivotTableFieldRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setPivotFieldType( "Row");
        $request->setPivotTableFieldRequest( $pivotTableFieldRequest);
        $request->setNeedReCalculate( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putPivotTableField($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PutWorksheetPivotTableFilter of PivotTablesController.
    /// </summary>

    public function testPutWorksheetPivotTableFilter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        $filter = new \Aspose\Cells\Cloud\Model\PivotFilter();
        $filter->setFieldIndex(1 ); 
        $filter->setFilterType("Count" ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PutWorksheetPivotTableFilterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setFilter( $filter);
        $request->setNeedReCalculate( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->putWorksheetPivotTableFilter($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostPivotTableFieldHideItem of PivotTablesController.
    /// </summary>

    public function testPostPivotTableFieldHideItem()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostPivotTableFieldHideItemRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setPivotFieldType( "Row");
        $request->setFieldIndex( 0);
        $request->setItemIndex( 1);
        $request->setIsHide( 'true');
        $request->setNeedReCalculate( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postPivotTableFieldHideItem($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostPivotTableFieldMoveTo of PivotTablesController.
    /// </summary>

    public function testPostPivotTableFieldMoveTo()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostPivotTableFieldMoveToRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setFieldIndex( 0);
        $request->setFrom( "Row");
        $request->setTo( "Column");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postPivotTableFieldMoveTo($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostPivotTableCellStyle of PivotTablesController.
    /// </summary>

    public function testPostPivotTableCellStyle()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        $styleFont = new \Aspose\Cells\Cloud\Model\Font();
        $styleFont->setSize(16 ); 
        $style = new \Aspose\Cells\Cloud\Model\Style();
        $style->setFont($styleFont ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostPivotTableCellStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setColumn( 1);
        $request->setRow( 1);
        $request->setStyle( $style);
        $request->setNeedReCalculate( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postPivotTableCellStyle($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostPivotTableStyle of PivotTablesController.
    /// </summary>

    public function testPostPivotTableStyle()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        $styleFont = new \Aspose\Cells\Cloud\Model\Font();
        $styleFont->setSize(16 ); 
        $style = new \Aspose\Cells\Cloud\Model\Style();
        $style->setFont($styleFont ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostPivotTableStyleRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setStyle( $style);
        $request->setNeedReCalculate( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postPivotTableStyle($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostPivotTableUpdatePivotFields of PivotTablesController.
    /// </summary>

    public function testPostPivotTableUpdatePivotFields()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        $pivotField = new \Aspose\Cells\Cloud\Model\PivotField();
        $pivotField->setShowCompact('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostPivotTableUpdatePivotFieldsRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setPivotFieldType( "Row");
        $request->setPivotField( $pivotField);
        $request->setNeedReCalculate( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postPivotTableUpdatePivotFields($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostPivotTableUpdatePivotField of PivotTablesController.
    /// </summary>

    public function testPostPivotTableUpdatePivotField()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        $pivotField = new \Aspose\Cells\Cloud\Model\PivotField();
        $pivotField->setShowCompact('true' ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostPivotTableUpdatePivotFieldRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setPivotFieldIndex( 0);
        $request->setPivotFieldType( "Row");
        $request->setPivotField( $pivotField);
        $request->setNeedReCalculate( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postPivotTableUpdatePivotField($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetPivotTableCalculate of PivotTablesController.
    /// </summary>

    public function testPostWorksheetPivotTableCalculate()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetPivotTableCalculateRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetPivotTableCalculate($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for PostWorksheetPivotTableMove of PivotTablesController.
    /// </summary>

    public function testPostWorksheetPivotTableMove()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostWorksheetPivotTableMoveRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setRow( 1);
        $request->setColumn( 1);
        $request->setDestCellName( "C10");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->postWorksheetPivotTableMove($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetPivotTables of PivotTablesController.
    /// </summary>

    public function testDeleteWorksheetPivotTables()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetPivotTablesRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetPivotTables($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetPivotTable of PivotTablesController.
    /// </summary>

    public function testDeleteWorksheetPivotTable()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetPivotTableRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetPivotTable($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeletePivotTableField of PivotTablesController.
    /// </summary>

    public function testDeletePivotTableField()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        $pivotTableFieldRequestData = array (
            0
        );
        $pivotTableFieldRequest = new \Aspose\Cells\Cloud\Model\PivotTableFieldRequest();
        $pivotTableFieldRequest->setData($pivotTableFieldRequestData ); 
        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeletePivotTableFieldRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet4");
        $request->setPivotTableIndex( 0);
        $request->setPivotFieldType( "Row");
        $request->setPivotTableFieldRequest( $pivotTableFieldRequest);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deletePivotTableField($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetPivotTableFilters of PivotTablesController.
    /// </summary>

    public function testDeleteWorksheetPivotTableFilters()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetPivotTableFiltersRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet3");
        $request->setPivotTableIndex( 0);
        $request->setNeedReCalculate( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetPivotTableFilters($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for DeleteWorksheetPivotTableFilter of PivotTablesController.
    /// </summary>

    public function testDeleteWorksheetPivotTableFilter()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "TestCase.xlsx";
        $remoteName = "TestCase.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteWorksheetPivotTableFilterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet3");
        $request->setPivotTableIndex( 0);
        $request->setFieldIndex( 0);
        $request->setNeedReCalculate( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->deleteWorksheetPivotTableFilter($request);
        $this->assertTrue($resposne !==null );
    }
}