<!DOCTYPE HTML>
<html lang="en">
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="author" content="allsky" />
	<title>Edit Adminssion Form</title>
	<link rel="stylesheet" type="text/css" href="editAdmissionForm.css"/>

</head>

<body>

	<header> 
		<?php include_once('../../include/header.php') ?>
	</header>
	
	<section> 
		<?php include_once('../../include/loginUserName.php') ?>
	</section>
	
	<nav> 
		<?php include_once('../../include/nav.php') ?>
	</nav>	
	
<!---------------------  Main body starts here ------------------------>

	<div id="mainbodyposition">
		<form  action="../scripts/insertAdmissionFormData.php" method="post" >
		<fieldset style="border:none">
		
<!---------------------- three btttons coding starts ------------------>
			<div id="button">
				<input class="mybutton" type="submit" value="Back"/>
				<input class="mybutton" type="submit" value="Edit"/>
				<input class="mybutton" type="submit" value="Save"/>
			</div>	
	
<!---------------------- three btttons coding end ------------------>
			
<!---------------------- Adminssion Course Details coding start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Admission for Course</strong></p>
							<div><label for="applicationNumber">Application No.</label><input type="text" id="applicationNumber" name="applicatonNumber" disabled/> </div>
							<div><label for="courseType" ">Course Type</label><input type="text" id="courseType" name="courseType"/></div>
							<div><label for="courseName">Course Name</label><input type="text" id="courseName" name="courseName" /></div>
							<div><label for="yearOfAdmission">Year of Admission</label><input type="text" id="yearOfAdmission" name="yearOfAdmission"/></div>
							<div><label for="dateTime">Date & Time</label><input type="text" id="dateTime" name="dateTime" disabled/></div>
							
				</fieldset>
			</div>		
<!---------------------- Adminssion Course Details coding end ------------------>

<!----------------------  Fee Details start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Admission Fee Details</strong></p>
							<div><label for="payment">Payment Mode</label><select name="payment" id="payment" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="cash">Cash</option>
																			<option value="draft">Draft</option>
																			<option value="cheque">Cheque</option>
																	</select></div>
							<div><label for="amount">Amount</label><input type="text" id="amount" name="amount"/></div>
							<div><label for="paymentMode">Cheque Number</label><input type="text" id="paymentMode" name="paymentMode" /></div>
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
							<div><label for="dob">Date of Birth</label><input type="date" id="dob" name="dob" /></div>	
							<div><label for="gender">Gender</label><select name="gender" id="gender" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="master">Male</option>
																			<option value="miss">Female</option>
																			<option value="dr">Other</option>
																	</select></div>
							<div><label for="blood">Blood Group</label><select name="blood" id="blood" required>
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
							<div><label for="maritalstatus">Marital Status</label><select name="maritalstatus" id="maritalstatus" required>
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
							<label for="line1">Address Line 1</label><input type="text" id="line1" name="line1" />
							<label for="line2">Address Line 2</label><input type="text" id="line2" name="line2" />
							<label for="line3">Address Line 3</label><input type="text" id="line3" name="line3"/>
							<label for="city">City</label><input type="text" id="city" name="city"/>
							<label for="district">District</label><input type="text" id="district" name="district" />
							<label for="state">State</label><input type="text" id="state" name="state"/>
							<label for="pin">PIN Code</label><input type="text" id="pin" name="pin"/>
							<label for="country">Country</label><input type="text" id="country" name="country"/>
							<label for="mobile">Mobile Number</label><input type="tel" id="mobile" name="mobile" />
							<label for="telephone">Telephone</label><input type="tel" id="telephone" name="telephone" />	
							<label for="email">E-mail</label><input type="email" id="email" name="email" />	
				</fieldset>
			</div>
<!---------------------- Student Corresponding Address end ------------------>
<!----------------------  Permanent Address start ------------------>
			<div class="section" id="block">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Permanent Address</strong></p>
							<label for="line1">Address Line 1</label><input type="text" id="line1" name="line1" />
							<label for="line2">Address Line 2</label><input type="text" id="line2" name="line2" />
							<label for="line3">Address Line 3</label><input type="text" id="line3" name="line3"/>
							<label for="city">City</label><input type="text" id="city" name="city"/>
							<label for="district">District</label><input type="text" id="district" name="district" />
							<label for="state">State</label><input type="text" id="state" name="state"/>
							<label for="pin">PIN Code</label><input type="text" id="pin" name="pin"/>
							<label for="country">Country</label><input type="text" id="country" name="country"/>
							<label for="mobile">Mobile Number</label><input type="tel" id="mobile" name="mobile" />
							<label for="telephone">Telephone</label><input type="tel" id="telephone" name="telephone" />	
							<label for="email">E-mail</label><input type="email" id="email" name="email" />	
				</fieldset>
			</div>
<!---------------------- Permanent Address end ------------------>
<!---------------------- 10th Class start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - 10th Class</strong></p>
							<label for="edusys10">Education System</label><select name="edusys10" id="edusys10" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="fulltime">Full Time</option>
																			<option value="parttime">Part Time</option>
																			<option value="distanceeducation">Distance Education</option>
																	</select>
							<label for="yearofpassing10">Year of Passing</label><input type="text" id="yearofpassing10" name="yearofpassing10"/>
							<label for="examboard10">Exam Board</label><input type="text" id="examboard10" name="examboard10" />
							<label for="schoolname10">School Name</label><input type="text" id="schoolname10" name="schoolname10"/>
							<label for="subject10">Subject</label><input type="text" id="subject10" name="subject10">
							<label for="percentagemark10">% Mark Obtained</label><input type="text" id="percentagemark10" name="percentagemark10">
							<label for="division10">Division</label><input type="text" id="division10" name="division10">							
				</fieldset>
			</div>
<!---------------------- 10th Class end ------------------>
<!---------------------- 12th Class  start------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - 12th Class</strong></p>
							<label for="edusys12">Education System</label><select name="edusys12" id="edusys12" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="master">Full Time</option>
																			<option value="miss">Part Time</option>
																			<option value="miss">Distance Education</option>
																	</select>
							<label for="labelname">Year of Passing</label><input type="text" id=" " name="courseType"/>
							<label for="labelname">Exam Board</label><input type="text" id=" " name="courseName" />
							<label for="labelname">School Name</label><input type="text" id=" " name="yearOfAdmission"/>
							<label for="labelname">Subject</label><input type="text" id=" " name="date_time">
							<label for="labelname">% Mark Obtained</label><input type="text" id=" " name="date_time">
							<label for="labelname">Division</label><input type="text" id=" " name="date_time">							
				</fieldset>
			</div>
<!---------------------- 12th Class  end  ------------------>
<!---------------------- Diploma  start  ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - Diploma</strong></p>
							<label for="edusysdiploma">Education System</label><select name="edusysdiploma" id="edusysdiploma" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="master">Full Time</option>
																			<option value="miss">Part Time</option>
																			<option value="miss">Distance Education</option>
																	</select>
							<label for="labelname">Year of Passing</label><input type="text" id=" " name="courseType"/>
							<label for="labelname">Exam Board</label><input type="text" id=" " name="courseName" />
							<label for="labelname">School Name</label><input type="text" id=" " name="yearOfAdmission"/>
							<label for="labelname">Subject</label><input type="text" id=" " name="date_time">
							<label for="labelname">% Mark Obtained</label><input type="text" id=" " name="date_time">
							<label for="labelname">Division</label><input type="text" id=" " name="date_time">							
				</fieldset>
			</div>
<!---------------------- Diploma  end ------------------>
<!---------------------- Degree start  ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - Degree</strong></p>
							<label for="edusysdegree">Education System</label><select name="edusysdegree" id="edusysdegree" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="master">Full Time</option>
																			<option value="miss">Part Time</option>
																			<option value="miss">Distance Education</option>
																	</select>
							<label for="labelname">Year of Passing</label><input type="text" id=" " name="courseType"/>
							<label for="labelname">Exam Board</label><input type="text" id=" " name="courseName" />
							<label for="labelname">School Name</label><input type="text" id=" " name="yearOfAdmission"/>
							<label for="labelname">Subject</label><input type="text" id=" " name="date_time">
							<label for="labelname">% Mark Obtained</label><input type="text" id=" " name="date_time">
							<label for="labelname">Division</label><input type="text" id=" " name="date_time">							
				</fieldset>
			</div>
<!---------------------- Degree end  ------------------>
<!---------------------- Post Graduate  Start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Education Qualification - Post Graduate</strong></p>
							<label for="edusyspg">Education System</label><select name="edusyspg" id="edusyspg" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="master">Full Time</option>
																			<option value="miss">Part Time</option>
																			<option value="miss">Distance Education</option>
																	</select>
							<label for="labelname">Year of Passing</label><input type="text" id=" " name="courseType"/>
							<label for="labelname">Exam Board</label><input type="text" id=" " name="courseName" />
							<label for="labelname">School Name</label><input type="text" id=" " name="yearOfAdmission"/>
							<label for="labelname">Subject</label><input type="text" id=" " name="date_time">
							<label for="labelname">% Mark Obtained</label><input type="text" id=" " name="date_time">
							<label for="labelname">Division</label><input type="text" id=" " name="date_time">							
				</fieldset>
			</div>
<!---------------------- Post Graduate  end  ------------------>
<!---------------------- Upload Other documents start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Upload Documents</strong></p>
							<div class="file">
								<label class="labelname">1. Transfer Certificate</label>
								<input type="file" class="inputfile" id="tcfile" name="file"/>
								<button type="button" class="viewbutton" >View</button>
							</div>
							<div class="file">
								<label class="labelname">2. Domicile Certificate</label>
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