let base_url = "handler.php";

var i=0;


document.getElementById("reg1").onclick = function() {

            document.getElementById("temp").innerHTML="";
			document.getElementById("main_wrapper").style.display = "none";
            document.getElementById("register_wrapper").style.display = "block";
            document.getElementById("showRegistration_wrapper").style.display = "none";
			document.getElementById("about_wrapper").style.display = "none";

        }
		
document.getElementById("reg2").onclick = function() {

            
			document.getElementById("main_wrapper").style.display = "none";
            document.getElementById("register_wrapper").style.display = "none";
            document.getElementById("showRegistration_wrapper").style.display = "block";
			document.getElementById("about_wrapper").style.display = "none";
			initial7();
        }
		
		
document.getElementById("home1").onclick = function() {

            document.getElementById("main_wrapper").style.display = "block";
            document.getElementById("register_wrapper").style.display = "none";
            document.getElementById("showRegistration_wrapper").style.display = "none";
			document.getElementById("about_wrapper").style.display = "none";

        }
		
document.getElementById("about").onclick = function() {

            document.getElementById("main_wrapper").style.display = "none";
            document.getElementById("register_wrapper").style.display = "none";
            document.getElementById("showRegistration_wrapper").style.display = "none";
			document.getElementById("about_wrapper").style.display = "Block";

        }

function checkPword(str1){
		var n1=0;
		var n2=0;
		var n3=0;
		var n4=0;
		for(i=0; i<str1.length; i++){
			if(str1[i]>='a' && str1[i]<='z'){
				n1++;
			}
			else if(str1[i]>='A' && str1[i]<='Z'){
				n2++;
			}
			else if(str1[i]>='0' && str1[i]<='9'){
				n3++;
			}
			else if((str1.charCodeAt([i])>='32' && str1.charCodeAt([i])<='47') || (str1.charCodeAt([i])>='58' && str1.charCodeAt([i])<='64') || (str1.charCodeAt([i])>='91' && str1.charCodeAt([i])<='96') || (str1.charCodeAt([i])>='123' && str1.charCodeAt([i])<='126')){
				console.log(str1[i]);
				n4++;
			}
		}
		if(n1>0 && n2>0 && n3>0 && n4>0){
			return true;
		}
		else{
			return false;
		}
}
	
function checkEmail(str1){
	var a1 = str1.indexOf('@');
	var a2 = str1.indexOf('.');
	
	if(a1 != -1 && a2 != -1){
		return true;
	}
	else{
		return false;
	}
}



function validate() {

	
	
	var user = document.getElementById('nam').value;
	var em = document.getElementById('emails').value;
	var pa = document.getElementById('pa').value;
	var confpa = document.getElementById('confpa').value;
	var mn = document.getElementById('mn').value;
	var quantity = document.getElementById('quantity').value;
	var pr = document.getElementById('pr').value;
	var org = document.getElementById('org').value;
	var valid = false;
	//var valid1 = false;
	var x = document.aform.gender;
	var y = document.aform.platform;
	var country = document.getElementById('country').value;
	var language = document.getElementById('language').value;
	console.log(y,length);
	var sum1 = 0;
	var entry = document.getElementById("btn");

	for(var i=0; i<x.length; i++){
		if(x[i].checked){
			valid = true;
			break;
		}
	}
	
	for(var i=0; i<y.length; i++){
		if(y[i].checked){
			sum1 = sum1 + 1;
		}
	}
	console.log(sum1);
	//user name validation
	if(user.trim() == ''){
		document.getElementById('uname').innerHTML = "**This field should not be empty";
		alert("Check Error");
		console.log("1");
		return false;
	}
	
	else if((user.length <= 2) || (user.length > 30)) {
		document.getElementById('uname').innerHTML = "**Length greater than 2 and less than 30";
		alert("Check Error");
		console.log("2");
		return false;
	}
	
	else if(!isNaN(user)) {
		document.getElementById('uname').innerHTML = "**Characters should be present";
		alert("Check Error");
		console.log("3");
		return false;
	}
	
	//email authentication
	else if(em.trim() == ''){
		document.getElementById('mailid').innerHTML = "**This field should not be empty";
		alert("Check Error");
		console.log("4");
		return false;
	}
	
	else if(!checkEmail(em)){
		document.getElementById('mailid').innerHTML = "**Email Id is Invalid";
		alert("Check Error");
		console.log("5");
		return false;
	}
	
	else if(em.indexOf('@')<=0){
		document.getElementById('mailid').innerHTML = "**Invalid Email Id (Improper index of @ or . found!)";
		alert("Check Error");
		console.log("6");
		return false;
	}
	
	else if((em.charAt(em.length - 4) != '.') && (em.charAt(em.length - 3) != '.')){
		document.getElementById('mailid').innerHTML = "**Use Email Id from specific Domain only";
		alert("Check Error");
		console.log("7");
		return false;
	}
	
	else if(!isNaN(em)) {
		document.getElementById('mailid').innerHTML = "**Characters Required";
		alert("Check Error");
		console.log("8");
		return false;
	}
	
	//password check
	else if(pa.trim() == ''){
		document.getElementById('wordpass').innerHTML = "**This field should not be empty";
		alert("Check Error");
		console.log("9");
		return false;
	}
	
	
	else if((pa.length <= 7) || (pa.length > 30)) {
		document.getElementById('wordpass').innerHTML = "**Length greater than 7 and less than 30";
		alert("Check Error");
		console.log("11");
		return false;
	}
	
	else if(!isNaN(pa)){
		document.getElementById('wordpass').innerHTML = "**Password must include characters!";
		alert("Check Error");
		console.log("12");
		return false;
	}
	
	else if(!checkPword(pa)){
		document.getElementById('wordpass').innerHTML = "**Password must include atleast 1 number 1 small alphabet 1 capital alphabet!";
		alert("Check Error");
		console.log("13");
		return false;
	}

	else if(confpa.trim() == ''){
		document.getElementById('wordpassconf').innerHTML = "**This field should not be empty";
		alert("Check Error");
		console.log("10");
		return false;
	}
	
	else if(pa != confpa){
		document.getElementById('wordpassconf').innerHTML = "**Password do not match!";
		alert("Check Error");
		console.log("14");
		return false;
	}
	
	//mobile number verification
	else if(mn.trim() == ''){
		document.getElementById('mobilenum').innerHTML = "**This field should not be empty";
		alert("Check Error");
		console.log("15");
		return false;
	}
	
	else if((isNaN(mn)) || (mn.length != 10)){
		document.getElementById('mobilenum').innerHTML = "**Enter a valid Mobile Number";
		alert("Check Error");
		console.log("16");
		return false;
	}
	
	//age validation
	else if(quantity.trim() == ''){
		document.getElementById('agenum').innerHTML = "**This field should not be empty";
		alert("Check Error");
		console.log("16");
		return false;
	}
	
	else if(isNaN(quantity)){
		document.getElementById('agenum').innerHTML = "**Age should be a numebr";
		alert("Check Error");
		console.log("17");
		return false;
	}
	
	else if((quantity.length <= 1) || (quantity.length > 3)) {
		document.getElementById('agenum').innerHTML = "**Enter Vaild Age! Only 10+ able to participate!";
		alert("Check Error");
		console.log("18");
		return false;
	}
	
	//profession validation
	else if(pr.trim() == ''){
		document.getElementById('job').innerHTML = "**This field should not be empty";
		alert("Check Error");
		console.log("19");
		return false;
	}
	
	else if((pr.length <= 4) || (pr.length > 30)) {
		document.getElementById('job').innerHTML = "**Not Found";
		alert("Check Error");
		console.log("20");
		return false;
	}
	
	else if(!isNaN(pr)) {
		document.getElementById('job').innerHTML = "**Invalid Input";
		alert("Check Error");
		console.log("21");
		return false;
	}
	
	//organization validation
	else if(org.trim() == ''){
		document.getElementById('organ').innerHTML = "**This field should not be empty";
		alert("Check Error");
		console.log("22");
		return false;
	}
	
	else if((org.length <= 3) || (org.length > 40)) {
		document.getElementById('organ').innerHTML = "**Not Found";
		alert("Check Error");
		console.log("23");
		return false;
	}
	
	else if(!isNaN(org)) {
		document.getElementById('organ').innerHTML = "**Invalid Input";
		alert("Check Error");
		console.log("24");
		return false;
	}
	
	else if(!valid){
		document.getElementById('gen').innerHTML = "**Select your Gender";
		alert("Select Your Gender");
		console.log("25");
		return false;
	}
	
	//country validation
	else if(country == 'none'){
		document.getElementById('countr').innerHTML = "**Select your Country";
		alert("Select Your Country");
		console.log("26");
		return false;
	}
	
	//language validation
	if(language == 'none1'){
		document.getElementById('planguage').innerHTML = "**Select your Preferred Progamming Language";
		alert("Select Your Preferred Progamming Language");
		console.log("27");
		return false;
	}
	
	if(sum1 <= 1){
		document.getElementById('planguage').innerHTML = "**Select atleast two platforms";
		alert("Select atleast two platforms");
		console.log("28");
		return false;
	}
	

		
		var uname = document.getElementById('nam').value;
		
	    var today = new Date();
		//var display = document.getElementById('display');
		
		//var newRow = display.insertRow(row);
		
		var x1 = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
		var y1 = today.getFullYear() + "/" + today.getMonth() + "/" + today.getDate();
		var k = {Name: uname, Email: em, Mobile: mn, Age: quantity, Profession: pr, Organisation: org, Time: x1, Date1: y1};
		
		
		/*var cell1 = newRow.insertCell(0);
		var cell2 = newRow.insertCell(1);
		var cell3 = newRow.insertCell(2);
		var cell4 = newRow.insertCell(3);
		var cell5 = newRow.insertCell(4);
		var cell6 = newRow.insertCell(5);
		var cell7 = newRow.insertCell(6);
		var cell8 = newRow.insertCell(7);
		var cell9 = newRow.insertCell(8);

		cell1.innerHTML = idno;
		cell2.innerHTML = uname;
		cell3.innerHTML = em;
		cell4.innerHTML = mn;
		cell5.innerHTML = quantity;
		cell6.innerHTML = pr;
		cell7.innerHTML = org;
		cell8.innerHTML = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
		cell9.innerHTML = today.getDate() + "/" + today.getMonth() + "/" + today.getFullYear();*/
		

		
		//row++;
		//idno++;
		
		
        var k = JSON.stringify(k);
        initial6(k);
		
		alert("Thankyou for Registration!");
		alert("You can see your enrollment in Registration Details section!");
		
		/*document.getElementById('uname').innerHTML = "";
		document.getElementById('mailid').innerHTML = "";
		document.getElementById('wordpass').innerHTML = "";
		document.getElementById('wordpassconf').innerHTML = "";
		document.getElementById('mobilenum').innerHTML = "";
		document.getElementById('agenum').innerHTML = "";
		document.getElementById('job').innerHTML = "";
		document.getElementById('organ').innerHTML = "";
		document.getElementById('countr').innerHTML = "";
		document.getElementById('planguage').innerHTML = "";
		document.getElementById('gen').innerHTML = "";*/
		
		document.getElementById("Aform").reset();
		
		console.log(k);
	
	
}

function initial6(k){
    let url = base_url + "?req=insert&object="+k; 
    $.get(url,function(data,success){
        if(data=="Form successfully submitted")
            {
              document.getElementById("temp").innerHTML=data;
            }
        else
            {
              document.getElementById("temp1").innerHTML=data;
            }
                
        });
}

function initial7()
        {
            let url = base_url + "?req=list";
            $.get(url,function(data,success){
                        if(data.length == 0)
                {
                    document.getElementById("demo1").innerHTML="<h3><div class='container text-center'>Noone registered till now. Be the first one to register.</div></h3>";
                }
                else{
                        var text;
                        text= "<table class='table table-striped table-bordered table-hover'><thead class='thead-dark'>";
                        text=text + "<tr><th>Id</th><th>Name</th><th>Email</th><th>Mobile</th><th>Age</th><th>Profession</th><th>Organisation</th><th>Time</th><th>Date</th></tr></thead><tbody>";
                        for(i=0;i<data.length;i++)
                        {
                            text= text + "<tr><td>" + (i+1) + "</td><td>" + data[i].Name+ "</td><td>" + data[i].Email + "</td><td>" + data[i].Mobile + "</td><td>" + data[i].Age + "</td><td>" + data[i].Profession + "</td><td>" + data[i].Organisation + "</td><td>" + data[i].Time+ "</td><td>" + data[i].Date1 + "</td></tr>";
							
						}
                        text += "</tbody></table>";
                        document.getElementById("demo1").innerHTML=text;   
                }
            });
        }




































