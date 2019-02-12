<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<head></head>
<style>
.name{
background-image:url('name.png');
background-repeat:no-repeat;
padding-left:20px;
}
.email{
	background-image:url('email.png');
background-repeat:no-repeat;
padding-left:20px;
}
.password{
	background-image:url('password.png');
background-repeat:no-repeat;
padding-left:20px;}
.confirm{
	background-image:url('confirm.png');
background-repeat:no-repeat;
padding-left:20px;}
</style>
<body>
<div align="center" style="background:url(job.jpg);height:1000px;width:1300px">
<form name="form1" method="post" action="">
<table style="padding-top: 100px"></table>
  <table width="388" height="392" style="background-color:#FFF" >
    <tr>
      <td width="185" style="font-size:20px">Name</td>
<td width="200"><input type="text" name="name" id="textfield" class="name" value=""style="border-radius:15px" required="required"></td>
    </tr>
    <tr>
      <td style="font-size:20px">DOB</td>
      
        <td>
           <input type="date" name="d1" value="" id="d1"required="required">
        </td>
    </tr>
    <tr>
      <td height="58" style="font-size:20px">Gender</td>
      <td><p>
        <label>
          <input type="radio" name="RadioGroup1" value="male" id="RadioGroup1_0">
          Male</label>
        
        <label>
          <input type="radio" name="RadioGroup1" value="female" id="RadioGroup1_1">
          Female</label>
        <br>
      </p></td>
    </tr>
    <tr>
      <td style="font-size:20px">Email</td>
      <td width="200"><input type="email" name="email" id="textfield2" class="email" value=""style="border-radius:15px"required="required"></td>
    </tr>
    <tr>
      <td style="font-size:20px">Password</td>
      <td width="200"><input type="password" name="password" id="textfield3" class="password" value=""style="border-radius:15px"required="required"></td>
    </tr>
    <tr>
      <td style="font-size:20px">ConfirmPassword</td>
      <td width="200"><input type="password" name="confirm" id="textfield4"class="confirm" value=""style="border-radius:15px" required="required"></td>
    </tr>
    <tr>
    
      <td height="56" colspan="2"><div align="center"><input type="submit" name="signup" id="button" value="SignUp" style="font-size:15px;background:#69F; border-radius:15px"></div></td>
      
      </tr>
  </table>
  
</form>
</div>
</body>
</html>
*<?php
if(isset($_POST['signup']))
{
	
	$n=$_POST['name'];
    $dob=$_POST['d1'];
	$em=$_POST['email'];
	$gnd=$_POST['RadioGroup1'];
	$pas=$_POST['password'];
	$cpas=$_POST['confirm'];
	include("connection.php");
	if($gnd!="")
	{
		$res=mysql_query("insert into signup (name,dob,gender,email)values('$n','$dob','$gnd','$em')");
		if($pas==$cpas)
		{
		$res=mysql_query("insert into login(username,password)values('$em','$cpas')");
		}
		header("location:logindesign.php");
	}
	else{
		echo "<script type='text/javascript'>alert('Enter Gender')</script>";
	}
		
}
?>*/