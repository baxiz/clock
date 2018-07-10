<?php
// Get the current server time
$hr=date("g");
$min=date("i");
$sec=date("s");

// Calculate angles
$anglesec=$sec*6;
$anglemin=($min+($sec/60))*6;
$anglehr=($hr+($min/60)+($sec/3600))*30;

// Add animations from the starting angles
echo "
<style>
@keyframes spin{
	to {
	transform: rotate(".($anglesec+360)."deg);
	}
}
@-webkit-keyframes spin{
	to {
	-webkit-transform: rotate(".($anglesec+360)."deg);
	}
}
@keyframes spin1{
	to {
	transform: rotate(".($anglemin+360)."deg);
	}
}
@-webkit-keyframes spin1{
	to {
	-webkit-transform: rotate(".($anglemin+360)."deg);
	}
}
@keyframes spin2{
	to {
	transform: rotate(".($anglehr+360)."deg);
	}
}
@-webkit-keyframes spin2{
	to {
	-webkit-transform: rotate(".($anglehr+360)."deg);
	}
}

.rotateSecond{
transform: rotate(".$anglesec."deg); 
animation-name: spin; 
animation-duration: 60s;
animation-iteration-count: infinite; 
animation-timing-function: linear;

-webkit-transform: rotate(".$anglesec."deg); 
-webkit-animation-name: spin; 
-webkit-animation-duration: 60s;
-webkit-animation-iteration-count: infinite; 
-webkit-animation-timing-function: linear;
}

.rotateMinute{
transform: rotate(".$anglemin."deg); 
animation-name: spin1; 
animation-duration: 3600s;
animation-iteration-count: infinite; 
animation-timing-function: linear;

-webkit-transform: rotate(".$anglemin."deg); 
-webkit-animation-name: spin1; 
-webkit-animation-duration: 3600s;
-webkit-animation-iteration-count: infinite; 
-webkit-animation-timing-function: linear;
}

.rotateHour{
transform: rotate(".$anglehr."deg); 
animation-name: spin2; 
animation-duration: 43200s;
animation-iteration-count: infinite; 
animation-timing-function: linear;

-webkit-transform: rotate(".$anglehr."deg); 
-webkit-animation-name: spin2; 
-webkit-animation-duration: 43200s;
-webkit-animation-iteration-count: infinite; 
-webkit-animation-timing-function: linear;
}
</style>";
?>

<!DOCTYPE html>
<html>
<head>
<title>Clock using CSS</title>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<!-- Display the numbers -->
<h1 class="number number12">12</h1>
<h1 class="number number3">3</h1>
<h1 class="number number9">9</h1>
<h1 class="number number6">6</h1>

<!-- Display the hands -->
<div class="center">
<div id="hour" class="rotateHour"></div>
<div id="minute" class="rotateMinute"></div>
<div id="second"class="rotateSecond"></div>
</div>

<!-- Display the divisions -->
<img class="switch" src="clock.png"/>
</div>

</body>
</html>