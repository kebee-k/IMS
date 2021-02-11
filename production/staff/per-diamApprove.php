<?php
    include('../master/header.php');
    include('../master/left-sidenav.php');
    include('../master/top-nav.php');
    
    include('../master/page_heading.php');
?>

<!--------------------- table layout start---------------->
	<div class="wrapper wrapper-content animated fadeInRight">
	  <div class="row">
		<div class="col-lg-12">
		 <div class="ibox">
			   <div class="ibox-content">
				 <div class="">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example" >
							<thead>
								<tr>
								  <th>Rendering engine</th>
										<th>Browser</th>
										<th>Platform(s)</th>
										<th>Engine version</th>
									<th>Action</th>
								</tr>
							 </thead>
							 <!------------------------------------------------------------------------------------>
							<tbody>
								<tr class="gradeX">
									<td>Trident</td>
									<td>Internet Explorer 4.0</td>
									<td>Win 95+</td>
									<td class="center">4</td>
									<td class="center"><a href="#" class="btn btn-primary btn-sm" onclick="approve_perdiam()">per_diamAppr</a>
									 <a href="#" class="btn btn-primary btn-danger" onclick="cancel_perdiem() " >Cancel</a></td>
								</tr>
								<tr class="gradeA">
									<td>Gecko</td>
									<td>Mozilla 1.3</td>
									<td>Win 95+ / OSX.1+</td>
									<td class="center">1.3</td>
									<td class="center"><a href="#" class="btn btn-primary btn-sm" onclick="approve_perdiam()">per_diamApp</a>
									<a href="#" class="btn btn-primary btn-danger" onclick="cancel_perdiem() " >Cancel</a></td>
								</tr>
								<tr class="gradeA">
									<td>Gecko</td>
									<td>Mozilla 1.2</td>
									<td>Win 95+ / OSX.1+</td>
									<td class="center">1.2</td>
									<td class="center"><a href="#" class="btn btn-primary btn-sm" onclick="approve_perdiam()">per_diamApp</a>
									 <a href="#" class="btn btn-primary btn-danger" onclick="cancel_perdiem() " >Cancel</a></td>
									</td>
								</tr>
							</tbody>
								 <!------------------------------------------------------------------------------------>
										<tfoot>
											<tr>
												<th>Rendering engine</th>
												<th>Browser</th>
												<th>Platform(s)</th>
												<th>Engine version</th>
												<th>Action</th>
											</tr>
										</tfoot>
						</table>
					</div>
				  </div>
				</div>
			</div>	
		 </div>
	</div>
<!---------------- Table layout ends here ------------------->

<!---------------- per_diam approve form start here ------------------->
<div id="perdiam_form" style="display: none;">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title" >
                        <h5>per_diam<small>Approve form</small></h5>
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
                          <!-- ----------------------------------------------------------------- -->      
								<div class="form-group row">
										<label class="col-sm-2 col-form-label">Amount</label>
										<div class="col-sm-4">
											<div class="row">
											    <div class="col-md-12" >
											       <input type="text" class="form-control" name="txtamount">
												</div>
											</div>
										</div>
									<!-- ----------------------------------------------------------------- -->
									<label class="col-sm-2 col-form-label">Distance(KM)</label>
										<div class="col-sm-4">
											<div class="row">
											   <input type="text" class="form-control" name="txtdistance">
											</div>
										</div>
								</div>                             
			                  <!-- ----------------------------------------------------------------- -->   
								<div class="hr-line-dashed"></div>
								<div class="form-group row">
											<label class="col-sm-2 col-form-label">PaymentType</label>
											<div class="col-sm-4">
												<div class="row">
													<div class="col-md-12">
														<select class="chosen-select" name="txtpaymenttype" required>
															<option value=""> Select payment type... </option>
															<option value=""> By check</option>
															<option value=""> Account </option>
															<option value=""> In cash </option>
														</select>
													</div>
												</div>
											</div>                              
										</div>
			                  <!-- ----------------------------------------------------------------- -->                         
								<div class="hr-line-dashed"></div>
								<div class="form-group  row"><label class="col-sm-2 col-form-label"> CancelReasen</label>
									<div class="col-sm-8">
									<textarea type="text" class="form-control" name="txtperdiamreasen"></textarea>
									</div>
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
    <!-- ./wrapper -->
<!---------------- Assign engineer form ends here ------------------->   
<script>

    function approve_perdiam() {
       var e = document.getElementById("perdiam_form");
	  
       if(e.style.display == 'none')
         e.style.display = 'block';
    }
	function cancel_perdiem() {
	var a = document.getElementById("perdiam_form");
	      if(a.style.display == 'block')
		  a.style.display = 'none';
	}
</script>  
</div>
</div>
    
<?php
    include('../master/footer.php');
?>