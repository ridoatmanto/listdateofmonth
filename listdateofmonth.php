<?php 
$year = 2016;
$month = 11;

$arrayDate = array();
for($i = 1; $i<=31 ; $i++)
{
	//Format Month, Day, Year
	if( checkdate($month, $i, $year) == true )
	{
		$arrayDate[] = $year."-".$month."-".sprintf("%02d",$i);
	}
}
echo "<pre>";
print_r($arrayDate);
echo "</pre>";
?>