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

	<div id="mainbodyposition">
		<form  action="savedata.php" method="post" onsubmit="return checkforblank()">
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
							<div><label for="applicationNumber">Application No.</label><input type="text" id="applicationNumber" name="applicatonNumber" disabled/> </div>
							<div><label for="yearOfAdmission">Year</label><input type="text" id="yearOfAdmission" name="yearOfAdmission" value="<?php echo date("Y"); ?>" disabled/></div>
							<div><label for="dateTime">Date</label><input type="text" id="dateTime" name="dateTime" value="<?php echo date("d-m-Y"); ?>" disabled/></div>
							<div><label for="courseType">Course Type</label><input type="text" id="courseType" name="courseType"/></div>
							<div><label for="courseName">Course Name</label><input type="text" id="courseName" name="courseName" /></div>
				</fieldset>
			</div>		
<!---------------------- Adminssion Course Details coding end ------------------>

<!----------------------  Fee Details start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Admission Fee Details</strong></p>
							<div><label for="payment">Payment Mode</label><select name="payment" id="payment" >
																			<option disabled="" selected=""></option>
																			<option value="cash">Cash</option>
																			<option value="draft">Draft</option>
																			<option value="cheque">Cheque</option>
																	</select></div>
							<div><label for="amount">Amount</label><input type="number" id="amount" name="amount"/></div>
							<div><label for="chequeno">Cheque Number</label><input type="text" id="chequeno" name="chequeno" /></div>
							<div><label for="issudeDate">Issue Date</label><input type="date" id="issudeDate" name="issudeDate"/></div>
							<div><label for="bankName">Bank Name</label><input type="text" id="bankName" name="bankName"></div>
							<div><label for="bankBranch">Bank Branch</label><input type="text" id="bankBranch" name="bankBranch"></div>							

				</fieldset>
			</div>
<!----------------------  Fee Details end ------------------>
<!---------------------- Student personal information start ------------------>
			<div class="sectionspecial">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Personal Information</strong></p>
							<div><label for="title">Title</label><select name="title" id="title" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="master">Master</option>
																			<option value="miss">Miss</option>
																			<option value="mr">Mr.</option>
																			<option value="caramel">Caramel</option>
																			<option value="dr">Dr.</option>
																	</select></div>	
							<div><label for="fname">First Number</label><input type="text" id="fname" name="fname" /></div>	
							<div><label for="mname">Middle Name</label><input type="text" id="mname" name="mname"/></div>	
							<div><label for="lname">Last Name</label><input type="text" id="lname" name="lname" /></div>
							<div><label for="fathername">Father's Name</label><input type="text" id="fathername" name="fathername"/></div>	
							<div><label for="mothername">Mother's Name</label><input type="text" id="mothername" name="mothername" /></div>
							<div><label for="age">Age</label><input type="text" id="age" name="age" disabled/></div>							
							<div><label for="dob">Date of Birth</label><input type="date" id="dob" name="dob"/></div>	
							<div><label for="gender">Gender</label><select name="gender" id="gender" >
																			<option disabled="" selected="">Select Option</option>
																			<option value="master">Male</option>
																			<option value="miss">Female</option>
																			<option value="dr">Other</option>
																	</select></div>
							<div><label for="blood">Blood Group</label><select name="blood" id="blood" >
																			<option disabled="" selected="">Select Option</option>
																			<option value="ab+">AB+</option>
																			<option value="ab-">AB-</option>
																			<option value="a+">A+</option>
																			<option value="a-">A-</option>
																			<option value="b+">B+</option>
																			<option value="b-l">B-</option>
																			<option value="o+">O+</option>
																			<option value="o-">O-</option>
																	</select></div>																		
							<div><label for="maritalstatus">Marital Status</label><select name="maritalstatus" id="maritalstatus" >
																			<option disabled="" selected="">Select Option</option>
																			<option value="single">Single</option>
																			<option value="married">Married</option>
																			<option value="divorced">Divorced</option>
																			<option value="separated">Separated</option>
																			<option value="widowed">Widowed</option>
																	</select></div>		
							<div><label for="spouse">Spouse(Name)</label><input type="text" id="spouse" name="spouse"/></div>	
							<div><label for="category">Category</label><select name="category" id="category" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="general">General</option>
																			<option value="obc">OBC</option>
																			<option value="sc">SC</option>
																			<option value="st">ST</option>
																			<option value="other">Other</option>
																	</select></div>	
							<div><label for="religion">Religion</label><select name="religion" id="religion" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="hindi">Hindu</option>
																			<option value="muslim">Muslim</option>
																			<option value="christian">Christian</option>
																			<option value="sikh">Sikh</option>
																			<option value="jain">Jain</option>
																			<option value="nonreligion">Non Religion</option>
																			<option value="other">Other</option>
																	</select></div>	
							<div><label for="nationality">Nationality</label><input type="text" id="nationality" name="nationality" /></div>
							<div><label for="disability">Disability</label><select name="disability" id="disability" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="yes">Yes</option>
																			<option value="no">No</option>
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
							<div><label for="cline1">Address Line 1</label><input type="text" id="cline1" name="cline1" /></div>
							<div><label for="cline2">Address Line 2</label><input type="text" id="cline2" name="cline2" /></div>
							<div><label for="cline3">Address Line 3</label><input type="text" id="cline3" name="cline3"/></div>
							<div><label for="ccity">City</label><input type="text" id="ccity" name="ccity"/></div>
							<div><label for="cdistrict">District</label><input type="text" id="cdistrict" name="cdistrict" /></div>
							<div><label for="cstate">State</label><input type="text" id="cstate" name="cstate"/></div>
							<div><label for="cpin">PIN Code</label><input type="text" id="cpin" name="cpin" /></div>
							<div><label for="ccountry">Country</label><input type="text" id="ccountry" name="ccountry"/></div>
							<div><label for="cmobile">Mobile Number</label><input type="tel" id="cmobile" name="cmobile" /></div>
							<div><label for="telephone">Telephone</label><input type="tel" id="ctelephone" name="ctelephone" pattern="^\d{3}-\d{3}-\d{4}$" placeholder="XXX-XXX-XXXX" title="Please Enter 10 digits phone number" required="required"/>	</div>
							<div><label for="cemail">E-mail</label><input type="email" id="cemail" name="cemail" />	</div>
				</fieldset>
			</div>
<!---------------------- Student Corresponding Address end ------------------>
<!----------------------  Permanent Address start ------------------>
			<div class="section" id="block">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Permanent Address</strong></p>
							<div><label for="line1">Address Line 1</label><input type="text" id="line1" name="line1" /></div>
							<div><label for="line2">Address Line 2</label><input type="text" id="line2" name="line2" /></div>
							<div><label for="line3">Address Line 3</label><input type="text" id="line3" name="line3"/></div>
							<div><label for="city">City</label><input type="text" id="city" name="city"/></div>
							<div><label for="district">District</label><input type="text" id="district" name="district" /></div>
							<div><label for="state">State</label><input type="text" id="state" name="state"/></div>
							<div><label for="pin">PIN Code</label><input type="text" id="pin" name="pin"/></div>
							<div><label for="country">Country</label><input type="text" id="country" name="country"/></div>
							<div><label for="mobile">Mobile Number</label><input type="tel" id="mobile" name="mobile" /></div>
							<div><label for="telephone">Telephone</label><input type="tel" id="telephone" name="telephone" /></div>	
							<div><label for="email">E-mail</label><input type="email" id="email" name="email" />	</div>
				</fieldset>
			</div>
<!---------------------- Permanent Address end ------------------>
<!---------------------- 10th Class start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - 10th Class</strong></p>
							<div><label for="edusys10">Education System</label><select name="edusys10" id="edusys10">
																			<option disabled="" selected="">Select Option</option>
																			<option value="fulltime">Full Time</option>
																			<option value="parttime">Part Time</option>
																			<option value="distanceeducation">Distance Education</option>
																	</select></div>
							<div><label for="yearofpassing10">Year of Passing</label><select id="yearofpassing10" name="yearofpassing10" >
																			<script>
																				var myDate = new Date();
																				var year = myDate.getFullYear();
																					for(var i = 1995; i < year+1; i++){
																						document.write('<option value="'+i+'">'+i+'</option>');
																					}
																			</script>							
																		</select></div>
							<div><label for="examboard10">Exam Board</label><input type="text" id="examboard10" name="examboard10" /></div>
							<div><label for="schoolname10">School Name</label><input type="text" id="schoolname10" name="schoolname10"/></div>
							<div><label for="subject10">Subject</label><input type="text" id="subject10" name="subject10"></div>
							<div><label for="percentagemark10">% Mark Obtained</label><input type="text" id="percentagemark10" name="percentagemark10"></div>
							<div><label for="division10">Division</label><input type="text" id="division10" name="division10"></div>							
				</fieldset>
			</div>
<!---------------------- 10th Class end ------------------>
<!---------------------- 12th Class  start------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - 12th Class</strong></p>
							<div><label for="edusys12">Education System</label><select name="edusys12" id="edusys12" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="fulltime">Full Time</option>
																			<option value="parttime">Part Time</option>
																			<option value="distanceeducation">Distance Education</option>
																	</select></div>
							<div><label for="yearofpassing12">Year of Passing</label><select type="text" id="yearofpassing12" name="yearofpassing12" > 
																			<script>
																				var myDate = new Date();
																				var year = myDate.getFullYear();
																					for(var i = 1995; i < year+1; i++){
																						document.write('<option value="'+i+'">'+i+'</option>');
																					}
																			</script>							
																		</select></div>
							<div><label for="examboard12">Exam Board</label><input type="text" id="examboard12" name="examboard12" /></div>
							<div><label for="schoolname12">School Name</label><input type="text" id="schoolname12" name="schoolname12"/></div>
							<div><label for="subject12">Subject</label><input type="text" id="subject12" name="subject12"></div>
							<div><label for="percentagemark12">% Mark Obtained</label><input type="text" id="percentagemark12" name="percentagemark12"></div>
							<div><label for="division12">Division</label><input type="text" id="division12" name="division12"></div>							
				</fieldset>
			</div>
<!---------------------- 12th Class  end  ------------------>
<!---------------------- Diploma  start  ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - Diploma</strong></p>
							<div><label for="edusysdiploma">Education System</label><select name="edusysdiploma" id="edusysdiploma" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="fulltime">Full Time</option>
																			<option value="parttime">Part Time</option>
																			<option value="distanceeducation">Distance Education</option>
																	</select></div>
							<div><label for="yearofpassingdiploma">Year of Passing</label><select type="text" id="yearofpassingdiploma" name="yearofpassingdiploma" />
																			<script>
																				var myDate = new Date();
																				var year = myDate.getFullYear();
																					for(var i = 1995; i < year+1; i++){
																						document.write('<option value="'+i+'">'+i+'</option>');
																					}
																			</script>							
																		</select></div>
							<div><label for="examboarddiploma">Exam Board</label><input type="text" id="examboarddiploma" name="examboarddiploma" /></div>
							<div><label for="schoolnamediploma">School Name</label><input type="text" id="schoolnamediploma" name="schoolnamediploma"/></div>
							<div><label for="subjectdiploma">Subject</label><input type="text" id="subjectdiploma" name="subjectdiploma"></div>
							<div><label for="percentagemarkdiploma">% Mark Obtained</label><input type="text" id="percentagemarkdiploma" name="percentagemarkdiploma"></div>
							<div><label for="divisiondiploma">Division</label><input type="text" id="divisiondiploma" name="divisiondiploma"></div>
							
													
				</fieldset>
			</div>
<!---------------------- Diploma  end ------------------>
<!---------------------- Degree start  ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - Degree</strong></p>
							<div><label for="edusysdegree">Education System</label><select name="edusysdegree" id="edusysdegree" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="fulltime">Full Time</option>
																			<option value="parttime">Part Time</option>
																			<option value="distanceeducation">Distance Education</option>
																	</select></div>
							<div><label for="yearofpassingdegree">Year of Passing</label><select type="text" id="yearofpassingdegree" name="yearofpassingdegree" />
																			<script>
																				var myDate = new Date();
																				var year = myDate.getFullYear();
																					for(var i = 1995; i < year+1; i++){
																						document.write('<option value="'+i+'">'+i+'</option>');
																					}
																			</script>							
																		</select></div>
							<div><label for="examboarddegree">Exam Board</label><input type="text" id="examboarddegree" name="examboarddegree" /></div>
							<div><label for="schoolnamedegree">Institute Name</label><input type="text" id="schoolnamedegree" name="schoolnamedegree"/></div>
							<div><label for="subjectdegree">Subject</label><input type="text" id="subjectdegree" name="subjectdegree"></div>
							<div><label for="percentagemarkdegree">% Mark Obtained</label><input type="text" id="percentagemarkdegree" name="percentagemarkdegree"></div>
							<div><label for="divisiondegree">Division</label><input type="text" id="divisiondegree" name="divisiondegree"></div>							
				</fieldset>
			</div>
<!---------------------- Degree end  ------------------>
<!---------------------- Post Graduate  Start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - Post Graduate</strong></p>
							<div><label for="edusyspg">Education System</label><select name="edusyspg" id="edusyspg" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="fulltime">Full Time</option>
																			<option value="parttime">Part Time</option>
																			<option value="distanceeducation">Distance Education</option>
																	</select></div>
							<div><label for="yearofpassingpg">Year of Passing</label><select type="text" id="yearofpassingpg" name="yearofpassingpg" />
																			<script>
																				var myDate = new Date();
																				var year = myDate.getFullYear();
																					for(var i = 1995; i < year+1; i++){
																						document.write('<option value="'+i+'">'+i+'</option>');
																					}
																			</script>							
																		</select></div>
							<div><label for="examboardpg">Exam Board</label><input type="text" id="examboardpg" name="examboardpg" /></div>
							<div><label for="schoolnamepg">Institute Name</label><input type="text" id="schoolnamepg" name="schoolnamepg"/></div>
							<div><label for="subjectpg">Subject</label><input type="text" id="subjectpg" name="subjectpg"></div>
							<div><label for="percentagemarkpg">% Mark Obtained</label><input type="text" id="percentagemarkpg" name="percentagemarkpg"></div>
							<div><label for="divisionpg">Division</label><input type="text" id="divisionpg" name="divisionpg"></div>							
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