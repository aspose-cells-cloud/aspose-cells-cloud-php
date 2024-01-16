<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetOleObjectRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$oLEDoc = "OLEDoc.docx";
$wordJPG = "word.jpg";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
CellsApiTestBase::ready(  $this->instance,$oLEDoc ,"OLEDoc.docx" ,  "");
CellsApiTestBase::ready(  $this->instance,$wordJPG ,"word.jpg" ,  "");
 
$request = new PutWorksheetOleObjectRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet6");
$request->setUpperLeftRow( 1);
$request->setUpperLeftColumn( 1);
$request->setHeight( 100);
$request->setWidth( 80);
$request->setOleFile( "OLEDoc.docx");
$request->setImageFile( "word.jpg");
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorksheetOleObject($request);