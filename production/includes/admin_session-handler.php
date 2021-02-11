<?php
session_start();

//$_SESSION['userid'];  //----- added

if(!isset($_SESSION['user']))
{
?> 
	<script language="JavaScript">
		alert('Your Session is Expired, Please Login Again');
		document.location='../production/logout.php';
	</script>
<?php
}
/*
if($_SESSION['level']!="Admin")
{  */
?> 
<!--
	<script language="JavaScript">
		alert('Bad Attempt! You are not Admin!');
		document.location='../production/logout.php';
	</script>
-->
<?php
//}
?>