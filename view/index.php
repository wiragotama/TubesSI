<!DOCTYPE html>
<html>
	
<head>
	<title>The Login-Animated Website Template | Home :: w3layouts</title>
	<meta charset="utf-8">
	<link href="../css/loginStyle.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
	<!--//webfonts-->
</head>

<body>
	
	 <!-----start-main---->
	<div class="login-form">
		<div class="head">
			<img src="../images/team-img-3.jpg" alt=""/ style="width:115px">
			
		</div>

		<form>
			<li>
				<input type="text" class="text" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" ><a href="#" class=" icon user"></a>
			</li>
			<li>
				<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
			</li>
			<div class="p-container">
						<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>
						<input type="submit" onclick="myFunction()" value="SIGN IN" >
					<div class="clear"> </div>
			</div>
		</form>
		
	</div>
<!--//End-login-form-->		
</body>

</html>