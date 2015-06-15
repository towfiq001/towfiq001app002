<!DOCTYPE html>
<html>
<body id = "b1">


<div id="id01"></div>
<div id="id02"></div>

<script>
var xmlhttp = new XMLHttpRequest();

//var url = "http://www.w3schools.com/website/customers_mysql.php";
var url = "http://api.openweathermap.org/data/2.5/weather?q=Dhaka,bangladesh";

xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        myFunction(xmlhttp.responseText);
    }
}
xmlhttp.open("GET", url, true);
xmlhttp.send();
var arr;
function myFunction(response) {
    arr = JSON.parse(response);
    var i;
    var out;
	out += xmlhttp.responseText+"</br>==============</br>";
    
    out += arr.coord.lon + " " +arr.coord.lon + "</br>";
	out += arr.sys.message+" "+arr.sys.country+" "+arr.sys.sunrise+" "+arr.sys.sunset+" "+"</br>";
    out += arr.weather[0].id+" "+arr.weather[0].main+" "+arr.weather[0].description+" "+arr.weather[0].icon+" "+"</br>";  
    //out += arr.base"</br>";
    out += arr.main.temp+" "+arr.main.temp_min+" "+arr.main.temp_max+" "+arr.main.pressure+" "+arr.main.sea_level+" "+arr.main.grnd_level+" "+arr.main.humidity+" "+"</br>";
	out += arr.wind.speed+" "+arr.wind.deg+"</br>";
	out += arr.clouds.all+"</br>";
	//out += arr.rain.3h+"</br>";
	out += arr.dt+"</br>";
	out += arr.id+"</br>";
	out += arr.name+"</br>";
	out += arr.cod+"</br>";
					
					
	//out += xmlhttp.responseText;
    //document.getElementById("id01").innerHTML = out;
}
</script>

<?php
$question = $_GET['q'];
print("</br>");
//print($question);
$quesarr = explode ( " " , $question );
//for($i=0; $i<sizeof($quesarr); $i++){
	//print($quesarr[$i]);
//	print(" ");
//}
print("</br>");
//print(     explode("?", $quesarr[sizeof($quesarr)-1])[0]      );
print("</br>");
$name = "Kitty";
$res = "Your majesty! Jon Snow knows nothing! So do I!";
$key = "null";


	if ( strpos(strtolower($quesarr[0]), 'hello') !== false 
		||strpos(strtolower($quesarr[0]), 'hi') !== false) {
		echo "{ \"answer\" :  ";
		
		if (strpos(strtolower($question), 'how are you') !== false) {
			echo " \"Hello, ".$name."! I'm fine. Thank you.\" ";
		}
		elseif (strpos(strtolower($question), 'what') !== false) {
			if (strpos(strtolower($question), 'name') !== false) {
				echo " \"Hello, ".$name."! It's Muktosoft Autobot Service!\" ";
			}
		}
		elseif (strpos(strtolower($question), 'i am') !== false) {
			$name = explode(".", explode(" ", substr($question, strpos(strtolower($question),'am')) )[1])[0];
			//echo $name;
			echo " \"Hello ".$name."! You are welcome!\" ";
		}
		else{
			echo " \"".$res."\" ";
		}
		echo " }";
	}
	
	elseif ( strpos(strtolower($quesarr[0]), 'good') !== false) {
		echo "{ \"answer\" :  ";
		
		if (strpos(strtolower($question), 'how are you') !== false) {
			echo " \"Good ".$quesarr[1]." I'm fine. Thank you.\" ";
		}
		elseif (strpos(strtolower($question), 'how are you') !== false) {
			echo " \"Good ".$quesarr[1]." I'm fine. Thank you.\" ";
		}
		elseif (strpos(strtolower($question), 'what') !== false) {
			if (strpos(strtolower($question), 'name') !== false) {
				echo " \"Good ".$quesarr[1]." It's Muktosoft Autobot Service!\" ";
			}
		}
		elseif (strpos(strtolower($question), 'i am') !== false) {
			$name = explode(".", explode(" ", substr($question, strpos(strtolower($question),'am')) )[1])[0];
			//echo $name;
			echo " \"Hello ".$name."! You are welcome!\" ";
		}
		else{
			echo " \"".$res."\" ";
		}
		echo " }";
		
	}
	
	elseif (strpos(strtolower($quesarr[0]), 'is') !== false) {
		echo "{ \"answer\" :  ";
		if (strpos($question,'rain') !== false) {
			$_url ="http://api.openweathermap.org/data/2.5/weather?q=".explode( "?", $quesarr[sizeof($quesarr)-1] )[0];
			//echo $_url;
			echo "<script> 
					var url = '$_url';
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							var arr1 = JSON.parse(xmlhttp.responseText);
							if(arr1.weather[0].main == 'Rain'){
								document.write('{ \"answer\" : '+' \"Yes\" '+' }');
							}
							else{
								document.write('{ \"answer\" : '+' \"No\" '+' }');
							}
						}
					}
					xmlhttp.open('GET', url, true);
					xmlhttp.send();
					
					</script>";
		}
		elseif (strpos($question,'cloud') !== false) {
			$_url ="http://api.openweathermap.org/data/2.5/weather?q=".explode( "?", $quesarr[sizeof($quesarr)-1] )[0];
			//echo $_url;
			echo "<script> 
					var url = '$_url';
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							var arr1 = JSON.parse(xmlhttp.responseText);
							if(arr1.weather[0].main == 'Clouds'){
								document.write('{ \"answer\" : '+' \"Yes\" '+' }');
							}
							else{
								document.write('{ \"answer\" : '+' \"No\" '+' }');
							}
						}
					}
					xmlhttp.open('GET', url, true);
					xmlhttp.send();
					
					</script>";
		}
		elseif (strpos($question,'clear') !== false) {
			$_url ="http://api.openweathermap.org/data/2.5/weather?q=".explode( "?", $quesarr[sizeof($quesarr)-1] )[0];
			//echo $_url;
			echo "<script> 
					var url = '$_url';
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							var arr1 = JSON.parse(xmlhttp.responseText);
							if(arr1.weather[0].main == 'Clear'){
								document.write('{ \"answer\" : '+' \"Yes\" '+' }');
							}
							else{
								document.write('{ \"answer\" : '+' \"No\" '+' }');
							}
						}
					}
					xmlhttp.open('GET', url, true);
					xmlhttp.send();
					
					</script>";
		}
		else{
			echo " \"".$res."\" ";
		}
		echo " }";
	}
	
	elseif (strpos(strtolower($quesarr[0]), 'what') !== false) {
		echo "{ \"answer\" :  ";
		if (strpos($question,'humidity') !== false) {
			$_url ="http://api.openweathermap.org/data/2.5/weather?q=".explode( "?", $quesarr[sizeof($quesarr)-1] )[0];
			//echo $_url;
			echo "<script> 
					var url = '$_url';
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							var arr1 = JSON.parse(xmlhttp.responseText);
							document.write('{ \"answer\" : '+' \"'+arr1.main.humidity+'\" '+' }');
						}
					}
					xmlhttp.open('GET', url, true);
					xmlhttp.send();
					
					</script>";
		}
		elseif (strpos($question,'temp') !== false) {
			$_url ="http://api.openweathermap.org/data/2.5/weather?q=".explode( "?", $quesarr[sizeof($quesarr)-1] )[0];
			//echo $_url;
			echo "<script> 
					var url = '$_url';
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							var arr1 = JSON.parse(xmlhttp.responseText);
							document.write('{ \"answer\" : '+' \"'+(arr1.main.temp-273)+' C\" '+' }');
						}
					}
					xmlhttp.open('GET', url, true);
					xmlhttp.send();
					
					</script>";
		}
		elseif (strpos($question,'pressure') !== false) {
			$_url ="http://api.openweathermap.org/data/2.5/weather?q=".explode( "?", $quesarr[sizeof($quesarr)-1] )[0];
			//echo $_url;
			echo "<script> 
					var url = '$_url';
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							var arr1 = JSON.parse(xmlhttp.responseText);
							document.write('{ \"answer\" : '+' \"'+arr1.main.pressure+' hPa\" '+' }');
						}
					}
					xmlhttp.open('GET', url, true);
					xmlhttp.send();
					
					</script>";
		}
		else{
			echo " \"".$res."\" ";
		}
		echo " }";
	}
	else{
		echo "{ \"answer\" :  ";
		echo " \"".$res."\" ";
		echo " }";
	}
	
	
	

?>

</body>
</html>