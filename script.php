<?php	
DEFINE("NUMBER_OF_TURBINES", 100);
//create array for store the data for the turbines
$turbines = array();


for ($i=1; $i<=NUMBER_OF_TURBINES;$i++) {
	$turbines[$i]['id'] = $i;
}
//create a JSON file using the array turbines
if(!file_exists("turbines.json")){
	$fp = fopen('turbines.json', 'w');
	fwrite($fp, json_encode($turbines));
	fclose($fp);
}
header("Location: http://52.14.2.163/json/index.php");

?>