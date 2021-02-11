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
			<div class="col-lg-12">
				<div class="ibox">
					<div class="ibox-title" >
						<h5>Call <small>Entry form</small></h5>
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
							<div class="form-group  row">
                               <label class="col-sm-2 col-form-label">Bank Name</label>
                              <div class="col-sm-4">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txtbankname" required>
												<option value=""> Select Bank... </option>
											</select>
										</div>
									</div>
								</div>
					       <!------------------------------------------------------------------->		
                                <label class="col-sm-2 col-form-label">District</label>
								<div class="col-sm-4">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txtdistrict" required>
												<option value=""> Select district... </option>
											</select>
										</div>
									</div>
								</div>
							</div>
					       <!------------------------------------------------------------------->		
							<div class="hr-line-dashed"></div>
							<div class="form-group  row">
                               <label class="col-sm-2 col-form-label">Sub-District</label>
                              <div class="col-sm-4">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txtsubdistrict" required>
												<option value=""> Select sub-district... </option>
											</select>
										</div>
									</div>
								</div>
					       <!------------------------------------------------------------------->		
                                <label class="col-sm-2 col-form-label">Branch</label>
								<div class="col-sm-4">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txtbranch" required>
												<option value=""> Select Branch... </option>
											</select>
										</div>
									</div>
								</div>
							</div>
					       <!------------------------------------------------------------------->		
							<div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">ATM Terminal.</label>
                            <div class="col-sm-4">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txtatmterminal" required>
												<option value=""> Select ATM-terminal </option>
											</select>
										</div>
									</div>
								</div>
							</div>
					       <!------------------------------------------------------------------->		
                           <div class="hr-line-dashed"></div>
                           <div class="form-group  row">
                               <label class="col-sm-2 col-form-label">Issue Category</label>
                              <div class="col-sm-4">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txtissuetype" required>
												<option value=""> Select issue type... </option>
											</select>
										</div>
									</div>
								</div>
					       <!------------------------------------------------------------------->		
                                <label class="col-sm-2 col-form-label">Issue Sub-category</label>
								<div class="col-sm-4">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txtissuedetails" required>
												<option value=""> Select Issue details... </option>
											</select>
										</div>
									</div>
								</div>
							</div>
                            <!------------------------------------------------------------------->		
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Description</label>
								<div class="col-sm-8">
                                <textarea type="text" class="form-control" name="txtdescription"></textarea>
                                </div>
							</div>
                            <!------------------------------------------------------------------->		
                           

							
							<div><hr /></div>
							
							<div class="form-group row">
								<div class="col-sm-4 col-sm-offset-2">
									<button class="btn btn-white btn-sm" type="submit">Cancel</button>
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