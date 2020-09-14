<!doctype html>

<html lang="en">

	<head>
		<meta charset = "utf-8" />
		<title>code-a-thon</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="mainstyle.css" />
		<link rel="icon" type="image/png" href="mainlogo.png" />
		
	</head>
	
	<body id="main_body">
	
		<div id="main_page">
		
		<div id="main_header">
			<div id="mainpage_logo">
				<img src="mainlogo.png" class="imglogo" />
				<header id="h">
					<h1>code-a-thon</h1>
				</header>
				<img src="apage.jpg" class="imglogo" />
			</div>
			
			<nav id="top_nav">
				<ul>
					<a href="index.html" id="home1"><li>Home</li></a>
					<a href="#" id="reg1"><li>Register</li></a>
					<a href="#" id="reg2"><li>Registration Details</li></a>
					<a href="#" id="about"><li>About</li></a>
				<ul>
			</nav>
		</div>
	

	
		<div id="main_wrapper">
			
			<h2 class="h2">Howdy Friends! New Season Begins !</h2>
			
			<h3 id="h3">code-a-thon presents</h3>
			<h1 id="h1">Algo-Mania !!!</h1>
			
			<div id="image_gall">
				<img src="a1.jpg" class="imggall" />
				<img src="a2.jpg" class="imggall" />
				<img src="a3.jpg" class="imggall" />
			</div>
			
			<div id="maininfo">
				<section id="mainsec">
					<h4 class="h4">Algo-Mania Details</h4>
					<ul class="ulist">
						<li>Online Coding Competition</li>
						<li>Pick any Language of your Choice</li>
						<li>Solve Four Problem Statements</li>
						<li>Three Hours Time Limit</li>
						<li>Date: 22/09/2020</li>
						<li><span class="dc">Participation fee: Rs. 100/-</span></li>
					</ul>
					<br/>
					<h4 class="h4"><span class="dc">**</span>Exciting Prizes!</h4>
					<ul class="ulist">
						<li>First Winner will get Rs.40000</li>
						<li>Second Winner will get Rs.28000</li>
						<li>Third winner will get Rs.10000</li>
						<li><span class="dc">For top 5 a chance to work with code-a-thon team</span></li>
						<li>Exciting Goodies for top 10 Winners</li>
					</ul>
				</section>
				
				<div id="sectionimg">
					<img src="a4.jpg" class="secimg" />
					<br/>
					<img src="a5.jpg" class="secimg" />
				</div>
			</div>
			

		</div>
		
		<div id="register_wrapper">

			<div class="text-success" id="temp"></div>
            <div class="text-danger" id="temp1"></div>
			<form id="Aform" class="form1" name="aform" action="#">
                
				<table id="regtable">
					<caption align="bottom">Registeration Form</caption>
					<tr class="rowtable">
					<td colspan="2"><h3 id="hcd"><span class="dc">**</span> These fields are required!</h3></td>
					</tr>
					<tbody>
					<tr class="rowtable">
					<td>Name:<span class="dc">**</span></td>
					<td><input type="text" id="nam" name="username" placeholder="e.g. John"/><br/>
					<span id="uname" class="dangerclass"></span></td>
					</tr>
					<tr class="rowtable">
					<td>Email:<span class="dc">**</span></td>
					<td><input type="text" id="emails" name="email" placeholder="e.g. jdn@gmail.com" /><br/>
					<span id="mailid" class="dangerclass"></span></td>
					</tr>
					<tr class="rowtable">
					<td>Password:<span class="dc">**</span></td>
					<td><input type="password" id="pa" name="pword" placeholder="Asd#12345678" /><br/>
					<span id="wordpass" class="dangerclass"></span></td>
					</tr>
					<tr class="rowtable">
					<td>Confirm Password:<span class="dc">**</span></td>
					<td><input type="password" id="confpa" name="confpword" placeholder="Asd#12345678" /><br/>
					<span id="wordpassconf" class="dangerclass"></span></td>
					</tr>
					<tr class="rowtable">
					<td>Mobile Number:<span class="dc">**</span></td>
					<td><input type="text" id="mn" name="mnum" placeholder="7893021458" /><br/>
					<span id="mobilenum" class="dangerclass"></span></td>
					</tr>
					<tr class="rowtable">
					<td>Age:<span class="dc">**</span></td>
					<td><input type="text" id="quantity" name="quantity" placeholder="24" /><br/>
					<span id="agenum" class="dangerclass"></span></td>
					</tr>
					<tr class="rowtable">
					<td>Profession:<span class="dc">**</span></td> 
					<td><input type="text" id="pr" name="profession" placeholder="Software Developer" /></br>
					<span id="job" class="dangerclass"></span></td>
					</tr>
					<tr class="rowtable">
					<td>Organisation:<span class="dc">**</span></td>
					<td><input type="text" id="org" name="organisation" placeholder="CHM" /><br/>
					<span id="organ" class="dangerclass"></span></td>
					</tr>
					<tr class="rowtable">
					<td ><p class="para1">Select Your Gender<span class="dc">**</span></p></td>
					<td >Male: <input type = "radio" id="ma" name = "gender" value = "male" />
					Female: <input type = "radio" id="fe" name = "gender" value = "female" />
					Others: <input type = "radio" id="ot" name = "gender" value = "others" /><br/>
					<span id="gen" class="dangerclass"></span></td>
					</tr>
					<br/>
					<tr class="rowtable">
					<td><p class="para1">Select your Country<span class="dc">**</span></p></td>
					
					
					<td><select id="country" name="countries" class="divselect">
						<option value="none">----------------</option>
						<option value="america">America</option>
						<option value="australia">Australia</option>
						<option value="austria">Austria</option>
						<option value="bangladesh">Bangladesh</option>
						<option value="brazil">Brazil</option>
						<option value="canada">Canada</option>
						<option value="chile">Chile</option>
						<option value="cuba">Cuba</option>
						<option value="denmark">Denmark</option>
						<option value="dominica">Dominica</option>
						<option value="egypt">Egypt</option>
						<option value="estonia">Estonia</option>
						<option value="finland">Finland</option>
						<option value="france">France</option>
						<option value="germany">Germany</option>
						<option value="greece">Greece</option>
						<option value="hawaii">Hawaii</option>
						<option value="hungary">Hungary</option>
						<option value="iceland">Iceland</option>
						<option value="india">India</option>
						<option value="italy">Italy</option>
						<option value="japan">Japan</option>
						<option value="kenya">Kenya</option>
						<option value="laos">Laos</option>
						<option value="libya">Libya</option>
						<option value="malaysia">Malaysia</option>
						<option value="mexico">Mexico</option>
						<option value="nepal">Nepal</option>
						<option value="new zealand">New Zealand</option>
						<option value="oman">Oman</option>
						<option value="peru">Peru</option>
						<option value="poland">Poland</option>
						<option value="qatar">Qatar</option>
						<option value="romania">Romania</option>
						<option value="russia">Russia</option>
						<option value="spain">Spain</option>
						<option value="turkey">Turkey</option>
						<option value="ukraine">Ukraine</option>
						<option value="vietnam">Vietnam</option>
						<option value="wurttemberg">Wurttemberg</option>
						<option value="yemen">Yemen</option>
						<option value="zimbabwe">Zimbabwe</option>
					</select>
				
					<br/><br/>
					<span id="countr" class="dangerclass"></span></td>
					</tr>
					<tr class="rowtable">
					<td><p class="para1">Select your Programming Language Preference<span class="dc">**</span></p></td>

						<td><select id="language" name="plang" class="divselect">
							<option value="none1">----------------</option>
							<option value="C">C</option>
							<option value="C++">C++</option>
							<option value="C#">C#</option>
							<option value="Java">Java</option>
							<option value="Python">Python</option>
							<option value="Other">Other</option>
						</select>
					
						<br/><br/>
						<span id="planguage" class="dangerclass"></span></td>
						</tr>
						<tr class="rowtable">
						
						<td rowspan="9"><p class="para1">Select the Platform of your Choice!<span class="dc">**</span></p></td>
						<td rowspan="9"><input type="checkbox" id="cb1" name="platform" value="HackerRank" /> HackerRank<br/>
						<input type="checkbox" id="cb2" name="platform" value="CodingPro" /> CodingPro<br/>
						<input type="checkbox" id="cb3" name="platform" value="CodeSmash" /> CodeSmash<br/>
						<input type="checkbox" id="cb4" name="platform" value="LitRank" /> LitRank<br/>
						<input type="checkbox" id="cb5" name="platform" value="GoCode" /> GoCode<br/>
						<input type="checkbox" id="cb6" name="platform" value="CodingNinjas" /> CodingNinjas<br/>
						<input type="checkbox" id="cb7" name="platform" value="TopFive" /> TopFive<br/>
						<br/>
						<span id="planguage" class="dangerclass"></span></td>
						</tr>
						</tbody>
					</table>
					<br/><br/>
					<p class="para1">Any Comments</p>
					<textarea name="query">
					Anything you wish to say......
					</textarea>
					<br/><br/>
				<input type="button" value="Register" onclick="return validate()" />
				
				
			</form>

		</div>
		

	
		<div id="showRegistration_wrapper">
			
			<h3 id="srh3">Details of Participants</h3>
	            <div class="container-fluid">
                <div class="table-responsive">
                    <div id="demo1"></div>
                </div>
            
            </div>
            <!--<table id="display">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile Number</th>
					<th>Age</th>
					<th>Profession</th>
					<th>Organisation</th>
					<th>Time</th>
					<th>Date</th>
				</tr>
				<tr>
					<td>-----</td>
					<td>-----</td>
					<td>-----</td>
					<td>-----</td>
					<td>-----</td>
					<td>-----</td>
					<td>-----</td>
					<td>-----</td>
					<td>-----</td>
				</tr>
			</table> -->
			

		</div>
		
		<div id="about_wrapper">
			
			<div id="sectionabout">
				<div id="leftsec">
					<h1 class="h1sec">Competitions!</h1>
					<ul class="ulsec">
						<li>AlgoWars</li>
						<li>SpeedWrite</li>
						<li>DryRun</li>
						<li>VisualCoding</li>
						<li>Speak-n-Code</li>
						<li>Blind Coding</li>
						<li>WarriorCoder</li>
						<li>BestMatchWar</li>
					</ul>
					<br/><br/>
					<h1 class="h1sec">Mission</h1>
					<ul class="ulsec">
						<li>Make learning fun</li>
						<li>Spread Coding</li>
						<li>Tet coder's skills</li>
						<li>Make coding easy</li>
						<li>Develop Social Network</li>
						<li>Bring Interactive Platform</li>
						<li>Chain Learning</li>
						<li>Apply learn and teach method</li>
					</ul>
					<br/><br/>
					
				</div>
				<div class="rightsec">
					<img src="mission.jpg" class="imgabout1" /><br/>
					<img src="qmark.jpg" class="imgabout1" /><br/>
				</div>
			</div>
			
			
			<div id="bottomabout">
				<img src="about1.jpg" class="imgabout" />
				<img src="about2.png" class="imgabout" />
				<img src="about3.jpg" class="imgabout" />
				<img src="about4.jpg" class="imgabout" />
			</div>
			
			
		</div>
		
			<div id="f">
				<h4>For further details:</h4>
				<p>Email: codeAthon@gmail.com or Contact at: 9632587410</p>
			</div>
		
		
		</div>
		
		</body>

		<script src="jquery-3.5.1.min.js"></script>
		<script src="newb.js"></script>
	

</html>