<?php declare(strict_types=1);
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FolderControllerTests.php.cs">
 *   Copyright (c) 2024 Aspose.Cells Cloud
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
use \Aspose\Cells\Cloud\Request\CopyFolderRequest; 
use \Aspose\Cells\Cloud\Request\CreateFolderRequest; 
use \Aspose\Cells\Cloud\Request\DeleteFolderRequest; 
use \Aspose\Cells\Cloud\Request\GetFilesListRequest; 
use \Aspose\Cells\Cloud\Request\MoveFolderRequest; 

use PHPUnit\Framework\TestCase;
final class FolderControllerTest extends TestCase
{
    /// <summary>
    /// Test for GetFilesList of FolderController.
    /// </summary>

    public function testGetFilesList()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetFilesListRequest();
        $request->setPath( $remoteFolder);
        $request->setStorageName( "");

        $resposne = $instance->getFilesList($request);
        $this->assertTrue($resposne !==null );
    }

    /// <summary>
    /// Test for CreateFolder of FolderController.
    /// </summary>

    public function testCreateFolder()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new CreateFolderRequest();
        $request->setPath( "OutResult/NewFolder");
        $request->setStorageName( "");

        $resposne = $instance->createFolder($request);
        $this->assertTrue(True);
    }

    /// <summary>
    /// Test for CopyFolder of FolderController.
    /// </summary>

    public function testCopyFolder()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new CopyFolderRequest();
        $request->setSrcPath( $remoteFolder);
        $request->setDestPath( "OutResult/Create");
        $request->setSrcStorageName( "");
        $request->setDestStorageName( "");

        $resposne = $instance->copyFolder($request);
        $this->assertTrue(True);
    }

    /// <summary>
    /// Test for MoveFolder of FolderController.
    /// </summary>

    public function testMoveFolder()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new MoveFolderRequest();
        $request->setSrcPath( "OutResult/Create");
        $request->setDestPath( "OutResult/Move");
        $request->setSrcStorageName( "");
        $request->setDestStorageName( "");

        $resposne = $instance->moveFolder($request);
        $this->assertTrue(True);
    }

    /// <summary>
    /// Test for DeleteFolder of FolderController.
    /// </summary>

    public function testDeleteFolder()
    {
        $instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteFolderRequest();
        $request->setPath( "OutResult/Create");
        $request->setStorageName( "");
        $request->setRecursive( 'true');

        $resposne = $instance->deleteFolder($request);
        $this->assertTrue(True);
    }
}