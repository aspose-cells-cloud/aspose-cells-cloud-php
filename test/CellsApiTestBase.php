<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ApiExceptionphp.cs">
 *   Copyright (c) 2025 Aspose.Cells Cloud
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

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\UploadFileRequest;

class CellsApiTestBase
{

    public static function getfullfilename( $filename )
    {
        $cwd = getcwd();
        $parents = "/";
        $png = "TestData/" . $filename;
        $file = null;
        for ($x=0; $x <= 10; $x++) {
            $path = $cwd . $parents . $png;
            if (file_exists($path)) {
                $file = $path;
                break;
            }
            $parents = $parents . "../";
        }

      return $file;
    }

    public static function ready($api , $filename , $remotePath, $storageName = null)
    {
        $cwd = getcwd();
        $parents = "/";
        $png = "TestData/" . $filename;
        $file = null;
        for ($x=0; $x <= 10; $x++) {
            $path = $cwd . $parents . $png;
            if (file_exists($path)) {
                $file = $path;
                break;
            }
            $parents = $parents . "../";
        }
        #$uploadFileRequest =new UploadFileRequest($file,$remotePath,$storageName); 
        $uploadFileRequest =new UploadFileRequest(); 
        $uploadFileRequest->setPath($remotePath);
        $uploadFileRequest->setUploadFiles($file);
        $result = $api->uploadFile( $uploadFileRequest);
        return $result;
    }
}
