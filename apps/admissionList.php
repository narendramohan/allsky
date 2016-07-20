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
	<link rel="stylesheet" type="text/css" href="admissionList.css"/>

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
		
<!---------------------- 2 btttons coding starts ------------------>
			<div id="addnew">
				<input id="button" type="submit" value="Add New"/>
			</div>
			<div id="search">
				<form action="" method="post">
					<fieldset style="border:none">
						<label> Search with </label>
							<select id="selectOption">
								  <option value="defaultselect" selected>Select </option>
								  <option value="saab">Admission No</option>
								  <option value="fiat">Course Type</option>
								  <option value="audi">Course Name</option>
								  <option value="saab">Admission No</option>
								  <option value="fiat">Last Name</option>
								  <option value="audi">Contact Number</option>
							</select>
						<input id="searchtxt" type="text"/>X
						<input id="button" type="submit" value="Go"/>
					</fieldset>
				</form>
			</div>	
	
<!---------------------- 2 btttons coding end ------------------>
<!---------------------- Table coding start ------------------>

				
						
				<table border="1">
					<tr>
						<th id="th1">Admission No.</th>
						<th id="th2">Year of Admission</th>
						<th id="th3">Course Type</th>
						<th id="th4">Course Name</th>
						<th id="th5">First Name</th>
						<th id="th6">Last Name</th>
						<th id="th7">Contact Number</th>
					</tr>
					<tr>
						<td>355345</td>
						<td>2016</td>
						<td>Diploma</td>
						<td>Nursing Diploma</td>
						<td>Sunil</td>
						<td>Sinha</td>
						<td>9482705741</td>
					</tr>

				</table>




<!---------------------- Table coding end ------------------>
	<!---------------------  Main body end here ------------------------>
		</fieldset>
		</form>
	</div>
</body>
</html>