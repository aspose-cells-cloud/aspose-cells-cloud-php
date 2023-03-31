<?php


namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\Validation;


class CellsWorksheetValidationsApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsWorksheetValidationsDeleteWorkSheetValidation
     *
     * Delete worksheet validation by index..
     *
     */
    public function testCellsWorksheetValidationsDeleteWorkSheetValidation()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $validationIndex = 0;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetValidationsDeleteWorkSheetValidation($name, $sheet_name, $validationIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetValidationsGetWorkSheetValidation
     *
     * Get worksheet validation by index..
     *
     */
    public function testCellsWorksheetValidationsGetWorkSheetValidation()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $validationIndex = 0;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetValidationsGetWorkSheetValidation($name, $sheet_name, $validationIndex, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetValidationsGetWorkSheetValidations
     *
     * Get worksheet validations..
     *
     */
    public function testCellsWorksheetValidationsGetWorkSheetValidations()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $validationIndex = 0;
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetValidationsGetWorkSheetValidations($name, $sheet_name, $folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetValidationsPostWorkSheetValidation
     *
     * Update worksheet validation by index..
     *
     */
    public function testCellsWorksheetValidationsPostWorkSheetValidation()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $validationIndex = 0;
        $validation = new Validation();
        $validation->setIgnoreBlank ('true');
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetValidationsPostWorkSheetValidation($name, $sheet_name,$validationIndex, $validation,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsWorksheetValidationsPutWorkSheetValidation
     *
     * Add worksheet validation at index..
     *
     */
    public function testCellsWorksheetValidationsPutWorkSheetValidation()
    {
        $name ='Book1.xlsx';
        $sheet_name ='Sheet1';
        $range = 'A1:c10';      
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsWorksheetValidationsPutWorkSheetValidation($name, $sheet_name,$range,null,$folder);
        $this->assertEquals(200, $result['code']);
    }
}
