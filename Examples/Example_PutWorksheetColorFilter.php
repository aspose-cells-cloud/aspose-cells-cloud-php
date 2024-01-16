<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutWorksheetColorFilterRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

$colorFilterForegroundColorColor = new \Aspose\Cells\Cloud\Model\Color();
$colorFilterForegroundColorColor->setR(48 ); 
$colorFilterForegroundColorColor->setG(48 ); 
$colorFilterForegroundColorColor->setB(48 ); 
$colorFilterForegroundColor = new \Aspose\Cells\Cloud\Model\CellsColor();
$colorFilterForegroundColor->setType("Automatic" ); 
$colorFilterForegroundColor->setColor($colorFilterForegroundColorColor ); 
$colorFilter = new \Aspose\Cells\Cloud\Model\ColorFilterRequest();
$colorFilter->setPattern("Solid" ); 
$colorFilter->setForegroundColor($colorFilterForegroundColor ); 
CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutWorksheetColorFilterRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setRange( "A1:B1");
$request->setFieldIndex( 0);
$request->setColorFilter( $colorFilter);
$request->setMatchBlanks( 'true');
$request->setRefresh( 'true');
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putWorksheetColorFilter($request);