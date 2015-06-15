<!DOCTYPE html>
<html>
<body>


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
print($question);
$quesarr = explode ( " " , $question );
for($i=0; $i<sizeof($quesarr); $i++){
	print($quesarr[$i]);
	print(" ");
}
print("</br>");
print(     substr(   $quesarr[sizeof($quesarr)-1], 0 , -1   )      );
print("</br>");
$name = "Kitty";
echo "{ ";

	if ( strpos(strtolower($quesarr[0]), 'hello') !== false 
		||strpos(strtolower($quesarr[0]), 'hi') !== false) {
		
		if (strpos(strtolower($question), 'how are you') !== false) {
			echo "\"answer\" : \"Hello, ".$name."! I'm fine. Thank you.\" ";
		}
		if (strpos(strtolower($question), 'what') !== false) {
			if (strpos(strtolower($question), 'name') !== false) {
				echo "\"answer\" : \"Hello, ".$name."! It's Muktosoft Autobot Service speaking!\" ";
			}
		}
		if (strpos(strtolower($question), 'i am') !== false) {
			$name = explode(".", explode(" ", substr($question, strpos(strtolower($question),'am')) )[1])[0];
			//echo $name;
			echo "\"answer\" : \"Hello, ".$name."! It's Muktosoft Autobot Service speaking!\" ";
		}
	}
	
	if ( strpos(strtolower($quesarr[0]), 'good') !== false) {
		
		if (strpos(strtolower($question), 'how are you') !== false) {
			echo "\"answer\" : \"Good ".$quesarr[1]." I'm fine. Thank you.\" ";
		}
		if (strpos(strtolower($question), 'how are you') !== false) {
			echo "\"answer\" : \"Good ".$quesarr[1]." I'm fine. Thank you.\" ";
		}
		if (strpos(strtolower($question), 'how are you') !== false) {
			echo "\"answer\" : \"Good ".$quesarr[1]." I'm fine. Thank you.\" ";
		}
		
	}
	
	if (strpos(strtolower($quesarr[0]), 'what') !== false) {
	}
	
	if (strpos(strtolower($quesarr[0]), 'what') !== false) {
	}
	
	if (strpos(strtolower($quesarr[0]), 'what') !== false) {
		if (strpos($question,'humidity') !== false) {
			echo 'true</br>';
			print($quesarr[3]);
			$_url ="http://api.openweathermap.org/data/2.5/weather?q=".explode( "?", $quesarr[sizeof($quesarr)-1] )[0];
			echo $_url;
			echo "<script> 
					var url = '$_url';
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							var arr1 = JSON.parse(xmlhttp.responseText);
							document.getElementById('id02').innerHTML += arr1.main.humidity+' ';
							document.getElementById('id02').innerHTML += arr1.main.humidity+' ';
							document.getElementById('id02').innerHTML += arr1.main.humidity+' ';
						}
					}
					xmlhttp.open('GET', url, true);
					xmlhttp.send();
					
					</script>";
		}
	}
	
	
echo " }";
?>

</body>
</html>