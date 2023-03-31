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

use \Aspose\Cells\Cloud\Model\TaskDescription;
use \Aspose\Cells\Cloud\Model\SplitWorkbookTaskParameter;
use \Aspose\Cells\Cloud\Model\FileSource;
use \Aspose\Cells\Cloud\Model\TaskData;
use PHPUnit\Framework\TestCase;

class CellsTaskApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsTaskPostRunTask
     *
     * Run tasks.
     *
     */
    public function testCellsTaskPostRunTask()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $task1 = new TaskDescription();
        $task1->setTaskType('SplitWorkbook');
        $param1 = new SplitWorkbookTaskParameter ();
        $param1->setDestinationFileFormat('xlsx');
        $fileSource =new FileSource();
        // $fileSource->setFilePath($folder);
        $fileSource->setFileSourceType('CloudFileSystem');
        $param1->setDestinationFilePosition($fileSource);
        $param1->setSplitNameRule('sheetname');
        $workbook =new FileSource();
        $workbook->setFilePath( $folder. "\\". $name);
        $workbook->setFileSourceType('CloudFileSystem');
        $param1->setWorkbook($workbook);
        $task1->setTaskParameter($param1);
        $taskData = new TaskData();
        $tasks =  array($task1);
        $taskData->setTasks($tasks);
        $result = $this->instance->cellsTaskPostRunTask($taskData);
//        $this->assertEquals("Split workbook task succeed to run.\nSplit workbook task succeed to run.\n", $result['Description']);
    }
}
