<?php
	include('../master/header.php');
	include('../master/left-sidenav.php');
	include('../master/top-nav.php');
	
	include('../master/page_heading.php');
?>

	<div class="wrapper wrapper-content animated fadeInRight">
		
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox">
					<div class="ibox-title" >
						<h5>Employer <small>registration form</small></h5>
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
							<div class="form-group  row"><label class="col-sm-2 col-form-label">Employer No.</label>
								<div class="col-sm-4"><input type="text" class="form-control" name="txtempno"></div>
							</div>
							
							<div class="hr-line-dashed"></div>
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">First Name</label>
								<div class="col-sm-4">
									<div class="row">
										<div class="col-md-12"><input type="text" placeholder="" class="form-control" name="txtfname" required></div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
								<label class="col-sm-2 col-form-label">Sur Name</label>
								<div class="col-sm-4">
									<div class="row">
										<div class="col-md-12"><input type="text" placeholder="" class="form-control" name="txtlname" required></div>
									</div>
								</div>
							</div>
							
							<div class="hr-line-dashed"></div>
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Gender</label>
								<div class="col-sm-4">
									<div class="row">
										<div class="col-md-12">
											<div class="radio radio-info" style="padding-top: 9px;">
												<input type="radio" id="inlineRadio1" value="Male" name="txtgender" checked="">
												<label for="inlineRadio1"> Male </label>
												&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="radio" id="inlineRadio2" value="Female" name="txtgender">
												<label for="inlineRadio2"> Female </label>
											</div>
										</div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
								<label class="col-sm-2 col-form-label">Email Address</label>
								<div class="col-sm-4">
									<div class="row">
										<div class="col-md-12"><input type="email" placeholder="" class="form-control" name="txtemailadd" required></div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
							</div>
							
							<div class="hr-line-dashed"></div>
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Phone No.</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" data-mask="+251 999 999999" placeholder="" name="txtphnone" required>
									<!-- <span class="form-text">(999) 999-9999</span> -->
								</div>
								<!-- ----------------------------------------------------------------- -->
								<label class="col-sm-1 col-form-label">Date of birth</label>
								<div class="col-sm-3">
									<div class="form-group" id="data_1">
										<div class="input-group date">
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											<input type="text" class="form-control" value="<?php echo date("m/d/Y"); ?>" name="txtdob">
										</div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
								<label class="col-sm-1 col-form-label">Bank Account No.</label>
								<div class="col-sm-3">
									<div class="row">
										<div class="col-md-12"><input type="text" placeholder="" class="form-control" name="txtbkaccno" required></div>
									</div>
								</div>
							</div>
							
							<div class="hr-line-dashed"></div>
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Location/Address</label>
								<div class="col-sm-4">
									<div class="row">
										<div class="col-md-12"><input type="text" placeholder="" class="form-control" name="txtaddress" required></div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
								<label class="col-sm-2 col-form-label">Wereda</label>
								<div class="col-sm-4">
									<div class="row">
										<div class="col-md-12"><input type="email" placeholder="" class="form-control" name="txtwereda" required></div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
							</div>
							
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><strong><em>Educational Background</em></strong></label>
								<div class="col-sm-9">
									<div class="row">
										<div class="col-md-12"><hr /></div>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Field of Study</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" placeholder="" name="txtfod" required>
								</div>
								<!-- ----------------------------------------------------------------- -->
								<label class="col-sm-1 col-form-label">Education Level</label>
								<div class="col-sm-3">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txtedulevel" required>
												<option value=""> Select education level... </option>
												<option value="Certificate"> Certificate </option>
												<option value="Diploma"> Diploma </option>
												<option value="Associate Degree"> Associate Degree </option>
												<option value="Bachelor's Degree"> Bachelor's Degree </option>
												<option value="Post-Baccalaureate Certificate"> Post-Baccalaureate Certificate </option>
												<option value="Graduate Degree"> Graduate Degree </option>
												<option value="Master's Degree"> Master's Degree </option>
												<option value="Post-Master's Certificate"> Post-Master's Certificate </option>
												<option value="Doctorate Degree"> Doctorate Degree </option>
											</select>
										</div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
								<label class="col-sm-1 col-form-label">Experience</label>
								<div class="col-sm-2">
									<div class="row">
										<div class="col-md-12"><input type="number" min="0" placeholder="" class="form-control" name="txtexperience" required></div>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><strong><em>Occupation Info</em></strong></label>
								<div class="col-sm-9">
									<div class="row">
										<div class="col-md-12"><hr /></div>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Staff</label>
								<div class="col-sm-4">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txtstaff" required>
												<option value=""> Select staff... </option>
											</select>
										</div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
								<label class="col-sm-2 col-form-label">Title</label>
								<div class="col-sm-4">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txttitle" required>
												<option value=""> Select title... </option>
											</select>
										</div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
							</div>
							
							<div class="hr-line-dashed"></div>
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">District</label>
								<div class="col-sm-2">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txtdist" required>
												<option value=""> Select district... </option>
											</select>
										</div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
								<label class="col-sm-1 col-form-label">Sub-district</label>
								<div class="col-sm-3">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txtsubdist" required>
												<option value=""> Select sub-district... </option>
											</select>
										</div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
								<label class="col-sm-1 col-form-label">Level</label>
								<div class="col-sm-3">
									<div class="row">
										<div class="col-md-12">
											<select class="chosen-select" name="txtlevel" required>
												<option value=""> Select level... </option>
											</select>
										</div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
							</div>
							
							<div class="hr-line-dashed"></div>
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Enrollment Date</label>
								<div class="col-sm-4">
									<div class="form-group" id="data_1">
										<div class="input-group date">
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											<input type="text" class="form-control" value="<?php echo date("m/d/Y"); ?>" name="txtenrolDate">
										</div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
								<label class="col-sm-2 col-form-label">Set Useraccount</label>
								<div class="col-sm-4">
									<div class="row">
										<div class="col-md-12">
											<input type="checkbox" class="js-switch" />
										</div>
									</div>
								</div>
								<!-- ----------------------------------------------------------------- -->
							</div>
							
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
	<!-- ./wrapper -->
	
	
	
<?php
	include('../master/footer.php');
?>