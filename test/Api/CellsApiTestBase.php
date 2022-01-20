<?php

namespace Aspose\Cells\Cloud;
require_once('vendor\autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Api\LightCellsApi;

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
    public static function getInstance()
    {
       return new CellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
    }
    public static function getLiteInstance()
    {
       return new LightCellsApi(getenv("CellsCloudTestClientId"),getenv("CellsCloudTestClientSecret"),"v3.0",getenv("CellsCloudTestApiBaseUrl"));
    }
    public static function isDockerSDK()
    {  
        return !(strtolower(getenv("CellsCloudTestIsDockerTest")) =='false') ;#settype(getenv("CellsCloudTestIsDockerTest"), 'boolean');
    }
    
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
        $result = $api->uploadFile($fullName,$file,$storageName );
        return $result;
    }


}
