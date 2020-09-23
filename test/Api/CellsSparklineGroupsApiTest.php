<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\SparklineGroups;
use \Aspose\Cells\Cloud\Model\SparklineGroup;
use \Aspose\Cells\Cloud\Model\Sparkline;

class CellsSparklineGroupsApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsShapesDeleteWorksheetShape
     *
     * Delete a shape in worksheet.
     *
     */
    public function testCellsSparklineGroupsApiGPPDTest()
    {
        $name ='TestCase.xlsx';  
        $sheet_name ='Sheet1';    
        $index = 0;       
        $folder = 'Temp';
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $getsResult = $this->instance->cellsSparklineGroupsGetWorksheetSparklineGroups($name, $sheet_name,$folder);
        $this->assertEquals(200, $getsResult['code']);
        $putResult = $this->instance->cellsSparklineGroupsPutWorksheetSparklineGroup($name, $sheet_name,"Line","C6:E13",false,"G6:G13",$folder);
        $this->assertEquals(200, $putResult['code']);
        $getResult = $this->instance->cellsSparklineGroupsGetWorksheetSparklineGroup($name, $sheet_name,$index ,$folder);
        $this->assertEquals(200, $getResult['code']);
        $sparklineGroup  = new SparklineGroup();
        $sparklineGroup->display_hidden = true;
        $postResult = $this->instance->cellsSparklineGroupsPostWorksheetSparklineGroup($name, $sheet_name,$index ,$sparklineGroup,$folder);
        $this->assertEquals(200, $postResult['code']);
        $delResult = $this->instance->cellsSparklineGroupsDeleteWorksheetSparklineGroup($name, $sheet_name,$index ,$folder);
        $this->assertEquals(200, $delResult['code']);
        $delsResult = $this->instance->cellsSparklineGroupsDeleteWorksheetSparklineGroups($name, $sheet_name ,$folder);
        $this->assertEquals(200, $delsResult['code']);
    }

    
}
