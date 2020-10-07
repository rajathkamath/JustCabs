<?php
include("db.php");




function rent_bill($duration) {
	$rentcost = $duration*100;
	return $rent_bill;
}
function cab_bill($cartype) {
	if ( $cartype==micro)
		$carcost=75;
	elseif ($cartype==mini)
	$carcost=150;
	elseif ($cartype==sedan)
	$carcost=200;
	elseif ($cartype==suv)
	$carcost=350;
	return $carcost;
}
?>