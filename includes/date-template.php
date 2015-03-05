<?php
// Set timezone
date_default_timezone_set('UTC');
 
// Start date
$Week1Day1_Start = '2015-02-23';
// End date
$Week1Day1_End = '2050-12-31';
 
if (strtotime($Week1Day1_Start) <= strtotime($Week1Day1_End)) {
include 'week1-mobile-1.php';
$Week1Day1_Start = date ("Y-m-d", strtotime("+28 day", strtotime($Week1Day1_Start)));
}
 
?>

