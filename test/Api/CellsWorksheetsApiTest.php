<?php


namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\ProtectSheetParameter;
use \Aspose\Cells\Cloud\Model\AutoFitterOptions;
use \Aspose\Cells\Cloud\Model\CopyOptions;
use \Aspose\Cells\Cloud\Model\WorksheetMovingRequest;
use \Aspose\Cells\Cloud\Model\MatchConditionRequest;
use \Aspose\Cells\Cloud\Model\Comment;
use \Aspose\Cells\Cloud\Model\Worksheet;
use \Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest;
use \Aspose\Cells\Cloud\Model\DataSorter;

class CellsWorksheetsApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsWorksheetsDeleteUnprotectWorksheet
     *
     * Unprotect worksheet..
     *
     */
    public function testCellsWorksheetsDeleteUnprotectWorksheet()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $protectParameter = new ProtectSheetParameter();
        $protectParameter->setPassword ("12345") ;
        $protectParameter->setProtectionType ("All") ;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsDeleteUnprotectWorksheet($name, $sheet_name, $protectParameter, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsDeleteWorkSheetBackground
     *
     * Set worksheet background image..
     *
     */
    public function testCellsWorksheetsDeleteWorkSheetBackground()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsDeleteWorkSheetBackground($name, $sheet_name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsDeleteWorkSheetComment
     *
     * Delete worksheet's cell comment..
     *
     */
    public function testCellsWorksheetsDeleteWorkSheetComment()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $cellName = "C1";      
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsDeleteWorkSheetComment($name, $sheet_name, $cellName, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsDeleteWorkSheetComments
     *
     * Delete all comments for worksheet..
     *
     */
    public function testCellsWorksheetsDeleteWorkSheetComments()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';   
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsDeleteWorkSheetComments($name, $sheet_name,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsDeleteWorksheet
     *
     * Delete worksheet..
     *
     */
    public function testCellsWorksheetsDeleteWorksheet()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';   
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsDeleteWorksheet($name, $sheet_name,  $folder);
        $this->assertEquals(200, $result['code']);
    }


    /**
     * Test case for cellsWorksheetsDeleteWorksheetFreezePanes
     *
     * Unfreeze panes.
     *
     */
    public function testCellsWorksheetsDeleteWorksheetFreezePanes()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $row = 1;
        $column = 1;
        $freezedRows = 2;
        $freezedColumns = 2;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsDeleteWorksheetFreezePanes($name, $sheet_name, $row, $column, $freezedRows, $freezedColumns, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsGetNamedRanges
     *
     * Read worksheets ranges info..
     *
     */
    public function testCellsWorksheetsGetNamedRanges()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';   
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsGetNamedRanges($name,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsGetWorkSheet
     *
     * Read worksheet info or export..
     *
     */
    public function testCellsWorksheetsGetWorkSheet()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $verticalResolution =100;  
        $horizontalResolution =90;
        $area =null;
        $pageIndex = null;
        $format = "png";
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsGetWorkSheet($name, $sheet_name, $format, $verticalResolution, $horizontalResolution, $area,$pageIndex ,$folder);
        $contents = $result->fread($result->getSize());
        $this->assertGreaterThan(6000, $result->getSize(), "png file size error");
    }

    /**
     * Test case for cellsWorksheetsGetWorkSheetCalculateFormula
     *
     * Calculate formula value..
     *
     */
    public function testCellsWorksheetsGetWorkSheetCalculateFormula()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $formula = "=NOW()";
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsGetWorkSheetCalculateFormula($name, $sheet_name, $formula, $folder);
        $this->assertEquals(200, $result['code']);
    }
    /**
     * Test case for cellsWorksheetsGetWorkSheetComment
     *
     * Get worksheet comment by cell name..
     *
     */
    public function testCellsWorksheetsGetWorkSheetComment()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $cellName = "B3";
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsGetWorkSheetComment($name, $sheet_name, $cellName, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsGetWorkSheetComments
     *
     * Get worksheet comments..
     *
     */
    public function testCellsWorksheetsGetWorkSheetComments()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $cellName = "B3";
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsGetWorkSheetComments($name, $sheet_name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsGetWorkSheetMergedCell
     *
     * Get worksheet merged cell by its index..
     *
     */
    public function testCellsWorksheetsGetWorkSheetMergedCell()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $mergedCellIndex =1;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsGetWorkSheetMergedCell($name, $sheet_name,$mergedCellIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsGetWorkSheetMergedCells
     *
     * Get worksheet merged cells..
     *
     */
    public function testCellsWorksheetsGetWorkSheetMergedCells()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsGetWorkSheetMergedCells($name, $sheet_name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsGetWorkSheetTextItems
     *
     * Get worksheet text items..
     *
     */
    public function testCellsWorksheetsGetWorkSheetTextItems()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsGetWorkSheetTextItems($name, $sheet_name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsGetWorkSheets
     *
     * Read worksheets info..
     *
     */
    public function testCellsWorksheetsGetWorkSheets()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsGetWorkSheets($name,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPostAutofitWorksheetColumns
     *
     * .
     *
     */
    public function testCellsWorksheetsPostAutofitWorksheetColumns()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $firstColumn = 1;
        $lastColumn = 10;
        $autoFitterOptions = null;
        $firstRow = 1;
        $lastRow = 19;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPostAutofitWorksheetColumns($name, $sheet_name,$firstColumn, $lastColumn, $autoFitterOptions, $firstRow, $lastRow,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPostAutofitWorksheetRow
     *
     * .
     *
     */
    public function testCellsWorksheetsPostAutofitWorksheetRow()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $rowIndex =1;
        $firstColumn = 1;
        $lastColumn = 10;
        $autoFitterOptions = new AutoFitterOptions();
        $autoFitterOptions->setAutoFitMergedCells('true');
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPostAutofitWorksheetRow($name, $sheet_name, $rowIndex,$firstColumn, $lastColumn, $autoFitterOptions,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPostAutofitWorksheetRows
     *
     * Autofit worksheet rows..
     *
     */
    public function testCellsWorksheetsPostAutofitWorksheetRows()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $startRow =1;
        $endRow = 1;
        $onlyAuto = 'true';
        $autoFitterOptions = new AutoFitterOptions();
        $autoFitterOptions->setAutoFitMergedCells('true');
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPostAutofitWorksheetRows($name, $sheet_name,  $autoFitterOptions, $startRow,$endRow, $onlyAuto, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPostCopyWorksheet
     *
     * .
     *
     */
    public function testCellsWorksheetsPostCopyWorksheet()
    {
        $name = "NewCopy.xlsx";
        $sheet_name ='Sheet5'; 
        $sourceSheet ='Sheet6'; 
        $options = new CopyOptions();
        $options->setColumnCharacterWidth ('true') ;
        $sourceWorkbook = 'Book1.xlsx';
        $sourceFolder = "Temp";
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPostCopyWorksheet($name, $sheet_name,  $sourceSheet, $options,$sourceWorkbook, $sourceFolder, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPostMoveWorksheet
     *
     * Move worksheet..
     *
     */
    public function testCellsWorksheetsPostMoveWorksheet()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $moving = new WorksheetMovingRequest();
        $moving->setDestinationWorksheet('Sheet3') ;
        $moving->setPosition("after");
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPostMoveWorksheet($name, $sheet_name,  $moving,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPostRenameWorksheet
     *
     * Rename worksheet.
     *
     */
    public function testCellsWorksheetsPostRenameWorksheet()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $newname = "renametest";     
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPostRenameWorksheet($name, $sheet_name,  $newname,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPostUpdateWorksheetProperty
     *
     * Update worksheet property.
     *
     */
    public function testCellsWorksheetsPostUpdateWorksheetProperty()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $sheet = new Worksheet();
        $sheet->setIndex(1) ;
        $sheet->setIsGridlinesVisible("true");
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPostUpdateWorksheetProperty($name, $sheet_name,  $sheet,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPostUpdateWorksheetZoom
     *
     * .
     *
     */
    public function testCellsWorksheetsPostUpdateWorksheetZoom()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $value = 1;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPostUpdateWorksheetZoom($name, $sheet_name,  $value,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPostWorkSheetComment
     *
     * Update worksheet's cell comment..
     *
     */
    public function testCellsWorksheetsPostWorkSheetComment()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $cellName = "B3";
        $comment = new Comment();
        $comment->setAuthor("Roy");
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPostWorkSheetComment($name, $sheet_name,  $cellName, $comment, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPostWorkSheetTextSearch
     *
     * Search text..
     *
     */
    public function testCellsWorksheetsPostWorkSheetTextSearch()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $text = "B3";       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPostWorkSheetTextSearch($name, $sheet_name,  $text,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPostWorksheetRangeSort
     *
     * Sort worksheet range..
     *
     */
    public function testCellsWorksheetsPostWorksheetRangeSort()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $cellArea = 'A1:E10';   
        $dataSorter = new DataSorter();
        $dataSorter->setCaseSensitive('true');    
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPostWorksheetRangeSort($name, $sheet_name,  $cellArea, $dataSorter, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPostWorsheetTextReplace
     *
     * Replace text..
     *
     */
    public function testCellsWorksheetsPostWorsheetTextReplace()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $oldValue = "1234";    
        $newValue = "wewew4";  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPostWorsheetTextReplace($name, $sheet_name,  $oldValue, $newValue, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPutAddNewWorksheet
     *
     * Add new worksheet..
     *
     */
    public function testCellsWorksheetsPutAddNewWorksheet()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $position = 1;  
        $sheettype = "VB"; 
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPutAddNewWorksheet($name, $sheet_name,  $position, $sheettype, $folder);
        $this->assertEquals(201, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPutChangeVisibilityWorksheet
     *
     * Change worksheet visibility..
     *
     */
    public function testCellsWorksheetsPutChangeVisibilityWorksheet()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $isVisible = 'true';
        $sheettype = "VB"; 
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPutChangeVisibilityWorksheet($name, $sheet_name,  $isVisible, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPutProtectWorksheet
     *
     * Protect worksheet..
     *
     */
    public function testCellsWorksheetsPutProtectWorksheet()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $protectParameter = new ProtectSheetParameter();
        $protectParameter->setPassword ("12345") ;
        $protectParameter->setProtectionType("All") ;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPutProtectWorksheet($name, $sheet_name,  $protectParameter, $folder);
        $this->assertEquals(200, $result['code']);
    }


    /**
     * Test case for cellsWorksheetsPutWorkSheetBackground
     *
     * Set worksheet background image..
     *
     */
    public function testCellsWorksheetsPutWorkSheetBackground()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $isVisible = 'true';
        $sheettype = "VB"; 
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        
        $cwd = getcwd();
        $parents = "/";
        $png = "TestData/WaterMark.png";
       CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        for ($x=0; $x <= 10; $x++) {
            $path = $cwd . $parents . $png;
            if (file_exists($path)) {
                $file = file_get_contents($path);
                break;
            }
            $parents = $parents . "../";
        }
        $result = $this->instance->cellsWorksheetsPutWorkSheetBackground($name, $sheet_name, $file, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPutWorkSheetComment
     *
     * Add worksheet's cell comment..
     *
     */
    public function testCellsWorksheetsPutWorkSheetComment()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $cellName = "C1";
        $comment = new Comment();
        $comment->setAuthor("Roy");
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPutWorkSheetComment($name, $sheet_name,  $cellName, $comment, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetsPutWorksheetFreezePanes
     *
     * Set freeze panes.
     *
     */
    public function testCellsWorksheetsPutWorksheetFreezePanes()
    {
        $name = "Book1.xlsx";
        $sheet_name ='Sheet1'; 
        $row = 1;
        $column = 1;
        $freezedRows = 4;
        $freezedColumns = 5;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsPutWorksheetFreezePanes($name, $sheet_name,  $row, $column,$freezedRows,$freezedColumns, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for testCellsWorksheetsGetWorkSheetForArea
     *
     * Read worksheet info or export..
     *
     */
    public function testCellsWorksheetsGetWorkSheetForArea()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $verticalResolution =100;  
        $horizontalResolution =90;
        $area ="B3:K8s";
        $pageIndex = null;
        $format = "png";
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsGetWorkSheet($name, $sheet_name, $format, $verticalResolution, $horizontalResolution, $area,$pageIndex ,$folder);
        $contents = $result->fread($result->getSize());
        $this->assertGreaterThan(6000, $result->getSize(), "png file size error");
    }

     /**
     * Test case for testCellsWorksheetsGetWorkSheetForArea
     *
     * Read worksheet info or export..
     *
     */
    public function testCellsWorksheetsGetWorkSheetForPageIndex()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $verticalResolution =100;  
        $horizontalResolution =90;
        $area =null;
        $pageIndex = 1;
        $format = "png";
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsGetWorkSheet($name, $sheet_name, $format, $verticalResolution, $horizontalResolution, $area,$pageIndex ,$folder);
        $contents = $result->fread($result->getSize());
        $this->assertGreaterThan(6000, $result->getSize(), "png file size error");
    }
     /**
     * Test case for testCellsWorksheetsDeleteWorksheets
     *
     * Read worksheet info or export..
     *
     */
    public function testCellsWorksheetsDeleteWorksheets()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
        $verticalResolution =100;  
        $horizontalResolution =90;
        $area =null;
        $pageIndex = 1;
        $format = "png";
        $folder = "Temp";
        $match_condition = new  MatchConditionRequest();
        $match_condition->setFullMatchConditions( ["Sheet1","Sheet2"]);
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsDeleteWorksheets($name,$match_condition,$folder);
        $this->assertEquals(200, $result['code']);
    } 
    
     /**
     * Test case for testCellsWorksheetsDeleteWorksheets
     *
     * Read worksheet info or export..
     *
     */
    public function testCellsWorksheetsPageCount()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1'; 
  
        $format = "png";
        $folder = "Temp";
        
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetsGetPageCount($name,$sheet_name,$folder);
        $this->assertGreaterThan(0, $result);
    } 
}
