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
	<link rel="stylesheet" type="text/css" href="admissionFormTemp.css"/>

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
			<div class="section1">
				<fieldset style="border:none">
						<p class="subsectionheading"><strong>Admission for Course</strong></p>
						<div class="subsubsection">
							<label class="labelname" for="applicationNumber">Application Number</label><input type="text" class="inputsetting" id="applicationNumber" name="applicatonNumber" disabled/>
							<label class="labelname" ">Course Type</label><input type="text" class="inputsetting" name="courseType"/>
							<label class="labelname">Course Name</label><input type="text" class="inputsetting" name="courseName" />
							<label class="labelname">Year of Admission</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
							<label class="labelname">Adminssion Date & Time</label><input type="text" class="inputsetting" name="date_time" disabled/>
						</div>
				</fieldset>
			</div>		
<!---------------------- Adminssion Course Details coding end ------------------>
<!---------------------- Adminssion Fee Details end ------------------>
			<div class="section1">
				<fieldset style="border:none">
						<p class="subsectionheading"><strong>Admission Fee Details</strong></p>
						<div class="subsubsection">
							<label class="labelname">Mode of Payment</label><select name="payment" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="cash">Cash</option>
																			<option value="draft">Draft</option>
																			<option value="cheque">Cheque</option>
																	</select>
							<label class="labelname">Amount</label><input type="text" class="inputsetting" name="courseType"/>
							<label class="labelname">Check/Draft Number</label><input type="text" class="inputsetting" name="courseName" />
							<label class="labelname">Issue Date</label><input type="date" class="inputsetting" name="yearOfAdmission"/>
							<label class="labelname">Bank Name</label><input type="text" class="inputsetting" name="date_time">
							<label class="labelname">Bank Branch</label><input type="text" class="inputsetting" name="date_time">							
						</div>
				</fieldset>
			</div>
<!---------------------- Adminssion Fee Details end ------------------>
<!---------------------- Student personal information start ------------------>

			<div id="section2">
				<fieldset style="border:none">
						<p class="subsectionheading"><strong>Personal Information</strong></p>
						<div class="subsubsection">
<!--							<label class="labelname">Title</label><input type="text" class="inputsetting" name="applicatonNumber" />  -->
							<label class="labelname">Title</label><select name="Title" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="master">Master</option>
																			<option value="miss">Miss</option>
																			<option value="mr">Mr.</option>
																			<option value="caramel">Caramel</option>
																			<option value="dr">Dr.</option>
																	</select>
							<label class="labelname">First Number</label><input type="text" class="inputsetting" name="applicatonNumber" />
							<label class="labelname">Middle Name</label><input type="text" class="inputsetting" name="courseType"/>
							<label class="labelname">Last Name</label><input type="text" class="inputsetting" name="courseName" />
							<label class="labelname">Date of Birth</label><input type="date" class="inputsetting" name="age" />
							<label class="labelname">Age</label><input type="text" class="inputsetting" name="courseName" disabled/>
							<label class="labelname">Father's Name</label><input type="text" class="inputsetting" name="courseType"/>
							<label class="labelname">Mother's Name</label><input type="text" class="inputsetting" name="courseName" />							
							<label class="labelname">Gender</label><select name="gender" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="master">Male</option>
																			<option value="miss">Female</option>
																			<option value="dr">Other</option>
																	</select>
							<label class="labelname">Marital Status</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
							<label class="labelname">Spouse(Name)</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
							<label class="labelname">Disability(if any)</label><select name="gender" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="master">Yes</option>
																			<option value="miss">No</option>
																	</select>
							<label class="labelname">Category</label><select name="category" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="master">General</option>
																			<option value="miss">OBC</option>
																			<option value="mr">SC</option>
																			<option value="caramel">ST</option>
																			<option value="dr">Other</option>
																	</select>
							<label class="labelname">Religion</label><select name="religion" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="master">Hindu</option>
																			<option value="miss">Muslims</option>
																			<option value="mr">Christians</option>
																			<option value="caramel">Sikhs</option>
																			<option value="caramel">Jain</option>
																			<option value="caramel">Non Religion</option>
																			<option value="dr">Other</option>
																	</select>
							<label class="labelname">Blood Group</label><select name="blood" required>
																			<option disabled="" selected="">Select Option</option>
																			<option value="master">AB+</option>
																			<option value="miss">AB-</option>
																			<option value="mr">A+</option>
																			<option value="caramel">A-</option>
																			<option value="caramel">B+</option>
																			<option value="caramel">B-</option>
																			<option value="caramel">O+</option>
																			<option value="caramel">O-</option>
																			<option value="dr">Not Known</option>
																	</select>	
							<label class="labelname">Nationality</label><input type="text" class="inputsetting" name="age" />	
						</div>
				</fieldset>
			</div>

<!---------------------- Student personal information end ------------------>
<!---------------------- Student photo upload start  ------------------>
			<div id=section3>
				<fieldset style="border:none">
					<div class="dropzone" id="dropzone">Drop Photo to upload</div>
					<p> Student's Photo</p>
				</fieldset>
			</div>

<!---------------------- Student photo upload end ------------------>
	<!---------------------- Student Corresponding Address start ------------------>
				<div class="section1" id="block">
					<fieldset style="border:none">
							<p class="subsectionheading"><strong>Corresponding Address</strong></p>
							<div class="subsubsection">
								<label class="labelname">Address Line 1</label><input type="text" class="inputsetting" name="applicatonNumber" />
								<label class="labelname">Address Line 2</label><input type="text" class="inputsetting" name="applicatonNumber" />
								<label class="labelname">Address Line 3</label><input type="text" class="inputsetting" name="courseType"/>
								<label class="labelname">City</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
								<label class="labelname">District</label><input type="text" class="inputsetting" name="age" />
								<label class="labelname">PIN Code</label><input type="text" class="inputsetting" name="courseName" disabled/>
								<label class="labelname">State</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
								<label class="labelname">Country</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
								<label class="labelname">Mobile Number</label><input type="tel" class="inputsetting" name="age" />
								<label class="labelname">Telephone</label><input type="tel" class="inputsetting" name="age" />	
								<label class="labelname">Primary Email Address</label><input type="email" class="inputsetting" name="age" />	
								<label class="labelname">Secondary Email Address</label><input type="email" class="inputsetting" name="age" />								
							</div>
					</fieldset>
				</div>
	<!---------------------- Student Corresponding Address end ------------------>
<!---------------------- Student Permanent Address start ------------------>
			<div class="section1">
				<fieldset style="border:none">
						<p class="subsectionheading"><strong>Permanent Address</strong></p>
						<div class="subsubsection">
							<label class="labelname">Address Line 1</label><input type="text" class="inputsetting" name="applicatonNumber" />
							<label class="labelname">Address Line 2</label><input type="text" class="inputsetting" name="applicatonNumber" />
							<label class="labelname">Address Line 3</label><input type="text" class="inputsetting" name="courseType"/>
							<label class="labelname">City</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
							<label class="labelname">District</label><input type="text" class="inputsetting" name="age" />
							<label class="labelname">PIN Code</label><input type="text" class="inputsetting" name="courseName" disabled/>
							<label class="labelname">State</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
							<label class="labelname">Country</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
							<label class="labelname">Telephone</label><input type="tel" class="inputsetting" name="age" />	
						</div>
				</fieldset>
			</div>
<!---------------------- Student Permanent Address end ------------------>
<!---------------------- Education Qualification start ------------------>

<!---------------------- 10th Class start ------------------>
			<div class="section1">
				<fieldset style="border:none">
						<p class="subsectionheading"><strong>Education Qualification - 10th Class</strong></p>
						<div class="subsubsection">
							<label class="labelname">Regular</label><input type="text" class="inputsetting" name="applicatonNumber" />
							<label class="labelname">Year of Passing</label><input type="text" class="inputsetting" name="courseType"/>
							<label class="labelname">Exam Board</label><input type="text" class="inputsetting" name="courseName" />
							<label class="labelname">School Name</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
							<label class="labelname">Subject</label><input type="text" class="inputsetting" name="date_time">
							<label class="labelname">% Mark Obtained</label><input type="text" class="inputsetting" name="date_time">
							<label class="labelname">Division</label><input type="text" class="inputsetting" name="date_time">							
						</div>
				</fieldset>
			</div>
<!---------------------- 10th Class end ------------------>
<!---------------------- 12th Class  start------------------>
			<div class="section1">
				<fieldset style="border:none">
						<p class="subsectionheading"><strong>Education Qualification - 12th Class</strong></p>
						<div class="subsubsection">
							<label class="labelname">Regular</label><input type="text" class="inputsetting" name="applicatonNumber" />
							<label class="labelname">Year of Passing</label><input type="text" class="inputsetting" name="courseType"/>
							<label class="labelname">Exam Board</label><input type="text" class="inputsetting" name="courseName" />
							<label class="labelname">School Name</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
							<label class="labelname">Subject</label><input type="text" class="inputsetting" name="date_time">
							<label class="labelname">% Mark Obtained</label><input type="text" class="inputsetting" name="date_time">
							<label class="labelname">Division</label><input type="text" class="inputsetting" name="date_time">							
						</div>
				</fieldset>
			</div>
<!---------------------- 12th Class  end  ------------------>
<!---------------------- Diploma  start  ------------------>
			<div class="section1">
				<fieldset style="border:none">
						<p class="subsectionheading"><strong>Education Qualification - Diploma</strong></p>
						<div class="subsubsection">
							<label class="labelname">Regular</label><input type="text" class="inputsetting" name="applicatonNumber" />
							<label class="labelname">Year of Passing</label><input type="text" class="inputsetting" name="courseType"/>
							<label class="labelname">Exam Board</label><input type="text" class="inputsetting" name="courseName" />
							<label class="labelname">School Name</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
							<label class="labelname">Subject</label><input type="text" class="inputsetting" name="date_time">
							<label class="labelname">% Mark Obtained</label><input type="text" class="inputsetting" name="date_time">
							<label class="labelname">Division</label><input type="text" class="inputsetting" name="date_time">							
						</div>
				</fieldset>
			</div>
<!---------------------- Diploma  end ------------------>
<!---------------------- Degree start  ------------------>
			<div class="section1">
				<fieldset style="border:none">
						<p class="subsectionheading"><strong>Education Qualification - Degree</strong></p>
						<div class="subsubsection">
							<label class="labelname">Regular</label><input type="text" class="inputsetting" name="applicatonNumber" />
							<label class="labelname">Year of Passing</label><input type="text" class="inputsetting" name="courseType"/>
							<label class="labelname">Exam Board</label><input type="text" class="inputsetting" name="courseName" />
							<label class="labelname">School Name</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
							<label class="labelname">Subject</label><input type="text" class="inputsetting" name="date_time">
							<label class="labelname">% Mark Obtained</label><input type="text" class="inputsetting" name="date_time">
							<label class="labelname">Division</label><input type="text" class="inputsetting" name="date_time">							
						</div>
				</fieldset>
			</div>
<!---------------------- Degree end  ------------------>
<!---------------------- Post Graduate  Start ------------------>
			<div class="section1">
				<fieldset style="border:none">
						<p class="subsectionheading"><strong>Education Qualification - Post Graduate</strong></p>
						<div class="subsubsection">
							<label class="labelname">Regular</label><input type="text" class="inputsetting" name="applicatonNumber" />
							<label class="labelname">Year of Passing</label><input type="text" class="inputsetting" name="courseType"/>
							<label class="labelname">Exam Board</label><input type="text" class="inputsetting" name="courseName" />
							<label class="labelname">School Name</label><input type="text" class="inputsetting" name="yearOfAdmission"/>
							<label class="labelname">Subject</label><input type="text" class="inputsetting" name="date_time">
							<label class="labelname">% Mark Obtained</label><input type="text" class="inputsetting" name="date_time">
							<label class="labelname">Division</label><input type="text" class="inputsetting" name="date_time">							
						</div>
				</fieldset>
			</div>
<!---------------------- Post Graduate  end  ------------------>
<!---------------------- Accomodation & Transport ------------------>
			<div class="section1">
				<fieldset style="border:none">
						<p class="subsectionheading"><strong>Accomodation & Transport</strong></p>
						<div class="subsubsection">
							<input type="checkbox" name="vehicle1" value="Bike"> Hostel Facility
							<input type="checkbox" name="vehicle2" value="Car"> Transport 					
						</div>
				</fieldset>
			</div>

<!---------------------- Upload Other documents start ------------------>
			<div class="section1">
				<fieldset style="border:none">
						<p class="subsectionheading"><strong>Upload Documents</strong></p>
						<div class="subsubsection">
							<label class="labelname">Transfer Certificate</label><input type="text" class="inputsetting" name="applicatonNumber" /></br>
							<label class="labelname">Birth Certificate</label><input type="text" class="inputsetting" name="courseType"/></br>
							<label class="labelname">Domicile Certificate</label><input type="text" class="inputsetting" name="courseName" /></br>
							<label class="labelname">Address Proof</label><input type="text" class="inputsetting" name="yearOfAdmission"/></br>
							<label class="labelname">Bank Name</label><input type="text" class="inputsetting" name="date_time"></br>
							<label class="labelname">Bank Branch</label><input type="text" class="inputsetting" name="date_time">							
						</div>
				</fieldset>
			</div>
<!---------------------- Upload Other documents  end ------------------>
			<div id="button">
				<input class="mybutton" type="submit" value="Back"/>
				<input class="mybutton" type="submit" value="Edit"/>
				<input class="mybutton" type="submit" value="Save"/>
			</div>	
<!---------------------  Main body end here ------------------------>
		</fieldset>
		</form>
	</div>
</body>
</html>