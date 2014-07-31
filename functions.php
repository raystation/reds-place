<?php 

//Hours EVERYDAY 1pm-1am
$hour_open=13;
$hour_closed=1;
//HAPPY HOUR MTWTF 4-6pm
$happyhour_start=16;
$happyhour_end=18;

function get_date() {
	date_default_timezone_set("America/Los_Angeles");
	$date["year"]=date('Y');
	$date["day"]=date('D');
	// $date["hour"]=date('g'); //12hour
	$date["hour"]=date('G'); //24hour
	$date["minutes"]=date('i');
	return $date;
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

function getlist($list){
	include_once "lists.php";
	$getlist="list_".$list;
	$getlist=$getlist();
	return $getlist;
}

function time_is_between($start,$end) {
	$on;
	$date=get_date();
	$hour=$date["hour"];
	$hour=5+12; //happy hour check
	$minutes=$date["minutes"];
	if ( $end==0 || $end==1 || $end==2 ) { $end=$end+24; }

	if ( $hour>=$start && $hour<=$end ) { $on=true; }
	else { $on=false; }
	// $on=true; //dev on
	return $on;
}

function reds_open($message="Reds is open!"){
	global $hour_open;
	global $hour_close;
	if ( time_is_between($hour_open,$hour_close) ) {
		echo "<p>$message</p>";
	}
}

function happyhour_on($message="Happy hour is on!"){
	global $happyhour_start;
	global $happyhour_end;
	if ( time_is_between($happyhour_start,$happyhour_end) ) {
		echo "<p>$message</p>";
	}

}

function dev_var($var){
	if ( is_null($dev_var) ){ $dev_var=array(); }
	$dev_var[]=$var;
	return $dev_var;
}

function print_dev(){
	echo "<div class='dev'>";
	foreach ($dev_var as $key => $var) {
		echo $var;
	}
	echo '</div>';
}

?>



