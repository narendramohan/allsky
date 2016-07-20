<!DOCTYPE HTML>
<html lang="en">
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="author" content="allsky" />
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="app-content/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="app-content/bootstrap-theme.css"/>
	<link rel="stylesheet" type="text/css" href="loginPage.css"/>
	<script type="text/javascript">
		function checksumvalue() {
			var x = document.getElementById("firstNumber").value;
			var y = document.getElementById("secondNumber").value;
			var a = eval(x) + eval(y);
			var z = document.getElementById("captchaResult").value;
				if(a!=z) {
					alert("Please enter correct value of sum :");
					document.getElementById("captchaResult").style.borderColor="red";
					return false;
				}
		}
	</script>
</head>

<body>
	<div> 
		<p id="collegeNmae">PRAGATHI COLLEGE OF NURSING</p>
		<p id="collegeLocation" >Bangalore</p>
	</div>
	<form  action="validate.php" method="post" onsubmit="return checksumvalue()">
		<fieldset style="border:none">
			<div id="textlogin" class="panel panel-primary"><strong>Login</strong></div>
			<div class="textlabel" class="panel-body"> Your User Name </div>
			<input type="text" id="inputbox" required="required" name="uname"/>
			<div class="textlabel" class="panel-body"> Your Password </div>
			<input type="password" id="inputbox" required="required" name="upasswd"/>
			<p id="textcap">CAPTCHA: What is the sum of:</p>
			<div id="captcha">
					<p  id="mathcap">
						<?php
							$min_number = 1;
							$max_number = 9;
							$random_number1 = mt_rand($min_number, $max_number);
							$random_number2 = mt_rand($min_number, $max_number);
							echo $random_number1 . ' + ' . $random_number2 . ' = ';
							$sumvalue= $random_number1 + $random_number2;
						?>
							<input name="captchaResult" type="text" id="captchaResult" required="required" name="captchaResult" />
							<input name="firstNumber" id="firstNumber" type="hidden" value="<?php echo $random_number1; ?>" />
							<input name="secondNumber" id="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />
					</p>

			</div>
			<div id="submitButton" > 
				<input class="btn btn-primary btn-lg active" type="submit" value="Submit" id="button" />
			</div>
			<div id="forget"><a class="btn btn-primary btn-lg active" href = "apps/forgetPage.php">Forget Password</a></d>
		</fieldset>
	</form>

</body>