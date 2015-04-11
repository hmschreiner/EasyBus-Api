
<?php

//var_dump($_REQUEST);
$distance = distance($_REQUEST["lat1"], $_REQUEST["lon1"], $_REQUEST["lat2"], $_REQUEST["lon2"], "m");
echo  "Distancia: ". $distance." metros<br>";


echo "https://www.google.com.br/maps/dir/-29.9793891,-51.1147995/Sistema+FIERGS+(+Federa%C3%A7%C3%A3o+das+Ind%C3%BAstrias+do+Rio+Grande+do+Sul)+-+Avenida+Assis+Brasil,+8787+-+Sarandi,+Porto+Alegre+-+RS,+91010-000/@-29.9780509,-51.1158241,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x951976bf1ec8d6bf:0x24b75efe8217a577!2m2!1d-51.114661!2d-29.977271";

function distance($lat1, $lon1, $lat2, $lon2, $unit) {
//var_dump($lat1, $lon1, $lat2, $lon2, $unit);exit;
  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);

  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

	if ($unit == "K") {
		return ($miles * 1.609344);
	} else if ($unit == "N") {
		return ($miles * 0.8684);
	} else if($unit == "m") {

		$kilometers = $miles * 1.609344;
    	$meters = $kilometers * 1000;
		return $meters;
	}
	else {
		return $miles;
	}
}


//echo distance(-29.9793891,-51.1147995, -29.9757832,-51.1115165, "m") . " metros<br>";

/*echo distance(32.9697, -96.80322, 29.46786, -98.53506, "K") . " Kilometers<br>";
echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";
*/
?>

