<?php
			try {
						$servername = getenv('IP');
		    $username = "allsky";
		    $password = "123";
		    $dbname = "allskydb";
		    $dbport = 3306;
			    $conn = new PDO("mysql:host=$servername;port=$dbport;dbname=$dbname", $username, $password);
			   $mysqli  = new mysqli($servername, $username, $password, $dbname,$dbport);
			    // set the PDO error mode to exception
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//attemp to collect and store form data in php variable
			$courseType = filter_input(INPUT_POST, "courseType");
			$courseName = filter_input(INPUT_POST, "courseName");
			$payment = filter_input(INPUT_POST, "payment");
			
			$amount = filter_input(INPUT_POST, "amount");
			$chequeno = filter_input(INPUT_POST, "chequeno");
			$issudeDate = filter_input(INPUT_POST, "issudeDate");
			$bankName = filter_input(INPUT_POST, "bankName");
			$bankBranch = filter_input(INPUT_POST, "bankBranch");
			echo "$courseType";
			$query = "INSERT INTO  `allskydb`.`admission_application` (`applicationid` ,`course_type` ,`year_of_addmission` ,`course_name` ,`date_of_application` ,`payment_mode` ,`amount` ,`issue_date` ,`bank_name` ,`branch_name`) VALUES (NULL ,  '',  '',  '', CURRENT_TIMESTAMP ,  '',  '', NULL , NULL ,NULL);";
			
		
			if(isset($courseType)){
				$courseType = mysqli_real_escape_string($mysqli,$courseType);
			}
			if(isset($courseName)){
				$courseName = mysqli_real_escape_string($mysqli,$courseName);
			}
			if(isset($payment)){
				$payment = mysqli_real_escape_string($mysqli,$payment);
			}
			
			if(isset($amount)){
				$amount = mysqli_real_escape_string($mysqli,$amount);
			}
			if(isset($chequeno)){
				$chequeno = mysqli_real_escape_string($mysqli,$chequeno);
			}
			if(isset($issudeDate)){
				$issudeDate = mysqli_real_escape_string($mysqli,$issudeDate);
			}	
	
			$title = filter_input(INPUT_POST, "title");
			$fname = filter_input(INPUT_POST, "fname");
			$mname = filter_input(INPUT_POST, "mname");
			$lname = filter_input(INPUT_POST, "lname");
			$fathername = filter_input(INPUT_POST, "fathername");
			$mothername = filter_input(INPUT_POST, "mothername");
			$dob = filter_input(INPUT_POST, "dob");
			$gender = filter_input(INPUT_POST, "gender");
			$blood = filter_input(INPUT_POST, "blood");
			$maritalstatus = filter_input(INPUT_POST, "maritalstatus");
			$spouse = filter_input(INPUT_POST, "spouse");
			$category = filter_input(INPUT_POST, "category");
			$religion = filter_input(INPUT_POST, "religion");
			$nationality = filter_input(INPUT_POST, "nationality");
			$disability = filter_input(INPUT_POST, "disability");
			if(isset($title)){
				$title = mysqli_real_escape_string($mysqli,$title);
			}
			

			if(isset($fname)){
				$fname = mysqli_real_escape_string($mysqli,$fname);
			}
			if(isset($mname)){
				$mname = mysqli_real_escape_string($mysqli,$mname);
			}
			if(isset($lname)){
				$lname = mysqli_real_escape_string($mysqli,$lname);
			}
			
			if(isset($fathername)){
				$fathername = mysqli_real_escape_string($mysqli,$fathername);
			}
			if(isset($mothername)){
				$mothername = mysqli_real_escape_string($mysqli,$mothername);
			}
			if(isset($dob)){
				$dob = mysqli_real_escape_string($mysqli,$dob);
			}			
			

			if(isset($blood)){
				$blood = mysqli_real_escape_string($mysqli,$blood);
			}
			
			if(isset($gender)){
				$gender = mysqli_real_escape_string($mysqli,$gender);
			}
			if(isset($maritalstatus)){
				$maritalstatus = mysqli_real_escape_string($mysqli,$maritalstatus);
			}
			if(isset($spouse)){
				$spouse = mysqli_real_escape_string($mysqli,$spouse);
			}
			if(isset($category)){
				$category = mysqli_real_escape_string($mysqli,$category);
			}
			
			if(isset($religion)){
				$religion = mysqli_real_escape_string($mysqli,$religion);
			}
			if(isset($nationality)){
				$nationality = mysqli_real_escape_string($mysqli,$nationality);
			}
			if(isset($disability)){
				$disability = mysqli_real_escape_string($mysqli,$disability);
			}				
			
			$query="INSERT INTO `student`(`studentid`, `applicationid`, `title`, `fname`, `mname`, `lname`, `father_name`, `mother_name`, `dob`, `gender`, `bloodgroup`, `maritalstatus`, `spouse_name`, `castcategory`, `religion`, `nationality`, `disability`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17])";
			
			$cline1 = filter_input(INPUT_POST, "cline1");
			$cline2 = filter_input(INPUT_POST, "cline2");
			$cline3 = filter_input(INPUT_POST, "cline3");
			$ccity = filter_input(INPUT_POST, "ccity");
			$cdistrict = filter_input(INPUT_POST, "cdistrict");
			$cstate = filter_input(INPUT_POST, "cstate");
			$cpin = filter_input(INPUT_POST, "cpin");
			$ccountry = filter_input(INPUT_POST, "ccountry");
			$cmobile = filter_input(INPUT_POST, "cmobile");
			$ctelephone = filter_input(INPUT_POST, "ctelephone");
			$cemail = filter_input(INPUT_POST, "cemail");
			if(isset($cline1)){
				$cline1 = mysqli_real_escape_string($mysqli,$cline1);
			}
			if(isset($cline2)){
				$cline2 = mysqli_real_escape_string($mysqli,$cline2);
			}
			if(isset($cline3)){
				$cline3 = mysqli_real_escape_string($mysqli,$cline3);
			}			
			
			if(isset($ccity)){
				$ccity = mysqli_real_escape_string($mysqli,$ccity);
			}
			
			if(isset($cdistrict)){
				$cdistrict = mysqli_real_escape_string($mysqli,$cdistrict);
			}
			if(isset($cstate)){
				$cstate = mysqli_real_escape_string($mysqli,$cstate);
			}
			if(isset($cpin)){
				$cpin = mysqli_real_escape_string($mysqli,$cpin);
			}
			if(isset($ccountry)){
				$ccountry = mysqli_real_escape_string($mysqli,$ccountry);
			}
			
			if(isset($cmobile)){
				$cmobile = mysqli_real_escape_string($mysqli,$cmobile);
			}
			if(isset($ctelephone)){
				$ctelephone = mysqli_real_escape_string($mysqli,$ctelephone);
			}
			if(isset($cemail)){
				$cemail = mysqli_real_escape_string($mysqli,$cemail);
			}	
			$query="INSERT INTO `student_address`(`studentid`, `address_type`, `address_line1`, `address_line2`, `address_line3`, `city`, `district`, `astate`, `pincode`, `country`, `mobileno`, `telephone`, `email`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13])";
	
			$line1 = filter_input(INPUT_POST, "line1");
			$line2 = filter_input(INPUT_POST, "line2");
			$line3 = filter_input(INPUT_POST, "line3");
			$city = filter_input(INPUT_POST, "city");
			$district = filter_input(INPUT_POST, "district");
			$state = filter_input(INPUT_POST, "state");
			$pin = filter_input(INPUT_POST, "pin");
			$country = filter_input(INPUT_POST, "country");
			$mobile = filter_input(INPUT_POST, "mobile");
			$telephone = filter_input(INPUT_POST, "telephone");
			$email = filter_input(INPUT_POST, "email");
			if(isset($line1)){
				$line1 = mysqli_real_escape_string($mysqli,$line1);
			}
			if(isset($line2)){
				$line2 = mysqli_real_escape_string($mysqli,$line2);
			}
			if(isset($line3)){
				$line3 = mysqli_real_escape_string($mysqli,$line3);
			}			
			
			if(isset($city)){
				$city = mysqli_real_escape_string($mysqli,$city);
			}
			
			if(isset($district)){
				$district = mysqli_real_escape_string($mysqli,$district);
			}
			if(isset($state)){
				$state = mysqli_real_escape_string($mysqli,$state);
			}
			if(isset($pin)){
				$pin = mysqli_real_escape_string($mysqli,$pin);
			}
			if(isset($country)){
				$country = mysqli_real_escape_string($mysqli,$country);
			}
			
			if(isset($mobile)){
				$mobile = mysqli_real_escape_string($mysqli,$mobile);
			}
			if(isset($telephone)){
				$telephone = mysqli_real_escape_string($mysqli,$telephone);
			}
			if(isset($email)){
				$email = mysqli_real_escape_string($mysqli,$email);
			}			
			$query="INSERT INTO `student_address`(`studentid`, `address_type`, `address_line1`, `address_line2`, `address_line3`, `city`, `district`, `astate`, `pincode`, `country`, `mobileno`, `telephone`, `email`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13])";
			
			//10th
			$edusys10 = filter_input(INPUT_POST, "edusys10");
			$yearofpassing10 = filter_input(INPUT_POST, "yearofpassing10");
			$examboard10 = filter_input(INPUT_POST, "examboard10");
			$schoolname10 = filter_input(INPUT_POST, "schoolname10");
			$subject10 = filter_input(INPUT_POST, "subject10");
			$percentagemark10 = filter_input(INPUT_POST, "percentagemark10");
			$division10 = filter_input(INPUT_POST, "division10");
			if(isset($edusys10)){
				$edusys10 = mysqli_real_escape_string($mysqli,$edusys10);
			}
			if(isset($yearofpassing10)){
				$yearofpassing10 = mysqli_real_escape_string($mysqli,$yearofpassing10);
			}
			if(isset($examboard10)){
				$examboard10 = mysqli_real_escape_string($mysqli,$examboard10);
			}
			if(isset($schoolname10)){
				$schoolname10 = mysqli_real_escape_string($mysqli,$schoolname10);
			}
			
			if(isset($subject10)){
				$subject10 = mysqli_real_escape_string($mysqli,$subject10);
			}
			if(isset($percentagemark10)){
				$percentagemark10 = mysqli_real_escape_string($mysqli,$percentagemark10);
			}
			if(isset($division10)){
				$division10 = mysqli_real_escape_string($mysqli,$division10);
			}			
			$query="INSERT INTO `student_qualification`(`studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, `school_name`, `subject`, `permanentmarks`, `division`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])";
			
			//12th
			$edusys12 = filter_input(INPUT_POST, "edusys12");
			$yearofpassing12 = filter_input(INPUT_POST, "yearofpassing12");
			$examboard12 = filter_input(INPUT_POST, "examboard12");
			$schoolname12 = filter_input(INPUT_POST, "schoolname12");
			$subject12 = filter_input(INPUT_POST, "subject12");
			$percentagemark12 = filter_input(INPUT_POST, "percentagemark12");
			$division12 = filter_input(INPUT_POST, "division12");
			if(isset($edusys12)){
				$edusys12 = mysqli_real_escape_string($mysqli,$edusys12);
			}
			if(isset($yearofpassing12)){
				$yearofpassing12 = mysqli_real_escape_string($mysqli,$yearofpassing12);
			}
			if(isset($examboard12)){
				$examboard12 = mysqli_real_escape_string($mysqli,$examboard12);
			}
			if(isset($schoolname12)){
				$schoolname12 = mysqli_real_escape_string($mysqli,$schoolname12);
			}
			
			if(isset($subject12)){
				$subject12 = mysqli_real_escape_string($mysqli,$subject12);
			}
			if(isset($percentagemark12)){
				$percentagemark12 = mysqli_real_escape_string($mysqli,$percentagemark12);
			}
			if(isset($division12)){
				$division12 = mysqli_real_escape_string($mysqli,$division12);
			}			
			$query="INSERT INTO `student_qualification`(`studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, `school_name`, `subject`, `permanentmarks`, `division`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])";
			
			//diploma
			$edusysdiploma = filter_input(INPUT_POST, "edusysdiploma");
			$yearofpassingdiploma = filter_input(INPUT_POST, "yearofpassingdiploma");
			$examboarddiploma = filter_input(INPUT_POST, "examboarddiploma");
			$schoolnamediploma = filter_input(INPUT_POST, "schoolnamediploma");
			$subjectdiploma = filter_input(INPUT_POST, "subjectdiploma");
			$percentagemarkdiploma = filter_input(INPUT_POST, "percentagemarkdiploma");
			$divisiondiploma = filter_input(INPUT_POST, "divisiondiploma");
			if(isset($edusysdiploma)){
				$edusysdiploma = mysqli_real_escape_string($mysqli,$edusysdiploma);
			}
			if(isset($yearofpassingdiploma)){
				$yearofpassingdiploma = mysqli_real_escape_string($mysqli,$yearofpassingdiploma);
			}
			if(isset($examboard12)){
				$examboard12 = mysqli_real_escape_string($mysqli,$examboard12);
			}
			if(isset($examboarddiploma)){
				$examboarddiploma = mysqli_real_escape_string($mysqli,$examboarddiploma);
			}
			
			if(isset($subjectdiploma)){
				$subjectdiploma = mysqli_real_escape_string($mysqli,$subjectdiploma);
			}
			if(isset($percentagemarkdiploma)){
				$percentagemarkdiploma = mysqli_real_escape_string($mysqli,$percentagemarkdiploma);
			}
			if(isset($divisiondiploma)){
				$divisiondiploma = mysqli_real_escape_string($mysqli,$divisiondiploma);
			}			
			$query="INSERT INTO `student_qualification`(`studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, `school_name`, `subject`, `permanentmarks`, `division`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])";
			
			//degree
			$edusysdegree = filter_input(INPUT_POST, "edusysdegree");
			$yearofpassingdegree = filter_input(INPUT_POST, "yearofpassingdegree");
			$examboarddegree = filter_input(INPUT_POST, "examboarddegree");
			$schoolnamedegree = filter_input(INPUT_POST, "schoolnamedegree");
			$subjectdegree = filter_input(INPUT_POST, "subjectdegree");
			$percentagemarkdegree = filter_input(INPUT_POST, "percentagemarkdegree");
			$divisiondegree = filter_input(INPUT_POST, "divisiondegree");
			if(isset($edusysdegree)){
				$edusysdegree = mysqli_real_escape_string($mysqli,$edusysdegree);
			}
			if(isset($yearofpassingdegree)){
				$yearofpassingdegree = mysqli_real_escape_string($mysqli,$yearofpassingdegree);
			}
			if(isset($examboarddegree)){
				$examboarddegree = mysqli_real_escape_string($mysqli,$examboarddegree);
			}
			if(isset($schoolnamedegree)){
				$schoolnamedegree = mysqli_real_escape_string($mysqli,$schoolnamedegree);
			}
			
			if(isset($subjectdegree)){
				$subjectdegree = mysqli_real_escape_string($mysqli,$subjectdegree);
			}
			if(isset($percentagemarkdegree)){
				$percentagemarkdegree = mysqli_real_escape_string($mysqli,$percentagemarkdegree);
			}
			if(isset($divisiondegree)){
				$divisiondegree = mysqli_real_escape_string($mysqli,$divisiondegree);
			}			
			$query="INSERT INTO `student_qualification`(`studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, `school_name`, `subject`, `permanentmarks`, `division`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])";
			
			//pg
			$edusyspg = filter_input(INPUT_POST, "edusyspg");
			$yearofpassingpg = filter_input(INPUT_POST, "yearofpassingpg");
			$examboardpg = filter_input(INPUT_POST, "examboardpg");
			$schoolnamepg = filter_input(INPUT_POST, "schoolnamepg");
			$subjectpg = filter_input(INPUT_POST, "subjectpg");
			$percentagemarkpg = filter_input(INPUT_POST, "percentagemarkpg");
			$divisionpg = filter_input(INPUT_POST, "divisionpg");
				if(isset($edusyspg)){
					$edusyspg = mysqli_real_escape_string($mysqli,$edusyspg);
				}
				if(isset($yearofpassingpg)){
					$yearofpassingpg = mysqli_real_escape_string($mysqli,$yearofpassingpg);
				}
				if(isset($examboardpg)){
					$examboardpg = mysqli_real_escape_string($mysqli,$examboardpg);
				}
				if(isset($schoolnamepg)){
					$schoolnamepg = mysqli_real_escape_string($mysqli,$schoolnamepg);
				}
				
				if(isset($subjectpg)){
					$subjectpg = mysqli_real_escape_string($mysqli,$subjectpg);
				}
				if(isset($percentagemarkpg)){
					$percentagemarkpg = mysqli_real_escape_string($mysqli,$percentagemarkpg);
				}
				if(isset($divisionpg)){
					$divisionpg = mysqli_real_escape_string($mysqli,$divisionpg);
				}
			$query="INSERT INTO `student_qualification`(`studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, `school_name`, `subject`, `permanentmarks`, `division`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])";
		
		

		    //application details
		    $issudeDate=("$issudeDate"=="")?"''":"STR_TO_DATE('$issudeDate', '%Y-%m-%d')";
		    $query = "INSERT INTO  `admission_application` (`course_type` ,`year_of_addmission` ,`course_name` ,`date_of_application` ,`payment_mode` ,`amount`, `checqueno` ,`issue_date` ,`bank_name` ,`branch_name`) 
		    VALUES ( '$courseType',  YEAR(CURDATE()) ,  '$courseName', CURRENT_TIMESTAMP ,  '$payment',  '$amount', '$chequeno', '$issudeDate','$bankName','$bankBranch')";
		    // use exec() because no results are returned
		    echo $query . "<br>";
		    $conn->exec($query);
		    $last_id = $conn->lastInsertId();
		    //student details 
		    $dob=("$dob"=="")?"''":"STR_TO_DATE('$dob', '%Y-%m-%d')";
		    $query="INSERT INTO `student`(`applicationid`, `title`, `fname`, `mname`, `lname`, `father_name`, `mother_name`, `dob`, `gender`
		    , `bloodgroup`, `maritalstatus`, `spouse_name`, `castcategory`, `religion`, `nationality`, `disability`) VALUES 
		    ($last_id,'$title','$fname','$mname','$lname','$fathername','$mothername',$dob,'$gender','$blood','$maritalstatus','$spouse','$category',
		    '$religion','$nationality','$disability')";
		    echo $query . "<br>";
		    $conn->exec($query);
		    $student_last_id = $conn->lastInsertId();
		    
		    //student address
		    
			//current
			$query="INSERT INTO `student_address`(`studentid`, `address_type`, `address_line1`, `address_line2`, `address_line3`, `city`, `district`, 
			`astate`, `pincode`, `country`, `mobileno`, `telephone`, `email`) VALUES 
			($student_last_id,'current','$cline1','$cline2','$cline3','$ccity','$cdistrict','$cstate','$cpin','$ccountry','$cmobile','$ctelephone','$cemail')";
			echo $query . "<br>";
			$conn->exec($query);
		    //permanent
		    $query="INSERT INTO `student_address`(`studentid`, `address_type`, `address_line1`, `address_line2`, `address_line3`, `city`, `district`, 
			`astate`, `pincode`, `country`, `mobileno`, `telephone`, `email`) VALUES 
			($student_last_id,'permanent','$line1','$line2','$line3','$city','$district','$state','$pin','$country','$mobile','$telephone','$email')";
			echo $query . "<br>";
			$conn->exec($query);
			
			//qualification_
			//10th

			$query="INSERT INTO `student_qualification`(`studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, 
			`school_name`, `subject`, `permanentmarks`, `division`) VALUES 
			($student_last_id,'10th','$edusys10','$yearofpassing10','$examboard10','$schoolname10','$subject10','$percentagemark10','$division10')";
			echo $query . "<br>";
			$conn->exec($query);

			//12th

			$query="INSERT INTO `student_qualification`(`studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, 
			`school_name`, `subject`, `permanentmarks`, `division`) VALUES 
			($student_last_id,'12th','$edusys12','$yearofpassing12','$examboard12','$schoolname12','$subject12','$percentagemark12','$division12')";
			echo $query . "<br>";
			$conn->exec($query);
			
			//diploma

			$query="INSERT INTO `student_qualification`(`studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, 
			`school_name`, `subject`, `permanentmarks`, `division`) VALUES 
			($student_last_id,'diploma','$edusysdiploma','$yearofpassingdiploma','$examboarddiploma','$schoolnamediploma','$subjectdiploma','$percentagemarkdiploma','$divisiondiploma')";
			echo $query . "<br>";
			$conn->exec($query);
			
			//degree
	
			$query="INSERT INTO `student_qualification`(`studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, 
			`school_name`, `subject`, `permanentmarks`, `division`) VALUES 
			($student_last_id,'degree','$edusysdegree','$yearofpassingdegree','$examboarddegree','$schoolnamedegree','$subjectdegree','$percentagemarkdegree','$divisiondegree')";
			echo $query . "<br>";
			$conn->exec($query);
			
			//pg
			
			
			$query="INSERT INTO `student_qualification`(`studentid`, `qualification_type`, `education_system`, `year_of_passing`, `exam_board`, 
			`school_name`, `subject`, `permanentmarks`, `division`) VALUES 
			($student_last_id,'pg','$edusyspg','$yearofpassingpg','$examboardpg','$schoolnamepg','$subjectpg','$percentagemarkpg','$divisionpg')";
			$conn->exec($query);

			
		    echo "New record created successfully. Last inserted ID is: " . $last_id;
		    header('location:admissionListTemp.php');
		    }
		catch(PDOException $e)
		    {
		    echo $sql . "<br>" . $e->getMessage();
		    //header('location:admissionFormTemp3.php');
		    }

		
		?>