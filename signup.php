<?php
//connect to DB
include("connect.php");

$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$gender=$_POST['gender'];

//fill the person information
echo $_POST['name'];
echo $_POST['address'];
$sql = "insert into Person(name,address,city,state,zipcode,phone,email,gender) values('$name','$address','$city','$state','$zip','$phone','$email','$gender');";
$result = mysql_query($sql);

//
$sql1 = "select p.person_id from Person where name='$_POST[name]',address='$_POST[address]',city='$_POST[city]',state='$_POST[state]',zipcode='$_POST[zip]',phone='$_POST[phone]',email='$_POST[email]',gender='$_POST[gender]';";
$result1 = mysql_query($sql1);
if($result1){
$numrows = mysql_num_rows($result1);
}
if($numrows>0)
{
	for($i=0;$i<$numrows1;$i++)
	{
		$row1=mysql_fetch_array($result1);
		$personid=$row1[0];
	}
}
$appinsertsql="insert into Applicant( person_id,DCDQ_member,a_username,a_password) values('$personid','$_POST[dcdq]','$_POST[username]','$_POST[password]');";
mysql_query($appinsertsql);
header("Location: ./signupsuccess.html"); 
exit;
?>