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
	<link rel="stylesheet" type="text/css" href="admissionFormTemp3.css"/>
	<script type="text/javascript">
	function year12() {
			var myDate = new Date();
			var year = myDate.getFullYear();
				for(var i = 1900; i < year+1; i++){
					//document.write('<option value="'+i+'">'+i+'</option>');
					document.getElementById('yearofpassing12').innerHTML=year;
				}
		}
	</script>
	<script type="text/javascript">
			function checkforblank () {
				var errormessage = "";				
				if (document.getElementById('courseType').value == "") {
					errormessage += "Please Select Course Type...... \n";
					document.getElementById('courseType').style.borderColor="red";
				}
				if (document.getElementById('courseName').value == "") {
					errormessage += "Please Select Course Name...... \n";
					document.getElementById('courseName').style.borderColor="red";
				}
			
				if (errormessage != "") {
					alert(errormessage);
					return false;
				}
			}

</script>
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
		$year_of_addmission='';
		$course_name='';
	//attemp to collect and store form data in php variable
		$applicationid = filter_input(INPUT_GET, "applicationid"); 
		if(isset($applicationid) and !empty($applicationid)){
			
			$servername = getenv('IP');
		    $username = "allsky";
		    $password = "123";
		    $dbname = "allskydb";
		    $dbport = 3306;
		    
		    
		    
			$mysqli = new mysqli($servername, $username, $password, $dbname,$dbport);
			$applicationid=mysqli_real_escape_string($mysqli,$applicationid);
			try {
			    $server = mysql_connect("$servername:$dbport", "$username", "$password"); 
				$db = mysql_select_db("$dbname", $server); 
			    //application details
			    //(`course_type` ,`year_of_addmission` ,`course_name` ,`date_of_application` ,
			    //`payment_mode` ,`amount`, `checqueno` ,`issue_date` ,`bank_name` ,`branch_name`)
			    $query = "select `applicationid`,`course_type` ,`year_of_addmission` ,`course_name` , DATE_FORMAT(`date_of_application`, '%d/%m/%Y') date_of_application
			    	, `payment_mode` ,`amount`, `checqueno` ,  DATE_FORMAT(`issue_date`, '%d/%m/%Y') issue_date,`bank_name` ,`branch_name` FROM `admission_application` 
			    	where applicationid=$applicationid";
			    // use exec() because no results are returne
			   
			    //echo "<br>".$app
			    
			    $result = mysql_query($query);
			    while ($row = mysql_fetch_array($result)) {
			    	$applicationid=$row['applicationid'];
			    	$year_of_addmission=$row['year_of_addmission'];
			    	$course_name=$row['course_name'];
			    	$date_of_application=$row['date_of_application'];
			    	$payment_mode=$row['payment_mode'];
			    	$amount=$row['amount'];
			    	$chequeno=$row['checqueno'];
			    	$issue_date=$row['issue_date'];
			    	$bank_name=$row['bank_name'];
			    	$branch_name=$row['branch_name'];
			    	$course_type=$row['course_type'];
			    }
			    
			    //student details 
			    //(`applicationid`, `title`, `fname`, `mname`, `lname`, `father_name`, `mother_name`, `dob`, `gender`
			    //, `bloodgroup`, `maritalstatus`, `spouse_name`, `castcategory`, `religion`, `nationality`, `disability`)
			   $query="select `applicationid`, `studentid`, `title`, `fname`, `mname`, `lname`, `father_name`, `mother_name`, DATE_FORMAT(`dob`, '%d/%m/%Y') dob, `gender`
			    	, `bloodgroup`, `maritalstatus`, `spouse_name`, `castcategory`, `religion`, `nationality`, `disability` 
			    	 from `student` where applicationid=$applicationid";
			    	 // echo $query;
			   $result=mysql_query($query);
			    while ($row = mysql_fetch_array($result)) {
			    	$applicationid=$row['applicationid'];
			    	$studentid=$row['studentid'];
			    	$title=$row['title'];
			    	$fname=$row['fname'];
			    	$mname=$row['mname'];
			    	$lname=$row['lname'];
			    	$father_name=$row['father_name'];
			    	$mother_name=$row['mother_name'];
			    	$dob=$row['dob'];
			    	$gender=$row['gender'];
			    	$bloodgroup=$row['bloodgroup'];
			    	$maritalstatus=$row['maritalstatus'];
			    	$spouse_name=$row['spouse_name'];
			    	$category=$row['castcategory'];
			    	$religion=$row['religion'];
			    	$nationality=$row['nationality'];
			    	$disability=$row['disability'];
			    }
			    
			    //student address
			    
				//current
				$query="SELECT `studentid`, `address_type`, `address_line1`, `address_line2`, `address_line3`, `city`, `district`, 
				`astate`, `pincode`, `country`, `mobileno`, `telephone`, `email` FROM `student_address` where studentid=$studentid and address_type='current'";
				$result=mysql_query($query);
			    while ($row = mysql_fetch_array($result)) {
			    	
			    	$cstudentid=$row['studentid'];
			    	$caddress_type=$row['address_type'];
			    	$cline1=$row['address_line1'];
			    	$cline2=$row['address_line2'];
			    	$cline3=$row['address_line3'];
			    	$ccity=$row['city'];
			    	$cdistrict=$row['district'];
			    	$cstate=$row['astate'];
			    	$cpincode=$row['pincode'];
			    	$ccountry=$row['country'];
			    	$cmobileno=$row['mobileno'];
			    	$ctelephone=$row['telephone'];
			    	$cemail=$row['email'];
			    	
			    }
				
			    //permanent
			    $query="SELECT `studentid`, `address_type`, `address_line1`, `address_line2`, `address_line3`, `city`, `district`, 
				`astate`, `pincode`, `country`, `mobileno`, `telephone`, `email` FROM `student_address` where studentid=$studentid and address_type='permanent'";
				$result=mysql_query($query);
			    while ($row = mysql_fetch_array($result)) {
			    	
			    	$studentid=$row['studentid'];
			    	$address_type=$row['address_type'];
			    	$line1=$row['address_line1'];
			    	$line2=$row['address_line2'];
			    	$line3=$row['address_line3'];
			    	$city=$row['city'];
			    	$district=$row['district'];
			    	$astate=$row['astate'];
			    	$pin=$row['pincode'];
			    	$country=$row['country'];
			    	$mobileno=$row['mobileno'];
			    	$telephone=$row['telephone'];
			    	$email=$row['email'];
			    
			    }
				
				//qualification_
				//10th
	
				$query="SELECT `studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, 
				`school_name`, `subject`, `permanentmarks`, `division` FROM `student_qualification` where studentid=$studentid and qualification_type='10th'";
				$result=mysql_query($query);
			    while ($row = mysql_fetch_array($result)) {
			    	
			    	$education_system10=$row['education_system'];
			    	$year_of_passing10=$row['year_of_passing'];
			    	$exam_board10=$row['exam_board'];
			    	$school_name10=$row['school_name'];
			    	$subject10=$row['subject'];
			    	$permanentmarks10=$row['permanentmarks'];
			    	$division10=$row['division'];
			    }	
				//12th
	
				$query="SELECT `studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, 
				`school_name`, `subject`, `permanentmarks`, `division` FROM `student_qualification` where studentid=$studentid and qualification_type='12th'";
				$result=mysql_query($query);
			    while ($row = mysql_fetch_array($result)) {
			    	
			    	$education_system12=$row['education_system'];
			    	$year_of_passing12=$row['year_of_passing'];
			    	$exam_board12=$row['exam_board'];
			    	$school_name12=$row['school_name'];
			    	$subject12=$row['subject'];
			    	$permanentmarks12=$row['permanentmarks'];
			    	$division12=$row['division'];
			    }
				
				//diploma
	
				$query="SELECT `studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, 
				`school_name`, `subject`, `permanentmarks`, `division` FROM `student_qualification` where studentid=$studentid and qualification_type='diploma'";
				$result=mysql_query($query);
			    while ($row = mysql_fetch_array($result)) {
			    	
			    	$education_systemdip=$row['education_system'];
			    	$year_of_passingdip=$row['year_of_passing'];
			    	$exam_boarddip=$row['exam_board'];
			    	$school_namedip=$row['school_name'];
			    	$subjectdip=$row['subject'];
			    	$permanentmarksdip=$row['permanentmarks'];
			    	$divisiondip=$row['division'];
			    }
				
				//degree
		
				$query="SELECT `studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, 
				`school_name`, `subject`, `permanentmarks`, `division` FROM `student_qualification` where studentid=$studentid and qualification_type='degree'";
				$result=mysql_query($query);
			    while ($row = mysql_fetch_array($result)) {
			    	
			    	$education_systemdegree=$row['education_system'];
			    	$year_of_passingdegree=$row['year_of_passing'];
			    	$exam_boarddegree=$row['exam_board'];
			    	$school_namedegree=$row['school_name'];
			    	$subjectdegree=$row['subject'];
			    	$permanentmarksdegree=$row['permanentmarks'];
			    	$divisiondegree=$row['division'];
			    }
				
				//pg
				$query="SELECT `studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, 
				`school_name`, `subject`, `permanentmarks`, `division` FROM `student_qualification` where studentid=$studentid and qualification_type='pg'";
				$result=mysql_query($query);
			    while ($row = mysql_fetch_array($result)) {
			    	
			    	$education_systempg=$row['education_system'];
			    	$year_of_passingpg=$row['year_of_passing'];
			    	$exam_boardpg=$row['exam_board'];
			    	$school_namepg=$row['school_name'];
			    	$subjectpg=$row['subject'];
			    	$permanentmarkspg=$row['permanentmarks'];
			    	$divisionpg=$row['division'];
			    }
	
				
			    //echo "New record created successfully. Last inserted ID is: " . $$divisionpg;
			    #header('location:template/admissionListTemp.php');
		    }
			catch(PDOException $e)
		    {
			    echo $sql . "<br>" . $e->getMessage();
			    //header('location:template/admissionFormTemp3.php');
		    }
		}
	?>
	<div id="mainbodyposition">
		<form  action="<?php echo (isset($applicationid) and ($applicationid!=''))?'editdata.php':'savedata.php';?>" method="post" onsubmit="return checkforblank()">
		<input type="hidden" id="studentid" name="studentid" value="<?php echo (isset($studentid))?$studentid:'';?>" />
		<fieldset style="border:none">
		
<!---------------------- three btttons coding starts ------------------>
			<div id="button">
	<!---			<input class="mybutton" type="submit" value="Back"/>  -->
	<!---			<input class="mybutton" type="submit" value="Edit"/>	-->
				<input class="mybutton" type="submit" value="Save"/>
			</div>	
	
<!---------------------- three btttons coding end ------------------>
			
<!---------------------- Adminssion Course Details coding start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Admission for Course</strong></p>
							<div><label for="applicationNumber">Application No.</label><input type="text" id="applicationNumber" name="applicatonNumber" value="<?php echo (isset($applicationid))?$applicationid:'';?>" readonly="true"/> </div>
							<div><label for="yearOfAdmission">Year</label><input type="text" id="yearOfAdmission" name="yearOfAdmission" value="<?php echo (isset($year_of_addmission))?$year_of_addmission:date("Y");?>" disabled/></div>
							<div><label for="dateTime">Date</label><input type="text" id="dateTime" name="dateTime" value="<?php echo (isset($$date_of_application))?$date_of_application:date("d-m-Y"); ?>" disabled/></div>
							<div><label for="courseType">Course Type</label><input type="text" id="courseType" name="courseType" value="<?php echo (isset($course_type))?$course_type:'';?>"/></div>
							<div><label for="courseName">Course Name</label><input type="text" id="courseName" name="courseName"  value="<?php echo (isset($course_name))?$course_name:'';?>"/></div>
				</fieldset>
			</div>		
<!---------------------- Adminssion Course Details coding end ------------------>

<!----------------------  Fee Details start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Admission Fee Details</strong></p>
							<div><label for="payment">Payment Mode</label><select name="payment" id="payment" >
																			<option disabled="" <?php echo (isset($payment_mode))?'':'selected';?> ></option>
																			<option value="cash" <?php echo ((isset($payment_mode)) and ($payment_mode=='cash'))?'selected':'';?>>Cash</option>
																			<option value="draft" <?php echo ((isset($payment_mode)) and ($payment_mode=='draft'))?'selected':'';?>>Draft</option>
																			<option value="cheque" <?php echo ((isset($payment_mode)) and ($payment_mode=='cheque'))?'selected':'';?>>Cheque</option>
																	</select></div>
							<div><label for="amount">Amount</label><input type="number" id="amount" name="amount" value="<?php echo (isset($amount))?$amount:'';?>"/></div>
							<div><label for="chequeno">Cheque Number</label><input type="text" id="chequeno" name="chequeno"  value="<?php echo (isset($chequeno))?$chequeno:'';?>"/></div>
							<div><label for="issudeDate">Issue Date</label><input type="date" id="issudeDate" name="issudeDate"  value="<?php echo (isset($issue_date))?date('Y-m-d',$issue_date):'';?>"/></div>
							<div><label for="bankName">Bank Name</label><input type="text" id="bankName" name="bankName"  value="<?php echo (isset($bank_name))?$bank_name:'';?>"></div>
							<div><label for="bankBranch">Bank Branch</label><input type="text" id="bankBranch" name="bankBranch" value="<?php echo (isset($branch_name))?$branch_name:'';?>"></div>							

				</fieldset>
			</div>
<!----------------------  Fee Details end ------------------>
<!---------------------- Student personal information start ------------------>
			<div class="sectionspecial">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Personal Information</strong></p>
							<div><label for="title">Title</label><select name="title" id="title"  required>
																			<option disabled="" <?php echo (isset($title))?'':'selected';?> >Select Option</option>
																			<option value="master" <?php echo ((isset($title)) and ($title=='master'))?'selected':'';?>>Master</option>
																			<option value="miss" <?php echo ((isset($title)) and ($title=='miss'))?'selected':'';?>>Miss</option>
																			<option value="mr" <?php echo ((isset($title)) and ($title=='mr'))?'selected':'';?>>Mr.</option>
																			<option value="caramel" <?php echo ((isset($title)) and ($title=='caramel'))?'selected':'';?>>Caramel</option>
																			<option value="dr" <?php echo ((isset($title)) and ($title=='dr'))?'selected':'';?>>Dr.</option>
																	</select></div>	
							<div><label for="fname">First Number</label><input type="text" id="fname" name="fname" value="<?php echo (isset($fname))?$fname:'';?>"/></div>	
							<div><label for="mname">Middle Name</label><input type="text" id="mname" name="mname" value="<?php echo (isset($mname))?$mname:'';?>"/></div>	
							<div><label for="lname">Last Name</label><input type="text" id="lname" name="lname" value="<?php echo (isset($lname))?$lname:'';?>"/></div>
							<div><label for="fathername">Father's Name</label><input type="text" id="fathername" name="fathername" value="<?php echo (isset($father_name))?$father_name:'';?>"/></div>	
							<div><label for="mothername">Mother's Name</label><input type="text" id="mothername" name="mothername" value="<?php echo (isset($mother_name))?$mother_name:'';?>"/></div>
							<div><label for="age">Age</label><input type="text" id="age" name="age" disabled/></div>							
							<div><label for="dob">Date of Birth</label><input type="date" id="dob" name="dob" value="<?php echo (isset($dob))?date('Y-m-d',$dob):'';?>"/></div>	
							<div><label for="gender">Gender</label><select name="gender" id="gender" >
																			<option disabled="" <?php echo (isset($gender))?'':'selected';?>>Select Option</option>
																			<option value="male" <?php echo ((isset($gender)) and ($gender=='male'))?'selected':'';?>>Male</option>
																			<option value="female" <?php echo ((isset($gender)) and ($gender=='male'))?'selected':'';?>>Female</option>
																			<option value="dr" <?php echo ((isset($gender)) and ($title=='dr'))?'selected':'';?>>Other</option>
																	</select></div>
							<div><label for="blood">Blood Group</label><select name="blood" id="blood" >
																			<option disabled="" <?php echo (isset($bloodgroup))?'':'selected';?>>Select Option</option>
																			<option value="ab+" <?php echo ((isset($bloodgroup)) and ($bloodgroup=='ab+'))?'selected':'';?>>AB+</option>
																			<option value="ab-" <?php echo ((isset($bloodgroup)) and ($bloodgroup=='ab-'))?'selected':'';?>>AB-</option>
																			<option value="a+" <?php echo ((isset($bloodgroup)) and ($bloodgroup=='a+'))?'selected':'';?>>A+</option>
																			<option value="a-" <?php echo ((isset($bloodgroup)) and ($bloodgroup=='a-'))?'selected':'';?>>A-</option>
																			<option value="b+" <?php echo ((isset($bloodgroup)) and ($bloodgroup=='b+'))?'selected':'';?>>B+</option>
																			<option value="b-" <?php echo ((isset($bloodgroup)) and ($bloodgroup=='b-'))?'selected':'';?>>B-</option>
																			<option value="o+" <?php echo ((isset($bloodgroup)) and ($bloodgroup=='o+'))?'selected':'';?>>O+</option>
																			<option value="o-" <?php echo ((isset($bloodgroup)) and ($bloodgroup=='o-'))?'selected':'';?>>O-</option>
																	</select></div>																		
							<div><label for="maritalstatus">Marital Status</label><select name="maritalstatus" id="maritalstatus" >
																			<option disabled="" <?php echo (isset($maritalstatus))?'':'selected';?>>Select Option</option>
																			<option value="single" <?php echo ((isset($maritalstatus)) and ($maritalstatus=='single'))?'selected':'';?>>Single</option>
																			<option value="married" <?php echo ((isset($maritalstatus)) and ($maritalstatus=='married'))?'selected':'';?>>Married</option>
																			<option value="divorced" <?php echo ((isset($maritalstatus)) and ($maritalstatus=='divorced'))?'selected':'';?>>Divorced</option>
																			<option value="separated" <?php echo ((isset($maritalstatus)) and ($maritalstatus=='separated'))?'selected':'';?>>Separated</option>
																			<option value="widowed" <?php echo ((isset($maritalstatus)) and ($maritalstatus=='widowed'))?'selected':'';?>>Widowed</option>
																	</select></div>		
							<div><label for="spouse">Spouse(Name)</label><input type="text" id="spouse" name="spouse" value="<?php echo (isset($spouse_name))?$spouse_name:'';?>" /></div>	
							<div><label for="category">Category</label><select name="category" id="category" required>
																			<option disabled="" <?php echo (isset($category))?'':'selected';?>>Select Option</option>
																			<option value="general" <?php echo ((isset($category)) and ($category=='single'))?'selected':'';?>>General</option>
																			<option value="obc" <?php echo ((isset($category)) and ($category=='single'))?'selected':'';?>>OBC</option>
																			<option value="sc" <?php echo ((isset($category)) and ($category=='single'))?'selected':'';?>>SC</option>
																			<option value="st" <?php echo ((isset($category)) and ($category=='single'))?'selected':'';?>>ST</option>
																			<option value="other" <?php echo ((isset($category)) and ($category=='single'))?'selected':'';?>>Other</option>
																	</select></div>	
							<div><label for="religion">Religion</label><select name="religion" id="religion" required>
																			<option disabled="" <?php echo (isset($religion))?'':'selected';?>>Select Option</option>
																			<option value="hindi" <?php echo ((isset($religion)) and ($religion=='hindi'))?'selected':'';?>>Hindu</option>
																			<option value="muslim" <?php echo ((isset($religion)) and ($religion=='muslim'))?'selected':'';?>>Muslim</option>
																			<option value="christian" <?php echo ((isset($religion)) and ($religion=='christian'))?'selected':'';?>>Christian</option>
																			<option value="sikh" <?php echo ((isset($religion)) and ($religion=='sikh'))?'selected':'';?>>Sikh</option>
																			<option value="jain" <?php echo ((isset($religion)) and ($religion=='jain'))?'selected':'';?>>Jain</option>
																			<option value="nonreligion" <?php echo ((isset($religion)) and ($religion=='nonreligion'))?'selected':'';?>>Non Religion</option>
																			<option value="other" <?php echo ((isset($religion)) and ($religion=='other'))?'selected':'';?>>Other</option>
																	</select></div>	
							<div><label for="nationality">Nationality</label><input type="text" id="nationality" name="nationality" value="<?php echo (isset($nationality))?$nationality:'';?>"/></div>
							<div><label for="disability">Disability</label><select name="disability" id="disability" required>
																			<option disabled="" <?php echo (isset($disability))?'':'selected';?>>Select Option</option>
																			<option value="yes" <?php echo ((isset($disability)) and ($disability=='yes'))?'selected':'';?>>Yes</option>
																			<option value="no" <?php echo ((isset($disability)) and ($disability=='no'))?'selected':'';?>>No</option>
																	</select></div>								
				</fieldset>
			</div>

<!---------------------- Student personal information end ------------------>
<!----------------------  Photo upload start ------------------>
			<div id="photosection"  >
				<fieldset style="border:none">
						<div id="dropzone">Drop Photo to upload</div>							
						<p id="studentPhoto"><strong>Student's Photo</strong></p>
				</fieldset>
			</div>
<!----------------------  Photo upload  end ------------------>
<!---------------------- Student Corresponding Address start ------------------>
			<div class="section" id="block">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Corresponding Address</strong></p>
							<div><label for="cline1">Address Line 1</label><input type="text" id="cline1" name="cline1"  value="<?php echo (isset($cline1))?$cline1:'';?>"/></div>
							<div><label for="cline2">Address Line 2</label><input type="text" id="cline2" name="cline2"  value="<?php echo (isset($cline2))?$cline2:'';?>"/></div>
							<div><label for="cline3">Address Line 3</label><input type="text" id="cline3" name="cline3" value="<?php echo (isset($cline3))?$cline3:'';?>"/></div>
							<div><label for="ccity">City</label><input type="text" id="ccity" name="ccity" value="<?php echo (isset($ccity))?$ccity:'';?>"/></div>
							<div><label for="cdistrict">District</label><input type="text" id="cdistrict" name="cdistrict"  value="<?php echo (isset($cdistrict))?$cdistrict:'';?>"/></div>
							<div><label for="cstate">State</label><input type="text" id="cstate" name="cstate" value="<?php echo (isset($cstate))?$cstate:'';?>"/></div>
							<div><label for="cpin">PIN Code</label><input type="text" id="cpin" name="cpin"  value="<?php echo (isset($cpincode))?$cpincode:'';?>"/></div>
							<div><label for="ccountry">Country</label><input type="text" id="ccountry" name="ccountry" value="<?php echo (isset($ccountry))?$ccountry:'';?>"/></div>
							<div><label for="cmobile">Mobile Number</label><input type="tel" id="cmobile" name="cmobile"  value="<?php echo (isset($cmobileno))?$cmobileno:'';?>"/></div>
							<div><label for="telephone">Telephone</label><input type="tel" id="ctelephone" name="ctelephone" pattern="^\d{3}-\d{3}-\d{4}$" placeholder="XXX-XXX-XXXX" title="Please Enter 10 digits phone number" required="required" value="<?php echo (isset($ctelephone))?$ctelephone:'';?>"/>	</div>
							<div><label for="cemail">E-mail</label><input type="email" id="cemail" name="cemail" value="<?php echo (isset($cemail))?$cemail:'';?>" />	</div>
				</fieldset>
			</div>
<!---------------------- Student Corresponding Address end ------------------>
<!----------------------  Permanent Address start ------------------>
			<div class="section" id="block">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Permanent Address</strong></p>
							<div><label for="line1">Address Line 1</label><input type="text" id="line1" name="line1"  value="<?php echo (isset($line1))?$line1:'';?>"/></div>
							<div><label for="line2">Address Line 2</label><input type="text" id="line2" name="line2"  value="<?php echo (isset($line2))?$line2:'';?>"/></div>
							<div><label for="line3">Address Line 3</label><input type="text" id="line3" name="line3" value="<?php echo (isset($line3))?$line3:'';?>"/></div>
							<div><label for="city">City</label><input type="text" id="city" name="city" value="<?php echo (isset($city))?$city:'';?>"/></div>
							<div><label for="district">District</label><input type="text" id="district" name="district"  value="<?php echo (isset($district))?$district:'';?>"/></div>
							<div><label for="state">State</label><input type="text" id="state" name="state" value="<?php echo (isset($astate))?$astate:'';?>"/></div>
							<div><label for="pin">PIN Code</label><input type="text" id="pin" name="pin" value="<?php echo (isset($pin))?$pin:'';?>"/></div>
							<div><label for="country">Country</label><input type="text" id="country" name="country" value="<?php echo (isset($country))?$country:'';?>"/></div>
							<div><label for="mobile">Mobile Number</label><input type="tel" id="mobile" name="mobile"  value="<?php echo (isset($mobileno))?$mobileno:'';?>"/></div>
							<div><label for="telephone">Telephone</label><input type="tel" id="telephone" name="telephone"  value="<?php echo (isset($telephone))?$telephone:'';?>"/></div>	
							<div><label for="email">E-mail</label><input type="email" id="email" name="email" value="<?php echo (isset($email))?$email:'';?>"/>	</div>
				</fieldset>
			</div>
<!---------------------- Permanent Address end ------------------>
	
<!---------------------- 10th Class start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - 10th Class</strong></p>
							<div><label for="edusys10">Education System</label><select name="edusys10" id="edusys10">
																			<option disabled="" <?php echo (isset($education_system10))?'':'selected';?>>Select Option</option>
																			<option value="fulltime" <?php echo ((isset($education_system10)) and ($education_system10==i))?'selected':''?>>Full Time</option>
																			<option value="parttime" <?php echo ((isset($education_system10)) and ($education_system10==i))?'selected':''?>>Part Time</option>
																			<option value="distanceeducation">Distance Education</option>
																	</select></div>
							<div><label for="yearofpassing10">Year of Passing</label><select id="yearofpassing10" name="yearofpassing10" >
																			<script>
																				var myDate = new Date();
																				var year = myDate.getFullYear();
																				var val='<?php echo (isset($year_of_passing10))?$year_of_passing10:""?>';
																					for(var i = 1995; i < year+1; i++){
																						if(eval(val)==i){
																							document.write("<option value='"+i+"' selected>"+i+"</option>");
																						} else {
																							document.write("<option value='"+i+"'>"+i+"</option>");
																						}
																					}
																			</script>							
																		</select></div>
							<div><label for="examboard10">Exam Board</label><input type="text" id="examboard10" name="examboard10" value="<?php echo (isset($exam_board10))?$exam_board10:'';?>"/></div>
							<div><label for="schoolname10">School Name</label><input type="text" id="schoolname10" name="schoolname10" value="<?php echo (isset($school_name10))?$school_name10:'';?>"/></div>
							<div><label for="subject10">Subject</label><input type="text" id="subject10" name="subject10" value="<?php echo (isset($subject10))?$subject10:'';?>"></div>
							<div><label for="percentagemark10">% Mark Obtained</label><input type="text" id="percentagemark10" name="percentagemark10" value="<?php echo (isset($permanentmarks10))?$permanentmarks10:'';?>"></div>
							<div><label for="division10">Division</label><input type="text" id="division10" name="division10" value="<?php echo (isset($division10))?$division10:'';?>"></div>							
				</fieldset>
			</div>
<!---------------------- 10th Class end ------------------>
<!---------------------- 12th Class  start------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - 12th Class</strong></p>
							<div><label for="edusys12">Education System</label><select name="edusys12" id="edusys12">
																			<option disabled="" <?php echo (isset($education_system12))?'':'selected';?>>Select Option</option>
																			<option value="fulltime" <?php echo ((isset($education_system12)) and ($education_system12==i))?'selected':''?>>Full Time</option>
																			<option value="parttime" <?php echo ((isset($education_system12)) and ($education_system12==i))?'selected':''?>>Part Time</option>
																			<option value="distanceeducation">Distance Education</option>
																	</select></div>
							<div><label for="yearofpassing12">Year of Passing</label><select type="text" id="yearofpassing12" name="yearofpassing12" > 
																			<script>
																				var myDate = new Date();
																				var year = myDate.getFullYear();
																				
																				var val12='<?php echo (isset($year_of_passing12))?$year_of_passing12:""?>';
																				for(var i = 1995; i < year+1; i++){
																					if(eval(val12)==i){
																						document.write("<option value='"+i+"' selected>"+i+"</option>");
																					} else {
																						document.write("<option value='"+i+"'>"+i+"</option>");
																					}
																				}
																			</script>							
																		</select></div>
							<div><label for="examboard12">Exam Board</label><input type="text" id="examboard12" name="examboard12"  value="<?php echo (isset($exam_board12))?$exam_board12:'';?>"/></div>
							<div><label for="schoolname12">School Name</label><input type="text" id="schoolname12" name="schoolname12" value="<?php echo (isset($school_name12))?$school_name12:'';?>"/></div>
							<div><label for="subject12">Subject</label><input type="text" id="subject12" name="subject12" value="<?php echo (isset($subject12))?$subject12:'';?>"></div>
							<div><label for="percentagemark12">% Mark Obtained</label><input type="text" id="percentagemark12" name="percentagemark12" value="<?php echo (isset($permanentmarks12))?$permanentmarks12:'';?>"></div>
							<div><label for="division12">Division</label><input type="text" id="division12" name="division12" value="<?php echo (isset($division12))?$division12:'';?>"></div>							
				</fieldset>
			</div>
<!---------------------- 12th Class  end  ------------------>
<!---------------------- Diploma  start  ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - Diploma</strong></p>
							<div><label for="edusysdiploma">Education System</label><select name="edusysdiploma" id="edusysdiploma" required>
																			<option disabled="" <?php echo (isset($education_systemdip))?'':'selected';?>>Select Option</option>
																			<option value="fulltime" <?php echo ((isset($education_systemdip)) and ($education_systemdip==i))?'selected':''?>>Full Time</option>
																			<option value="parttime" <?php echo ((isset($education_systemdip)) and ($education_systemdip==i))?'selected':''?>>Part Time</option>
																			<option value="distanceeducation">Distance Education</option>
																	</select></div>
							<div><label for="yearofpassingdiploma">Year of Passing</label><select type="text" id="yearofpassingdiploma" name="yearofpassingdiploma" />
																			<script>
																				var myDate = new Date();
																				var year = myDate.getFullYear();
																				var valdip='<?php echo (isset($year_of_passingdip))?$year_of_passingdip:""?>';
																				for(var i = 1995; i < year+1; i++){
																					if(eval(valdip)==i){
																						document.write("<option value='"+i+"' selected>"+i+"</option>");
																					} else {
																						document.write("<option value='"+i+"'>"+i+"</option>");
																					}
																				}
																			</script>							
																		</select></div>
							<div><label for="examboarddiploma">Exam Board</label><input type="text" id="examboarddiploma" name="examboarddiploma" value="<?php echo (isset($exam_boarddip))?$exam_boarddip:'';?>" /></div>
							<div><label for="schoolnamediploma">School Name</label><input type="text" id="schoolnamediploma" name="schoolnamediploma" value="<?php echo (isset($school_namedip))?$school_namedip:'';?>"/></div>
							<div><label for="subjectdiploma">Subject</label><input type="text" id="subjectdiploma" name="subjectdiploma" value="<?php echo (isset($subjectdip))?$subjectdip:'';?>"></div>
							<div><label for="percentagemarkdiploma">% Mark Obtained</label><input type="text" id="percentagemarkdiploma" name="percentagemarkdiploma" value="<?php echo (isset($permanentmarksdip))?$permanentmarksdip:'';?>"></div>
							<div><label for="divisiondiploma">Division</label><input type="text" id="divisiondiploma" name="divisiondiploma" value="<?php echo (isset($divisiondip))?$divisiondip:'';?>"></div>
							
													
				</fieldset>
			</div>
<!---------------------- Diploma  end ------------------>
<!---------------------- Degree start  ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - Degree</strong></p>
							<div><label for="edusysdegree">Education System</label><select name="edusysdegree" id="edusysdegree" required>
																			<option disabled="" <?php echo (isset($education_systemdegree))?'':'selected';?>>Select Option</option>
																			<option value="fulltime" <?php echo ((isset($education_systemdegree)) and ($education_systemdegree==i))?'selected':''?>>Full Time</option>
																			<option value="parttime" <?php echo ((isset($education_systemdegree)) and ($education_systemdegree==i))?'selected':''?>>Part Time</option>
																			<option value="distanceeducation">Distance Education</option>
																	</select></div>
							<div><label for="yearofpassingdegree">Year of Passing</label><select type="text" id="yearofpassingdegree" name="yearofpassingdegree" />
																			<script>
																				var myDate = new Date();
																				var year = myDate.getFullYear();
																				var valdegree='<?php echo (isset($year_of_passingdegree))?$year_of_passingdigree:""?>';
																				for(var i = 1995; i < year+1; i++){
																					if(eval(valdegree)==i){
																						document.write("<option value='"+i+"' selected>"+i+"</option>");
																					} else {
																						document.write("<option value='"+i+"'>"+i+"</option>");
																					}
																				}
																			</script>							
																		</select></div>
							<div><label for="examboarddegree">Exam Board</label><input type="text" id="examboarddegree" name="examboarddegree" value="<?php echo (isset($exam_boarddegree))?$exam_boarddegree:'';?>"/></div>
							<div><label for="schoolnamedegree">Institute Name</label><input type="text" id="schoolnamedegree" name="schoolnamedegree" value="<?php echo (isset($school_namedegree))?$school_namedegree:'';?>"/></div>
							<div><label for="subjectdegree">Subject</label><input type="text" id="subjectdegree" name="subjectdegree" value="<?php echo (isset($subjectdegree))?$subjectdegree:'';?>"></div>
							<div><label for="percentagemarkdegree">% Mark Obtained</label><input type="text" id="percentagemarkdegree" name="percentagemarkdegree" value="<?php echo (isset($permanentmarksdegree))?$permanentmarksdegree:'';?>"></div>
							<div><label for="divisiondegree">Division</label><input type="text" id="divisiondegree" name="divisiondegree" value="<?php echo (isset($divisiondegree))?$divisiondegree:'';?>"></div>							
				</fieldset>
			</div>
<!---------------------- Degree end  ------------------>
<!---------------------- Post Graduate  Start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - Post Graduate</strong></p>
							<div><label for="edusyspg">Education System</label><select name="edusyspg" id="edusyspg" required>
																			<option disabled="" <?php echo (isset($education_systempg))?'':'selected';?>>Select Option</option>
																			<option value="fulltime" <?php echo ((isset($education_systempg)) and ($education_systempg==i))?'selected':''?>>Full Time</option>
																			<option value="parttime" <?php echo ((isset($education_systempg)) and ($education_systempg==i))?'selected':''?>>Part Time</option>
																			<option value="distanceeducation">Distance Education</option>
																	</select></div>
							<div><label for="yearofpassingpg">Year of Passing</label><select type="text" id="yearofpassingpg" name="yearofpassingpg" />
																			<script>
																				var myDate = new Date();
																				var year = myDate.getFullYear();
																				var valpg='<?php echo (isset($year_of_passingpg))?$year_of_passingpg:""?>';
																				for(var i = 1995; i < year+1; i++){
																					if(eval(valpg)==i){
																						document.write("<option value='"+i+"' selected>"+i+"</option>");
																					} else {
																						document.write("<option value='"+i+"'>"+i+"</option>");
																					}
																				}
																			</script>							
																		</select></div>
							<div><label for="examboardpg">Exam Board</label><input type="text" id="examboardpg" name="examboardpg" value="<?php echo (isset($exam_boardpg))?$exam_boardpg:'';?>"/></div>
							<div><label for="schoolnamepg">Institute Name</label><input type="text" id="schoolnamepg" name="schoolnamepg" value="<?php echo (isset($school_namepg))?$school_namepg:'';?>"/></div>
							<div><label for="subjectpg">Subject</label><input type="text" id="subjectpg" name="subjectpg" value="<?php echo (isset($subjectpg))?$subjectpg:'';?>"></div>
							<div><label for="percentagemarkpg">% Mark Obtained</label><input type="text" id="percentagemarkpg" name="percentagemarkpg" value="<?php echo (isset($permanentmarkspg))?$permanentmarkspg:'';?>"></div>
							<div><label for="divisionpg">Division</label><input type="text" id="divisionpg" name="divisionpg" value="<?php echo (isset($divisionpg))?$divisionpg:'';?>"></div>							
				</fieldset>
			</div>
<!---------------------- Post Graduate  end  ------------------>
<!---------------------- Upload Other documents start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Upload Documents</strong></p>
							<div class="file">
								<label class="tcfile">1. Transfer Certificate</label>
								<input type="file" class="inputfile" id="tcfile" name="file"/>
								<button type="button" class="viewbutton" >View</button>
							</div>
							<div class="file">
								<label class="dcfile">2. Domicile Certificate</label>
								<input type="file" class="inputfile" id="dcfile" name="file"/>
								<button type="button" class="viewbutton" >View</button>
							</div>
							<div class="file">
								<label class="labelname">3. 10th Mark Sheet</label>
								<input type="file" class="inputfile" id="dcfile" name="file"/>
								<button type="button" class="viewbutton" >View</button>
							</div>
							<div class="file">
								<label class="labelname">4. 10th Pass Certificate</label>
								<input type="file" class="inputfile" id="dcfile" name="file"/>
								<button type="button" class="viewbutton" >View</button>
							</div>
							<div class="file">
								<label class="labelname">5. 12th Mark Sheet</label>
								<input type="file" class="inputfile" id="dcfile" name="file"/>
								<button type="button" class="viewbutton" >View</button>
							</div>
							<div class="file">
								<label class="labelname">6. 12th Pass Certificate</label>
								<input type="file" class="inputfile" id="dcfile" name="file"/>
								<button type="button" class="viewbutton" >View</button>
							</div>
							<div class="file">
								<label class="labelname">7. Degree Certificate</label>
								<input type="file" class="inputfile" id="dcfile" name="file"/>
								<button type="button" class="viewbutton" >View</button>
							</div>
							<div class="file">
								<label class="labelname">8. Degree Mark Sheet</label>
								<input type="file" class="inputfile" id="dcfile" name="file"/>
								<button type="button" class="viewbutton" >View</button>
							</div>
							<div class="file">
								<label class="labelname">9. Post Graduate Certificate</label>
								<input type="file" class="inputfile" id="dcfile" name="file"/>
								<button type="button" class="viewbutton" >View</button>
							</div>
							<div class="file">
								<label class="labelname">10. Post Graduate Mark Sheet</label>
								<input type="file" class="inputfile" id="dcfile" name="file"/>
								<button type="button" class="viewbutton" >View</button>
							</div>
				</fieldset>
			</div>
<!---------------------- Upload Other documents  end ------------------>
<!---------------------  Main body end here ------------------------>
		</fieldset>
		</form>
	</div>
</body>
</html>