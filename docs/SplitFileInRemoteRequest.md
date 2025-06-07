# AsposeCellsCloud::Request::SplitFileInRemote 

## Load the model package
```perl
use AsposeCellsCloud::Request::SplitFileInRemote;
```

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the workbook file to be split. |
**folder** | **string** | The folder path where the workbook is stored. |
**from** | **int** | Begin worksheet index. |
**to** | **int** | End worksheet index. |
**out_format** | **string** | The desired output format (e.g., "Xlsx", "Pdf", "Csv"). |
**storage_name** | **string** | (Optional) The name of the storage if using custom cloud storage. Use default storage if omitted. |
**out_path** | **string** | (Optional) The folder path where the workbook is stored. The default is null. |
**out_storage_name** | **string** | Output file Storage Name. |
**fonts_location** | **string** | Use Custom fonts. |
**regoin** | **string** | The spreadsheet region setting. |
**password** | **string** | The password for opening spreadsheet file. |  

[[Back to Model list]](../README.md#documentation-for-requests) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

