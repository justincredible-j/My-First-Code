<html>
	<head>
		<style type="text/css">
		body,
html {
margin:0;
padding:0;
color:#000;
background:#A0D8A0;
}
#container2 {
	clear:left;
	float:left;
	width:100%;
	overflow:hidden;
	background:#9999FF; /* column 2 background colour */
}
#container1 {
	float:left;
	width:100%;
	background:#A0D8A0; /* column 1 background colour */
}
#col1 {
	float:left;
	width:50%;
	overflow:hidden;
	background: #FFF689;
}
#col2 {
	float:left;
	width:50%;
	overflow:hidden;
	background: #9999FF;
}
#footer {
clear:both;
background:#CC3300;
width:100%;
}
</style>
		<title>Columns</title>
	</head>
<body>
	<div id="wrap">
<div id="header"><h1>Basic Two Column Page</h1>
	<em>*and it only took a year</em></div>
	<?php include 'nav.php';?>	
<div id="container2">
	<div id="container1">
		<div id="col1">
			<h2>Column 1</h2>
		Nothing too fancy.....yet!
</div>
<div id="col2">
	<h2>Column 2</h2>
	The other column 
</div>
<div id="footer">
	FOOTER
</div>
</div>
</body>
