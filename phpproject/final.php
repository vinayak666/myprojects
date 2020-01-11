<?php
	include("conn.php");
	session_start();
?>

<html>
<head>
	<title>Final Page</title>
</head>
<body>
<h1 align="center">REGISTRATION FORM</h1>
<p>semester:</p>
<p>term:<input type="text" name="term"></p>
<p>nature of the semester:regular/re-registration/supplementary:</p>


<p>name of the student:</p>


<p>usn:</p>s
<!-- 	<table border="1" > -->
	<?php
		$count = $_SESSION['count'];
		$i = 1;

		if($count == 1)
		{
			$sub1 = $_SESSION['sub1'];
			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub1' ");
			if($result -> num_rows > 0)
			{
				echo "<table><th>SL NO</th><th>SUBJECT CODE</th><th>SUBJECT NAME</th><th>CREDITS</th>";
				while($row = $result->fetch_assoc())
				{
					$title = $row['subname'];
					$credit = $row['credits'];

					echo "<tr>
							<td>".$i."</td>
							<td>".$sub1."</td>
							<td>".$title."</td>
							<td>".$credit."</td>
						</tr>";
					$i += 1;
				}
				echo "</table>";
			}
		}
		elseif($count == 2)
		{
			$sub1 = $_SESSION['sub1'];
			$sub2 = $_SESSION['sub2'];

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub1' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title = $row['subname'];
					$credit = $row['credits'];
				}
			}
			
			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub2' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title1 = $row['subname'];
					$credit1 = $row['credits'];
				}
			}

			echo "<table ><th>SL NO</th><th>SUBJECT CODE</th><th>SUBJECT NAME</th><th>CREDITS</th>
					<tr>
						<td>1</td>
						<td>".$sub1."</td>
						<td>".$title."</td>
						<td>".$credit."</td>
					</tr>
					<tr>
						<td>2</td>
						<td>".$sub2."</td>
						<td>".$title1."</td>
						<td>".$credit1."</td>
					</tr>
				</table>";
		}
		elseif($count == 3)
		{
			$sub1 = $_SESSION['sub1'];
			$sub2 = $_SESSION['sub2'];
			$sub3 = $_SESSION['sub3'];

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub1' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title = $row['subname'];
					$credit = $row['credits'];
				}
			}
			
			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub2' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title1 = $row['subname'];
					$credit1 = $row['credits'];
				}
			}

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub3' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title2 = $row['subname'];
					$credit2 = $row['credits'];
				}
			}
			echo "<table><th>SL NO</th><th>SUBJECT CODE</th><th>SUBJECT NAME</th><th>CREDITS</th>
					<tr>
						<td>1</td>
						<td>".$sub1."</td>
						<td>".$title."</td>
						<td>".$credit."</td>
					</tr>
					<tr>
						<td>2</td>
						<td>".$sub2."</td>
						<td>".$title1."</td>
						<td>".$credit1."</td>
					</tr>
					<tr>
						<td>3</td>
						<td>".$sub3."</td>
						<td>".$title2."</td>
						<td>".$credit2."</td>
					</tr>
				</table>";
		}
		elseif($count == 4)
		{
			$sub1 = $_SESSION['sub1'];
			$sub2 = $_SESSION['sub2'];
			$sub3 = $_SESSION['sub3'];
			$sub4 = $_SESSION['sub4'];

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub1' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title = $row['subname'];
					$credit = $row['credits'];
				}
			}
			
			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub2' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title1 = $row['subname'];
					$credit1 = $row['credits'];
				}
			}

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub3' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title2 = $row['subname'];
					$credit2 = $row['credits'];
				}
			}

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub4' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title3 = $row['subname'];
					$credit3 = $row['credits'];
				}
			}

			echo "<table><th>SL NO</th><th>SUBJECT CODE</th><th>SUBJECT NAME</th><th>CREDITS</th>
					<tr>
						<td>1</td>
						<td>".$sub1."</td>
						<td>".$title."</td>
						<td>".$credit."</td>
					</tr>
					<tr>
						<td>2</td>
						<td>".$sub2."</td>
						<td>".$title1."</td>
						<td>".$credit1."</td>
					</tr>
					<tr>
						<td>3</td>
						<td>".$sub3."</td>
						<td>".$title2."</td>
						<td>".$credit2."</td>
					</tr>
					<tr>
						<td>4</td>
						<td>".$sub4."</td>
						<td>".$title3."</td>
						<td>".$credit3."</td>
					</tr>
				</table>";
		}
		elseif($count == 5)
		{
			$sub1 = $_SESSION['sub1'];
			$sub2 = $_SESSION['sub2'];
			$sub3 = $_SESSION['sub3'];
			$sub4 = $_SESSION['sub4'];
			$sub5 = $_SESSION['sub5'];

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub1' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title = $row['subname'];
					$credit = $row['credits'];
				}
			}
			
			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub2' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title1 = $row['subname'];
					$credit1 = $row['credits'];
				}
			}

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub3' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title2 = $row['subname'];
					$credit2 = $row['credits'];
				}
			}

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub4' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title3 = $row['subname'];
					$credit3 = $row['credits'];
				}
			}

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub5' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title4 = $row['subname'];
					$credit4 = $row['credits'];
				}
			}

			echo "<table><th>SL NO</th><th>SUBJECT CODE</th><th>SUBJECT NAME</th><th>CREDITS</th>
					<tr>
						<td>1</td>
						<td>".$sub1."</td>
						<td>".$title."</td>
						<td>".$credit."</td>
					</tr>
					<tr>
						<td>2</td>
						<td>".$sub2."</td>
						<td>".$title1."</td>
						<td>".$credit1."</td>
					</tr>
					<tr>
						<td>3</td>
						<td>".$sub3."</td>
						<td>".$title2."</td>
						<td>".$credit2."</td>
					</tr>
					<tr>
						<td>4</td>
						<td>".$sub4."</td>
						<td>".$title3."</td>
						<td>".$credit3."</td>
					</tr>
					<tr>
						<td>5</td>
						<td>".$sub5."</td>
						<td>".$title4."</td>
						<td>".$credit4."</td>
					</tr>
				</table>";
		}
		elseif($count == 6)
		{
			$sub1 = $_SESSION['sub1'];
			$sub2 = $_SESSION['sub2'];
			$sub3 = $_SESSION['sub3'];
			$sub4 = $_SESSION['sub4'];
			$sub5 = $_SESSION['sub5'];
			$sub6 = $_SESSION['sub6'];

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub1' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title = $row['subname'];
					$credit = $row['credits'];
				}
			}
			
			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub2' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title1 = $row['subname'];
					$credit1 = $row['credits'];
				}
			}

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub3' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title2 = $row['subname'];
					$credit2 = $row['credits'];
				}
			}

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub4' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title3 = $row['subname'];
					$credit3 = $row['credits'];
				}
			}

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub5' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title4 = $row['subname'];
					$credit4 = $row['credits'];
				}
			}

			$result = $conn->query("SELECT * FROM subjects WHERE subcode = '$sub6' ");
			if($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$title5 = $row['subname'];
					$credit5 = $row['credits'];
				}
			}

			echo "<table><th>SL NO</th><th>SUBJECT CODE</th><th>SUBJECT NAME</th><th>CREDITS</th>
					<tr>
						<td>1</td>
						<td>".$sub1."</td>
						<td>".$title."</td>
						<td>".$credit."</td>
					</tr>
					<tr>
						<td>2</td>
						<td>".$sub2."</td>
						<td>".$title1."</td>
						<td>".$credit1."</td>
					</tr>
					<tr>
						<td>3</td>
						<td>".$sub3."</td>
						<td>".$title2."</td>
						<td>".$credit2."</td>
					</tr>
					<tr>
						<td>4</td>
						<td>".$sub4."</td>
						<td>".$title3."</td>
						<td>".$credit3."</td>
					</tr>
					<tr>
						<td>5</td>
						<td>".$sub5."</td>
						<td>".$title4."</td>
						<td>".$credit4."</td>
					</tr>
					<tr>
						<td>5</td>
						<td>".$sub6."</td>
						<td>".$title5."</td>
						<td>".$credit5."</td>
					</tr>
				</table>";
		}
	?>
</div>
</table>
</body>
</html>