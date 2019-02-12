<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
.name{
background-image:url('name.png');
background-repeat:no-repeat;
padding-left:20px;
}
.password{
	background-image:url('password.png');
background-repeat:no-repeat;
padding-left:20px;}
</style>
<body>
<form id="form1" name="form1" method="post" action="">

<div align="center" style="background:url(job.jpg);height:1000px;width:1300px">
 <table style="padding-top:200px"></table>
  
  <table width="200"style="background-color:#FFF">
    <tr>
      <td style="font-size:20px;padding-top: 10px">UserName</td>
      <td style="padding-top: 10px"><input type="text" name="txt_uname" id="txt_uname" value="" style="border-radius:15px"class="name"/></td>
    </tr>
    <tr>
      <td style="font-size:20px;padding-top: 10px">Password</td>
      <td style="padding-top: 10px"><input type="password" name="txt_pwd" id="t2" value="" style="border-radius:15px"class="password"/></td>
    </tr>
   
    <tr>
   
      <td colspan="2"style="padding-top: 10px"> <div align="center"><input type="submit" name="login" id="b1" value="Login"   style="border-radius:15px;background:#69F" onclick="myFunction()"/>  </div></td>
    
    </tr>
    <tr>
      <td colspan="2"style="padding-top: 10px"align="right"><a href="signup.php">SignUp?</a></td>
    </tr>
   
  </table>
 </div>  
</form>
</body>
</html>



<?php
if(isset($_POST['login']))
{
	
	$un=$_POST['txt_uname'];
	$pw=$_POST['txt_pwd'];
	
	include("connection.php");
	if($un!=""&& $pw!=""){
		$res=mysql_query("select * from login where username='$un' and password='$pw'");
		if(mysql_num_rows($res)>0)
		 {
			$row=mysql_fetch_array($res);
			session_start();
			$_SESSION["id"]=$row[0];
		 
		 	echo "<script type='text/javascript'>alert('login successfully!');
			window.location='welcome.php'</script>";
			//header("location:welcome.php");
		
		
		 }
		 else{
			 echo "<script type='text/javascript'>alert('In UserName/Passsword')</script>";
		 }
	}
	else{
		echo "<script type='text/javascript'>alert('Enter Values')</script>";
	}
	
}
?>
<script>
function myFunction() {
    var email;

    email = document.getElementById("txt_uname").value;

        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(textEmail.value) == false) 
        {
       // document.getElementById("demo").style.color = "red";
//            document.getElementById("demo").innerHTML ="Invalid EMail ->"+ email;
            alert('Invalid Email Address ->'+email);
            return false;
        } else{
			return true;
        //document.getElementById("demo").style.color = "DarkGreen";      
//        document.getElementById("demo").innerHTML ="Valid Email ->"+email;
        }
}
</script>