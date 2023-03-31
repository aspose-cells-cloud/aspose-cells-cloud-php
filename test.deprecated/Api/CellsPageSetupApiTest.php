<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\PageSetup;


class CellsPageSetupApiTest extends \PHPUnit_Framework_TestCase
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
        $this->instance =CellsApiTestBase::getInstance();
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
     * Test case for cellsPageSetupDeleteHeaderFooter
     *
     * clear header footer.
     *
     */
    public function testCellsPageSetupDeleteHeaderFooter()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageSetupDeleteHeaderFooter($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageSetupGetFooter
     *
     * get page footer information.
     *
     */
    public function testCellsPageSetupGetFooter()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageSetupGetFooter($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageSetupGetHeader
     *
     * get page header information.
     *
     */
    public function testCellsPageSetupGetHeader()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageSetupGetHeader($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageSetupGetPageSetup
     *
     * Get Page Setup information..
     *
     */
    public function testCellsPageSetupGetPageSetup()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $index = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageSetupGetPageSetup($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageSetupPostFooter
     *
     * update  page footer information.
     *
     */
    public function testCellsPageSetupPostFooter()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $section = 0;    
        $script = "test";
        $isFirstPage = 'true';     
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageSetupPostFooter($name, $sheet_name,$section, $script ,  $isFirstPage,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageSetupPostHeader
     *
     * update  page header information.
     *
     */
    public function testCellsPageSetupPostHeader()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $section = 1;    
        $script = "test";
        $isFirstPage = 'true';     
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageSetupPostHeader($name, $sheet_name,$section, $script ,  $isFirstPage,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPageSetupPostPageSetup
     *
     * Update Page Setup information..
     *
     */
    public function testCellsPageSetupPostPageSetup()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $pageSetup = new PageSetup(); 
        $pageSetup->setBlackAndWhite('true') ;        
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPageSetupPostPageSetup($name, $sheet_name, $pageSetup,$folder);
        $this->assertEquals(200, $result['code']);
    }
}
