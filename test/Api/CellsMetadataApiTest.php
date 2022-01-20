<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\LightCellsApi;
use \Aspose\Cells\Cloud\Model\CellsDocumentProperty;
use \Aspose\Cells\Cloud\Model\SaaSposeResponse;
use \Aspose\Cells\Cloud\Model\TaskDescription;
use \Aspose\Cells\Cloud\Model\SplitWorkbookTaskParameter;
use \Aspose\Cells\Cloud\Model\FileSource;
use \Aspose\Cells\Cloud\Model\TaskData;
use PHPUnit\Framework\TestCase;

class CellsMetadataApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for testCellsDeleteMetaDataPostRun
     *
     * Run tasks.
     *
     */
    public function testCellsDeleteMetaDataPostRun()
    {
        $DataSource ='datasource.xlsx';
        $AssemblyTest ='assemblytest.xlsx';

        $files = array (
            $DataSource =>  CellsApiTestBase::getfullfilename($DataSource),
            $AssemblyTest =>  CellsApiTestBase::getfullfilename($AssemblyTest)
        );
        $result = $this->instance->deleteMetadata(  $files);
        // print( $result);
        $this->assertNotNull($result);
    }
    /**
     * Test case for testCellsGetMetaDataPostRun
     *
     * Run tasks.
     *
     */
    public function testCellsGetMetaDataPostRun()
    {
        $DataSource ='datasource.xlsx';
        $AssemblyTest ='assemblytest.xlsx';

        $files = array (
            $DataSource =>  CellsApiTestBase::getfullfilename($DataSource),
            $AssemblyTest =>  CellsApiTestBase::getfullfilename($AssemblyTest)
        );
        $result = $this->instance->getMetadata(  $files);
        // print( $result);
        $this->assertNotNull($result);
    }
    /**
     * Test case for testCellsGetMetaDataPostRun
     *
     * Run tasks.
     *
     */
    public function testCellsPostMetaDataPostRun()
    {
        $DataSource ='datasource.xlsx';
        $AssemblyTest ='assemblytest.xlsx';

        $files = array (
            $DataSource =>  CellsApiTestBase::getfullfilename($DataSource),
            $AssemblyTest =>  CellsApiTestBase::getfullfilename($AssemblyTest)
        );
        
        $cellsDocumentProperty = new CellsDocumentProperty();
        $cellsDocumentProperty->setName('test');
        $cellsDocumentProperty->setValue('test');
        $result = $this->instance->postMetadata( $files , array( $cellsDocumentProperty ) );
        // print( $result);
        $this->assertNotNull($result);
    }
}
