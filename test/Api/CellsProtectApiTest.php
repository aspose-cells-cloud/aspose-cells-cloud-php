<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\LightCellsApi;
use \Aspose\Cells\Cloud\Model\ColumnsResponse;
use \Aspose\Cells\Cloud\Model\SaaSposeResponse;
use \Aspose\Cells\Cloud\Model\TaskDescription;
use \Aspose\Cells\Cloud\Model\SplitWorkbookTaskParameter;
use \Aspose\Cells\Cloud\Model\FileSource;
use \Aspose\Cells\Cloud\Model\TaskData;
use PHPUnit\Framework\TestCase;

class CellsProtectApiTest extends \PHPUnit_Framework_TestCase
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
        $this->instance = CellsApiTestBase::getLiteInstance();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**ve
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
    public function testCellsAssemblePostRun()
    {
        $DataSource ='datasource.xlsx';
        $AssemblyTest ='assemblytest.xlsx';

        $files = array (
            $DataSource =>  CellsApiTestBase::getfullfilename($DataSource),
            $AssemblyTest =>  CellsApiTestBase::getfullfilename($AssemblyTest)
        );
        $result = $this->instance->postProtect( $files, '12345' );
        // print( $result);
        $this->assertNotNull($result);
    }
}
