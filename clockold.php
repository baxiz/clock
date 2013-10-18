<?php
$hr=date("g")+3;
$min=date("i");
if($min+30>60)
{
$min=($min+30)%60;
$hr+=1;
}
else
$min+=30;
$sec=date("s");

echo $hr,$min,$sec;
$anglesec=$sec*6;
$anglemin=($min+($sec/60))*6;
$anglehr=($hr+($min/60)+($sec/3600))*30;

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

.rotate{
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

.rotate1{
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

.rotate2{
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



@keyframes spin0{
	to {
	transform: rotate(".$anglesec."deg);
	}
}
@-webkit-keyframes spin0{
	to {
	-webkit-transform: rotate(".$anglesec."deg);
	}
}
@keyframes spin01{
	to {
	transform: rotate(".$anglemin."deg);
	}
}
@-webkit-keyframes spin01{
	to {
	-webkit-transform: rotate(".$anglemin."deg);
	}
}
@keyframes spin02{
	to {
	transform: rotate(".$anglehr."deg);
	}
}
@-webkit-keyframes spin02{
	to {
	-webkit-transform: rotate(".$anglehr."deg);
	}
}

.rotate0{
animation-name: spin0; 
animation-duration: 2s; 
animation-timing-function: linear;

-webkit-animation-name: spin0; 
-webkit-animation-duration: 2s;
-webkit-animation-timing-function: linear;
}
.rotate01{
animation-name: spin01; 
animation-duration: 2s; 
animation-timing-function: linear;

-webkit-animation-name: spin01; 
-webkit-animation-duration: 2s;
-webkit-animation-timing-function: linear;
}
.rotate02{ 
animation-name: spin02; 
animation-duration: 2s; 
animation-timing-function: linear;

-webkit-animation-name: spin02; 
-webkit-animation-duration: 2s;
-webkit-animation-timing-function: linear;
}
</style>";
?>

<!DOCTYPE html>
<html>
<head>
<title>Clock !</title>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
<div style="width:600px;margin:0 auto;">
<div class="biggest">
<h1 class="number12">12</h1>
<img class="switch" src="clock.png" height="400px" width="400px"/>
<h1 class="number3">3</h1>
<h1 class="number9">9</h1>
<h1 class="number6">6</h1>

<div class="center"></div>
<div class="center" style="float:left;">
<div id="lol" class="negro2 rotate02"></div>
<div id="lol1" class="negro1 rotate01"></div>
<div id="lol2"class="negro rotate0"></div>

</div>
</div>

</div>

<script>
setTimeout(function(){
document.getElementById("lol").className="negro2 rotate2";
document.getElementById("lol1").className="negro1 rotate1";
document.getElementById("lol2").className="negro rotate";
},2000);
</script>

</body>
</html>