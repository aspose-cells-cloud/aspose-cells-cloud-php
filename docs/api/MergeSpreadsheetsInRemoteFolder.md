# **Spreadsheet Cloud API: mergeSpreadsheetsInRemoteFolder**

Merge spreadsheet files in folder of cloud storage into a specified format file. 


## **Quick Start**

- **Base URL**: `http://api.aspose.cloud/v4.0`
- **Authentication Method**: `JWT (OAuth2, application)`  **Token URL**: `https://api.aspose.cloud/connect/token`
## **Interface Details**

### **Endpoint** 

```
PUT http://api.aspose.cloud/v4.0/cells/merge/remote-spreadsheets
```
### **Function Description**
This method merges multiple spreadsheet files stored in cloud storage into a single output file in the specified format (e.g., XLSX, CSV, PDF).The operation is performed remotely, without requiring the files to be downloaded to the local machine.Valid cloud storage credentials and accessible file paths or identifiers are required for all input files.The merging process is executed entirely within the cloud environment, reducing data transfer and improving performance.If any of the source files cannot be accessed, or if an error occurs during the merge or conversion process, an appropriate exception will be thrown.Supported output formats depend on the capabilities of the underlying cloud processing service.

### The request parameters of **mergeSpreadsheetsInRemoteFolder** API are: 

| Parameter Name | Type | Path/Query String/HTTPBody | Description | 
| :- | :- | :- |:- | 
|folder|String|Query|The folder used to store the merged files.|
|fileMatchExpression|String|Query||
|outFormat|String|Query|The out file format.|
|mergeInOneSheet|Boolean|Query|Whether to combine all data into a single worksheet.|
|storageName|String|Query|(Optional) The name of the storage if using custom cloud storage. Use default storage if omitted.|
|outPath|String|Query|(Optional) The folder path where the workbook is stored. The default is null.|
|outStorageName|String|Query|Output file Storage Name.|
|fontsLocation|String|Query|Use Custom fonts.|
|regoin|String|Query|The spreadsheet region setting.|
|password|String|Query|The password for opening spreadsheet file.|

### **Response Description**
```json
{
File
}
```


## OpenAPI Specification

The [OpenAPI Specification](https://reference.aspose.cloud/cells/#/DataProcessingController/MergeSpreadsheetsInRemoteFolder) defines a publicly accessible programming interface and lets you carry out REST interactions directly from a web browser.

