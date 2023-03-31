<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\Hyperlink;

class CellsHypelinksApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsHypelinksDeleteWorkSheetHyperlink
     *
     * Delete worksheet hyperlink by index..
     *
     */
    public function testCellsHypelinksDeleteWorkSheetHyperlink()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $hyperlinkIndex = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsHypelinksDeleteWorkSheetHyperlink($name, $sheet_name,$hyperlinkIndex,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsHypelinksDeleteWorkSheetHyperlinks
     *
     * Delete all hyperlinks in worksheet..
     *
     */
    public function testCellsHypelinksDeleteWorkSheetHyperlinks()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $hyperlinkIndex = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsHypelinksDeleteWorkSheetHyperlinks($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }
    /**
     * Test case for cellsHypelinksGetWorkSheetHyperlink
     *
     * Get worksheet hyperlink by index..
     *
     */
    public function testCellsHypelinksGetWorkSheetHyperlink()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $hyperlinkIndex = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsHypelinksGetWorkSheetHyperlink($name, $sheet_name,$hyperlinkIndex,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsHypelinksGetWorkSheetHyperlinks
     *
     * Get worksheet hyperlinks..
     *
     */
    public function testCellsHypelinksGetWorkSheetHyperlinks()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $hyperlinkIndex = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsHypelinksGetWorkSheetHyperlinks($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsHypelinksPostWorkSheetHyperlink
     *
     * Update worksheet hyperlink by index..
     *
     */
    public function testCellsHypelinksPostWorkSheetHyperlink()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $hyperlinkIndex = 0;         
        $folder = "Temp";
        $hyperlink = new Hyperlink();
        $hyperlink->setAddress('http://wwww.aspose.com');
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsHypelinksPostWorkSheetHyperlink($name, $sheet_name, $hyperlinkIndex ,  $hyperlink , $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsHypelinksPutWorkSheetHyperlink
     *
     * Add worksheet hyperlink..
     *
     */
    public function testCellsHypelinksPutWorkSheetHyperlink()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $firstRow = 1;      
        $firstColumn =1; 
        $totalRows = 2; 
        $totalColumns = 3; 
        $address = 'http://www.aspose.com';    
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsHypelinksPutWorkSheetHyperlink($name, $sheet_name,$firstRow,$firstColumn,$totalRows,$totalColumns,$address,$folder);
        $this->assertEquals(200, $result['code']);
    }
}
