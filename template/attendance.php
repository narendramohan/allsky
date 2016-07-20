<!DOCTYPE HTML>
<html lang="en">
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="author" content="allsky" />
	<title>Attendance Form</title>
	<link rel="stylesheet" type="text/css" href="attendance.css"/>
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
		<form  action="" method="post" onsubmit="return checkforblank()">
		<fieldset style="border:none">
		
<!---------------------- three btttons coding starts ------------------>
			<div id="button">
	<!---			<input class="mybutton" type="submit" value="Back"/>  -->
	<!---			<input class="mybutton" type="submit" value="Edit"/>	-->
				<input class="mybutton" type="submit" value="Save"/>
			</div>	
		</fieldset>
<!---------------------- three btttons coding end ------------------>
			
<!---------------------- Attendance for Academic Year Selection  start ------------------>
			<div class="section">
				<fieldset style="border:none">
						<p class="sectionheading"><strong>Class Wise Attendance</strong></p>
							<div><label for="academicyear">Academic Year</label><input type="text" id="academicyear" name="academicyear" value="<?php echo date("Y"); ?>" disabled/></div>
							<div><label for="course">Course</label><input type="text" id="course" name="course"/></div>
							<div><label for="semester">Semester</label><input type="text" id="semester" name="semester"/></div>
							<div><label for="section">Section</label><input type="text" id="section" name="section"/></div>
							<div><label for="subject">Subject</label><input type="text" id="subject" name="subject"/></div>

				</fieldset>
			</div>	
<!---------------------- Attendance for Academic Year Selection  end ------------------>	
<!---------------------- Attendance Month wise   start ------------------>			
			<div class="section">
				<fieldset style="border:none">
						<div> 						
							<p class="monthname"<strong>Jan</strong></p>
							<p class="monthname"<strong>Feb</strong></p>
							<p class="monthname"<strong>Mar</strong></p>
							<p class="monthname"<strong>Apr</strong></p>
							<p class="monthname"<strong>May</strong></p>
							<p class="monthname"<strong>Jun</strong></p>
							<p class="monthname"<strong>Jul</strong></p>
							<p class="monthname"<strong>Aug</strong></p>
							<p class="monthname"<strong>Sep</strong></p>
							<p class="monthname"<strong>Oct</strong></p>
							<p class="monthname"<strong>Nov</strong></p>
							<p class="monthname"<strong>Dec</strong></p>
						</div>
						<div>
							<table border="1">
								<tr>
									<th>Student Name</th>
									<th>Roll No.</th>
									<th>01</th>
									<th>02</th>
									<th>03</th>
									<th>04</th>
									<th>05</th>
									<th>06</th>
									<th>07</th>
									<th>08</th>
									<th>09</th>
									<th>10</th>
									<th>11</th>
									<th>12</th>
									<th>13</th>
									<th>14</th>
									<th>15</th>
									<th>16</th>
									<th>17</th>
									<th>18</th>
									<th>19</th>
									<th>20</th>
									<th>21</th>
									<th>22</th>
									<th>23</th>
									<th>24</th>
									<th>25</th>
									<th>26</th>
									<th>27</th>
									<th>28</th>
									<th>29</th>
									<th>30</th>
									<th>31</th>
								</tr>
								<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
								<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
																<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
																<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
																<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
																<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
																<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
																<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
																<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
																<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
																<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
																<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
																<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
								<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
								<tr>
									<td size="13" class="stdname" >Ram Shyam</td>
									<td align="center"> 0</td>
									<td align="center"><input type="checkbox" class="check" name="d01"/></td>
									<td align="center"><input type="checkbox" class="check" name="d02"/></td>
									<td align="center"><input type="checkbox" class="check" name="d03"/></td>
									<td align="center"><input type="checkbox" class="check" name="d04"/></td>
									<td align="center"><input type="checkbox" class="check" name="d05"/></td>
									<td align="center"><input type="checkbox" class="check" name="d06"/></td>
									<td align="center"><input type="checkbox" class="check" name="d07"/></td>
									<td align="center"><input type="checkbox" class="check" name="d08"/></td>
									<td align="center"><input type="checkbox" class="check" name="d09"/></td>
									<td align="center"><input type="checkbox" class="check" name="d10"/></td>
									<td align="center"><input type="checkbox" class="check" name="d11"/></td>
									<td align="center"><input type="checkbox" class="check" name="d12"/></td>
									<td align="center"><input type="checkbox" class="check" name="d13"/></td>
									<td align="center"><input type="checkbox" class="check" name="d14"/></td>
									<td align="center"><input type="checkbox" class="check" name="d15"/></td>
									<td align="center"><input type="checkbox" class="check" name="d16"/></td>
									<td align="center"><input type="checkbox" class="check" name="d17"/></td>
									<td align="center"><input type="checkbox" class="check" name="d18"/></td>
									<td align="center"><input type="checkbox" class="check" name="d19"/></td>
									<td align="center"><input type="checkbox" class="check" name="d20"/></td>
									<td align="center"><input type="checkbox" class="check" name="d21"/></td>
									<td align="center"><input type="checkbox" class="check" name="d22"/></td>
									<td align="center"><input type="checkbox" class="check" name="d23"/></td>
									<td align="center"><input type="checkbox" class="check" name="d24"/></td>
									<td align="center"><input type="checkbox" class="check" name="d25"/></td>
									<td align="center"><input type="checkbox" class="check" name="d26"/></td>
									<td align="center"><input type="checkbox" class="check" name="d27"/></td>
									<td align="center"><input type="checkbox" class="check" name="d28"/></td>
									<td align="center"><input type="checkbox" class="check" name="d29"/></td>
									<td align="center"><input type="checkbox" class="check" name="d30"/></td>
									<td align="center"><input type="checkbox" class="check" name="d31"/></td>
								</tr>
							</table>
						</div>
				</fieldset>
			</div>
		</form>
	</div>
<!---------------------- Attendance fMonth wise  end ------------------>	
</body>
</html>