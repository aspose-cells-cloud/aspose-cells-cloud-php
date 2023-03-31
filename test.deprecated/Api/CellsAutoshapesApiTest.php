<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;


class CellsAutoshapesApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsAutoshapesGetWorksheetAutoshape
     *
     * Get autoshape info..
     *
     */
    public function testCellsAutoshapesGetWorksheetAutoshape()
    {
        if(CellsApiTestBase::isDockerSDK())
        {
            return;
        }
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet2';
        $autoshapeNumber = 4;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoshapesGetWorksheetAutoshape($name, $sheet_name,$autoshapeNumber, null, $folder);
        $json = json_decode($result);
        $this->assertEquals(200, $json->Code);
    }
    
    /**
     * Test case for cellsAutoshapesGetWorksheetAutoshape with format
     *
     * Get autoshape info..
     *
     */
    public function testCellsAutoshapesGetWorksheetAutoshapeFormat()
    {
        if(CellsApiTestBase::isDockerSDK())
        {
            return;
        }
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet2';
        $autoshapeNumber = 4;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoshapesGetWorksheetAutoshape($name, $sheet_name,$autoshapeNumber, "png", $folder);
        $this->assertEquals(663, $result->getSize());
    }

    /**
     * Test case for cellsAutoshapesGetWorksheetAutoshapes
     *
     * Get worksheet autoshapes info..
     *
     */
    public function testCellsAutoshapesGetWorksheetAutoshapes()
    {
        if(CellsApiTestBase::isDockerSDK())
        {
            return;
        }
        $name ='myDocument.xlsx';
        $sheet_name ='Sheet2';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsAutoshapesGetWorksheetAutoshapes($name, $sheet_name, $folder);
        $this->assertEquals(200, $result['code']);
    }

}
