<?php
namespace Aspose\Cells\Cloud;
require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\ColumnsResponse;

use \Aspose\Cells\Cloud\Model\CalculationOptions;
use \Aspose\Cells\Cloud\Model\Style;
use \Aspose\Cells\Cloud\Model\Font;
use \Aspose\Cells\Cloud\Model\FontSetting;
use PHPUnit\Framework\TestCase;

class CellsApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsDeleteWorksheetColumns
     *
     * Delete worksheet columns..
     *
     */
    public function testCellsDeleteWorksheetColumns()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $column_index = 1; 
        $columns = 2;
        $update_reference ='true';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        // print $config ->getAccessToken();
        $result = $this->instance->cellsDeleteWorksheetColumns($name, $sheet_name, $column_index, $columns, $update_reference, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsDeleteWorksheetRow
     *
     * Delete worksheet row..
     *
     */
    public function testCellsDeleteWorksheetRow()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $row_index = 1;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =  $this->instance->cellsDeleteWorksheetRow($name, $sheet_name, $row_index,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsDeleteWorksheetRows
     *
     * Delete several worksheet rows..
     *
     */
    public function testCellsDeleteWorksheetRows()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $startrow = 1;  
        $total_rows =2;
        $update_reference ='true';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =  $this->instance->cellsDeleteWorksheetRows($name, $sheet_name, $startrow,$total_rows,  $update_reference, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsGetWorksheetCell
     *
     * Read cell data by cell's name..
     *
     */
    public function testCellsGetWorksheetCell()
    {
        // $name, $sheet_name, $cell_or_method_name, $folder
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $cell_or_method_name = 'C1';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsGetWorksheetCell($name, $sheet_name, $cell_or_method_name, $folder);
        $this->assertEquals(200, $result['Code']);
    }

    /**
     * Test case for cellsGetWorksheetCellStyle
     *
     * Read cell's style info..
     *
     */
    public function testCellsGetWorksheetCellStyle()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $cellName = 'C1';  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =  $this->instance->cellsGetWorksheetCellStyle($name, $sheet_name, $cellName, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsGetWorksheetCells
     *
     * Get cells info..
     *
     */
    public function testCellsGetWorksheetCells()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $offest = 2;  
        $count =10;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =  $this->instance->cellsGetWorksheetCells($name, $sheet_name, $offest, $count,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsGetWorksheetColumn
     *
     * Read worksheet column data by column's index..
     *
     */
    public function testCellsGetWorksheetColumn()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $columnIndex = 2;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsGetWorksheetColumn($name, $sheet_name, $columnIndex,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsGetWorksheetColumns
     *
     * Read worksheet columns info..
     *
     */
    public function testCellsGetWorksheetColumns()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =  $this->instance->cellsGetWorksheetColumns($name, $sheet_name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsGetWorksheetRow
     *
     * Read worksheet row data by row's index..
     *
     */
    public function testCellsGetWorksheetRow()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $rowIndex = 1;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsGetWorksheetRow($name, $sheet_name, $rowIndex,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsGetWorksheetRows
     *
     * Read worksheet rows info..
     *
     */
    public function testCellsGetWorksheetRows()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =  $this->instance->cellsGetWorksheetRows($name, $sheet_name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostCellCalculate
     *
     * Cell calculate formula.
     *
     */
    public function testCellsPostCellCalculate()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $cellName = 'C1';  
        $options = new CalculationOptions();
        $options->setRecursive('true');
        $options->setIgnoreError('true');
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =  $this->instance->cellsPostCellCalculate($name, $sheet_name,$cellName, $options,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostCellCharacters
     *
     * Set cell characters.
     *
     */
    public function testCellsPostCellCharacters()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet2';
        $cellName = 'G8';  
        $fs1 = new FontSetting();
        $font = new Font();
        $font->setSize(10.0);
        $fs1->setFont($font);
        $fs1->setStartIndex(0);
        $fs1->setLength(2);
        $options = [$fs1];
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPostCellCharacters($name, $sheet_name, $cellName, $options, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostClearContents
     *
     * Clear cells contents..
     *
     */
    public function testCellsPostClearContents()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $range = 'A1:C10';  
        $startRow = 1;
        $startColumn =1;
        $endRow = 3;
        $endColumn = 3;;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =  $this->instance->cellsPostClearContents($name, $sheet_name, $range, $startRow,$startColumn,$endRow,$endColumn,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostClearFormats
     *
     * Clear cells contents..
     *
     */
    public function testCellsPostClearFormats()
    { 
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $range = 'A1:C10';  
        $startRow = 1;
        $startColumn =1;
        $endRow = 3;
        $endColumn = 3;;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =   $this->instance->cellsPostClearFormats($name, $sheet_name, $range, $startRow,$startColumn,$endRow,$endColumn,$folder);   
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostColumnStyle
     *
     * Set column style.
     *
     */
    public function testCellsPostColumnStyle()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $columnIndex = 1;  
        $style = new Style();
        $font = new Font();
        $font->setIsBold('true');
        $font->setSize(10);
        $style->setFont($font);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =   $this->instance->cellsPostColumnStyle($name, $sheet_name, $columnIndex, $style,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostCopyCellIntoCell
     *
     * Copy cell into cell.
     *
     */
    public function testCellsPostCopyCellIntoCell()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $destCellName = 'C1';  
        $worksheet = 'Sheet2';
        $cellName ='B1'; 
        $row =1;
        $column =2;       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =   $this->instance->cellsPostCopyCellIntoCell($name, $cellName,$sheet_name, $worksheet, $cellName,$row,$column,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostCopyWorksheetColumns
     *
     * Copy worksheet columns..
     *
     */
    public function testCellsPostCopyWorksheetColumns()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $sourceColumnIndex = 1;  
        $destinationColumnIndex = 21;
        $columnNumber =1; 
        $worksheet ='Sheet2';       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =  $this->instance->cellsPostCopyWorksheetColumns($name, $sheet_name, $sourceColumnIndex, $destinationColumnIndex,$columnNumber,$worksheet,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostCopyWorksheetRows
     *
     * Copy worksheet rows..
     *
     */
    public function testCellsPostCopyWorksheetRows()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $sourceRowIndex = 1;  
        $destinationRowIndex = 21;
        $rowNumber =1; 
        $worksheet ='Sheet2';       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =   $this->instance->cellsPostCopyWorksheetRows($name, $sheet_name, $sourceRowIndex, $destinationRowIndex,$rowNumber,$worksheet,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostGroupWorksheetColumns
     *
     * Group worksheet columns..
     *
     */
    public function testCellsPostGroupWorksheetColumns()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $firstIndex = 1;  
        $lastIndex = 21;
        $hide ='true';       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =   $this->instance->cellsPostGroupWorksheetColumns($name, $sheet_name, $firstIndex, $lastIndex,$hide,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostGroupWorksheetRows
     *
     * Group worksheet rows..
     *
     */
    public function testCellsPostGroupWorksheetRows()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $firstIndex = 1;  
        $lastIndex = 21;
        $hide ='true';       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =    $this->instance->cellsPostGroupWorksheetRows($name, $sheet_name, $firstIndex, $lastIndex,$hide,$folder);
        $this->assertEquals(200, $result['code']);
    }
    /**
     * Test case for cellsPostHideWorksheetColumns
     *
     * Hide worksheet columns..
     *
     */
    public function testCellsPostHideWorksheetColumns()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $startColumn = 1;  
        $totalColumns = 21;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =   $this->instance->cellsPostHideWorksheetColumns($name, $sheet_name, $startColumn, $totalColumns,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostHideWorksheetRows
     *
     * Hide worksheet rows..
     *
     */
    public function testCellsPostHideWorksheetRows()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $startrow = 1;  
        $totalRows = 21;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =   $this->instance->cellsPostHideWorksheetRows($name, $sheet_name, $startrow, $totalRows,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostRowStyle
     *
     * Set row style..
     *
     */
    public function testCellsPostRowStyle()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $rowIndex = 1;  
        $style = new Style();
        $font = new Font();
        $font->setIsBold('true');
        $font->setSize(10);
        $style->setFont($font);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =   $this->instance->cellsPostRowStyle($name, $sheet_name, $rowIndex, $style,$folder);
        $this->assertEquals(200, $result['code']);
    }

        /**
     * Test case for cellsGetCellHtmlString
     *
     * Get htmlstring value into cell.
     *
     */
    public function testCellsGetCellHtmlString()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $cellName = 'C1'; 
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =  $this->instance->cellsGetCellHtmlString($name, $sheet_name, $cellName,$folder);
//        $this->assertGreaterThan(0,$result->getSize());
//        $this->assertLessThan()
    }

    /**
     * Test case for cellsPostSetCellHtmlString
     *
     * Set htmlstring value into cell.
     *
     */
    public function testCellsPostSetCellHtmlString()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $cellName = 'C1'; 
        $folder = "Temp";
        $html_string = "https://api.aspose.cloud/v3.0/cells";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =  $this->instance->cellsPostSetCellHtmlString($name, $sheet_name, $cellName,$html_string,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostSetCellRangeValue
     *
     * Set cell range value.
     *
     */
    public function testCellsPostSetCellRangeValue()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $cellarea = 'A1:C10'; 
        $value = '12345'; 
        $type = 'String'; 
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =  $this->instance->cellsPostSetCellRangeValue($name, $sheet_name, $cellarea, $value, $type, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostSetWorksheetColumnWidth
     *
     * Set worksheet column width..
     *
     */
    public function testCellsPostSetWorksheetColumnWidth()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $columnIndex = 1; 
        $width = '10';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =  $this->instance->cellsPostSetWorksheetColumnWidth($name, $sheet_name, $columnIndex, $width,10, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostUngroupWorksheetColumns
     *
     * Ungroup worksheet columns..
     *
     */
    public function testCellsPostUngroupWorksheetColumns()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $firstIndex = 1; 
        $lastIndex = 10;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =   $this->instance->cellsPostUngroupWorksheetColumns($name, $sheet_name, $firstIndex, $lastIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostUngroupWorksheetRows
     *
     * Ungroup worksheet rows..
     *
     */
    public function testCellsPostUngroupWorksheetRows()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $firstIndex = 1; 
        $lastIndex = 10;
        $isAll ='true';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPostUngroupWorksheetRows($name, $sheet_name, $firstIndex, $lastIndex,$isAll, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostUnhideWorksheetColumns
     *
     * Unhide worksheet columns..
     *
     */
    public function testCellsPostUnhideWorksheetColumns()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $startcolumn = 1; 
        $totalColumns = 10;
        $width =20.0;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPostUnhideWorksheetColumns($name, $sheet_name, $startcolumn, $totalColumns,$width, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostUnhideWorksheetRows
     *
     * Unhide worksheet rows..
     *
     */
    public function testCellsPostUnhideWorksheetRows()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $startrow = 1; 
        $totalRows = 10;
        $height =20.0;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPostUnhideWorksheetRows($name, $sheet_name, $startrow, $totalRows, $height, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostUpdateWorksheetCellStyle
     *
     * Update cell's style..
     *
     */
    public function testCellsPostUpdateWorksheetCellStyle()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $cellName = 'C1'; 
        $style = new Style();
        $font = new Font();
        $font->setIsBold('true');
        $font->setSize(10);
        $style->setFont($font);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPostUpdateWorksheetCellStyle($name, $sheet_name, $cellName, $style,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostUpdateWorksheetRangeStyle
     *
     * Update cell's range style..
     *
     */
    public function testCellsPostUpdateWorksheetRangeStyle()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $range = 'C1:F10'; 
        $style = new Style();
        $font = new Font();
        $font->setIsBold('true');
        $font->setSize(10);
        $style->setFont($font);
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPostUpdateWorksheetRangeStyle($name, $sheet_name, $range, $style,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostUpdateWorksheetRow
     *
     * Update worksheet row..
     *
     */
    public function testCellsPostUpdateWorksheetRow()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $rowIndex = 1; 
        $height = 10.0;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =$this->instance->cellsPostUpdateWorksheetRow($name, $sheet_name, $rowIndex, $height, 10, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostWorksheetCellSetValue
     *
     * Set cell value..
     *
     */
    public function testCellsPostWorksheetCellSetValue()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $cellName = 'C1'; 
        $value = '2018/10/09';
        $type ='DateTime';
        $formula = '=Now()';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPostWorksheetCellSetValue($name, $sheet_name, $cellName, $value,$type ,$formula ,  $folder);
        $value = '1';
        $type ='int';
        $folder = "Temp";
        $result = $this->instance->cellsPostWorksheetCellSetValue($name, $sheet_name, $cellName, $value,$type ,null ,  $folder);
        $value = '1';
        $type ='String';
        $folder = "Temp";
        $result = $this->instance->cellsPostWorksheetCellSetValue($name, $sheet_name, $cellName, $value,$type ,null ,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostWorksheetMerge
     *
     * Merge cells..
     *
     */
    public function testCellsPostWorksheetMerge()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $startRow = 1; 
        $startColumn = 1;
        $totalRows =10;
        $totalColumns = 2;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPostWorksheetMerge($name, $sheet_name, $startRow, $startColumn,$totalRows ,$totalColumns ,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPostWorksheetUnmerge
     *
     * Unmerge cells..
     *
     */
    public function testCellsPostWorksheetUnmerge()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $startRow = 1; 
        $startColumn = 1;
        $totalRows =10;
        $totalColumns = 2;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result =$this->instance->cellsPostWorksheetUnmerge($name, $sheet_name, $startRow, $startColumn,$totalRows ,$totalColumns ,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPutInsertWorksheetColumns
     *
     * Insert worksheet columns..
     *
     */
    public function testCellsPutInsertWorksheetColumns()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $columnIndex = 1; 
        $columns = 11;
        $updateReference ='true';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPutInsertWorksheetColumns($name, $sheet_name, $columnIndex, $columns,$updateReference ,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPutInsertWorksheetRow
     *
     * Insert new worksheet row..
     *
     */
    public function testCellsPutInsertWorksheetRow()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $rowIndex = 1;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPutInsertWorksheetRow($name, $sheet_name, $rowIndex ,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPutInsertWorksheetRows
     *
     * Insert several new worksheet rows..
     *
     */
    public function testCellsPutInsertWorksheetRows()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $startrow = 1;
        $totalRows = 11;
        $updateReference ='true';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPutInsertWorksheetRows($name, $sheet_name, $startrow ,$totalRows, $updateReference, $folder);
        $this->assertEquals(200, $result['code']);
    }
}
