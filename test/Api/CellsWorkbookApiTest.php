<?php
namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest;
use \Aspose\Cells\Cloud\Model\WorkbookProtectionRequest;
use \Aspose\Cells\Cloud\Model\ImportIntArrayOption;
use \Aspose\Cells\Cloud\Model\CalculationOptions;
use \Aspose\Cells\Cloud\Model\WorkbookSettings;
use \Aspose\Cells\Cloud\Model\PasswordRequest;
use \Aspose\Cells\Cloud\Model\ImportCSVDataOption;

class CellsWorkbookApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsWorkbookDeleteDecryptDocument
     *
     * Decrypt document..
     *
     */
    public function testCellsWorkbookDeleteDecryptDocument()
    {
        $name ='Book1.xlsx';  
        $encryption = new WorkbookEncryptionRequest();
        $encryption->setPassword("123456");
        $encryption->setKeyLength( 128);
        $encryption->setEncryptionType( "XOR");      
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookDeleteDecryptDocument($name, $encryption,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorkbookDeleteDocumentUnProtectFromChanges
     *
     * Unprotect document from changes..
     *
     */
    public function testCellsWorkbookDeleteDocumentUnProtectFromChanges()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookDeleteDocumentUnProtectFromChanges($name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorkbookDeleteUnProtectDocument
     *
     * Unprotect document..
     *
     */
    public function testCellsWorkbookDeleteUnProtectDocument()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $protection = new WorkbookProtectionRequest();
        $protection->setPassword ("123");
        $protection->setProtectionType( "All");
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookDeleteUnProtectDocument($name,$protection, $folder);
        $this->assertEquals(200, $result['code']);
    }
    
    /**
     * Test case for cellsWorkbookDeleteWorkbookName
     *
     * Clean workbook's names..
     *
     */
    public function testCellsWorkbookDeleteWorkbookName()
    {
        $name ='Book1.xlsx';
        $name_name = "Name_2";
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookDeleteWorkbookName($name, $name_name, $folder);
        $this->assertEquals(200, $result['code']);
    }
    
    /**
     * Test case for cellsWorkbookDeleteWorkbookNames
     *
     * Clean workbook's names..
     *
     */
    public function testCellsWorkbookDeleteWorkbookNames()
    {
        $name ='Book1.xlsx';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookDeleteWorkbookNames($name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorkbookGetWorkBook
     *
     * Read workbook info or export..
     *
     */
    public function testCellsWorkbookGetWorkbook()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $password = null;
        $isAutoFit = 'true';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookGetWorkBook($name,$password,null,$isAutoFit, false,$folder);
        $json = json_decode($result);
        $this->assertEquals(200, $json->Code);
    }
    
    /**
     * Test case for cellsWorkbookGetWorkBook format
     *
     * Read workbook info or export..
     *
     */
    public function testCellsWorkbookGetWorkbookFormat()
    {
        $name ='Book1.xlsx';
        $folder = "Temp";
        $password = null;
        $isAutoFit = 'true';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookGetWorkBook($name,$password,"xlsx",$isAutoFit, false,$folder);
        $this->assertGreaterThan(120000, $result->getSize());
    }

    /**
     * Test case for cellsWorkbookGetWorkBook format  MD
     *
     * Read workbook info or export..
     *
     */
    public function testCellsWorkbookGetMDFormat()
    {
        $name ='Book1.xlsx';
        $folder = "Temp";
        $password = null;
        $isAutoFit = 'true';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookGetWorkBook($name,$password,"md",$isAutoFit, false,$folder);

    }
    /**
     * Test case for cellsWorkbookGetWorkBookDefaultStyle
     *
     * Read workbook default style info..
     *
     */
    public function testCellsWorkbookGetWorkbookDefaultStyle()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $password = null;
        $isAutoFit = 'true';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookGetWorkBookDefaultStyle($name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorkbookGetWorkBookName
     *
     * Read workbook's name..
     *
     */
    public function testCellsWorkbookGetWorkBookName()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $nameName = "Name_2";
        $isAutoFit = 'true';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookGetWorkBookName($name,$nameName, $folder);
        $this->assertEquals(200, $result['code']);
    }
    
    /**
     * Test case for cellsWorkbookGetWorkbookNameValue
     *
     * Get workbook's name value..
     *
     */
    public function testCellsWorkbookGetWorkbookNameValue()
    {
        $name ='Book1.xlsx';
        $name_name = "Name_2";
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookGetWorkbookNameValue($name, $name_name, $folder);
        $this->assertEquals(200, $result['code']);
    }


    /**
     * Test case for cellsWorkbookGetWorkBookNames
     *
     * Read workbook's names..
     *
     */
    public function testCellsWorkbookGetWorkBookNames()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $password = null;
        $isAutoFit = 'true';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookGetWorkBookNames($name, $folder);
        $this->assertEquals(200, $result['code']);
    }


    /**
     * Test case for cellsWorkbookGetWorkBookTextItems
     *
     * Read workbook's text items..
     *
     */
    public function testCellsWorkbookGetWorkBookTextItems()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $password = null;
        $isAutoFit = 'true';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookGetWorkBookTextItems($name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorkbookGetWorkbookSettings
     *
     * Get Workbook Settings DTO.
     *
     */
    public function testCellsWorkbookGetWorkbookSettings()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $password = null;
        $isAutoFit = 'true';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookGetWorkbookSettings($name, $folder);
        $this->assertEquals(200, $result['code']);
    }
    /**
     * Test case for cellsWorkbookPostAutofitWorkbookRows
     *
     * Autofit workbook rows..
     *
     */
    public function testCellsWorkbookPostAutofitWorkbookRows()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $autoFitterOptions = null;
        $startRow = 1;
        $endRow = 100;
        $onlyAuto = 'true';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookPostAutofitWorkbookRows($name, $autoFitterOptions,  $startRow, $endRow, $onlyAuto , $folder);
        $this->assertEquals(200, $result['code']);
    }
    /**
     * Test case for cellsWorkbookPostAutofitWorkbookColumns
     *
     * Autofit workbook columns.
     *
     */
    public function testCellsWorkbookPostAutofitWorkbookColumns()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $autoFitterOptions = null;
        $startColumn = 1;
        $endColumn = 100;
        $onlyAuto = 'true';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookPostAutofitWorkbookColumns($name, $autoFitterOptions,  $startColumn, $endColumn,  $folder);
        $this->assertEquals(200, $result['code']);
    }
    /**
     * Test case for cellsWorkbookPostEncryptDocument
     *
     * Encript document..
     *
     */
    public function testCellsWorkbookPostEncryptDocument()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $encryption = new WorkbookEncryptionRequest();
        $encryption->setPassword("123456");
        $encryption->setKeyLength( 128);
        $encryption->setEncryptionType( "XOR");   
        $autoFitterOptions = null;
        $startRow = 1;
        $endRow = 100;
        $onlyAuto = 'true';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookPostEncryptDocument($name, $encryption,  $folder);
        $this->assertEquals(200, $result['code']);
    }
    /**
     * Test case for cellsWorkbookPostImportData
     *
     * .
     *
     */
    public function testCellsWorkbookPostImportData()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $data = new ImportIntArrayOption();
        $data->setDestinationWorksheet('Sheet1');
        $data->setFirstColumn(1);
        $data->setFirstRow(3);
        $data->setImportDataType('IntArray');
        $data->setIsVertical('true');
        $data->setData(array(1, 2, 3, 4)) ;
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookPostImportData($name, $data,  $folder);
        $this->assertEquals(200, $result['code']);
    }
   
    public function testCellsWorkbookPostImportCSVData()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $data = new ImportCSVDataOption();
        $data->setConvertNumericData(false);
        $data->setFirstColumn(1);
        $data->setFirstRow(1) ;
        $data->setSeparatorString(';') ;
        $data->setImportDataType('CSVData');
        $data->setDestinationWorksheet('Sheet2');
        $data->setSourceFile('TestImportDataCSV.csv');
        CellsApiTestBase::ready(  $this->instance,'TestImportDataCSV.csv','');
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookPostImportData($name, $data,  $folder);
        $this->assertEquals(200, $result['code']);
    }
   
    /**
     * Test case for cellsWorkbookPostProtectDocument
     *
     * Protect document..
     *
     */
    public function testCellsWorkbookPostProtectDocument()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $protection = new WorkbookProtectionRequest();
        $protection->setPassword("123");
        $protection->setProtectionType( "All");
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookPostProtectDocument($name, $protection,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorkbookPostWorkbookCalculateFormula
     *
     * Calculate all formulas in workbook..
     *
     */
    public function testCellsWorkbookPostWorkbookCalculateFormula()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $options = new CalculationOptions ();
        $options->setIgnoreError( 'true');
        $ignoreError = 'true';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookPostWorkbookCalculateFormula($name, $options,null, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorkbookPostWorkbookGetSmartMarkerResult
     *
     * Smart marker processing result..
     *
     */
    public function testCellsWorkbookPostWorkbookGetSmartMarkerResult()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $xmlFile = "ReportData.xml";
        $outPath = null;
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookPostWorkbookGetSmartMarkerResult($name, $xmlFile,  $folder,null,$outPath);
        $json = json_decode($result);
//        $this->assertEquals(200, $json->StatusCode);
    }

    /**
     * Test case for cellsWorkbookPostWorkbookSettings
     *
     * Update Workbook setting.
     *
     */
    public function testCellsWorkbookPostWorkbookSettings()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $settings = new WorkbookSettings();
        $settings->setAutoCompressPictures( 'true');
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookPostWorkbookSettings($name, $settings,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorkbookPostWorkbookSplit
     *
     * Split workbook..
     *
     */
    public function testCellsWorkbookPostWorkbookSplit()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $format = "png";
        $from = 1;
        $to = 3;
        $horizontalResolution = 100;
        $verticalResolution = 90;
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookPostWorkbookSplit($name, $format, $from, $to, $horizontalResolution, $verticalResolution,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorkbookPostWorkbooksMerge
     *
     * Merge workbooks..
     *
     */
    public function testCellsWorkbookPostWorkbooksMerge()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $formatmergeWith = "myDocument.xlsx";      
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        CellsApiTestBase::ready(  $this->instance,$formatmergeWith ,$folder);
        $result = $this->instance->cellsWorkbookPostWorkbooksMerge($name, $formatmergeWith,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorkbookPostWorkbooksTextReplace
     *
     * Replace text..
     *
     */
    public function testCellsWorkbookPostWorkbooksTextReplace()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $oldValue = "!22";
        $newValue = "22";    
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookPostWorkbooksTextReplace($name, $oldValue,$newValue,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorkbookPostWorkbooksTextSearch
     *
     * Search text..
     *
     */
    public function testCellsWorkbookPostWorkbooksTextSearch()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $text = "!test";      
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookPostWorkbooksTextSearch($name, $text,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorkbookPutConvertWorkBook
     *
     * Convert workbook from request content to some format..
     *
     */
    public function testCellsWorkbookPutConvertWorkBook()
    {
        $format ='pdf';
        $password = null;
        $outPath = null;      
        $cwd = getcwd();
        $parents = "/";
        $name = "TestData/Book1.xlsx";
        $file = null;
        for ($x=0; $x <= 10; $x++) {
            $path = $cwd . $parents . $name;
            if (file_exists($path)) {
                $file = file_get_contents($path);
                break;
            }
            $parents = $parents . "../";
        }
        
        $result = $this->instance->cellsWorkbookPutConvertWorkBook($path ,$format, $password,  $outPath);
        // $this->assertEquals(119592, $result->getSize());
    }

    /**
     * Test case for cellsWorkbookPutDocumentProtectFromChanges
     *
     * Protect document from changes..
     *
     */
    public function testCellsWorkbookPutDocumentProtectFromChanges()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $password = new PasswordRequest();
        $password->setPassword ("123456");      
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorkbookPutDocumentProtectFromChanges($name, $password,  $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorkbookPutWorkbookCreate
     *
     * Create new workbook using deferent methods..
     *
     */
    public function testCellsWorkbookPutWorkbookCreate()
    {
        $templateFile ='Book1.xlsx';       
        $folder = "Temp";
        date_default_timezone_set("UTC");
        $name = "NewBook".date("Y-m-d-h-i-sa").".xlsx";    
        $dataFile = "ReportData.xml";  
        CellsApiTestBase::ready(  $this->instance,$templateFile ,$folder);
        CellsApiTestBase::ready(  $this->instance,$dataFile ,$folder);
        $result = $this->instance->cellsWorkbookPutWorkbookCreate($name, $folder."/".$templateFile,$folder."/".$dataFile, true, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for CellsWorkbookDeleteWorkbookBackground
     *
     * 
     *
     */
    public function testCellsWorkbookDeleteWorkbookBackground()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        $result = $this->instance->cellsWorkbookDeleteWorkbookBackground($name,  $folder);
        $this->assertEquals(200, $result['code']);
    }

     /**
     * Test case for CellsWorkbookDeleteWorkbookBackground
     *
     * 
     *
     */
    public function testCellsWorkbookPutWorkbookBackground()
    {
        $name = "Book1.xlsx";
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
        $result = $this->instance->cellsWorkbookPutWorkbookBackground($name,$file, $folder);
        $this->assertEquals(200, $result['code']);
    }
}
