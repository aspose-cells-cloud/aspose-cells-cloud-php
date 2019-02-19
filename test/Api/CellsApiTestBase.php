<?php

namespace Aspose\Cells\Cloud;
require_once('vendor\autoload.php');

use Aspose\Cells\Cloud\Configuration;
use Aspose\Cells\Cloud\ApiException;
use Aspose\Cells\Cloud\ObjectSerializer;
use Aspose\Cells\Cloud\Api\OAuthApi;
use Aspose\Storage\Api;

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
            $clientId = "your sid";
            $clientSecret = "your key";
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
        $config=new \Aspose\Storage\Configuration();
        $config->setAppSid("your sid");
        $config->setAppKey("your key");
        $storage = new Api\StorageApi($config);
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

        $fullName=$folder . "/" .  $filename;
        $putRequest = new \Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file );
        $result = $storage->PutCreate($putRequest);
        return $result;
    }
}
