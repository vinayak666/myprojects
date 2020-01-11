<?php
	include("conn.php");
?>
<html>
<head>
	<title>student</title>

<style type="text/css">
	input[type="text"]
	{
		border: 1px;
		outline: none;
		width: 37%;
	}
	table td
	{
		text-align: center;
	}
	button
	{
		height: 40px;
		width: 180px;
		background-color: blue;
		font-size: 18px;
		border-radius: 10px;
		color: white;
		cursor: pointer;
	}
</style>

<script type="text/javascript">
	function call()
	{
		var usn = document.getElementById("usn").value;

		if(usn == 'SELECT USN')
		{
			alert("SELECT PROPER USN");
		}
		else
		{
			var obj = new XMLHttpRequest();
			obj.onreadystatechange = function()
			{
				if(this.readyState == 4 && this.status == 200)
				{
					document.getElementById("data").innerHTML = this.responseText;
				}
			};
			obj.open("POST","AJAX.php");
			obj.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			obj.send("usn="+usn);
		}
	}

	function update()
	{
		var subjects = "";
		var s1 = document.getElementById(1);
		var s2 = document.getElementById(2);
		var s3 = document.getElementById(3);
		var s4 = document.getElementById(4);
		var s5 = document.getElementById(5);
		var s6 = document.getElementById(6);

		if(!s1.checked && !s2.checked && !s3.checked && !s4.checked && !s5.checked && !s6.checked)
		{
			alert("Please Select Any One Subject");
		}
		else
		{
			 var sub1 = document.getElementById(1).value;
			 var sub2 = document.getElementById(2).value;
			 var sub3 = document.getElementById(3).value;
			 var sub4 = document.getElementById(4).value;
			 var sub5 = document.getElementById(5).value;
			 var sub6 = document.getElementById(6).value;
			 var usn = document.getElementById("usn").value;
			 var name = document.getElementById("name").value;
			 var proc = document.getElementById("proc").value;
			 var sem = document.getElementById("sem").value;
			 var count = 0;

			 if(s1.checked && sub1 == 'NULL')
			 {
			 	alert("Sublect 1 is NULL");
			 }
			 else if(s2.checked && sub2 == 'NULL')
			 {
			 	
			 	alert("Sublect 2 is NULL");
			 }
			 else if(s3.checked && sub3 == 'NULL')
			 {
			 	
			 	alert("Sublect 3 is NULL");
			 }
			 else if(s4.checked && sub4 == 'NULL')
			 {
			 	
			 	alert("Sublect 4 is NULL");
			 }
			 else if(s5.checked && sub5 == 'NULL')
			 {
			 	
			 	alert("Sublect 5 is NULL");
			 }
			 else if(s6.checked && sub6 == 'NULL')
			 {
			 	alert("Sublect 6 is NULL");
			 }
			 else
			 {
			 	if(s1.checked)
			 	{
			 		subjects = subjects + "," + sub1;
			 		count += 1;
			 	}
			 	if(s2.checked)
			 	{
			 		subjects = subjects + "," + sub2;
			 		count += 1;
			 	}
			 	if(s3.checked)
			 	{
			 		subjects = subjects + "," + sub3;
			 		count += 1;
			 	}
			 	if(s4.checked)
			 	{
			 		subjects = subjects + "," + sub4;
			 		count += 1;
			 	}
			 	if(s5.checked)
			 	{
			 		subjects = subjects + "," + sub5;
			 		count += 1;
			 	}
			 	if(s6.checked)
			 	{
			 		subjects = subjects + "," + sub6;
			 		count += 1;
			 	}

			 	var obj = new XMLHttpRequest();
				obj.onreadystatechange = function()
				{
					if(this.readyState == 4 && this.status == 200)
					{
						var response = this.responseText;
						if(response == 1)
						{
							window.location = "final.php";
						}
						else
						{
							alert("Somthing went wrong");
						}
						
					}
				};
				obj.open("POST","AJAX.php");
				obj.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				obj.send("usn1="+usn+"&name1="+name+"&sem1="+sem+"&proc1="+proc+"&selected="+subjects+"&count="+count);
			 }
		}
	}
</script>
</head>
<body style="background-image: url(./img/pencil.jpeg); background-size: 100% 125%;background-repeat:no-repeat">
	<H3> The student requested for the subjects to appear for exam</H3>
	<?php
		$result = $conn->query("SELECT * FROM student ");
		if($result -> num_rows > 0)
		{
			$html =  "<select id='usn' onchange='call()'>
						<option value='SELECT USN'>SELECT USN</option>";
			while($row = $result->fetch_assoc())
			{
				$html .= "<option value=".$row['usn'].">".$row['usn']."</option>";
			}
			$html = $html . "</select>";
			echo $html;
		}
		else
		{
			echo "<select id='usn'>
					<option value='SELECT USN'>SELECT USN</option>
				  </select>";
		}	
	?>
	<br><br><br>
<div id="data">
	
</div>
</body>

</html>