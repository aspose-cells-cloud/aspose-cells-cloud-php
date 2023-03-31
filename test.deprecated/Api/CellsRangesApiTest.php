<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\Range;
use \Aspose\Cells\Cloud\Model\RangeSetOutlineBorderRequest;
use \Aspose\Cells\Cloud\Model\RangeSetStyleRequest;
use \Aspose\Cells\Cloud\Model\Style;
use \Aspose\Cells\Cloud\Model\Font;
use \Aspose\Cells\Cloud\Model\Color;
use \Aspose\Cells\Cloud\Model\RangeCopyRequest;
use \Aspose\Cells\Cloud\Model\PasteOptions;

class CellsRangesApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsRangesGetWorksheetCellsRangeValue
     *
     * Get cells list in a range by range name or row column indexes.
     *
     */
    public function testCellsRangesGetWorksheetCellsRangeValue()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        
        $firstRow = 0;
        $firstColumn = 0;
        $rowCount = 3;
        $columnCount = 2;
        $result = $this->instance->cellsRangesGetWorksheetCellsRangeValue($name, $sheet_name, null, $firstRow, $firstColumn, $rowCount, $columnCount, $folder);
        $this->assertEquals(200, $result['code']);
        
        $rangeName = "A1:B3";
        $result = $this->instance->cellsRangesGetWorksheetCellsRangeValue($name, $sheet_name, $rangeName, null, null, null, null, $folder);
        $this->assertEquals(200, $result['code']);
        
        $rangeName = "Name_2";
        $result = $this->instance->cellsRangesGetWorksheetCellsRangeValue($name, $sheet_name, $rangeName, null, null, null, null, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsRangesPostWorksheetCellsRangeColumnWidth
     *
     * Set column width of range.
     *
     */
    public function testCellsRangesPostWorksheetCellsRangeColumnWidth()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1';    
        $value = 10.01;
        $range = new Range();
        $range->setColumnCount(1);
        $range->setColumnWidth(10.1);
        $range->setFirstColumn(1);
        $range->setFirstRow(1);
        $range->setRowCount(10);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsRangesPostWorksheetCellsRangeColumnWidth($name, $sheet_name, $value,$range,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsRangesPostWorksheetCellsRangeMerge
     *
     * Combines a range of cells into a single cell..
     *
     */
    public function testCellsRangesPostWorksheetCellsRangeMerge()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1';    
        $range = new Range();
        $range->setColumnCount(1);
        $range->setColumnWidth(10.1);
        $range->setFirstColumn(1);
        $range->setFirstRow(1);
        $range->setRowCount(10);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsRangesPostWorksheetCellsRangeMerge($name, $sheet_name,$range,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsRangesPostWorksheetCellsRangeMoveTo
     *
     * Move the current range to the dest range..
     *
     */
    public function testCellsRangesPostWorksheetCellsRangeMoveTo()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1';  
        $destRow =1;
        $destColumn = 1;  
        $range = new Range();
        $range->setColumnCount(1);
        $range->setColumnWidth(10.1);
        $range->setFirstColumn(1);
        $range->setFirstRow(1);
        $range->setRowCount(10);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsRangesPostWorksheetCellsRangeMoveTo($name, $sheet_name,$destRow, $destColumn,$range,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsRangesPostWorksheetCellsRangeOutlineBorder
     *
     * Sets outline border around a range of cells..
     *
     */
    public function testCellsRangesPostWorksheetCellsRangeOutlineBorder()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1';  
        $rangeOperate = new RangeSetOutlineBorderRequest();
        $rangeOperate->setBorderEdge("LeftBorder");
        $rangeOperate->setBorderStyle("Dotted") ;
        $color = new Color();
        $color->setR(255);
        $rangeOperate->setBorderColor($color);
        $range = new Range();
        $range->setColumnCount(1);
        $range->setColumnWidth(10.1);
        $range->setFirstColumn(1);
        $range->setFirstRow(1);
        $range->setRowCount(10);
        $rangeOperate->setRange($range);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsRangesPostWorksheetCellsRangeOutlineBorder($name, $sheet_name,$rangeOperate,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsRangesPostWorksheetCellsRangeRowHeight
     *
     * set row height of range.
     *
     */
    public function testCellsRangesPostWorksheetCellsRangeRowHeight()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1';    
        $value = 10.01;
        $range = new Range();
        $range->setColumnCount(1);
        $range->setColumnWidth(10.1);
        $range->setFirstColumn(1);
        $range->setFirstRow(1);
        $range->setRowCount(10);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsRangesPostWorksheetCellsRangeRowHeight($name, $sheet_name, $value,$range,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsRangesPostWorksheetCellsRangeStyle
     *
     * Sets the style of the range..
     *
     */
    public function testCellsRangesPostWorksheetCellsRangeStyle()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1';    
        $rangeOperate = new RangeSetStyleRequest();
        $style = new Style();
        $font = new Font();
        $font->setSize(10);
        $style->setFont($font);
        $rangeOperate->setStyle($style);
        $range = new Range();
        $range->setColumnCount(1);
        $range->setColumnWidth(10.1);
        $range->setFirstColumn(1);
        $range->setFirstRow(1);
        $range->setRowCount(10);
        $rangeOperate->setRange($range);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsRangesPostWorksheetCellsRangeStyle($name, $sheet_name,$rangeOperate,$folder);
        $this->assertEquals(200, $result['code']);
    }


    /**
     * Test case for cellsRangesPostWorksheetCellsRangeUnMerge
     *
     * Unmerges merged cells of this range..
     *
     */
    public function testCellsRangesPostWorksheetCellsRangeUnMerge()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1';    
        $range = new Range();
        $range->setColumnCount(1);
        $range->setColumnWidth(10.1);
        $range->setFirstColumn(1);
        $range->setFirstRow(1);
        $range->setRowCount(10);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsRangesPostWorksheetCellsRangeUnMerge($name, $sheet_name,$range,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsRangesPostWorksheetCellsRangeValue
     *
     * Puts a value into the range, if appropriate the value will be converted to other data type and cell's number format will be reset..
     *
     */
    public function testCellsRangesPostWorksheetCellsRangeValue()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1'; 
        $value = "null";   
        $range = new Range();
        $range->setColumnCount(1);
        $range->setColumnWidth(10.1);
        $range->setFirstColumn(1);
        $range->setFirstRow(1);
        $range->setRowCount(10);
        $isConverted = 'true';
        $setStyle = 'true';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsRangesPostWorksheetCellsRangeValue($name, $sheet_name,$value,$range,$isConverted, $setStyle,$folder);
        $this->assertEquals(200, $result['code']);
    }
    /**
     * Test case for cellsRangesPostWorksheetCellsRanges
     *
     * copy range in the worksheet.
     *
     */
    public function testCellsRangesPostWorksheetCellsRanges()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1'; 
        $rangeOperate = new RangeCopyRequest();
        $rangeOperate->setOperate("copydata") ;   
        $pasteOptions = new PasteOptions();
        $pasteOptions->setOnlyVisibleCells('true') ;
        $rangeOperate->setPasteOptions($pasteOptions);
        $range = new Range();
        $range->setColumnCount(1);
        $range->setColumnWidth(10.1);
        $range->setFirstColumn(1);
        $range->setFirstRow(1);
        $range->setRowCount(10);
        $range2 = new Range();
        $range2->setColumnCount(1);
        $range2->setColumnWidth(10.1);
        $range2->setFirstColumn(10);
        $range2->setFirstRow(10);
        $range2->setRowCount(10);
        $rangeOperate->setSource($range);
        $rangeOperate->setTarget($range2);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsRangesPostWorksheetCellsRanges($name, $sheet_name, $rangeOperate,$folder);
        $this->assertEquals(200, $result['code']);
    }
    /**
     * Test case for testCellsRangesPutWorksheetCellsRange
     *
     * copy range in the worksheet.
     *
     */
    public function testCellsRangesPutWorksheetCellsRange()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1'; 
        $range = "A1:B5";
        $shift = "Down";
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsRangesPutWorksheetCellsRange($name, $sheet_name, $range,$shift,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for testCellsRangesDeleteWorksheetCellsRange
     *
     * copy range in the worksheet.
     *
     */
    public function testCellsRangesDeleteWorksheetCellsRange()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1'; 
        $range = "A1:B5";
        $shift = "Up";
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsRangesDeleteWorksheetCellsRange($name, $sheet_name, $range,$shift,$folder);
        $this->assertEquals(200, $result['code']);
    }

}
