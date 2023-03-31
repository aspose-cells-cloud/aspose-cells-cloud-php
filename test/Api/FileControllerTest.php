<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FileControllerTests.php.cs">
 *   Copyright (c) 2023 Aspose.Cells Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 *--------------------------------------------------------------------------------------------------------------------
*/

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\CopyFileRequest; 
use \Aspose\Cells\Cloud\Request\DeleteFileRequest; 
use \Aspose\Cells\Cloud\Request\DownloadFileRequest; 
use \Aspose\Cells\Cloud\Request\MoveFileRequest; 
use \Aspose\Cells\Cloud\Request\UploadFileRequest; 

use PHPUnit\Framework\TestCase;
class FileControllerTest extends \PHPUnit_Framework_TestCase
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
        $this->instance = new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
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

    /// <summary>
    /// Test for DownloadFile of FileController.
    /// </summary>

    public function testDownloadFile()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DownloadFileRequest();
        $request->setPath( $remoteFolder . "/" . $remoteName);
        $request->setStorageName( "");
        $request->setVersionId( "");
        $this->instance->downloadFile($request);
    }

    /// <summary>
    /// Test for UploadFile of FileController.
    /// </summary>

    public function testUploadFile()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $mapFiles = array ();
        $mapFiles[$localName] = CellsApiTestBase::getfullfilename($localName);
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new UploadFileRequest();
        $request->setUploadFiles( $mapFiles);
        $request->setPath( $remoteFolder . "/" . $remoteName);
        $request->setStorageName( "");
        $this->instance->uploadFile($request);
    }

    /// <summary>
    /// Test for CopyFile of FileController.
    /// </summary>

    public function testCopyFile()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new CopyFileRequest();
        $request->setSrcPath( $remoteFolder . "/" . $remoteName);
        $request->setDestPath( "OutResult/" . $remoteName);
        $request->setSrcStorageName( "");
        $request->setDestStorageName( "");
        $request->setVersionId( "");
        $this->instance->copyFile($request);
    }

    /// <summary>
    /// Test for MoveFile of FileController.
    /// </summary>

    public function testMoveFile()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new MoveFileRequest();
        $request->setSrcPath( $remoteFolder . "/" . $remoteName);
        $request->setDestPath( "OutResult/" . $remoteName);
        $request->setSrcStorageName( "");
        $request->setDestStorageName( "");
        $request->setVersionId( "");
        $this->instance->moveFile($request);
    }

    /// <summary>
    /// Test for DeleteFile of FileController.
    /// </summary>

    public function testDeleteFile()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteFileRequest();
        $request->setPath( $remoteFolder . "/" . $remoteName);
        $request->setStorageName( "");
        $request->setVersionId( "");
        $this->instance->deleteFile($request);
    }
}