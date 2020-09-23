<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;

class CellsPageBreaksApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsPageBreaksDeleteHorizontalPageBreak
     *
     * .
     *
     */
    public function testCellsPageBreaksDeleteHorizontalPageBreak()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageBreaksDeleteHorizontalPageBreak($name, $sheet_name,$index,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageBreaksDeleteHorizontalPageBreaks
     *
     * .
     *
     */
    public function testCellsPageBreaksDeleteHorizontalPageBreaks()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $row = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageBreaksDeleteHorizontalPageBreaks($name, $sheet_name,$row,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageBreaksDeleteVerticalPageBreak
     *
     * .
     *
     */
    public function testCellsPageBreaksDeleteVerticalPageBreak()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageBreaksDeleteVerticalPageBreak($name, $sheet_name,$index,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageBreaksDeleteVerticalPageBreaks
     *
     * .
     *
     */
    public function testCellsPageBreaksDeleteVerticalPageBreaks()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $column = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageBreaksDeleteVerticalPageBreaks($name, $sheet_name,$column,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageBreaksGetHorizontalPageBreak
     *
     * .
     *
     */
    public function testCellsPageBreaksGetHorizontalPageBreak()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageBreaksGetHorizontalPageBreak($name, $sheet_name,$index,$folder);
        $this->assertEquals(200, $result['code']);
    }


    /**
     * Test case for cellsPageBreaksGetHorizontalPageBreaks
     *
     * .
     *
     */
    public function testCellsPageBreaksGetHorizontalPageBreaks()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageBreaksGetHorizontalPageBreaks($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageBreaksGetVerticalPageBreak
     *
     * .
     *
     */
    public function testCellsPageBreaksGetVerticalPageBreak()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageBreaksGetVerticalPageBreak($name, $sheet_name,$index,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageBreaksGetVerticalPageBreaks
     *
     * .
     *
     */
    public function testCellsPageBreaksGetVerticalPageBreaks()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageBreaksGetVerticalPageBreaks($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageBreaksPutHorizontalPageBreak
     *
     * .
     *
     */
    public function testCellsPageBreaksPutHorizontalPageBreak()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $cellname = 'A1';     
        $row = 1;  
        $column = 1;  
        $startColumn = 1;  
        $endColumn = 1;      
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageBreaksPutHorizontalPageBreak($name, $sheet_name, $cellname,$row, $column ,$startColumn,$endColumn,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageBreaksPutVerticalPageBreak
     *
     * .
     *
     */
    public function testCellsPageBreaksPutVerticalPageBreak()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $cellname = 'A1';     
        $row = 1;  
        $column = 1;  
        $startRow = 1;  
        $endRow = 1;      
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageBreaksPutVerticalPageBreak($name, $sheet_name, $cellname,$row, $column ,$startRow,$endRow,$folder);
        $this->assertEquals(200, $result['code']);
    }
}
