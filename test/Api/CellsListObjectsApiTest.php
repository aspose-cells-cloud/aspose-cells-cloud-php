<?php
namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\ListObject;
use \Aspose\Cells\Cloud\Model\DataSorter;
use \Aspose\Cells\Cloud\Model\CreatePivotTableRequest;


class CellsListObjectsApiTest extends \PHPUnit_Framework_TestCase
{

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
        $this->instance = CellsApiTestBase::getInstance();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for cellsListObjectsDeleteWorksheetListObject
     *
     * Delete worksheet list object by index.
     *
     */
    public function testCellsListObjectsDeleteWorksheetListObject()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet7';
        $listObjectIndex = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsListObjectsDeleteWorksheetListObject($name, $sheet_name , $listObjectIndex , $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsListObjectsDeleteWorksheetListObjects
     *
     * Delete worksheet list objects.
     *
     */
    public function testCellsListObjectsDeleteWorksheetListObjects()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet7';
        $listObjectIndex = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsListObjectsDeleteWorksheetListObjects($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsListObjectsGetWorksheetListObject
     *
     * Get worksheet list object info by index..
     *
     */
    public function testCellsListObjectsGetWorksheetListObject()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet7';
        $listObjectIndex = 0;         
        $folder = "Temp";
        $format ='pdf';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsListObjectsGetWorksheetListObject($name, $sheet_name,$listObjectIndex,$format,$folder);
        // $this->assert($result);
    }

    /**
     * Test case for cellsListObjectsGetWorksheetListObjects
     *
     * Get worksheet listobjects info..
     *
     */
    public function testCellsListObjectsGetWorksheetListObjects()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet7';
        $listObjectIndex = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsListObjectsGetWorksheetListObjects($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsListObjectsPostWorksheetListObject
     *
     * Update  list object.
     *
     */
    public function testCellsListObjectsPostWorksheetListObject()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet7';
        $listObjectIndex = 0;   
        $listObject = new ListObject();
        $listObject->setShowHeaderRow('true');
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsListObjectsPostWorksheetListObject($name, $sheet_name,$listObjectIndex,$listObject,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsListObjectsPostWorksheetListObjectConvertToRange
     *
     * .
     *
     */
    public function testCellsListObjectsPostWorksheetListObjectConvertToRange()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet7';
        $listObjectIndex = 0;   
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsListObjectsPostWorksheetListObjectConvertToRange($name, $sheet_name,$listObjectIndex,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsListObjectsPostWorksheetListObjectSortTable
     *
     * .
     *
     */
    public function testCellsListObjectsPostWorksheetListObjectSortTable()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet7';
        $listObjectIndex = 0;   
        $dataSorter = new DataSorter();
        $dataSorter->setCaseSensitive('true');
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsListObjectsPostWorksheetListObjectSortTable($name, $sheet_name,$listObjectIndex,$dataSorter,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsListObjectsPostWorksheetListObjectSummarizeWithPivotTable
     *
     * .
     *
     */
    public function testCellsListObjectsPostWorksheetListObjectSummarizeWithPivotTable()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet7';
        $listObjectIndex = 0; 
        $destsheetName = "Sheet2";  
        $request = new CreatePivotTableRequest();
        $request->setDestCellName('C1');
        $request->setName('testp');
        $request->setPivotFieldColumns(array(2));
        $request->setPivotFieldData(array(0));
        $request->setPivotFieldRows(array(1));
        $request->setSourceData('=Sheet2!A1:E8');
        $request->setUseSameSource('true');
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsListObjectsPostWorksheetListObjectSummarizeWithPivotTable($name, $sheet_name,$listObjectIndex,$destsheetName, $request,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsListObjectsPutWorksheetListObject
     *
     * Add a list object into worksheet..
     *
     */
    public function testCellsListObjectsPutWorksheetListObject()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet7';        
        $startRow = 1;      
        $startColumn =1; 
        $endRow = 2; 
        $endColumn = 3;         
        $folder = "Temp";
        $hasHeaders = 'true';  
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsListObjectsPutWorksheetListObject($name, $sheet_name,$startRow,$startColumn, $endRow, $endColumn,$hasHeaders,null,$folder,null);
        $this->assertEquals(200, $result['code']);
    }

}
