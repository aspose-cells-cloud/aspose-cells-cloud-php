Write-Host "Start Aspose.Cells Cloud SDK for PHP"
$StartTime = Get-Date
$passed = 0
$total = 0
$failed = 0
$skipped = 0
[string[]]$lines = .\vendor\bin\phpunit.bat --configuration ./phpunit.xml.dist
foreach ($line in $lines) {
       
    if ($line -match "(\d+) tests,") {
        $total = $matches[1]
        $passed = $total 
    }
    elseif ($line -match "Tests: (\d+), Assertions: (\d+), Errors: (\d+)") {
        $total = $matches[1]
        $failed = $matches[3]
        $passed = $total - $failed
    }
}    
$EndTime = Get-Date
$timespan = "{0:N2}" -f (New-TimeSpan $StartTime  $EndTime).TotalSeconds
Write-Host "Spent ${timespan}s on finishing test. Result : Total ${total}, Passed ${passed} , Failed ${failed} ,Skipped ${skipped} ."
    