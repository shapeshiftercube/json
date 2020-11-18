<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<script type="text/javascript" src="jquery351.js"></script>
	<!--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>    -->
<link rel="stylesheet" type="text/css" href="http://localhost/json/datatables.min.css"/>
 
<script type="text/javascript" src="http://localhost/json/datatables.min.js"></script>
		<script  type="text/javascript" src="http://localhost/json/status_script.js"></script>
	
	<!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
<!--	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> -->
  
    <title>Turbine Status Report</title>
  </head>
  <body>
    <h1>Turbine Status Report</h1>

    <!-- include js to create table if the file exists -->

	<!-- generate or delete file  -->
	<?php 
	/*if(!file_exists("turbines.json")){?>
		
	<form action="script.php"  method="post">
				<input type="submit" value="Generate report!">
	</form><br />
	<?php } else { ?>
			<form action="scriptDelete.php"  method="post">
				<input type="submit" value="Delete report!">
	</form>
		
	
	<?php }*/?> <table id="table_id" class="display"></table>
	

<script>
			    $(document).ready( function () {
				   $("#table_id").DataTable();
			    } );          
		</script>

  </body>
</html>

