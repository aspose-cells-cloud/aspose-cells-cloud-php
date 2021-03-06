<?php
/**
 * CellsPropertiesApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Web API Swagger specification
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Model\CellsDocumentProperty;


/**
 * CellsPropertiesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CellsPropertiesApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for cellsPropertiesDeleteDocumentProperties
     *
     * Delete all custom document properties and clean built-in ones..
     *
     */
    public function testCellsPropertiesDeleteDocumentProperties()
    {
        $name ='Book1.xlsx';      
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPropertiesDeleteDocumentProperties($name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPropertiesDeleteDocumentProperty
     *
     * Delete document property..
     *
     */
    public function testCellsPropertiesDeleteDocumentProperty()
    {
        $name ='Book1.xlsx'; 
        $propertyName = "Author";    
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPropertiesDeleteDocumentProperty($name, $propertyName ,$folder);
        $this->assertEquals(200, $result['code']);
    }


    /**
     * Test case for cellsPropertiesGetDocumentProperties
     *
     * Read document properties..
     *
     */
    public function testCellsPropertiesGetDocumentProperties()
    {
        $name ='Book1.xlsx';       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPropertiesGetDocumentProperties($name,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPropertiesGetDocumentProperty
     *
     * Read document property by name..
     *
     */
    public function testCellsPropertiesGetDocumentProperty()
    {
        $name ='Book1.xlsx';
        $propertyName = "Author";       
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPropertiesGetDocumentProperty($name,$propertyName,$folder);
        $this->assertEquals(200, $result['code']);
    }

    /**
     * Test case for cellsPropertiesPutDocumentProperty
     *
     * Set/create document property..
     *
     */
    public function testCellsPropertiesPutDocumentProperty()
    {
        $name ='Book1.xlsx';
        $propertyName = "Name";
        $property = new CellsDocumentProperty();  
        $property->setName("Author");
        $property->setValue("Val") ;   
        $folder = "Temp";
        CellsApiTestBase::ready(  $this->instance,$name ,$folder);
        $result = $this->instance->cellsPropertiesPutDocumentProperty($name,$propertyName ,$property,$folder);
        $this->assertEquals(200, $result['code']);
    }
}
