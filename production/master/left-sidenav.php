<?php
$dash_active = "active";

/* --- Dashboard Tab --- */
$db_active = "";


/* --- Registration Tab --- */
$reg_active = $emp_active = $uc_active = $st_active = $tt_active = $cl_active = "";
/* --- perdiam  Tab --- */
$perd_active =$perApp_active = "";
/* --- Call Tab --- */
$calty_active = $call_active = $ccall_active = $ass_active = $calen_active = $for_active = $per_active=$ist_active=$isd_active= "";

if (isset($_GET['db']))  // Dashboard
{
	$daactive = "active";
} else if (isset($_GET['emp'])) // Employer // || isset($_GET['idV']) || isset($_GET['idE'])) // Employer
{
	$reg_active = "active";
	$emp_active = "active";

	$_SESSION['SubModule_page'] = "Employer Page";

	$_SESSION['Module'] = "Registration";

	$_SESSION['SubModule'] = "Employer";

	$dash_active = "";
} else if (isset($_GET['usr']) || isset($_GET['emp_display']) || isset($_GET['emp_list'])) // Useraccount // || isset($_GET['idV']) || isset($_GET['idE'])) // Employer
{
	$regactive = "active";
	$ucactive = "active";

	$_SESSION['SubModule_page'] = "User Account Page";
	$_SESSION['Module'] = "Registration";
	$_SESSION['SubModule'] = "Useraccount";

	$dash_active = "";
} else if (isset($_GET['uhp'])) // Upload home picture
{
	$cpinactive = "active";
	$uhpactive = "active";

	$dbactive = ""; //$logoactive = $ctusactive = $ctdactive = "";

	//$regactive = $empactive = $ucactive = $privailable = "";  // Registration Tab
} else if (isset($_GET['abu'])) // About Us
{
	$cpinactive = "active";
	$abtactive = "active";

	$dbactive = "";

	//$regactive = $empactive = $ucactive = $privailable = "";  // Registration Tab
} else if (isset($_GET['lg'])) // Logo
{
	$cpinactive = "active";
	$logoactive = "active";

	$dbactive = "";

	//$regactive = $empactive = $ucactive = $privailable = "";  // Registration Tab
	
} else if (isset($_GET['call'])) // call type 
{
	$calty_active = "active";
	$call_active = "active";

	$_SESSION['SubModule_page'] = "Call Type Page";
	$_SESSION['Module'] = "Call Tpye";
	$_SESSION['SubModule'] = "call entry";

	$dash_active = "";
}

 else if (isset($_GET['ccall'])) // call type //

{
	$calty_active = "active";
	$ccall_active = "active";

	$_SESSION['SubModule_page'] = "Call Type Page";
	$_SESSION['Module'] = "Call Tpye";
	$_SESSION['SubModule'] = "call client entry";

	$dash_active = "";
}
 else if (isset($_GET['iscall'])) // call type //

{
	$calty_active = "active";
	$ist_active = "active";

	$_SESSION['SubModule_page'] = "Call Type Page";
	$_SESSION['Module'] = "Call Tpye";
	$_SESSION['SubModule'] = "Issue entry";

	$dash_active = "";
}
 else if (isset($_GET['idcall'])) // call type //

{
	$calty_active = "active";
	$isd_active = "active";

	$_SESSION['SubModule_page'] = "Call Type Page";
	$_SESSION['Module'] = "Call Tpye";
	$_SESSION['SubModule'] = "Issue details";

	$dash_active = "";
}
//perdiam call approve
 else if (isset($_GET['perd'])) //perdiam call approve
{
	$perd_active= "active";
	$perApp_active= "active";

	$_SESSION['SubModule_page'] = "Perdiem ";
	$_SESSION['Module'] = "Per-diem Call Approve";
	$_SESSION['SubModule'] = "Per-diem call approve";

	$dash_active = "";
}

?>


<body>
	<div id="wrapper">

		<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav metismenu" id="side-menu">
					<li class="nav-header">
						<div class="dropdown profile-element">
							<img alt="image" class="rounded-circle" style="width: 60px; height: 60px;" src="../upload/picture/avatar5.png" />
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<span class="block m-t-xs font-bold">xyz</span>
								<span class="text-muted text-xs block">Admin <b class="caret"></b></span>
							</a>
							<ul class="dropdown-menu animated fadeInRight m-t-xs">
								<li><a class="dropdown-item" href="#">Profile</a></li>
								<li><a class="dropdown-item" href="#">Contacts</a></li>
								<li><a class="dropdown-item" href="#">Mailbox</a></li>
								<li class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#">Logout</a></li>
							</ul>
						</div>
						<div class="logo-element"> class="active"
							ATM Portal
						</div>
					</li>
					<li class="<?php echo $dash_active; ?>">
						<a href="dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li class="<?php echo $db_active; ?>"><a href="dashboard?db=1">Dashboard</a></li>
							<li><a href="#">Main</a></li>
							<li><a href="#">Central</a></li>
							<li><a href="#">North Side</a></li>
							<li><a href="#">South Side</a></li>
							<li><a href="#">East Side</a></li>
							<li><a href="#">West Side</a></li>
							<li><a href="#">Finance</a></li>
							<li><a href="#">Human Resource</a></li>
							<li><a href="#">Project Delivery</a></li>
							<li><a href="#">Professional Service</a></li>
						</ul>
					</li>
					<li class="<?php echo $reg_active; ?>">
						<a href="#"><i class="fa fa-book"></i> <span class="nav-label">Registration</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li class="<?php echo $emp_active; ?>"><a href="../staff/employer?emp=12">Employer</a></li>
							<li><a href="#">Useraccount</a></li>
							<li><a href="#">Staff</a></li>
							<li><a href="title?tt=15">Title</a></li>
							<li><a href="#">Client</a></li>
						</ul>
					</li>
					<li class="<?php echo ""; ?>">
						<a href="#"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Manage Bank Info</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li><a href="#">Bank</a></li>
							<li><a href="#">Branch</a></li>
							<li><a href="#">Atm Terminal</a></li>
							<li><a href="#">Issue Type</a></li>
							<li><a href="#">Issue Detail</a></li>
						</ul>
					</li>
					<li class="<?php echo $calty_active; ?>">
						<a href="#"><i class="fa fa-tty"></i> <span class="nav-label">Call Type</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
						<li class="<?php echo $call_active; ?>"><a href="../staff/callEntry?call=22">Call Entry</a></li>
						<li class="<?php echo $ccall_active; ?>"><a href="../staff/clientCallEntry?ccall=23">ClientCallEntry</a></li>
						<li class="<?php echo $ist_active; ?>"><a href="../staff/IssueType?iscall=24">IssueType</a></li>
						<li class="<?php echo $isd_active; ?>"><a href="../staff/IssueDetails?idcall=25">IssueDetails</a></li>
							<li><a href="#">Assign Engineer</a></li>
							<li><a href="#">Call End</a></li>
							<li><a href="#">Forward Call</a></li>
							<li><a href="#">Per-diem Call Request</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-file"></i> <span class="nav-label">Project Delivery</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li><a href="#">Call Entry</a></li>
							<li><a href="#">Assign Engineer</a></li>
							<li><a href="#">Call End</a></li>
							<li><a href="#">Forward Call</a></li>
							<li><a href="#">Per-diem Call Request</a></li>
						</ul>
					</li>
					<li class="<?php echo $perd_active; ?>">
						<a href="#"><i class="fa fa-money"></i> <span class="nav-label">Per-diem</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li <?php echo $call_active; ?>><a href="../staff/per-diamApprove?perd=35">Perdiam Call Approve</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-comment"></i> <span class="nav-label">Phone Message</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li><a href="#">Send</a></li>
							<li><a href="#">Recieve</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-clipboard"></i> <span class="nav-label">Report</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li><a href="#">Employer</a></li>
							<li><a href="#">Call Entry</a></li>
							<li><a href="#">Call End</a></li>
							<li><a href="#">Assign Engineer</a></li>
							<li><a href="#">Finance</a></li>
							<li><a href="#">Human Resource</a></li>
							<li><a href="#">Project Delivery</a></li>
							<li><a href="#">Professional Service</a></li>
							<li><a href="#">Engineer Efficiency</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning float-right">16/24</span></a>
						<ul class="nav nav-second-level collapse">
							<li><a href="#">Inbox</a></li>
							<li><a href="#">Email view</a></li>
							<li><a href="#">Compose email</a></li>
							<li><a href="#">Email templates</a></li>
						</ul>
					</li>
				</ul>

			</div>
		</nav>
