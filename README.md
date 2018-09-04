# Aspose.Cells Cloud SDK for PHP
This repository contains Aspose.Cells Cloud SDK for PHP source code. This SDK allows you to work with Aspose.Cells Cloud REST APIs in your PHP applications quickly and easily, with zero initial cost.

## Key Features
* Convert spreadsheets to different formats
* Create spreadsheets from templates, XML or smart markers
* Split spreadsheets to single worksheet spreadsheets
* Manipulate rows, columns, cells & data
* Set complex formulae
* Extract charts, pictures, shapes & other objects as images
* Export worksheets to images

See [API Reference](https://apireference.aspose.cloud/cells/) for full API specification.

## How to use the SDK?
The complete source code is available in this repository folder. You can either directly use it in your project via source code or get [Packagist distribution](https://packagist.org/packages/aspose/cells-sdk-php) (recommended).

### Prerequisites

To use Aspose Cells for Cloud PHP SDK you need to register an account with [Aspose Cloud](https://www.aspose.cloud/) and lookup/create App Key and SID at [Cloud Dashboard](https://dashboard.aspose.cloud/#/apps). There is free quota available. For more details, see [Aspose Cloud Pricing](https://purchase.aspose.cloud/pricing).

### Installation

#### Via Composer:
*cells-sdk-php* is available on Packagist as the
[`cells-sdk-php`](https://packagist.org/packages/aspose/cells-sdk-php) package. Run the following command:
```bash
composer require aspose/cells-sdk-php
```

To use the SDK, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

### Sample usage

```php
namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
use Aspose\Cells\Cloud\Api\OAuthApi;
use Aspose\Cells\Cloud\Api\CellsSaveAsApi;

$grantType = "client_credentials";
$clientId = "your clientId";
$clientSecret = "your clientSecret";
$api = new OAuthApi();
$config = $api->getConfig();
$config->setHost('https://api.aspose.cloud');
$accessTokenResponse = $api->oAuthPost($grantType, $clientId, $clientSecret);

$saveAsAPI = new CellsSaveAsApi();
$config = $saveAsAPI->getConfig();
$config->setAccessToken($accessTokenResponse->getAccessToken());

$name ='Book1.xlsx';
$saveOptions = null;
$newfilename = "newbook.xlsx";
$isAutoFitRows= 'true';
$isAutoFitColumns= 'true';
$folder = "Temp";

$result = $saveAsAPI->cellsSaveAsPostDocumentSaveAs($name, $saveOptions, $newfilename,$isAutoFitRows, $isAutoFitColumns, $folder);
```

## Dependencies
- PHP 5.6 or later
- referenced packages (see [here](composer.json) for more details)

## Contact Us
Your feedback is very important to us. Please feel free to contact us using our [Support Forums](https://forum.aspose.cloud/c/cells).


