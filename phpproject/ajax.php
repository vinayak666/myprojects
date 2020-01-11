<?php
include("conn.php");

if(isset($_REQUEST['sub']) and isset($_REQUEST['usn']) and isset($_REQUEST['name']) and isset($_REQUEST['proc']) and isset($_REQUEST['semt'])) 
{
	$sub1= "NULL";
	$sub2= "NULL";
	$sub3= "NULL";
	$sub4= "NULL";
	$sub5= "NULL";
	$sub6= "NULL";

	$data = $_REQUEST['sub'];
	$count = 0;
	$subarry = explode(",", $data);
	$usn= $_REQUEST['usn'];
	$name=$_REQUEST['name'];
	$proc = $_REQUEST['proc'];
	$semt = $_REQUEST['semt'];

	for($i = 0; $i < count($subarry); $i++)
	{
		$count += 1;
	}
	if($count > 6)
	{
		echo "Only 6 Subjects Allowed to Choose";
		exit;
	}
	else
	{
		if($count == 1)
		{
			$sub1 = $subarry[0];
			$sub1 = "NULL";
			$sub2 = "NULL";
			$sub3 = "NULL";
			$sub4 = "NULL";
			$sub5 = "NULL";
			$sub6 = "NULL";
		}
		elseif($count == 2)
		{
			$sub1 = $subarry[0];
			$sub1 =  $subarry[1];
			$sub2 = "NULL";
			$sub3 = "NULL";
			$sub4 = "NULL";
			$sub5 = "NULL";
			$sub6 = "NULL";
		}

		elseif($count==3){
			$sub1 = $subarry[0];
			$sub1 =  $subarry[1];
			$sub2 = $subarry[2];
			$sub3 = "NULL";
			$sub4 = "NULL";
			$sub5 = "NULL";
			$sub6 = "NULL";
		}

		elseif($count==4){
			$sub1 =  $subarry[0];
			$sub2 = $subarry[1];
			$sub3 = $subarry[2];
			$sub4 = $subarry[3];
			$sub5 = "NULL";
			$sub6 = "NULL";
		}
		
		elseif ($count==5) {
		$sub1 = $subarry[0];
		$sub2 = $subarry[1];
		$sub3 = $subarry[2];
		$sub4 = $subarry[3];
		$sub5 =  $subarry[4];
		$sub6 = "NULL";
			
		}
		else
		{
		$sub1 = $subarry[0];
		$sub2 = $subarry[1];
		$sub3 = $subarry[2];
		$sub4 = $subarry[3];
		$sub5 = $subarry[4];
		$sub6 = $subarry[5];
		}
		$sql = "INSERT INTO student(usn,name,semester,proctor,sub1,sub2,sub3,sub4,sub5,sub6) VALUES('$usn','$name','$semt','$proc','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6')";
		if($conn->query($sql) === TRUE)
		{
			echo "REGISTERED SUCCESSFULLY";
		}
		else
		{
			echo "FAILED TO REGISTER";
			echo mysqli_error($conn);
		}
	}
	// for($i = 0; $i<count($subarry); $i++)
	// {
	// 	echo "Subject " . $i . ": " . $subarry[$i];
	// }
}


elseif(isset($_REQUEST['usn']))
{
	$usn = $_REQUEST['usn'];

	$result = $conn->query("SELECT * FROM student WHERE usn = '$usn' ");
		if($result -> num_rows > 0)
		{
			echo "<table><th>USN</th><th>NAME</th><th>PROCTOR</th><th>SUBJECT 1</th><th>SUBJECT 2</th><th>SUBJECT 3</th><th>SUBJECT 4</th><th>SUBJECT 5</th><th>SUBJECT 6</th>";
			while($row = $result->fetch_assoc())
			{
				echo"		<tr>
							<td><input type='text' id='name' value=".$row['name']." readonly></td>
							<td><input type='text' id='sem' value=".$row['semester']." readonly></td>
							<td><input type='text' id='proc' value=".$row['proctor']." readonly></td>
							<td><input type='text' id='sub1' value=".$row['sub1']." readonly></td>
							<td><input type='text' id='sub2' value=".$row['sub2']." readonly></td>
							<td><input type='text' id='sub3' value=".$row['sub3']." readonly></td>
							<td><input type='text' id='sub4' value=".$row['sub4']." readonly></td>
							<td><input type='text' id='sub5' value=".$row['sub5']." readonly></td>
							<td><input type='text' id='sub6' value=".$row['sub6']." readonly></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='checkbox' id='1' value=".$row['sub1']."></td>
							<td><input type='checkbox' id='2' value=".$row['sub2']."></td>
							<td><input type='checkbox' id='3' value=".$row['sub3']."></td>
							<td><input type='checkbox' id='4' value=".$row['sub4']."></td>
							<td><input type='checkbox' id='5' value=".$row['sub5']."></td>
							<td><input type='checkbox' id='6' value=".$row['sub6']."></td>
						</tr>
						<tr>
							<td colspan='3'><button onclick='update()'>SUBMIT</button></td>
						</tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "<h1>NO DATA FOUND !</h1>";
		}	
}




elseif(isset($_REQUEST['usn1']) and isset($_REQUEST['name1']) and isset($_REQUEST['sem1']) and isset($_REQUEST['proc1']) and isset($_REQUEST['selected']) and isset($_REQUEST['count']))
{
	$usn = $_REQUEST['usn1'];
	$name =$_REQUEST['name1'];
	$sem = $_REQUEST['sem1'];
	$proc = $_REQUEST['proc1'];
	$selected = $_REQUEST['selected'];
	$count = $_REQUEST['count'];
	$i = 0;
	$j = 1;
	session_start();
	$select = explode(",", $selected);
	// echo $count;
	// print_r($select);

	// while($count == 0)
	// {
	// 	if($select[$i] == '')
	// 	{
	// 		$_SESSION['$j'] = $select[$i];
	// 	}
	// 	$count -= 1;
	// 	$i += 1;
	// }
	if($count == 1)
	{
		$_SESSION['sub1'] = $select[1];
		$_SESSION['count'] = 1;
	}
	elseif($count == 2)
	{
		$_SESSION['sub1'] = $select[1];
		$_SESSION['sub2'] = $select[2];
		$_SESSION['count'] = 2;
	}
	elseif($count == 3)
	{
		$_SESSION['sub1'] = $select[1];
		$_SESSION['sub2'] = $select[2];
		$_SESSION['sub3'] = $select[3];
		$_SESSION['count'] = 3;
	}
	elseif($count == 4)
	{
		$_SESSION['sub1'] = $select[1];
		$_SESSION['sub2'] = $select[2];
		$_SESSION['sub3'] = $select[3];
		$_SESSION['sub4'] = $select[4];
		$_SESSION['count'] = 4;
	}
	elseif($count == 5)
	{
		$_SESSION['sub1'] = $select[1];
		$_SESSION['sub2'] = $select[2];
		$_SESSION['sub3'] = $select[3];
		$_SESSION['sub4'] = $select[4];
		$_SESSION['sub5'] = $select[5];
		$_SESSION['count'] = 5;
	}
	elseif($count == 6)
	{
		$_SESSION['sub1'] = $select[1];
		$_SESSION['sub2'] = $select[2];
		$_SESSION['sub3'] = $select[3];
		$_SESSION['sub4'] = $select[4];
		$_SESSION['sub5'] = $select[5];
		$_SESSION['sub6'] = $select[6];
		$_SESSION['count'] = 6;
	}

	echo "1";
}


?>