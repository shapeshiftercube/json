<?php	

If (unlink('turbines.json')) {
  // file was successfully deleted
	header("Location: http://52.14.2.163/json/index.php");

}else {
	//error handling.
}

?>

