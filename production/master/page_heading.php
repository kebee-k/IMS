	
<?php
	$submodule_page = $_SESSION['SubModule_page'];
	$module = $_SESSION['Module'];
	$submodule = $_SESSION['SubModule'];		
?>	
			
	<div class="row wrapper border-bottom white-bg page-heading">
		<div class="col-lg-10">
			<h2><?php if ($submodule_page != "") echo $submodule_page; ?></h2>
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="#"><?php if ($module != "") echo $module; ?></a>
				</li>
				<li class="breadcrumb-item active">
					<strong><?php if ($submodule != "") echo $submodule; ?></strong>
				</li>
				<!--
				<li class="breadcrumb-item active">
					<strong>Basic Form</strong>
				</li>
				-->
			</ol>
		</div>
		<div class="col-lg-2">

		</div>
	</div>

