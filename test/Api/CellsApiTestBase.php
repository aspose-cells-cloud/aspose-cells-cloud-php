<?php

namespace Aspose\Cells\Cloud;
require_once('vendor\autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;


/**
 * Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CellsApiTestBase
{
    private static $accessToken = '';

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */

    public static function ready($api , $filename , $folder, $storageName = null)
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

        if ( $folder == ""){
            $fullName=$filename;
        }else{
            $fullName=$folder . "/" .  $filename;
        }
        $result = $api->uploadFile($fullName,$file);
        return $result;
    }

    public static function getSID()
    {        
        return "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx";
    }
    
    public static function getKey()
    {        
        return "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
    }
}
