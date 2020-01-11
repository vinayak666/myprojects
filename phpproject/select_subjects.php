<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>SELECT SUBJECTS</title>
	<style  type="text/css" >
		body
		{
			font-family: Montserrat,sans-serif;
			background-repeat: no-repeat;
			background-size: 1200px;
			background-position:right;
		 
		}
		.grid-container 
		{
			display: grid;
  			grid-gap: 13px;
  			grid-template-columns: auto auto auto;
  			padding: 20px;
		}

		.grid-item 
		{
			
			justify-content: space-around;
			grid-gap: 5px;
    		text-align: center;
 			padding: 10px 90px;
 			width: 40%;
 			box-shadow: 0 3px 6px 0;

		}

		ul 
		{
  			list-style-type: none;
  			margin: 0;
  			padding: 0;
  			width: 22%;
  			background-color: #2c3e50;
  			position: fixed;
  			height: 90%;
 			overflow: auto;
		}
		li
		{
			border-bottom: 1px solid #FFF;
			padding: 6px;
			color: #FFFFFF;
		}
		
	</style>
</head>


<br>
<body>
<br>
	<ul>
		<div class="active">
<li>Problem Solving Using C <b>(MCA11)</b></li>
<li>Discrete Mathematics <b>(MCA12)</b></li>
<li>Fundamentals of Computer Organization <b>(MCA13)</b></li>
<li>Introduction to UNIX <b>(MCA14)</b></li>
<li>Professional Communication and Ethics <b>(MCA15)</b></li>
<li>Topics in Web Programming <b>(MCA16)</b></li>
<li>Object Oriented Programming with C++ <b>(MCA21)</b></li>
<li>Data Analysis using Spreadsheets <b>(MCA22)</b></li>
<li>Database Management Systems <b>(MCA23)</b></li>
<li>Data Structures Using C <b>(MCA24)</b></li>
<li>Management Information Systems <b>(MCA25)</b></li>
<li>operating Systems<b>(MCA31)</b></li>
<li>Design and Analysis of Algorithms<b>(MCA32)</b></li>
<li>Software Engineering<b>(MCA33)</b></li>
<li>Predictive Analytics<b>(MCA34)</b></li>
<li> Computer Networks<b>(MCA41)</b></li>
<li> object Oriented Modeling and Design Patterns<b>(MCA42)</b></li>
<li> UNIX Systems Programming<b>(MCA43)</b></li>
<li> Mobile Application Development<b>(MCA51)</b></li>
<li>Information  Security<b>(MCA52)</b></li>
<li>Fundamentals of Computer Organization<b>( MCA53)</b></li>
<li>Supply Chain Management<b>(MCASC1)</b></li>
<li> Software Project Management<b>(MCASC2)</b></li>
<li>Enterprise Resource Planning<b>(MCASC3)</b></li>
<li>  Programming in  Java <b>(MCAE01)</b></li>
<li> Operations Research<b>(MCAE02)</b></li>
<li> Machine Learning<b>(MCAE03)</b></li>
<li> Web Programming with PHP and AJAX <b>(MCAE04)</b></li>
<li>  Computer Graphics and Animation <b>(MCAE05)</b>></li>
<li> Secure Coding in C and C++ <b>(MCAE06)</b></li>
<li> NoSQL Databases<b>(MCAE07)</b></li>
<li> Programming with Python<b>(MCAE08)</b></li>
<li> Web Component Development with J2EE<b>(MCAE09)</b></li>
<li> Programming with C#.Net <b>(MCAE10)</b></li>
<li>  Digital Forensic <b>(MCAE11)</b></li>
<li> System Modeling and Simulation <b>(MCAE12)</b></li>
<li>  Cloud Computing<b>(MCAE13)</b></li>
<li> Software Testing<b>(MCAE14)</b></li>
<li> Programming IoT<b>(MCAE15)</b></li>
<li> ASP.Net with C#<b>(MCAE16)</b></li>
		</div>
	</ul>

<div style="margin-left:22%;padding: 0px 25px;" class="tit">
	<h1 align="center">SUPPLEMENTARY  EXAM REGISTRATION</h1>
	USN:<input type="text" name="usn"  id="usn"usn required placeholder="ex:1MS17MCA52">
	NAME:<input type="text" name="name" id="name" placeholder="ex:vinayak" >





	SEMESTER:<input type="text" name="semt" id="semt" placeholder="ex:4">


	PROCTOR:<select name="PROCTOR" id="PROCTOR">

	    <option value="Dr.S.Ajitha">Dr.S.Ajitha</option>
	    <option value="Chethan Venkatesh">Chethan Venkatesh</option>
	    <option value="Sailaja Kumar K"> Sailaja Kumar K</option>
	    <option value="Dr. Evangelin Geetha D">  Dr. Evangelin Geetha D</option>
	    <option value="Dr.Madhu Bhan"> Dr.Madhu Bhan</option>
	    <option value="Nithya BN"> Nithya BN</option>
	    <option value="Dr.Manish Kumar">Dr.Manish Kumar</option>
	    <option value="Dr.Niranjanamurthy M">Dr.Niranjanamurthy M</option>
	    <option value="Dr.Mrunalini M">Dr.Mrunalini M</option>
	    <option value="Dr.Yogisha H K"> Dr.Yogisha H K</option>
	  </select>
	  <br>
</div>
   

	<div style="margin-left:22%;padding: 0px 25px;" class="tit">
		<div class="grid-container">
		<div class="grid-item" >
			<table>
				
			<div id="1stSemCheckboxes">
				
			</div>
			</table>
		</div>

		<div class="grid-item" >
			<table>
				
			<div id="2ndSemCheckboxes">
				
			</div>
			</table>
		</div>



		<div class="grid-item" >
			<table>
				
			<div id="3rdSemCheckboxes">
				
			</div>
			</table>
		</div>


		<div class="grid-item" >
			<table>
				
			<div id="4thSemCheckboxes">
				
			</div>
			</table>
		</div>




		<div class="grid-item" >
			<table>
				
			<div id="5thSemCheckboxes">
				
			</div>
			</table>
		</div>




		<div class="grid-item" >
			<table>
				
			<div id="softcourse_Checkboxes">
				
			</div>
			</table>
		</div>





		<div class="grid-item" >
			<table>
				
			<div id="elective_Checkboxes">
				
			</div>
			</table>
		</div>
	</div>
		 <button id="submitbtn" onClick="send_request()"> Submit</button>
	</div>
	 <script>

    var subjects1st = {
                    "MCA11":"Problem Solving Using C",
                    "MCA12":"Discrete Mathematics",
                    "MCA13":"Fundamentals of Computer Organization",
                    "MCA14":"Introduction to UNIX",
                    "MCA15":"Professional Communication and Ethics",
                    "MCA16":"Topics in Web Programming"                  

     };
     var subjects2nd = {
  					"MCA21": "Object Oriented Programming with C++",
    				"MCA22":"Data Analysis using Spreadsheets",
     				"MCA23":" Database Management Systems",
     				"MCA24":"Data Structures Using ‘C’",
     				"MCA25":"Management Information Systems"  
     };
     var subjects3rd ={

 				   "MCA31":"Operating Systems",
  				   "MCA32":"Design and Analysis of Algorithms",
    			   "MCA33":"Software Engineering",
  				   "MCA34":"Predictive Analytics" 
     };

     var subjects4th={

 					"MCA41":"Computer Networks",
 					"MCA42":"Object Oriented Modeling and Design Patterns",
 					"MCA43":"UNIX Systems Programming"
     };
     var subjects5th={
     				 "MCA51":"Mobile Application Development",
					 "MCA52":"Information  Security",
 					 "MCA53":"Fundamentals of Computer Organization"
     };

     var softcourse={
					 "MCASC1":"Supply Chain Management",
 					 "MCASC2":"Software Project Management",
					 "MCASC3":"Enterprise Resource Planning"
	};

	var elective={
 					"MCAE01" :"Programming in  Java",   
					"MCAE02":"Operations Research",
 					"MCAE03": "Machine Learning",
 					"MCAE04":"Web Programming with PHP and AJAX", 
 					"MCAE05":"Computer Graphics and Animation",
					"MCAE06" :"Secure Coding in C and C++",
				    "MCAE07" :"NoSQL Databases",  
 					"MCAE08": "Programming with Python",
					"MCAE09": "Web Component Development with J2EE",
 					"MCAE10" :"Programming with C#.Net",
					"MCAE11" :"Digital Forensic",
 					"MCAE12":"System Modeling and Simulation ",
 					"MCAE13": "Cloud Computing",  
 					"MCAE14": "Software Testing",
 					"MCAE15": "Programming IoT",
					"MCAE16":" ASP.Net with C#"
	};




    function get_sub_html(subjectarray, semester)
   {
     var html = '<tr>' +
					'<td colspan="2">' +
						'<h2>'+semester+'</h2>' +
					'</td>' +
				'</tr>';
     var keys = Object.keys(subjectarray);
    for(var i=0; i<keys.length; i++){
        var subjectcode = keys[i];
        html = html + '<tr>' +
					'<td>' +
						subjectcode +
					'</td>' +
					'<td>' + 
						'<input id="'+subjectcode+'" type="checkbox" name="" >' +
					'</td>' +
				'</tr>';
       
         }
          return html;
       }

       document.getElementById("1stSemCheckboxes").innerHTML = get_sub_html(subjects1st, "1st SEM");
       document.getElementById("2ndSemCheckboxes").innerHTML = get_sub_html(subjects2nd, "2nd SEM");
       document.getElementById("3rdSemCheckboxes").innerHTML = get_sub_html(subjects3rd, "3rd SEM");
       document.getElementById("4thSemCheckboxes").innerHTML = get_sub_html(subjects4th, "4th SEM");
       document.getElementById("5thSemCheckboxes").innerHTML = get_sub_html(subjects5th, "5th SEM");
       document.getElementById("softcourse_Checkboxes").innerHTML = get_sub_html(softcourse, "SOFT COURSE");
       document.getElementById("elective_Checkboxes").innerHTML = get_sub_html(elective, "ELECTIVES");
     
    </script>
  

   <script>
   	function send_request()
   	{       
   		    var total_array = [];
   		    var keys = Object.keys(subjects1st);
   		    for(var i = 0; i < keys.length; i++)
   		    {
   		    	if(document.getElementById(keys[i]).checked == 1)
   		    	{
                   total_array.push(keys[i]);
   		    	}
   		    }

   		    var keys = Object.keys(subjects2nd);
   		    for(var i = 0; i < keys.length; i++)
   		    {
   		    	if(document.getElementById(keys[i]).checked == 1)
   		    	{
                   total_array.push(keys[i]);
   		    	}
   		    }

  			var keys = Object.keys(subjects3rd);
   		    for(var i = 0; i < keys.length; i++)
   		    {
   		    	if(document.getElementById(keys[i]).checked == 1)
   		    	{
                   total_array.push(keys[i]);
   		    	}
   		    }

  var keys = Object.keys(subjects4th);
   		    for(var i = 0; i < keys.length; i++)
   		    {
   		    	if(document.getElementById(keys[i]).checked == 1)
   		    	{
                   total_array.push(keys[i]);
   		    	}
   		    }


  var keys = Object.keys(subjects5th);
   		    for(var i = 0; i < keys.length; i++)
   		    {
   		    	if(document.getElementById(keys[i]).checked == 1)
   		    	{
                   total_array.push(keys[i]);
   		    	}
   		    }


  var keys = Object.keys(softcourse);
   		    for(var i = 0; i < keys.length; i++)
   		    {
   		    	if(document.getElementById(keys[i]).checked == 1)
   		    	{
                   total_array.push(keys[i]);
   		    	}
   		    }

  var keys = Object.keys(elective);
   		    for(var i = 0; i < keys.length; i++)
   		    {
   		    	if(document.getElementById(keys[i]).checked == 1)
   		    	{
                   total_array.push(keys[i]);
   		    	}
   		    }


            sem = total_array.join(",");

            var usn= document.getElementById("usn").value;
            var name= document.getElementById("name").value;
            var proc= document.getElementById("PROCTOR").value;
            var semt= document.getElementById("semt").value;
   		    var obj = new XMLHttpRequest();
			obj.onreadystatechange = function()
			{
				if(this.readyState == 4 && this.status == 200)
				{
					alert(this.responseText);
				}
			};
			obj.open("POST","AJAX.php");
			obj.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			obj.send("sub="+sem+"&usn="+usn+"&name="+name+"&proc="+proc+"&semt="+semt);

   	}

   </script>



</body>
</html>