<?php

namespace Aspose\Cells\Cloud;
require_once('vendor\autoload.php');

use Aspose\Cells\Cloud\Configuration;
use Aspose\Cells\Cloud\ApiException;
use Aspose\Cells\Cloud\ObjectSerializer;
use Aspose\Cells\Cloud\Api\OAuthApi;
use Aspose\Storage\StorageApi;
use Aspose\Storage\AsposeApp;

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
    public static function getAccessToken()
    {
        if(self::$accessToken === ''){
            $grantType = "client_credentials";
            $clientId = "66164C51-693E-4904-A121-545961673EC1";
            $clientSecret = "536e76768419db9585afdd37bb5f7533";
            $api = new OAuthApi();
            $config = $api->getConfig();
            $config->setHost('https://api.aspose.cloud');
            $AccessTokenResponse  =  $api->oAuthPost( $grantType, $clientId, $clientSecret);
            self::$accessToken = $AccessTokenResponse->getAccessToken();
        }
        return self::$accessToken;
    }
    public static function ready($filename , $folder, $storageName = null)
    {
        AsposeApp::$appSID = "66164C51-693E-4904-A121-545961673EC1";
        AsposeApp::$apiKey = "536e76768419db9585afdd37bb5f7533";
        $storage = new StorageApi();
        
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
        
        $result = $storage->PutCreate($Path= $folder.'/'.$filename, $versionId = null, $storage = $storageName, $file);
        return $result;
    }
}
