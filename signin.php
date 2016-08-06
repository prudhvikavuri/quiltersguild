<?php
include ("connect.php");
$selected_radio=$_POST['membertype'];
if($selected_radio=="Applicant")
       {
        $sql="select a.a_username,a.a_password from Applicant a";
       }
else if($selected_radio=="CommitteeMember")
       {
        $sql="select cm.cm_username,cm.cm_password from CommitteeMember cm";
       }
else 
       {
        $sql="select v.v_username,v.v_password from Vendor v";
       }
$result=mysql_query($sql);
if($result){
$numrows = mysql_num_rows($result);
}
if($numrows>0)
{
	for($i=0;$i<$numrows1;$i++)
	{
		$row1=mysql_fetch_array($result);
		$username=$row1[0];
		$password=$row1[1];
		if($username=='$_POST[username]' && $password=='$_POST[password]'){
			header("Location: /signupsuccess.html"); 
			exit;
			}
	}
}

?>