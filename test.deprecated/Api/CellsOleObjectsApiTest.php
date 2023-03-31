<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\OleObject;


class CellsOleObjectsApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsOleObjectsDeleteWorksheetOleObject
     *
     * Delete OLE object..
     *
     */
    public function testCellsOleObjectsDeleteWorksheetOleObject()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet6';
        $oleObjectIndex = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsOleObjectsDeleteWorksheetOleObject($name, $sheet_name,$oleObjectIndex,$folder);
        $this->assertEquals(200, $result['code']);
    }
    /**
     * Test case for cellsOleObjectsDeleteWorksheetOleObjects
     *
     * Delete all OLE objects..
     *
     */
    public function testCellsOleObjectsDeleteWorksheetOleObjects()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet6';
        $oleObjectIndex = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsOleObjectsDeleteWorksheetOleObjects($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsOleObjectsGetWorksheetOleObject
     *
     * Get OLE object info..
     *
     */
    public function testCellsOleObjectsGetWorksheetOleObject()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet6';
        $oleObjectIndex = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsOleObjectsGetWorksheetOleObject($name, $sheet_name,$oleObjectIndex,null,$folder);
        $json = json_decode($result);
        $this->assertEquals(200, $json->Code);
    }
    
    /**
     * Test case for cellsOleObjectsGetWorksheetOleObject format
     *
     * Get OLE object info..
     *
     */
    public function testCellsOleObjectsGetWorksheetOleObjectFormat()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet6';
        $oleObjectIndex = 0;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsOleObjectsGetWorksheetOleObject($name, $sheet_name,$oleObjectIndex,"png",$folder);
        $this->assertGreaterThan(0, $result->getSize());
    }

    /**
     * Test case for cellsOleObjectsGetWorksheetOleObjects
     *
     * Get worksheet OLE objects info..
     *
     */
    public function testCellsOleObjectsGetWorksheetOleObjects()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet6';
        $oleObjectIndex = 0;         
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsOleObjectsGetWorksheetOleObjects($name, $sheet_name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsOleObjectsPostUpdateWorksheetOleObject
     *
     * Update OLE object..
     *
     */
    public function testCellsOleObjectsPostUpdateWorksheetOleObject()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet6';
        $oleObjectIndex = 0;  
        $ole = new OleObject();  
        $ole->setLeft (10);
        $ole->setRight (10);
        $ole->setHeight(90);
        $ole->setWidth(78);     
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsOleObjectsPostUpdateWorksheetOleObject($name, $sheet_name,$oleObjectIndex,$ole,$folder);
        $this->assertEquals(200, $result['code']);
    }


    /**
     * Test case for cellsOleObjectsPutWorksheetOleObject
     *
     * Add OLE object.
     *
     */
    public function testCellsOleObjectsPutWorksheetOleObject()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet6';
        $ole = null;
        $upperLeftRow = 1;         
        $upperLeftColumn = 1;  
        $height = 100;  
        $width = 80;  
        $oleFile = 'OLEDoc.docx';  
        $imageFile = 'word.jpg';  
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$imageFile,"");
        CellsApiTestBase::ready(  $this->instance,$oleFile,"");
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsOleObjectsPutWorksheetOleObject($name, $sheet_name, $ole,$upperLeftRow,$upperLeftColumn ,$height,$width,$oleFile, $imageFile ,$folder);
        $this->assertEquals(200, $result['code']);
    }
}
