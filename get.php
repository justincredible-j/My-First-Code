<html>
	<head>
		<style type="text/css">

		</style>
		</head>
	<body>
		<?php
		if(isset($_GET['link'])){
		echo $_GET['link'];	
		} else {
			echo "No get variable";
		}

		echo "<br /><br />Showing all GET variables<br />";
		// echo $_GET; <<This doesnt work, array to string conversion. Need to loop through the array

		foreach($_GET as $key => $bpb ){
			echo $key . " " . $bpb . "<br />";
		}
    
?>
	</body>
		</html>