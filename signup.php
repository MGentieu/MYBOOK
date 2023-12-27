<html>
<head>
	<title>Mybook | Sign up</title>
	<style type="text/css">
		#bar{
			height: 100px;
			background-color: #3c5a99;
			color: #d9dfeb;	
			padding: 4px;
		}

		#login_button{
			background-color: #42b72a;
			width: 70px;
			text-align:center;
			padding: 4px;
			border-radius: 4px;
			float: left;
			margin-top: 14px;
		}

		#bar2{
			background-color: white; 
			width:800px; 
			height: auto; 
			margin: auto;
			margin-top: 50px;
			padding: 10px;
			padding-top: 50px;
			padding-bottom: 30px;
			text-align: center;
			font-weight: bold;
		}

		.text{
			height: 40px;
			width: 300px;
			border-radius: 4px;
			border: solid 1px #999;
			padding: 4px;
			font-size: 14px;
		}

		#button{
			width: 300px;
			height: 40px;
			border-radius: 4px;
			font-weight: bold;
			border: none;
			background-color: #3c5a99;
			color: white;
		}

	</style>

</head> 

<body style="font-family: tahoma; 
		background-color:#e9ebee;
		">
	<div id="bar">
		<div style="font-size: 40px; 
			width: 170px;
			float: left;">Mybook</div> 
		<div id="login_button">Log in</div>
	</div>

	<div id='bar2' style="">
		Sign up to Mybook<br><br>
		
		<input type="text" class="text" placeholder="First name"><br><br>
		<input type="text" class="text" placeholder="Last name"><br><br>
		<span style="font-weight: normal;">Gender:</span><br>
		<select class="text">
			<option>Male</option>
			<option>Female</option>
			<option>Other</option>
		</select>
		<br><br>
		<input type="text" class="text" placeholder="Email"><br><br>
		<input type="password" class="text" placeholder="Password"><br><br>
		<input type="password" class="text" placeholder="Confirm password"><br><br>
		<input type="submit" id="button" value="Sign up">

	</div>
</body>



</html>