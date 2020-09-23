<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\Chart;
use \Aspose\Cells\Cloud\Model\Legend;
use \Aspose\Cells\Cloud\Model\Title;

class CellsChartsApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsChartsDeleteWorksheetChartLegend
     *
     * Hide legend in chart.
     *
     */
    public function testCellsChartsDeleteWorksheetChartLegend()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 1;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsDeleteWorksheetChartLegend($name, $sheet_name,$chartIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsDeleteWorksheetChartTitle
     *
     * Hide title in chart.
     *
     */
    public function testCellsChartsDeleteWorksheetChartTitle()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 1;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsDeleteWorksheetChartTitle($name, $sheet_name,$chartIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsDeleteWorksheetClearCharts
     *
     * Clear the charts..
     *
     */
    public function testCellsChartsDeleteWorksheetClearCharts()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 1;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsDeleteWorksheetClearCharts($name, $sheet_name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsDeleteWorksheetDeleteChart
     *
     * Delete worksheet chart by index..
     *
     */
    public function testCellsChartsDeleteWorksheetDeleteChart()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsDeleteWorksheetDeleteChart($name, $sheet_name,$chartIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }
    /**
     * Test case for cellsChartsGetWorksheetChart
     *
     * Get chart info..
     *
     */
    public function testCellsChartsGetWorksheetChart()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 0;  
        $format = "png";
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsGetWorksheetChart($name, $sheet_name,$chartIndex, $format, $folder);
        $this->assertTrue($result->getSize() > 0, "");
    }

    /**
     * Test case for cellsChartsGetWorksheetChartLegend
     *
     * Get chart legend.
     *
     */
    public function testCellsChartsGetWorksheetChartLegend()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsGetWorksheetChartLegend($name, $sheet_name,$chartIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsGetWorksheetChartTitle
     *
     * Get chart title.
     *
     */
    public function testCellsChartsGetWorksheetChartTitle()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsGetWorksheetChartTitle($name, $sheet_name,$chartIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsGetWorksheetCharts
     *
     * Get worksheet charts info..
     *
     */
    public function testCellsChartsGetWorksheetCharts()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsGetWorksheetCharts($name, $sheet_name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsPostWorksheetChart
     *
     * Update chart propreties.
     *
     */
    public function testCellsChartsPostWorksheetChart()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 0;  
        $chart = new Chart();
        $chart->setAutoScaling('true');
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsPostWorksheetChart($name, $sheet_name, $chartIndex , $chart , $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsPostWorksheetChartLegend
     *
     * Update chart legend.
     *
     */
    public function testCellsChartsPostWorksheetChartLegend()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 0;  
        $legend = new Legend();
        $legend->setWidth(10);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsPostWorksheetChartLegend($name, $sheet_name, $chartIndex , $legend , $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsPostWorksheetChartTitle
     *
     * Update chart title.
     *
     */
    public function testCellsChartsPostWorksheetChartTitle()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 0;  
        $legend = new Legend();
        $legend->setWidth(10);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsPostWorksheetChartLegend($name, $sheet_name, $chartIndex , $legend , $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsPutWorksheetAddChart
     *
     * Add new chart to worksheet..
     *
     */
    public function testCellsChartsPutWorksheetAddChart()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartType = 'Pie';  
        $upperLeftRow = 5;  
        $upperLeftColumn = 5; 
        $lowerRightRow = 10; 
        $lowerRightColumn = 10; 
        $area =  "C7:D11"; 
        $isVertical = 'true';  
        $categoryData = null;  
        $isAutoGetSerialName = null;  
        $title = null;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsPutWorksheetAddChart($name, $sheet_name, $chartType , $upperLeftRow , $upperLeftColumn, $lowerRightRow, $lowerRightColumn,         $area, $isVertical, $categoryData,$isAutoGetSerialName,$title, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsPutWorksheetChartLegend
     *
     * Show legend in chart.
     *
     */
    public function testCellsChartsPutWorksheetChartLegend()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsPutWorksheetChartLegend($name, $sheet_name, $chartIndex , $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsChartsPutWorksheetChartTitle
     *
     * Add chart title / Set chart title visible.
     *
     */
    public function testCellsChartsPutWorksheetChartTitle()
    {
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet3';
        $chartIndex = 0;  
        $title = new Title();
        $title->setText(10);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsChartsPutWorksheetChartTitle($name, $sheet_name, $chartIndex ,$title, $folder);
        $this->assertEquals(200, $result['code']);
    }
}
