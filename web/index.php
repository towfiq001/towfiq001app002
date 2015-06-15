<!DOCTYPE html>
<html>
<body>

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
			echo " \"Your majesty! Jon Snow knows nothing! So do I!\" ";
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
			echo " \"Your majesty! Jon Snow knows nothing! So do I!\" ";
		}
		echo " }";
		
	}
	
	elseif (strpos(strtolower($quesarr[0]), 'is') !== false) {
		echo "{ \"answer\" :  ";
		if (strpos(strtolower($question),'rain') !== false) {
			$_url ="http://api.openweathermap.org/data/2.5/weather?q=".explode( "?", $quesarr[sizeof($quesarr)-1] )[0];
			$json = file_get_contents($_url);
			//var_dump(json_decode($json, true));
			$arr1 = json_decode($json, true);
			//echo $arr1["weather"][0]["main"];//???
			if (strpos(strtolower($arr1["weather"][0]["main"]),'rain') !==false){
				echo " \"Yes\" ";
			}
			else{
				echo " \"No\" ";	
			}
		}
		elseif (strpos(strtolower($question),'cloud') !== false) {
			$_url ="http://api.openweathermap.org/data/2.5/weather?q=".explode( "?", $quesarr[sizeof($quesarr)-1] )[0];
			$json = file_get_contents($_url);
			//var_dump(json_decode($json, true));
			$arr1 = json_decode($json, true);
			//echo $arr1["weather"][0]["main"];//???
			if (strpos(strtolower($arr1["weather"][0]["main"]),'cloud') !==false){
				echo " \"Yes\" ";
			}
			else{
				echo " \"No\" ";	
			}
		}
		elseif (strpos(strtolower($question),'clear') !== false) {
			$_url ="http://api.openweathermap.org/data/2.5/weather?q=".explode( "?", $quesarr[sizeof($quesarr)-1] )[0];
			$json = file_get_contents($_url);
			//var_dump(json_decode($json, true));
			$arr1 = json_decode($json, true);
			//echo $arr1["weather"][0]["main"];//???
			if (strpos(strtolower($arr1["weather"][0]["main"]),'clear') !==false){
				echo " \"Yes\" ";
			}
			else{
				echo " \"No\" ";	
			}
		}
		else{
			echo " \"Your majesty! Jon Snow knows nothing! So do I!\" ";
		}
		echo " }";
	}
	
	elseif (strpos(strtolower($quesarr[0]), 'what') !== false) {
		echo "{ \"answer\" :  ";
		if (strpos(strtolower($question),'humidity') !== false) {
			$_url ="http://api.openweathermap.org/data/2.5/weather?q=".explode( "?", $quesarr[sizeof($quesarr)-1] )[0];
			$json = file_get_contents($_url);
			//var_dump(json_decode($json, true));
			$arr1 = json_decode($json, true);
			echo " \"".$arr1["main"]["humidity"]." percent\" ";
		}
		elseif (strpos(strtolower($question),'temp') !== false) {
			$_url ="http://api.openweathermap.org/data/2.5/weather?q=".explode( "?", $quesarr[sizeof($quesarr)-1] )[0];
			$json = file_get_contents($_url);
			//var_dump(json_decode($json, true));
			$arr1 = json_decode($json, true);
			echo " \"".$arr1["main"]["temp"]." K\" ";
		}
		elseif (strpos(strtolower($question),'pressure') !== false) {
			$_url ="http://api.openweathermap.org/data/2.5/weather?q=".explode( "?", $quesarr[sizeof($quesarr)-1] )[0];
			$json = file_get_contents($_url);
			//var_dump(json_decode($json, true));
			$arr1 = json_decode($json, true);
			echo " \"".$arr1["main"]["pressure"]." hPa\"";
		}
		else{
			echo " \"Your majesty! Jon Snow knows nothing! So do I!\" ";
		}
		echo " }";
	}
	else{
		echo "{ \"answer\" :  ";
		echo " \"Your majesty! Jon Snow knows nothing! So do I!\" ";
		echo " }";
	}
	
	
	

?>

</body>
</html>