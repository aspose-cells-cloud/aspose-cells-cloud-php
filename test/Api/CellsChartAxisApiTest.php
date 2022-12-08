<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;

use \Aspose\Cells\Cloud\Model\Axis;

class CellsChartAxisApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsChartsGetChartCategoryAxis
     *
     * Get chart area info..
     *
     */
    public function testCellsChartsGetChartCategoryAxis()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet4';
        $chartIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsGetChartCategoryAxis($name, $sheet_name,$chartIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

       /**
     * Test case for cellsChartsGetChartSecondCategoryAxis
     *
     * Get chart area info..
     *
     */
    public function testCellsChartsGetChartSecondCategoryAxis()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet4';
        $chartIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsGetChartSecondCategoryAxis($name, $sheet_name,$chartIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsGetChartValueAxis
     *
     * Get chart area info..
     *
     */
    public function testCellsChartsGetChartValueAxis()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet4';
        $chartIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsGetChartValueAxis($name, $sheet_name,$chartIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsGetChartSecondValueAxis
     *
     * Get chart area info..
     *
     */
    public function testCellsChartsGetChartSecondValueAxis()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet4';
        $chartIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsGetChartSecondValueAxis($name, $sheet_name,$chartIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }    
        /**
     * Test case for cellsChartsGetChartSeriesAxis
     *
     * Get chart area info..
     *
     */
    public function testCellsChartsGetChartSeriesAxis()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet4';
        $chartIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsGetChartSeriesAxis($name, $sheet_name,$chartIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }



    

    /**
     * Test case for cellsChartsGetChartCategoryAxis
     *
     * Get chart area info..
     *
     */
    public function testCellsChartsPostChartCategoryAxis()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet4';
        $chartIndex = 0;  
        $folder = "Temp";
        $axis = new Axis(); 
        $axis->setMinValue(10.0);
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsPostChartCategoryAxis($name, $sheet_name,$chartIndex,$axis , $folder);
        $this->assertEquals(200, $result['code']);
    }

       /**
     * Test case for cellsChartsPostChartSecondCategoryAxis
     *
     * Get chart area info..
     *
     */
    public function testCellsChartsPostChartSecondCategoryAxis()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet4';
        $chartIndex = 0;  
        $folder = "Temp";
        $axis = new Axis(); 
        $axis->setMinValue(10.0);
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsPostChartSecondCategoryAxis($name, $sheet_name,$chartIndex,$axis, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsPostChartValueAxis
     *
     * Get chart area info..
     *
     */
    public function testCellsChartsPostChartValueAxis()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet4';
        $chartIndex = 0;  
        $folder = "Temp";
        $axis = new Axis(); 
        $axis->setMinValue(10.0);
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsPostChartValueAxis($name, $sheet_name,$chartIndex, $axis,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsPostChartSecondValueAxis
     *
     * Get chart area info..
     *
     */
    public function testCellsChartsPostChartSecondValueAxis()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet4';
        $chartIndex = 0;  
        $folder = "Temp";
        $axis = new Axis(); 
        $axis->setMinValue(10.0);
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsPostChartSecondValueAxis($name, $sheet_name,$chartIndex,$axis, $folder);
        $this->assertEquals(200, $result['code']);
    }    
        /**
     * Test case for cellsChartsPostChartSeriesAxis
     *
     * Get chart area info..
     *
     */
    public function testCellsChartsPostChartSeriesAxis()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet4';
        $chartIndex = 0;  
        $folder = "Temp";
        $axis = new Axis(); 
        $axis->setMinValue(10.0);
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsPostChartSeriesAxis($name, $sheet_name,$chartIndex,$axis, $folder);
        $this->assertEquals(200, $result['code']);
    }


}
