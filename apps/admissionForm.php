<!DOCTYPE HTML>
<html lang="en">
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="author" content="allsky" />
	<title>Adminssion Form</title>
	<link rel="stylesheet" type="text/css" href="admissionForm.css"/>

</head>

<body>

	<header> 
		<?php include_once('../include/header.php') ?>
	</header>
	
	<section> 
		<?php include_once('../include/loginUserName.php') ?>
	</section>
	
	<nav> 
		<?php include_once('../include/nav.php') ?>
	</nav>	
	
<!---------------------  Main body starts here ------------------------>

	<div id="mainbodyposition">
		<form  action="" method="post" >
		<fieldset style="border:none">
		
<!---------------------- three btttons coding starts ------------------>
			<div id="button">
				<input class="mybutton" type="submit" value="Back"/>
				<input class="mybutton" type="submit" value="Edit"/>
				<input class="mybutton" type="submit" value="Save"/>
			</div>	
	
<!---------------------- three btttons coding end ------------------>
<!---------------------- Adminssion Course Details coding start ------------------>
			<div id="section1">
				<fieldset style="border:none">
						<p class="subsectionheading"><strong>Admission for Course</strong></p>
						<div class="subsubsection">
							<label class="labelname">Application Number</label><input type="text">
							<label class="labelname">Course Type</label><input type="text">
							<label class="labelname">Course Name</label><input type="text">
							<label class="labelname">Year of Admission</label><input type="text">
						</div>
				</fieldset>
			</div>



<!---------------------- Adminssion Course Details coding end ------------------>
	<!---------------------  Main body end here ------------------------>
		</fieldset>
		</form>
	</div>
</body>
</html>