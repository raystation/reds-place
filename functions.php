<?php 

function get_date() {
	date_default_timezone_set("America/Los_Angeles");
	$date["year"]=date('Y');
	$date["day"]=date('D');
	return $date;
}

function list_bottledbeer() {
	$list=array(
		"Amstel Light",
		"Anchor Steam",
		"Anchor Steam Liberty",
		"Anchor Steam Seasonal",
		"Asahi",
		"Becks",
		"Becks n.a",
		"Blue Moon",
		"Blue Moon *seasonal*",
		"Budweiser",
		"Bud Light",
		"Bud Light Lime",
		"Bud Platinum",
		"Chimay",
		"Coors",
		"Coors Light",
		"Corona",
		"Dogfish 90 min",
		"Duvel",
		"Fat Tire",
		"Guinness",
		"Heineken",
		"Heineken Light",
		"Kona Longboard",
		"Lucky Buddah",
		"Lagunitas Censored",
		"Lagunitas IPA",
		"Miller",
		"Miller Genuine Draft",
		"Miller Lite",
		"PBR",
		"Samuel Adam",
		"Samuel Smith",
		"Sapporo",
		"Shocktop",
		"Sierra Nevada",
		"Smirnoff Mango",
		"Speakeasy Big Daddy",
		"Speakeasy Prohibition",
		"Speakeasy Tallaluah",
		"Tsing Tao",
	);
	return $list;
}

function list_draftbeer() {
	$list=array(
		"Big Daddy IPA",
		"Lagunitas IPA",
		"Big Daddy IPA",
		"Big Daddy IPA",
		"Big Daddy IPA",
	);
	return $list;
}

function html_list($array) {
	foreach ( $array as $list_item ) {
		echo "<ul>";
		echo "<li>".$list_item."</li>";
		echo "</ul>";
	}
}

function html_comma_list($array) {
	$array_count=count($array);
	$count=1;
	echo "<p>";
	foreach ( $array as $list_item ) {
		if ( $count==$array_count ) {
			echo $list_item;
		 } else {
			echo $list_item.", ";
		 }
		$count++;
	}
	echo "</p>";
}

function fetchData($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 20);
	$result = curl_exec($ch);
	curl_close($ch); 
	return $result;
}