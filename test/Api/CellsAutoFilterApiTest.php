<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\ColorFilterRequest;
use \Aspose\Cells\Cloud\Model\Color;
use \Aspose\Cells\Cloud\Model\CellsColor;
use \Aspose\Cells\Cloud\Model\ThemeColor;

class CellsAutoFilterApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsAutoFilterDeleteWorksheetDateFilter
     *
     * Removes a date filter..
     *
     */
    public function testCellsAutoFilterDeleteWorksheetDateFilter()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $fieldIndex = 0;  
        $dateTimeGroupingType ="Day";
        $year = 2010;
        $month = 10;
        $day = 10;
        $hour = 10;
        $minute = 10;
        $second = 10;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoFilterDeleteWorksheetDateFilter($name, $sheet_name,$fieldIndex, $dateTimeGroupingType,$year,$month,$day,$hour,$minute,$second,$folder);
        $this->assertEquals(200, $result['code']);
    }


    /**
     * Test case for cellsAutoFilterDeleteWorksheetFilter
     *
     * Delete a filter for a filter column..
     *
     */
    public function testCellsAutoFilterDeleteWorksheetFilter()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $fieldIndex = 0;  
        $criteria ="Day";       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoFilterDeleteWorksheetFilter($name, $sheet_name,$fieldIndex, $criteria,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsAutoFilterGetWorksheetAutoFilter
     *
     * Get Auto filter Description.
     *
     */
    public function testCellsAutoFilterGetWorksheetAutoFilter()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';     
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoFilterGetWorksheetAutoFilter($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsAutoFilterPostWorksheetAutoFilterRefresh
     *
     * .
     *
     */
    public function testCellsAutoFilterPostWorksheetAutoFilterRefresh()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';     
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoFilterPostWorksheetAutoFilterRefresh($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsAutoFilterPostWorksheetMatchBlanks
     *
     * Match all blank cell in the list..
     *
     */
    public function testCellsAutoFilterPostWorksheetMatchBlanks()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $fieldIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoFilterPostWorksheetMatchBlanks($name, $sheet_name,$fieldIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }


    /**
     * Test case for cellsAutoFilterPostWorksheetMatchNonBlanks
     *
     * Match all not blank cell in the list..
     *
     */
    public function testCellsAutoFilterPostWorksheetMatchNonBlanks()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $fieldIndex = 0;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoFilterPostWorksheetMatchNonBlanks($name, $sheet_name,$fieldIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsAutoFilterPutWorksheetColorFilter
     *
     * .
     *
     */
    public function testCellsAutoFilterPutWorksheetColorFilter()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $range ='A1:C10';
        $fieldIndex = 0;  
        $colorFilter = new ColorFilterRequest();
        $color = new Color();
        $color->setR(255);
        $color->setA(255);
        $color->setB(255);
        $color->setG(0);
        $cellColor = new CellsColor();
        $themeColor = new ThemeColor();
        $themeColor->setColorType("Text2");
        $themeColor->setTint(1.0);
        $cellColor->setType("Automatic");
        $cellColor->setColor($color );
        $cellColor->setThemeColor($themeColor );
        $colorFilter->setForegroundColor($cellColor);

        $color1 = new Color();
        $color1->setR(255);
        $color1->setA(255);
        $color1->setB(255);
        $color1->setG(0);
        $cellColor1 = new CellsColor();
        $themeColor1 = new ThemeColor();
        $themeColor1->setColorType("Text2");
        $themeColor1->setTint(1.0);
        $cellColor1->setType("Automatic");
        $cellColor1->setColor($color1 );
        $cellColor1->setThemeColor($themeColor1 );
        $colorFilter->setBackgroundColor($cellColor1);

        $colorFilter->setPattern('Solid' );
        $matchBlanks ='true';
        $refresh ='true';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoFilterPutWorksheetColorFilter($name, $sheet_name,$range ,$fieldIndex, $colorFilter , $matchBlanks, $refresh, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsAutoFilterPutWorksheetCustomFilter
     *
     * Filters a list with a custom criteria..
     *
     */
    public function testCellsAutoFilterPutWorksheetCustomFilter()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $range ='A1:C10';
        $fieldIndex = 0;  
        $operatorType1 ="LessOrEqual";
        $criteria1 ="test";
        $isAnd = 'true';
        $operatorType2 =  "LessOrEqual";
        $criteria2 =  "test";
        $matchBlanks ='true';
        $refresh ='true';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoFilterPutWorksheetCustomFilter($name, $sheet_name,$range ,$fieldIndex, $operatorType1 , $criteria1,$isAnd, $operatorType2 , $criteria2,$matchBlanks, $refresh, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsAutoFilterPutWorksheetDateFilter
     *
     * add date filter in worksheet.
     *
     */
    public function testCellsAutoFilterPutWorksheetDateFilter()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $range ='A1:C10';
        $fieldIndex = 0;  
        $dateTimeGroupingType ="Day";
        $year = 2010;
        $month = 10;
        $day = 10;
        $hour = 10;
        $minute = 10;
        $second = 10;
        $matchBlanks ='true';
        $refresh ='true';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoFilterPutWorksheetDateFilter($name, $sheet_name, $range,$fieldIndex, $dateTimeGroupingType,$year,$month,$day,$hour,$minute,$second,$matchBlanks, $refresh,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsAutoFilterPutWorksheetDynamicFilter
     *
     * .
     *
     */
    public function testCellsAutoFilterPutWorksheetDynamicFilter()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $range ='A1:C10';
        $fieldIndex = 0;  
        $dynamicFilterType ="May";        
        $matchBlanks ='true';
        $refresh ='true';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoFilterPutWorksheetDynamicFilter($name, $sheet_name, $range,$fieldIndex, $dynamicFilterType,$matchBlanks, $refresh,$folder);
        $this->assertEquals(200, $result['code']);
    }


    /**
     * Test case for cellsAutoFilterPutWorksheetFilter
     *
     * Adds a filter for a filter column..
     *
     */
    public function testCellsAutoFilterPutWorksheetFilter()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $range ='A1:C10';
        $fieldIndex = 0;  
        $criteria ="May";        
        $matchBlanks ='true';
        $refresh ='true';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoFilterPutWorksheetFilter($name, $sheet_name, $range,$fieldIndex, $criteria,$matchBlanks, $refresh,$folder);
        $this->assertEquals(200, $result['code']);
    }
    /**
     * Test case for cellsAutoFilterPutWorksheetFilterTop10
     *
     * Filter the top 10 item in the list.
     *
     */
    public function testCellsAutoFilterPutWorksheetFilterTop10()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $range ='A1:C10';
        $fieldIndex = 0;  
        $isTop ='true';
        $isPercent ='true';
        $itemCount =1;        
        $matchBlanks ='true';
        $refresh ='true';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoFilterPutWorksheetFilterTop10($name, $sheet_name, $range,$fieldIndex, $isTop,$isPercent, $itemCount, $matchBlanks, $refresh,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsAutoFilterPutWorksheetIconFilter
     *
     * Adds an icon filter..
     *
     */
    public function testCellsAutoFilterPutWorksheetIconFilter()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $range ='A1:C10';
        $fieldIndex = 0;  
        $iconSetType ='None';
        $iconId =1;        
        $matchBlanks ='true';
        $refresh ='true';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoFilterPutWorksheetIconFilter($name, $sheet_name, $range,$fieldIndex, $iconSetType,$iconId, $matchBlanks, $refresh,$folder);
        $this->assertEquals(200, $result['code']);
    }
}
