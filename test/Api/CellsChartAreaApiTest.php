<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;


class CellsChartAreaApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsChartAreaGetChartArea
     *
     * Get chart area info..
     *
     */
    public function testCellsChartAreaGetChartArea()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartAreaGetChartArea($name, $sheet_name,$chartIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartAreaGetChartAreaBorder
     *
     * Get chart area border info..
     *
     */
    public function testCellsChartAreaGetChartAreaBorder()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartAreaGetChartAreaBorder($name, $sheet_name,$chartIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartAreaGetChartAreaFillFormat
     *
     * Get chart area fill format info..
     *
     */
    public function testCellsChartAreaGetChartAreaFillFormat()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartAreaGetChartAreaFillFormat($name, $sheet_name,$chartIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }
}
