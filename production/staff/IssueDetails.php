<?php
	include('../master/header.php');
	include('../master/left-sidenav.php');
	include('../master/top-nav.php');
	
	include('../master/page_heading.php');
?>
<!--class of wrapper-->
	<div class="wrapper wrapper-content animated fadeInRight">
	<!-- row -->	
    <div class="row">
			<div class="col-lg-7">
				<div class="ibox">
					<div class="ibox-title" >
						<h5>Issue Details<small>Entry form</small></h5>
						<div class="ibox-tools">
							<a class="collapse-link">
								<i class="fa fa-chevron-up"></i>
							</a>
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="fa fa-wrench"></i>
							</a>
							<ul class="dropdown-menu dropdown-user">
								<li><a href="#" class="dropdown-item">Config option 1</a>
								</li>
								<li><a href="#" class="dropdown-item">Config option 2</a>
								</li>
							</ul>
							<!--
							<a class="close-link">
								<i class="fa fa-times"></i>
							</a>
							-->
						</div>
					</div>
					
					<div class="ibox-content">
					
						<form method="get">
							<div class="form-group  row"><label class="col-sm-3 col-form-label">Issue Category</label>
								 <div class="col-sm-7">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txissuetype" required>
												<option value=""> Select Issue type... </option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<!--------------------------------------------------------->
							<div class="hr-line-dashed"></div>
							<div class="form-group  row"><label class="col-sm-3 col-form-label">Issue Sub-category</label>
								<div class="col-sm-7"><input type="text" class="form-control" name="txtissuedetails"></div>
							</div>
							<!--------------------------------------------------------->
							<div><hr /></div>
							<div class="form-group row">
								<div class="col-sm-4 col-sm-offset-2">
									<button class="btn btn-primary btn-sm" type="submit">Save changes</button>
								</div>
							</div>
						
						</form>
						<!-- ./from -->
					</div>
					<!-- ./ibox-content -->
				</div>
				<!-- ./ibox -->
			</div>
			<!-- ./col-lg- -->
		</div>
		<!-- ./row -->
	</div>
	
	
	
<?php
	include('../master/footer.php');
?>
