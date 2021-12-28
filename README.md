![](https://img.shields.io/badge/REST%20API-v3.0-lightgrey) ![Packagist Version](https://img.shields.io/packagist/v/aspose/cells-sdk-php) ![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/aspose/cells-sdk-php) ![Packagist Downloads](https://img.shields.io/packagist/dt/aspose/cells-sdk-php) [![GitHub license](https://img.shields.io/github/license/aspose-cells-cloud/aspose-cells-cloud-java)](https://github.com/aspose-cells-cloud/aspose-cells-cloud-php/blob/master/LICENSE) ![GitHub commits since latest release (by date)](https://img.shields.io/github/commits-since/aspose-cells-cloud/aspose-cells-cloud-php/21.12)

# PHP SDK for Spreadsheet Processing in Cloud

This Cloud SDK enhances your PHP-based Cloud apps to [process & manipulate Microsoft Excel spreadsheets](https://products.aspose.cloud/cells/php) without requiring Microsoft Office.

## Cloud Spreadsheet Processor in a Nutshell

- Create new spreadsheets using Excel files as templates or Smart Marker.
- Load & process Excel spreadsheets & worksheets via Cloud SDK.
- Merge or split workbooks.
- Protect or unprotect worksheets.
- [Import data to worksheets](https://docs.aspose.cloud/cells/import-data-into-worksheet/).
- Calculate formulas or add/update formulas to worksheet cells.
- Add, update or delete charts, worksheets, images, shapes, hyperlinks & validations.
- Add or remove cells area, conditional formatting or OleObjects from Excel worksheets.
- Insert or delete horizontal or vertical page breaks
- [Add ListObject](https://docs.aspose.cloud/cells/working-with-list-object-or-table/) at a specific place within an Excel file & convert to a range of cells.
- Delete specific or all ListObjects in a worksheet or summarize data with Pivot Table.
- Apply custom criteria to list filters of various types.
- Get, update, show or hide chart legend & titles.
- Manipulate page setup, header & footer.
- Create, update, fetch or delete document properties.
- Fetch the required shape from worksheet.
- Leverage the power of [Pivot Tables](https://docs.aspose.cloud/cells/working-with-pivot-tables/) & Ranges.

## Feature & Enhancements in Version 21.12

- Improvement for conversion API.
- Improvement for batch data import to support to set cell formula.
- Improvement for setting row height and column wight to support to set multi-rows and multi-columns.
- Support to set cell formula in batch data import.
- Add a new API for updating the list column.
- Add a new API for reversing columns and rows.
- Add new APIs for grouping and ungrouping shapes.

## Read Other Formats

SXC, FODS

## Integrated Storage API

Since version 19.9, SDK includes support of storage operations for better user experience and unification. It gives you an ability to;

- Upload, download, copy, move and delete files, including versions handling (if you are using Cloud storage that supports this feature - true by default).
- Create, copy, move and delete folders.
- Copy and move files and folders across separate storages in scope of a single operation.
- Check if certain file, folder or storage exists.


## Get Started with Aspose.Cells Cloud SDK for PHP

First, create an account at [Aspose for Cloud](https://dashboard.aspose.cloud/#/apps) and get your application information.

### Get the SDK

The complete source code is available at the [GitHub Repository](https://github.com/aspose-cells-cloud/aspose-cells-cloud-php). You can either directly use it in your project via source code or get it from [Packagist distribution](https://packagist.org/packages/aspose/cells-sdk-php) (recommended). 

### Install via Composer

Aspose.Cells Cloud SDK for PHP is available on [Packagist](https://packagist.org/packages/aspose/cells-sdk-php) as the `cells-sdk-php` package. Run the following command to get the package.

```console
composer require aspose/cells-sdk-php
```

Use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading) command to start using the SDK.

```php
require_once('vendor/autoload.php');
```

## Import Data to Excel Worksheet via PHP

```php
require_once realpath(__DIR__ . '/..') . '/vendor/autoload.php';

use Aspose\Cells\CellsApi;
use Aspose\Cells\AsposeApp;

class Workbook {

    public $cells;

    public function __construct() {
        AsposeApp::$clientId = Utils::clientId;
        AsposeApp::$clientSecret = Utils::clientSecret;
        $this->cells = new CellsApi( AsposeApp::$clientId,AsposeApp::$clientSecret );
    }

    public function postImportDataCloudFile() {
        $name ='Book1.xlsx';
        $folder = "PhpTest";
        $data = new ImportIntArrayOption();
        $data->setDestinationWorksheet('Sheet1');
        $data->setFirstColumn(1);
        $data->setFirstRow(3);
        $data->setImportDataType('IntArray');
        $data->setIsVertical('true');
        $data->setData(array(1, 2, 3, 4)) ;

        $this->instance->uploadFile($folder + "/" +  $name , $sourceFolder + $name);
        $result = $this->instance->cellsWorkbookPostImportData($name, $data,  $folder);
    }
}

$workbook = new Workbook();
$workbook->postImportDataCloudFile();
```

## Aspose.Cells Cloud SDKs in Popular Languages

| .NET | Java | Python | Ruby | Node.js | Android | Swift | Perl | GO |
|---|---|---|---|---|---|---|---|---|
| [GitHub](https://github.com/aspose-cells-cloud/aspose-cells-cloud-dotnet) | [GitHub](https://github.com/aspose-cells-cloud/aspose-cells-cloud-java) | [GitHub](https://github.com/aspose-cells-cloud/aspose-cells-cloud-python) | [GitHub](https://github.com/aspose-cells-cloud/aspose-cells-cloud-ruby)  | [GitHub](https://github.com/aspose-cells-cloud/aspose-cells-cloud-node) | [GitHub](https://github.com/aspose-cells-cloud/aspose-cells-cloud-android)  | [GitHub](https://github.com/aspose-cells-cloud/aspose-cells-cloud-swift) | [GitHub](https://github.com/aspose-cells-cloud/aspose-cells-cloud-perl) | [GitHub](https://github.com/aspose-cells-cloud/aspose-cells-cloud-go) |
| [NuGet](https://www.nuget.org/packages/Aspose.Cells-Cloud/) | [Maven](https://repository.aspose.cloud/webapp/#/artifacts/browse/tree/General/repo/com/aspose/aspose-cells-cloud) | [PIP](https://pypi.org/project/asposecellscloud/) | [GEM](https://rubygems.org/gems/aspose_cells_cloud)  | [NPM](https://www.npmjs.com/package/asposecellscloud) | [Maven](https://repository.aspose.cloud/webapp/#/artifacts/browse/tree/General/repo/com/aspose/aspose-cells-cloud-android) | [POD](https://cocoapods.org/pods/AsposeCellsCloud) |  [CPAN](https://metacpan.org/release/AsposeCellsCloud-CellsApi) | [GO](https://pkg.go.dev/github.com/aspose-cells-cloud/aspose-cells-cloud-go/v20?tab=overview) |


[Product Page](https://products.aspose.cloud/cells/php) | [Documentation](https://docs.aspose.cloud/cells/) | [Live Demo](https://products.aspose.app/cells/family) | [API Reference](https://apireference.aspose.cloud/cells/) | [Code Samples](https://github.com/aspose-cells-cloud/aspose-cells-cloud-php/tree/master/test/Api) | [Blog](https://blog.aspose.cloud/category/cells/) | [Free Support](https://forum.aspose.cloud/c/cells) | [Free Trial](https://dashboard.aspose.cloud/#/apps)
