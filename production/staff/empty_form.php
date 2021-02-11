	
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>All form elements <small>With custom checbox and radion elements.</small></h5>
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
						<div class="form-group  row"><label class="col-sm-2 col-form-label">Normal</label>
							<div class="col-sm-10"><input type="text" class="form-control"></div>
						</div>
						
						<div class="hr-line-dashed"></div>
						
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Field 1</label>
							<div class="col-sm-4">
								<div class="row">
									<div class="col-md-12"><input type="text" placeholder="" class="form-control" name=""></div>
								</div>
							</div>
							<!-- ----------------------------------------------------------------- -->
							<label class="col-sm-2 col-form-label">Field 2</label>
							<div class="col-sm-4">
								<div class="row">
									<div class="col-md-12"><input type="text" placeholder="" class="form-control" name=""></div>
								</div>
							</div>
						</div>
						
						<div class="hr-line-dashed"></div>
						
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-4">
								<div class="row">
									<div class="col-md-12"><input type="password" placeholder="" class="form-control" name=""></div>
								</div>
							</div>
							<!-- ----------------------------------------------------------------- -->
							<label class="col-sm-2 col-form-label">Placeholder</label>
							<div class="col-sm-4">
								<div class="row">
									<div class="col-md-12"><input type="text" placeholder="placeholder" class="form-control"></div>
								</div>
							</div>
						</div>
						
						<div class="hr-line-dashed"></div>
                                
						<div class="form-group row"><label class="col-lg-2 col-form-label">Disabled</label>

							<div class="col-lg-10"><input type="text" disabled="" placeholder="Disabled input here..." class="form-control"></div>
						</div>
						
						<div class="hr-line-dashed"></div>
                                
						<div class="form-group row"><label class="col-lg-2 col-form-label">Static control</label>
							<div class="col-lg-10"><p class="form-control-static">email@example.com</p></div>
						</div>
                                
						<div class="hr-line-dashed"></div>
                                
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">
								Checkboxes and radios <br/>
								<small class="text-navy">Normal Bootstrap elements</small>
							</label>

							<div class="col-sm-10">
								<div><label> <input type="checkbox" value=""> Option one is this and that&mdash;be sure to include why it's great </label></div>
								<div><label> <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one is this and that&mdash;be sure to
									include why it's great </label>
								</div>
								<div><label> <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two can be something else and selecting it will
									deselect option one </label>
								</div>
							</div>
						</div>
						
						<div class="hr-line-dashed"></div>
                                
						<div class="form-group row"><label class="col-sm-2 col-form-label">Inline checkboxes</label>
							<div class="col-sm-10">
								<label> <input type="checkbox" value="option1" id="inlineCheckbox1"> a </label> 
								<label class="checkbox-inline"> <input type="checkbox" value="option2" id="inlineCheckbox2"> b </label> 
								<label> <input type="checkbox" value="option3" id="inlineCheckbox3"> c </label>
							</div>
						</div>
                                
						<div class="hr-line-dashed"></div>
						
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Checkboxes &amp; radios <br/><small class="text-navy">Custom elements</small></label>
							<div class="col-sm-10">
								<div class="i-checks"><label> <input type="checkbox" value=""> <i></i> Option one </label></div>
								<div class="i-checks"><label> <input type="checkbox" value="" checked=""> <i></i> Option two checked </label></div>
								<div class="i-checks"><label> <input type="checkbox" value="" disabled="" checked=""> <i></i> Option three checked and disabled </label></div>
								<div class="i-checks"><label> <input type="checkbox" value="" disabled=""> <i></i> Option four disabled </label></div>
								<div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Option one </label></div>
								<div class="i-checks"><label> <input type="radio" checked="" value="option2" name="a"> <i></i> Option two checked </label></div>
								<div class="i-checks"><label> <input type="radio" disabled="" checked="" value="option2"> <i></i> Option three checked and disabled </label></div>
								<div class="i-checks"><label> <input type="radio" disabled="" name="a"> <i></i> Option four disabled </label></div>
							</div>
						</div>
                                
						<div class="hr-line-dashed"></div>
						
						<div class="form-group row"><label class="col-sm-2 col-form-label">Select</label>
							<div class="col-sm-10">
								<select class="form-control m-b" name="account">
									<option>option 1</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
								</select>
							</div>
						</div>
								
						<div class="hr-line-dashed"></div>
						
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Search Select</label>
							<div class="col-sm-4">
								<div class="row">
									<div class="col-md-12">
										<select data-placeholder="Choose a Country..." class="chosen-select"  tabindex="2"> <!-- multiple -->
											<option value="">Select</option>
											<option value="United States">United States</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Aland Islands">Aland Islands</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Anguilla">Anguilla</option>
											<option value="Antarctica">Antarctica</option>
											<option value="Antigua and Barbuda">Antigua and Barbuda</option>
											<option value="Argentina">Argentina</option>
											<option value="Armenia">Armenia</option>
											<option value="Aruba">Aruba</option>
											<option value="Australia">Australia</option>
											<option value="Austria">Austria</option>
											<option value="Azerbaijan">Azerbaijan</option>
											<option value="Bahamas">Bahamas</option>
											<option value="Bahrain">Bahrain</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belarus">Belarus</option>
											<option value="Belgium">Belgium</option>
											<option value="Belize">Belize</option>
											<option value="Benin">Benin</option>
											<option value="Bermuda">Bermuda</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
											<option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
											<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
											<option value="Botswana">Botswana</option>
											<option value="Bouvet Island">Bouvet Island</option>
											<option value="Brazil">Brazil</option>
											<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
											<option value="Brunei Darussalam">Brunei Darussalam</option>
											<option value="Bulgaria">Bulgaria</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burundi">Burundi</option>
											<option value="Cambodia">Cambodia</option>
											<option value="Cameroon">Cameroon</option>
											<option value="Canada">Canada</option>
											<option value="Cape Verde">Cape Verde</option>
											<option value="Cayman Islands">Cayman Islands</option>
											<option value="Central African Republic">Central African Republic</option>
											<option value="Chad">Chad</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Christmas Island">Christmas Island</option>
											<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
											<option value="Colombia">Colombia</option>
											<option value="Comoros">Comoros</option>
											<option value="Congo">Congo</option>
											<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
											<option value="Cook Islands">Cook Islands</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Cote D'ivoire">Cote D'ivoire</option>
											<option value="Croatia">Croatia</option>
											<option value="Cuba">Cuba</option>
											<option value="Curacao">Curacao</option>
											<option value="Cyprus">Cyprus</option>
											<option value="Czech Republic">Czech Republic</option>
											<option value="Denmark">Denmark</option>
											<option value="Djibouti">Djibouti</option>
											<option value="Dominica">Dominica</option>
											<option value="Dominican Republic">Dominican Republic</option>
											<option value="Ecuador">Ecuador</option>
											<option value="Egypt">Egypt</option>
											<option value="El Salvador">El Salvador</option>
											<option value="Equatorial Guinea">Equatorial Guinea</option>
											<option value="Eritrea">Eritrea</option>
											<option value="Estonia">Estonia</option>
											<option value="Ethiopia">Ethiopia</option>
											<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
											<option value="Faroe Islands">Faroe Islands</option>
											<option value="Fiji">Fiji</option>
											<option value="Finland">Finland</option>
											<option value="France">France</option>
											<option value="French Guiana">French Guiana</option>
											<option value="French Polynesia">French Polynesia</option>
											<option value="French Southern Territories">French Southern Territories</option>
											<option value="Gabon">Gabon</option>
											<option value="Gambia">Gambia</option>
											<option value="Georgia">Georgia</option>
											<option value="Germany">Germany</option>
											<option value="Ghana">Ghana</option>
											<option value="Gibraltar">Gibraltar</option>
											<option value="Greece">Greece</option>
											<option value="Greenland">Greenland</option>
											<option value="Grenada">Grenada</option>
											<option value="Guadeloupe">Guadeloupe</option>
											<option value="Guam">Guam</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guernsey">Guernsey</option>
											<option value="Guinea">Guinea</option>
											<option value="Guinea-bissau">Guinea-bissau</option>
											<option value="Guyana">Guyana</option>
											<option value="Haiti">Haiti</option>
											<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
											<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong">Hong Kong</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="India">India</option>
											<option value="Indonesia">Indonesia</option>
											<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
											<option value="Iraq">Iraq</option>
											<option value="Ireland">Ireland</option>
											<option value="Isle of Man">Isle of Man</option>
											<option value="Israel">Israel</option>
											<option value="Italy">Italy</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japan">Japan</option>
											<option value="Jersey">Jersey</option>
											<option value="Jordan">Jordan</option>
											<option value="Kazakhstan">Kazakhstan</option>
											<option value="Kenya">Kenya</option>
											<option value="Kiribati">Kiribati</option>
											<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
											<option value="Korea, Republic of">Korea, Republic of</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Kyrgyzstan">Kyrgyzstan</option>
											<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
											<option value="Latvia">Latvia</option>
											<option value="Lebanon">Lebanon</option>
											<option value="Lesotho">Lesotho</option>
											<option value="Liberia">Liberia</option>
											<option value="Libya">Libya</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lithuania">Lithuania</option>
											<option value="Luxembourg">Luxembourg</option>
											<option value="Macao">Macao</option>
											<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
											<option value="Madagascar">Madagascar</option>
											<option value="Malawi">Malawi</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Maldives">Maldives</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Marshall Islands">Marshall Islands</option>
											<option value="Martinique">Martinique</option>
											<option value="Mauritania">Mauritania</option>
											<option value="Mauritius">Mauritius</option>
											<option value="Mayotte">Mayotte</option>
											<option value="Mexico">Mexico</option>
											<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
											<option value="Moldova, Republic of">Moldova, Republic of</option>
											<option value="Monaco">Monaco</option>
											<option value="Mongolia">Mongolia</option>
											<option value="Montenegro">Montenegro</option>
											<option value="Montserrat">Montserrat</option>
											<option value="Morocco">Morocco</option>
											<option value="Mozambique">Mozambique</option>
											<option value="Myanmar">Myanmar</option>
											<option value="Namibia">Namibia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Netherlands">Netherlands</option>
											<option value="New Caledonia">New Caledonia</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="Niger">Niger</option>
											<option value="Nigeria">Nigeria</option>
											<option value="Niue">Niue</option>
											<option value="Norfolk Island">Norfolk Island</option>
											<option value="Northern Mariana Islands">Northern Mariana Islands</option>
											<option value="Norway">Norway</option>
											<option value="Oman">Oman</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Palau">Palau</option>
											<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
											<option value="Panama">Panama</option>
											<option value="Papua New Guinea">Papua New Guinea</option>
											<option value="Paraguay">Paraguay</option>
											<option value="Peru">Peru</option>
											<option value="Philippines">Philippines</option>
											<option value="Pitcairn">Pitcairn</option>
											<option value="Poland">Poland</option>
											<option value="Portugal">Portugal</option>
											<option value="Puerto Rico">Puerto Rico</option>
											<option value="Qatar">Qatar</option>
											<option value="Reunion">Reunion</option>
											<option value="Romania">Romania</option>
											<option value="Russian Federation">Russian Federation</option>
											<option value="Rwanda">Rwanda</option>
											<option value="Saint Barthelemy">Saint Barthelemy</option>
											<option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
											<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
											<option value="Saint Lucia">Saint Lucia</option>
											<option value="Saint Martin (French part)">Saint Martin (French part)</option>
											<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
											<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
											<option value="Samoa">Samoa</option>
											<option value="San Marino">San Marino</option>
											<option value="Sao Tome and Principe">Sao Tome and Principe</option>
											<option value="Saudi Arabia">Saudi Arabia</option>
											<option value="Senegal">Senegal</option>
											<option value="Serbia">Serbia</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Sierra Leone">Sierra Leone</option>
											<option value="Singapore">Singapore</option>
											<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
											<option value="Slovakia">Slovakia</option>
											<option value="Slovenia">Slovenia</option>
											<option value="Solomon Islands">Solomon Islands</option>
											<option value="Somalia">Somalia</option>
											<option value="South Africa">South Africa</option>
											<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
											<option value="South Sudan">South Sudan</option>
											<option value="Spain">Spain</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="Sudan">Sudan</option>
											<option value="Suriname">Suriname</option>
											<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
											<option value="Swaziland">Swaziland</option>
											<option value="Sweden">Sweden</option>
											<option value="Switzerland">Switzerland</option>
											<option value="Syrian Arab Republic">Syrian Arab Republic</option>
											<option value="Taiwan, Province of China">Taiwan, Province of China</option>
											<option value="Tajikistan">Tajikistan</option>
											<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
											<option value="Thailand">Thailand</option>
											<option value="Timor-leste">Timor-leste</option>
											<option value="Togo">Togo</option>
											<option value="Tokelau">Tokelau</option>
											<option value="Tonga">Tonga</option>
											<option value="Trinidad and Tobago">Trinidad and Tobago</option>
											<option value="Tunisia">Tunisia</option>
											<option value="Turkey">Turkey</option>
											<option value="Turkmenistan">Turkmenistan</option>
											<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
											<option value="Tuvalu">Tuvalu</option>
											<option value="Uganda">Uganda</option>
											<option value="Ukraine">Ukraine</option>
											<option value="United Arab Emirates">United Arab Emirates</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States">United States</option>
											<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
											<option value="Uruguay">Uruguay</option>
											<option value="Uzbekistan">Uzbekistan</option>
											<option value="Vanuatu">Vanuatu</option>
											<option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
											<option value="Viet Nam">Viet Nam</option>
											<option value="Virgin Islands, British">Virgin Islands, British</option>
											<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
											<option value="Wallis and Futuna">Wallis and Futuna</option>
											<option value="Western Sahara">Western Sahara</option>
											<option value="Yemen">Yemen</option>
											<option value="Zambia">Zambia</option>
											<option value="Zimbabwe">Zimbabwe</option>
										</select>
									</div>
								</div>
							</div>
							<!-- ----------------------------------------------------------------- -->
							<label class="col-sm-2 col-form-label">Placeholder</label>
							<div class="col-sm-4">
								<div class="row">
									<div class="col-md-12"><input type="text" placeholder="placeholder" class="form-control"></div>
								</div>
							</div>
						</div>
						
						<div class="hr-line-dashed"></div>
						
						<div class="form-group row has-success"><label class="col-sm-2 col-form-label">Input with success</label>
							<div class="col-sm-10"><input type="text" class="form-control"></div>
						</div>
                                
						<div class="hr-line-dashed"></div>
                        
						<div class="form-group row has-warning"><label class="col-sm-2 col-form-label">Input with warning</label>
							<div class="col-sm-10"><input type="text" class="form-control"></div>
						</div>
                                
						<div class="hr-line-dashed"></div>
						
						<div class="form-group  row has-error"><label class="col-sm-2 col-form-label">Input with error</label>
							<div class="col-sm-10"><input type="text" class="form-control"></div>
						</div>
                                
						<div class="hr-line-dashed"></div>
						
						<div class="form-group row"><label class="col-sm-2 col-form-label">Input groups</label>
							<div class="col-sm-10">
								<div class="input-group m-b">
									<div class="input-group-prepend">
										<span class="input-group-addon">@</span>
									</div>
									<input type="text" placeholder="Username" class="form-control">
								</div>
								<div class="input-group m-b">
									<input type="text" class="form-control">
									<div class="input-group-append">
										<span class="input-group-addon">.00</span>
										</div>
									</div>
								<div class="input-group m-b">
									<div class="input-group-prepend">
										<span class="input-group-addon">$</span>
									</div>
									<input type="text" class="form-control">
									<div class="input-group-append">
										<span class="input-group-addon">.00</span>
									</div>
								</div>
								<div class="input-group m-b">
									<div class="input-group-prepend">
										<span class="input-group-addon">
										<input type="checkbox">
											</span>
									</div>
									<input type="text" class="form-control">
								</div>
								<div class="input-group m-b">
									<div class="input-group-prepend">
										<span class="input-group-addon">
										<input type="radio">
											</span>
									</div>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
                                
						<div class="hr-line-dashed"></div>
                                
						<div class="form-group row"><label class="col-sm-2 col-form-label">Button addons</label>
							<div class="col-sm-10">
								<div class="input-group m-b"><span class="input-group-prepend">
									<button type="button" class="btn btn-primary">Go!</button> </span> <input type="text" class="form-control">
								</div>
								<div class="input-group"><input type="text" class="form-control"> <span class="input-group-append"> <button type="button" class="btn btn-primary">Go!
								</button> </span></div>
							</div>
						</div>
                                
						<div class="hr-line-dashed"></div>
                        
						<div class="form-group row"><label class="col-sm-2 col-form-label">With dropdowns</label>
							<div class="col-sm-10">
								<div class="input-group m-b">
									<div class="input-group-prepend">
										<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">Action </button>
										<ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="dropdown-divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
									 <input type="text" class="form-control">
								 </div>
								
								<div class="input-group"><input type="text" class="form-control">
									<div class="input-group-append">
										<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">Action </button>
										<ul class="dropdown-menu float-right">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="dropdown-divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
                                
						<div class="hr-line-dashed"></div>
                                
						<div class="form-group row"><label class="col-sm-2 col-form-label">Segmented</label>
							<div class="col-sm-10">
								<div class="input-group m-b">
									<div class="input-group-prepend">
										<button tabindex="-1" class="btn btn-white" type="button">Action</button>
										<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button"></button>
										<ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="dropdown-divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
									<input type="text" class="form-control">
								</div>
								
								<div class="input-group"><input type="text" class="form-control">
									<div class="input-group-append">
										<button tabindex="-1" class="btn btn-white" type="button">Action</button>
										<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button"></button>
										<ul class="dropdown-menu float-right">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="dropdown-divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
                                
						<div class="hr-line-dashed"></div>
						
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-4">
								<div class="row">
									<div class="col-md-12"><input type="password" placeholder="" class="form-control" name=""></div>
								</div>
							</div>
							<!-- ----------------------------------------------------------------- -->
							<label class="col-sm-2 col-form-label">Placeholder</label>
							<div class="col-sm-4">
								<div class="row">
									<div class="col-md-12"><input type="text" placeholder="placeholder" class="form-control"></div>
								</div>
							</div>
						</div>
						
						<div class="hr-line-dashed"></div>
                                
						<div class="form-group row"><label class="col-lg-2 col-form-label">Disabled</label>

							<div class="col-lg-10"><input type="text" disabled="" placeholder="Disabled input here..." class="form-control"></div>
						</div>
						
						<div class="hr-line-dashed"></div>
						
						<div class="ibox-content">
                            <h3>
                                Data picker
                            </h3>
                            <p>
                                Simple and easy select a time for a text input using your mouse.
                            </p>

                            <div class="form-group" id="data_1">
                                <label class="font-normal">Simple data input format</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
                                </div>
                            </div>

                            <div class="form-group" id="data_2">
                                <label class="font-normal">One Year view</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="08/09/2014">
                                </div>
                            </div>

                            <div class="form-group" id="data_3">
                                <label class="font-normal">Decade view</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="10/11/2013">
                                </div>
                            </div>

                            <div class="form-group" id="data_4">
                                <label class="font-normal">Month select</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                </div>
                            </div>

                            <div class="form-group" id="data_5">
                                <label class="font-normal">Range select</label>
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="form-control-sm form-control" name="start" value="05/14/2014"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="form-control-sm form-control" name="end" value="05/22/2014" />
                                </div>
                            </div>
                        </div>
						
						<div class="hr-line-dashed"></div>
						
						<div class="ibox-content">
                            <h3>
                                Input Mask
                            </h3>
                            <p>
                                Input masks allows a user to more easily enter data where you would like them to enter the data in a certain format.
                            </p>
                            
							<div class="form-group row">
								<label class="col-sm-2 col-sm-2 col-form-label">ISBN 1</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="">
									<span class="form-text">999-99-999-9999-9</span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">ISBN 2</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" data-mask="999 99 999 9999 9" placeholder="">
									<span class="form-text">999 99 999 9999 9</span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">ISBN 3</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" data-mask="999/99/999/9999/9" placeholder="">
									<span class="form-text">999/99/999/9999/9</span>
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">IPV4</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" data-mask="999.999.999.9999" placeholder="">
									<span class="form-text">192.168.100.200</span>
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Tax ID</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" data-mask="99-9999999" placeholder="">
									<span class="form-text">99-9999999</span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Phone</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" data-mask="+251 999 999999" placeholder="">
									<span class="form-text">(999) 999-9999</span>
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Currency</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" data-mask="$ 999,999,999.99" placeholder="">
									<span class="form-text">$ 999,999,999.99</span>
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Date</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" data-mask="99/99/9999" placeholder="">
									<span class="form-text">dd/mm/yyyy</span>
								</div>
							</div>
                        </div>
						
						<div class="hr-line-dashed"></div>
						
						<div class="ibox-content">
							<h3>
								Switcher
							</h3>
							<p>
								Is iOS 7 style switches for your checkboxes.
							</p>
							<input type="checkbox" class="js-switch" checked />
							<input type="checkbox" class="js-switch_2" checked />
							<br/>
							<br/>
							<input type="checkbox" class="js-switch_3"  />
							<input type="checkbox" class="js-switch_4" checked />
						</div>
						
						<div class="hr-line-dashed"></div>
						
						<div class="ibox-content">
                            <h4>
                                Custom switch
                            </h4>
                            <p>
                                Pure CSS3 On/Off flipswitches with animated transitions.
                            </p>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked class="onoffswitch-checkbox" id="example1">
                                    <label class="onoffswitch-label" for="example1">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" class="onoffswitch-checkbox" id="example2">
                                    <label class="onoffswitch-label" for="example2">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked disabled class="onoffswitch-checkbox" id="example3">
                                    <label class="onoffswitch-label" for="example3">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" disabled class="onoffswitch-checkbox" id="example4">
                                    <label class="onoffswitch-label" for="example4">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>

                        </div>
						
						<div class="hr-line-dashed"></div>
						
						<div class="ibox-content">

                            <div class="row">
                                <div class="col-md-4">
                                    <fieldset>
                                        <h3>
                                            Basic
                                        </h3>
                                        <p>
                                            Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc.
                                        </p>
                                        <div class="checkbox">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">
                                                Default
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox2" type="checkbox" checked="">
                                            <label for="checkbox2">
                                                Primary
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3">
                                                Success
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox4" type="checkbox">
                                            <label for="checkbox4">
                                                Info
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-warning">
                                            <input id="checkbox5" type="checkbox" checked="">
                                            <label for="checkbox5">
                                                Warning
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-danger">
                                            <input id="checkbox6" type="checkbox" checked="">
                                            <label for="checkbox6">
                                                Check me out
                                            </label>
                                        </div>
                                        
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset>
                                        <h3>
                                            Circled
                                        </h3>
                                        <p>
                                            <code>.checkbox-circle</code> for roundness.
                                        </p>
                                        <div class="checkbox checkbox-circle">
                                            <input id="checkbox7" type="checkbox">
                                            <label for="checkbox7">
                                                Simply Rounded
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="checkbox8" type="checkbox" checked="">
                                            <label for="checkbox8">
                                                Me too
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset>
                                        <h3>
                                            Radio
                                        </h3>
                                        <p>
                                            Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code> etc.
                                        </p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="radio">
                                                    <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                                    <label for="radio1">
                                                        Small
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                                    <label for="radio2">
                                                        Big
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="radio2" id="radio3" value="option1">
                                                    <label for="radio3">
                                                        Next
                                                    </label>
                                                </div>
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="radio2" id="radio4" value="option2" checked="">
                                                    <label for="radio4">
                                                        One
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Radios without label text</p>
                                        <div class="radio">
                                            <input type="radio" id="singleRadio1" value="option1" name="radioSingle1" aria-label="Single radio One">
                                            <label></label>
                                        </div>
                                        <div class="radio radio-success">
                                            <input type="radio" id="singleRadio2" value="option2" name="radioSingle1" checked="" aria-label="Single radio Two">
                                            <label></label>
                                        </div>
                                        <p>Inline radios</p>
                                        <div class="radio radio-info">
                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                            <label for="inlineRadio1"> Inline One </label>
                                        </div>
                                        <div class="radio">
                                            <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                            <label for="inlineRadio2"> Inline Two </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                        </div>
						
						<div class="hr-line-dashed"></div>
						
						<div class="row">
							<div class="col-lg-12">
								<div class="ibox ">
									<div class="ibox-title">
										<h5>Basic Data Tables example with responsive plugin</h5>
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
											<a class="close-link">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									
									<div class="ibox-content">
										<div class="table-responsive">
											<table class="table table-striped table-bordered table-hover dataTables-example" >
												<thead>
													<tr>
														<th>Rendering engine</th>
														<th>Browser</th>
														<th>Platform(s)</th>
														<th>Engine version</th>
														<th>CSS grade</th>
													</tr>
												</thead>
												<tbody>
													<tr class="gradeX">
														<td>Trident</td>
														<td>Internet
															Explorer 4.0
														</td>
														<td>Win 95+</td>
														<td class="center">4</td>
														<td class="center">X</td>
													</tr>
													<tr class="gradeC">
														<td>Trident</td>
														<td>Internet
															Explorer 5.0
														</td>
														<td>Win 95+</td>
														<td class="center">5</td>
														<td class="center">C</td>
													</tr>
													<tr class="gradeA">
														<td>Trident</td>
														<td>Internet
															Explorer 5.5
														</td>
														<td>Win 95+</td>
														<td class="center">5.5</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Trident</td>
														<td>Internet
															Explorer 6
														</td>
														<td>Win 98+</td>
														<td class="center">6</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Trident</td>
														<td>Internet Explorer 7</td>
														<td>Win XP SP2+</td>
														<td class="center">7</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Trident</td>
														<td>AOL browser (AOL desktop)</td>
														<td>Win XP</td>
														<td class="center">6</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Firefox 1.0</td>
														<td>Win 98+ / OSX.2+</td>
														<td class="center">1.7</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Firefox 1.5</td>
														<td>Win 98+ / OSX.2+</td>
														<td class="center">1.8</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Firefox 2.0</td>
														<td>Win 98+ / OSX.2+</td>
														<td class="center">1.8</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Firefox 3.0</td>
														<td>Win 2k+ / OSX.3+</td>
														<td class="center">1.9</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Camino 1.0</td>
														<td>OSX.2+</td>
														<td class="center">1.8</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Camino 1.5</td>
														<td>OSX.3+</td>
														<td class="center">1.8</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Netscape 7.2</td>
														<td>Win 95+ / Mac OS 8.6-9.2</td>
														<td class="center">1.7</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Netscape Browser 8</td>
														<td>Win 98SE+</td>
														<td class="center">1.7</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Netscape Navigator 9</td>
														<td>Win 98+ / OSX.2+</td>
														<td class="center">1.8</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Mozilla 1.0</td>
														<td>Win 95+ / OSX.1+</td>
														<td class="center">1</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Mozilla 1.1</td>
														<td>Win 95+ / OSX.1+</td>
														<td class="center">1.1</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Mozilla 1.2</td>
														<td>Win 95+ / OSX.1+</td>
														<td class="center">1.2</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Mozilla 1.3</td>
														<td>Win 95+ / OSX.1+</td>
														<td class="center">1.3</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Mozilla 1.2</td>
														<td>Win 95+ / OSX.1+</td>
														<td class="center">1.2</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Mozilla 1.3</td>
														<td>Win 95+ / OSX.1+</td>
														<td class="center">1.3</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Mozilla 1.2</td>
														<td>Win 95+ / OSX.1+</td>
														<td class="center">1.2</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Mozilla 1.3</td>
														<td>Win 95+ / OSX.1+</td>
														<td class="center">1.3</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Mozilla 1.2</td>
														<td>Win 95+ / OSX.1+</td>
														<td class="center">1.2</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Mozilla 1.3</td>
														<td>Win 95+ / OSX.1+</td>
														<td class="center">1.3</td>
														<td class="center">A</td>
													</tr>
													<tr class="gradeA">
														<td>Gecko</td>
														<td>Mozilla 1.2</td>
														<td>Win 95+ / OSX.1+</td>
														<td class="center">1.2</td>
														<td class="center">A</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<th>Rendering engine</th>
														<th>Browser</th>
														<th>Platform(s)</th>
														<th>Engine version</th>
														<th>CSS grade</th>
													</tr>
												</tfoot>
											</table>
										</div>

									</div>
								</div>
							</div>
						</div>
        
						
						
						
						<div class="form-group row">
							<div class="col-sm-4 col-sm-offset-2">
								<button class="btn btn-white btn-sm" type="submit">Cancel</button>
								<button class="btn btn-primary btn-sm" type="submit">Save changes</button>
							</div>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</div>
			
			
        