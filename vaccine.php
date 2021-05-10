<html>
	<head>
		<meta http-equiv="Refresh" content="3"> 
	</head>

</html>
<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:88.0) Gecko/20100101 Firefox/88.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://cdn-api.co-vin.in/api/v2/appointment/sessions/calendarByDistrict?district_id=363&date=10-05-2021');
$result = curl_exec($ch);
curl_close($ch);

$obj = (array) json_decode($result);


$i = 0;
echo "<table border='1'>";
foreach($obj as $key => $value){

		foreach($value as $a1 => $a2) {

			$a1 = (array) $a1;
			$a2 = (array) $a2;

			//continue;
		$nvar = (array)$a2['sessions'];
		$nvar1 = (array)$nvar[0];
	if($nvar1['available_capacity'] >= 0 && $nvar1['min_age_limit'] == 18) {
		$i++;
		if ($nvar1['available_capacity'] >= 1) { $style = "style = 'background-color:red;'"; 

		?>



<iframe id="existing-iframe-example"
          width="200" height="200"
          allow="autoplay"
          src="https://www.youtube.com/embed/Y1_y7v_ZgQk?autoplay=1&rel=0&enablejsapi=1"
          frameborder="0"
          style="border: solid 4px #37474F"
          ></iframe>
		<?php
	} else  { $style = ''; 

		

	}
	echo "<tr  $style ><td>".$a2['pincode']."</td>";
	echo "<td>".$a2['name']."</td>";
		echo "<td width='50%'>".$a2['address']."</td>";

		echo "<td>".$nvar1['available_capacity']."</td>";
	echo "</tr>";
}
}
}
echo "</table>";
echo $i;
?>