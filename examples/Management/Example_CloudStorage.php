<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\ObjectExistsRequest;
use \Aspose\Cells\Cloud\Request\CreateFolderRequest;
use \Aspose\Cells\Cloud\Request\UploadFileRequest;
use \Aspose\Cells\Cloud\Request\MoveFolderRequest;
use \Aspose\Cells\Cloud\Request\CopyFileRequest;
use \Aspose\Cells\Cloud\Request\CopyFolderRequest;
use \Aspose\Cells\Cloud\Request\GetFilesListRequest;

#get CellsCloudClientId from https://dashboard.aspose.cloud/#/applications
#get CellsCloudClientSecret from https://dashboard.aspose.cloud/#/applications

$RemoteFolder = "SDKPHP";
$CompanySalesXlsx = "CompanySales.xlsx";
$EmployeeSalesSummaryXlsx = "EmployeeSalesSummary.xlsx";
$instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"));

$response = $instance->objectExists( new ObjectExistsRequest( $RemoteFolder));
if (!$response->getExists())
{
    $instance->createFolder(new  CreateFolderRequest($RemoteFolder) );
    print("Created Folder.");
}
$response = $instance->objectExists( new ObjectExistsRequest( $RemoteFolder ."/" . $CompanySalesXlsx));
if (!$response->getExists()) {
    $instance->uploadFile(new  UploadFileRequest($CompanySalesXlsx ,$RemoteFolder ."/" . $CompanySalesXlsx));
    print("Upload file $CompanySalesXlsx.");
}
$response = $instance->objectExists( new ObjectExistsRequest( $RemoteFolder ."/" . $EmployeeSalesSummaryXlsx));
if (!$response->getExists()) {
    $instance->uploadFile(new  UploadFileRequest($EmployeeSalesSummaryXlsx ,$RemoteFolder ."/" . $EmployeeSalesSummaryXlsx));
    print("Upload file $EmployeeSalesSummaryXlsx.");
}
$instance->createFolder(new  CreateFolderRequest($RemoteFolder."/CellsCloud") );
$instance->moveFolder( new MoveFolderRequest( $RemoteFolder."/CellsCloud",$RemoteFolder."/CellsCloud2"));
$instance->copyFile(new CopyFileRequest( $RemoteFolder."/CompanySales.xlsx",$RemoteFolder."/CellsCloud2/".$CompanySalesXlsx));
$instance->copyFolder(new CopyFolderRequest($RemoteFolder."/CellsCloud2",$RemoteFolder."/CellsCloud" ));
$filesList = $instance->getFilesList(new GetFilesListRequest( $RemoteFolder."/CellsCloud"));
print($filesList->getValue());
// foreach($filesList->getValue() as $stroageFile)
// {
//     print ($stroageFile->getName());
// }
