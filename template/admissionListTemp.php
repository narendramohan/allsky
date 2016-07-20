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
	<link rel="stylesheet" type="text/css" href="admissionListTemp.css"/>

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
	<?php
	
	//attemp to collect and store form data in php variable
		$selectOption = filter_input(INPUT_POST, "selectOption"); 
		$searchText= filter_input(INPUT_POST, "searchtxt");
	?>
	<div id="mainbodyposition">
		<div id="myborder">
<!---------------------- 2 btttons coding starts ------------------>
			<div id="addnew">
				<a href = "admissionFormTemp3.php"><input id="button" type="submit" value="Add New"/></a>
			</div>
			<div id="search">
				<form action="admissionListTemp.php" method="post">
					<fieldset style="border:none">
						<label> Search with </label>
							<select id="selectOption" name="selectOption">
								  <option value="defaultselect" <?php echo ((isset($selectOption)) or $selectOption=='defaultselect')?'selected':'';?>>Select </option>
								  <option value="admissionid" <?php echo ((isset($selectOption)) and $selectOption=='admissionid')?'selected':'';?>>Admission No</option>
								  <option value="course_type" <?php echo ((isset($selectOption)) and $selectOption=='course_type')?'selected':'';?>>Course Type</option>
								  <option value="course_name" <?php echo ((isset($selectOption)) and $selectOption=='course_name')?'selected':'';?>>Course Name</option>
								  <option value="fname" <?php echo ((isset($selectOption)) and $selectOption=='fname')?'selected':'';?>>Admission No</option>
								  <option value="lname" <?php echo ((isset($selectOption)) and $selectOption=='lname')?'selected':'';?>>Last Name</option>
								  <option value="mobileno" <?php echo ((isset($selectOption)) and $selectOption=='mobileno')?'selected':'';?>>Contact Number</option>
								  <option value="date" <?php echo ((isset($selectOption)) and $selectOption=='date')?'selected':'';?>>Adminssion Date</option>
							</select>
						<input id="searchtxt" name="searchtxt" type="text" value="<?php echo (isset($searchText))?$searchText:'';?>"/>
						<input id="button" type="submit" value="Go"/>
					</fieldset>
				</form>
			</div>	
		</div>
<!---------------------- 2 btttons coding end ------------------>
<!---------------------- Table coding start ------------------>

				<?php
						$servername = getenv('IP');
					    $username = "allsky";
					    $password = "123";
					    $dbname = "allskydb";
					    $dbport = 3306;
				  $server = mysql_connect("$servername:$dbport", "$username", "$password"); 
				  $db = mysql_select_db("$dbname", $server); 
				  $condition="";
				  $cond="";
				  if(isset($searchText)){
				  	$mysqli = new mysqli($servername, $username, $password, $dbname,$dbport);
					 $cond=mysqli_real_escape_string($mysqli,$searchText);
				  }
					 
					
				//	echo $cond."<br>";
				//	echo $selectOption."<br>";
				  if((isset($selectOption)) and $selectOption=='defaultselect'){
				  	$condition="";
				  } elseif((isset($selectOption)) and $selectOption=='admissionid'){
				  	$condition=" where `admission_application`.applicationid like '$cond%'";
				  } elseif((isset($selectOption)) and $selectOption=='course_type'){
				  	$condition=" where course_type like '$cond%'";
				  } elseif((isset($selectOption)) and $selectOption=='course_name'){
				  	$condition=" where course_name like '$cond%'";
				  } elseif((isset($selectOption)) and $selectOption=='fname'){
				  	$condition=" where fname like '$cond%'";
				  } elseif((isset($selectOption)) and $selectOption=='lname'){
				  	$condition=" where lname like '$cond%'";
				  } elseif((isset($selectOption)) and $selectOption=='mobileno'){
				  	$condition=" where mobileno like '$cond%'";
				  } elseif((isset($selectOption)) and $selectOption=='date'){
				  	$condition=" where DATE_FORMAT(admission_date like,  '%d/%m/%Y' ) like '$cond%'";
				  } 
				  //echo $condition."<br>";
				  $sql="SELECT  `admission_application`.`applicationid` ,  `year_of_addmission` ,  `course_type` , 
					`course_name` ,  `fname` ,  `lname` , `date_of_application` , mobileno, DATE_FORMAT(  `date_of_application` ,  '%d/%m/%Y' ) admission_date 
					FROM  `admission_application` 
					LEFT JOIN student ON student.applicationid = admission_application.applicationid
					LEFT JOIN student_address ON student_address.studentid = student.studentid
					AND address_type =  'current'".$condition." order by `admission_application`.`applicationid` desc";
				//echo $sql;
				  $query = mysql_query($sql); 
				?>
						
				<table border="1">
					<tr>
						<th id="th1" align="center">Admission No.</th>
						<th id="th2">Academic Year</th>
						<th id="th3">Course Type</th>
						<th id="th4">Course Name</th>
						<th id="th5">First Name</th>
						<th id="th6">Last Name</th>
						<th id="th7">Contact Number</th>
						<th id="th8">Admission Date</th>
					</tr>
					<!--<tr>
						<td>355345</td>
						<td>2016</td>
						<td>Diploma</td>
						<td>Nursing Diploma</td>
						<td>Sunil</td>
						<td>Sinha</td>
						<td>9482705741</td>
						<td>DD/MM/YYYY</td>
					</tr>-->
					 <?php
		               while ($row = mysql_fetch_array($query)) {
		                   echo "<tr>";
		                   echo "<td><a href='admissionFormTemp3.php?applicationid=".$row['applicationid']."'>".$row['applicationid']."</a></td>";
		                   echo "<td>".$row['year_of_addmission']."</td>";
		                   echo "<td>".$row['course_type']."</td>";
		                   echo "<td>".$row['course_name']."</td>";
		                   echo "<td>".$row['fname']."</td>";
		                   echo "<td>".$row['lname']."</td>";
		                   echo "<td>".$row['mobileno']."</td>";
		                   echo "<td>".$row['admission_date']."</td>";
		                   echo "</tr>";
		               }
		
		            ?>
				</table>

<!---------------------- Table coding end ------------------>
<!---------------------  Main body end here ------------------------>
	</div>
</body>
</html>