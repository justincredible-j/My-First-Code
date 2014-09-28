<html>
	<head>
		<title>Column Assignment</title>
	<style type="text/css">
            body {
                padding: 10px;
            }
		</style>
		 <!-- */
body {
	margin:0;
	padding:0;
}
#header h1,
#header h2,
#header p {
	margin-left:2%;
	padding-right:2%;
}
#active2 #tab2,
#active3 #tab3,
#active4 #tab4,
#active5 #tab5 {
	font-weight:bold;
	text-decoration:none;
	color:#000;
}
#footer {
	clear:both;
	float:left;
	width:100%;
}
#footer p {
	margin-left:2%;
	padding-right:2%;
}

/* Start of Column CSS */
#container2 {
	clear:left;
	float:left;
	width:100%;
	overflow:hidden;
	background:#FFFFCC; /* column 2 background color */
}
#container1 {
	float:left;
	width:100%;
	position:relative;
	right:50%;
	background:#CCFF99; /* column 1 background color */
}
#col1 {
	float:left;
	width:46%;
	position:relative;
	left:52%;
	overflow:hidden;
}
#col2 {
	float:left;
	width:46%;
	position:relative;
	left:56%;
	overflow:hidden;
}
/* --> 
    </style>
</head>
<body id="active2">
<div id="header">
		<p><h1>First attempt at making a page with columns!</h1>
		<h4>*This may have been copied....</h4></p>
</div>
<div id="container2">
	<div id="container1">
		<div id="col1">
			<!-- Column one start -->
			<h2>Column 1</h2>
			<!-- Column one end -->
</div>
<div id="col2">
			<!-- Column two start -->
			<h2>Column 2</h2>
			<!-- Column two end -->
		</div>
	</div>
</div>
<div id="footer>"	
	<em>To view the assignment list click</em> <a href="index.php"><em><strong>HERE</strong></em></a>
</div>
</body>