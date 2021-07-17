<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\LiteCellsApi;
use \Aspose\Cells\Cloud\Model\ColumnsResponse;
use \Aspose\Cells\Cloud\Model\SaaSposeResponse;
use \Aspose\Cells\Cloud\Model\TaskDescription;
use \Aspose\Cells\Cloud\Model\SplitWorkbookTaskParameter;
use \Aspose\Cells\Cloud\Model\FileSource;
use \Aspose\Cells\Cloud\Model\TaskData;
use PHPUnit\Framework\TestCase;

class CellsClearObjectApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for testCellsClearCommentPostRun
     *
     * Run tasks.
     *
     */
    public function testCellsClearCommentPostRun()
    {       
        $book1 = "Book1.xlsx";
        $mydoc = "myDocument.xlsx";
        $files = array (
            $mydoc =>  CellsApiTestBase::getfullfilename($mydoc),
            $book1 =>  CellsApiTestBase::getfullfilename($book1)
        );
        

        $result = $this->instance->postClearObjects( $files , 'comment');
        // print( $result);
        $this->assertNotNull($result);

    }
     /**
     * Test case for testCellsClearChartPostRun
     *
     * Run tasks.
     *
     */
    public function testCellsClearChartPostRun()
    {       
        $book1 = "Book1.xlsx";
        $mydoc = "myDocument.xlsx";
        $files = array (
            $mydoc =>  CellsApiTestBase::getfullfilename($mydoc),
            $book1 =>  CellsApiTestBase::getfullfilename($book1)
        );
        

        $result = $this->instance->postClearObjects(  $files,'chart' );
        // print( $result);
        $this->assertNotNull($result);
    }
     /**
     * Test case for testCellsClearPicturePostRun
     *
     * Run tasks.
     *
     */
    public function testCellsClearPicturePostRun()
    {       
        $book1 = "Book1.xlsx";
        $mydoc = "myDocument.xlsx";
        $files = array (
            $mydoc =>  CellsApiTestBase::getfullfilename($mydoc),
            $book1 =>  CellsApiTestBase::getfullfilename($book1)
        );
        

        $result = $this->instance->postClearObjects($files, 'picture' );
        // print( $result);
        $this->assertNotNull($result);
    }
     /**
     * Test case for testCellsClearChartPostRun
     *
     * Run tasks.
     *
     */
    public function testCellsClearShapePostRun()
    {       
        $book1 = "Book1.xlsx";
        $mydoc = "myDocument.xlsx";
        $files = array (
            $mydoc =>  CellsApiTestBase::getfullfilename($mydoc),
            $book1 =>  CellsApiTestBase::getfullfilename($book1)
        );
        

        $result = $this->instance->postClearObjects(  $files ,'Shape');
        // print( $result);
        $this->assertNotNull($result);
    }
}
