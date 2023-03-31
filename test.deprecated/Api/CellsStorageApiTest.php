<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\ListObject;
use \Aspose\Cells\Cloud\Model\DataSorter;
use \Aspose\Cells\Cloud\Model\CreatePivotTableRequest;

class CellsStorageApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsListObjectsDeleteWorksheetListObject
     *
     * Delete worksheet list object by index.
     *
     */
    public function testCellsStorageApiTestAll()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet7';
        $listObjectIndex = 0;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsListObjectsDeleteWorksheetListObject($name, $sheet_name , $listObjectIndex , $folder);
        $this->assertEquals(200, $result['code']);
    }



}
