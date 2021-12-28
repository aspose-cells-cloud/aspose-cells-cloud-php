<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\Shape;


class CellsShapesApiTest extends \PHPUnit_Framework_TestCase
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
    public function testCellsShapesDeleteWorksheetShape()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1';    
        $shapeindex = 0;       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsShapesDeleteWorksheetShape($name, $sheet_name, $shapeindex,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsShapesDeleteWorksheetShapes
     *
     * delete all shapes in worksheet.
     *
     */
    public function testCellsShapesDeleteWorksheetShapes()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1';    
        $shapeindex = 0;       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsShapesDeleteWorksheetShapes($name, $sheet_name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsShapesGetWorksheetShape
     *
     * Get worksheet shape.
     *
     */
    public function testCellsShapesGetWorksheetShape()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1';    
        $shapeindex = 0;       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsShapesGetWorksheetShape($name, $sheet_name, $shapeindex,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsShapesGetWorksheetShapes
     *
     * Get worksheet shapes.
     *
     */
    public function testCellsShapesGetWorksheetShapes()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1';    
        $shapeindex = 0;       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsShapesGetWorksheetShapes($name, $sheet_name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsShapesPostWorksheetShape
     *
     * Update a shape in worksheet.
     *
     */
    public function testCellsShapesPostWorksheetShape()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1';    
        $shapeindex = 0;   
        $dto = new Shape();
        $dto->setLowerRightColumn( 10);    
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsShapesPostWorksheetShape($name, $sheet_name, $shapeindex,$dto,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsShapesPutWorksheetShape
     *
     * Add shape in worksheet.
     *
     */
    public function testCellsShapesPutWorksheetShape()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet1';    
        $drawingType= "button";  
        $upperLeftRow=1; 
        $upperLeftColumn= 1; 
        $top=10;
        $left= 10;
        $width= 100; 
        $height= 90; 
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsShapesPutWorksheetShape($name, $sheet_name, null,$drawingType,$upperLeftRow,$upperLeftColumn, $top, $left, $width, $height,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsShapesPostWorksheetGroupShape
     *
     */
    public function testcellsShapesPostWorksheetGroupShape()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet6';    
        $list_shape= array(0,1);  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsShapesPostWorksheetGroupShape($name, $sheet_name,$list_shape,$folder);
        $this->assertEquals(200, $result['code']);
    }
    /**
     * Test case for cellsShapesPostWorksheetUngroupShape
     *
     */
    public function testcellsShapesPostWorksheetUngroupShape()
    {
        $name ='Book1.xlsx';  
        $sheet_name ='Sheet6';    
        $shapeindex =0 ;  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsShapesPostWorksheetUngroupShape($name, $sheet_name,$shapeindex,$folder);
        $this->assertEquals(200, $result['code']);
    }
}
