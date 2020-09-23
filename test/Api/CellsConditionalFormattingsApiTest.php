<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\FormatCondition;

class CellsConditionalFormattingsApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsConditionalFormattingsDeleteWorksheetConditionalFormatting
     *
     * Remove conditional formatting.
     *
     */
    public function testCellsConditionalFormattingsDeleteWorksheetConditionalFormatting()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsConditionalFormattingsDeleteWorksheetConditionalFormatting($name, $sheet_name,$index,$folder);
        $this->assertEquals(200, $result['code']);
    }


    /**
     * Test case for cellsConditionalFormattingsDeleteWorksheetConditionalFormattingArea
     *
     * Remove cell area from conditional formatting..
     *
     */
    public function testCellsConditionalFormattingsDeleteWorksheetConditionalFormattingArea()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $startRow = 1;    
        $startColumn = 1;
        $totalRows = 4;
        $totalColumns = 6;     
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsConditionalFormattingsDeleteWorksheetConditionalFormattingArea($name, $sheet_name,$startRow,$startColumn, $totalRows,$totalColumns,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsConditionalFormattingsDeleteWorksheetConditionalFormattings
     *
     * Clear all condition formattings.
     *
     */
    public function testCellsConditionalFormattingsDeleteWorksheetConditionalFormattings()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';   
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsConditionalFormattingsDeleteWorksheetConditionalFormattings($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsConditionalFormattingsGetWorksheetConditionalFormatting
     *
     * Get conditional formatting.
     *
     */
    public function testCellsConditionalFormattingsGetWorksheetConditionalFormatting()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsConditionalFormattingsGetWorksheetConditionalFormatting($name, $sheet_name,$index,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsConditionalFormattingsGetWorksheetConditionalFormattings
     *
     * Get conditional formattings.
     *
     */
    public function testCellsConditionalFormattingsGetWorksheetConditionalFormattings()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsConditionalFormattingsGetWorksheetConditionalFormattings($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsConditionalFormattingsPutWorksheetConditionalFormatting
     *
     * Add a condition formatting..
     *
     */
    public function testCellsConditionalFormattingsPutWorksheetConditionalFormatting()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $cellArea = "A1:C10";         
        $formatcondition = new FormatCondition();
        $formatcondition->setType("CellValue");
        $formatcondition->setOperator("Between");
        $formatcondition->setFormula1("v1");
        $formatcondition->setFormula2("v2");
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsConditionalFormattingsPutWorksheetConditionalFormatting($name, $sheet_name,$cellArea,$formatcondition,$folder);
        $this->assertEquals(200, $result['code']);
    }


    /**
     * Test case for cellsConditionalFormattingsPutWorksheetFormatCondition
     *
     * Add a format condition..
     *
     */
    public function testCellsConditionalFormattingsPutWorksheetFormatCondition()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;     
        $cellArea = "A1:C10";     
        $type = "CellValue";     
        $operatorType = "Between";     
        $formula1 = "v1";     
        $formula2 = "v2";         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsConditionalFormattingsPutWorksheetFormatCondition($name, $sheet_name,$index , $cellArea,   $type,  $operatorType ,$formula1,$formula2, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsConditionalFormattingsPutWorksheetFormatConditionArea
     *
     * add a cell area for format condition.
     *
     */
    public function testCellsConditionalFormattingsPutWorksheetFormatConditionArea()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;       
        $cellArea = "A1:C10";       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsConditionalFormattingsPutWorksheetFormatConditionArea($name, $sheet_name, $index, $cellArea , $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsConditionalFormattingsPutWorksheetFormatConditionCondition
     *
     * Add a condition for format condition..
     *
     */
    public function testCellsConditionalFormattingsPutWorksheetFormatConditionCondition()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;      
        $type = "CellValue";     
        $operatorType = "Between";     
        $formula1 = "v1";     
        $formula2 = "v2";         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsConditionalFormattingsPutWorksheetFormatConditionCondition($name, $sheet_name, $index , $type,  $operatorType ,$formula1,$formula2, $folder);
        $this->assertEquals(200, $result['code']);
    }
}
