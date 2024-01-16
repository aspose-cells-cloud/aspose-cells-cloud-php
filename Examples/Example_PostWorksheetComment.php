<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostWorksheetCommentRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$comment = new \Aspose\Cells\Cloud\Model\Comment();
$comment->setAuthor("aspose cells developer" ); 
$comment->setNote("aspose cells cloud api update comment." ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostWorksheetCommentRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setCellName( "B3");
$request->setComment( $comment);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postWorksheetComment($request);