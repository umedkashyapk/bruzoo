<style type="text/css">
	.table th, .text-wrap table th {
    color: #ffffff;
    text-transform: uppercase;
    font-size: 0.875rem;
    font-weight: 400;
    white-space: nowrap;
}
h4 {
    font-size: 19px;
    color: #691cbf;
    padding: 15px 0px;
}
</style>

<div class="login-register">
	<div class="container">
		<div class="section-title-wrapper">
			<div class="section-title">
				<h4>Join Us</h4>

			</div>
		</div>

		<form method="post" action="https://bruzoo.in/career/savedata" name="careerform" id="careerform" enctype="multipart/form-data" novalidate="novalidate">
		<div class="row">
			<!--Login Form Start-->
			<div class="col-md-10">
				<div class="Regis PadLR0">
					<div class="row ">
						<div class="col-md-12"><h4>Applicant's Details</h4></div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Full Name <span class="text-danger"> *</span></label>
								<input text="" class="form-control" placeholder="Full Name" name="name" required="required" id="fullname">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Father Name <span class="text-danger"> *</span></label>
								<input text="breadcrumb-text" class="form-control" placeholder="Father Name" name="fname" required="required">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Mother Name <span class="text-danger"> *</span></label>
								<input text="text" class="form-control" placeholder="Mother Name" name="mname" required="required">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Gender<span class="text-danger"> *</span></label>
								<select class="form-control" id="exampleFormControlSelect1" name="gender" required="required">
									<option value="">Please Select</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>DOB <span class="text-danger"> *</span></label>
								<input type="date" class="form-control" placeholder="" name="dob" required="required" id="dob">
								<span id="lblError" style="color: red;"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Category <span class="text-danger"> *</span></label>
								<select class="form-control" name="Category" required="required">
									<option value="">Category</option>
									<option value="SC">SC</option>
									<option value="ST">ST</option>
									<option value="OBC">OBC</option>
									<option value="General">General</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Economically Weaker Sections <span class="text-danger"> *</span></label>
								<select class="form-control" name="economically" required="required">
									<option value="">Select</option>
									<option value="No">No</option>
									<option value="YES">YES</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Religion <span class="text-danger"> *</span></label>
								<select class="form-control" name="religion" required="required">
									<option value="">-- select one --</option>
								
									<option value="Hindu">Hindu </option>
									<option value="Muslim">Muslim </option>
									<option value="Sikh">Sikh</option>
									<option value="Christian">Christian</option>
									<option value="Other">Other</option> 
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Marital Status <span class="text-danger"> *</span></label>
								<select class="form-control" name="marital" required="required">
									<option value="Married">Married</option>
									<option value="Unmarried">Unmarried</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone No. <span class="text-danger"> *</span></label>
									
									<input type="tel" class="form-control phone_number" placeholder="Phone" name="phone" id="phoneNo" required="required">
							</div>
						</div>
							<div class="col-md-6">
							<div class="form-group">
								<label>Alternate Phone No. <span class="text-danger"> *</span></label>
									
									<input type="tel" class="form-control phone_number" placeholder="Alternate Phone" name="alternate_phone" id="AlternatephoneNo" required="required">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label> Email<span class="text-danger"> *</span></label>
								<input type="email" class="form-control" placeholder="email" name="email" id="emailID" required="required">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Alternate Email<span class="text-danger"> *</span></label>
								<input type="email" class="form-control" placeholder="Alternate  Email" name="alternate_email" id="AlternateemailID" required="required">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Do you have  an Aadhar Card <span class="text-danger"> *</span></label>
								<select class="form-control" required="required" name="Doyouhave_Aadhar">
									<option>Yes</option>
									<option>No</option>
								</select>
							</div>
						</div>
						
                       	<div class="col-md-6">
							<div class="form-group">
								<label>Aadhar card No.<span class="text-danger">*</span></label>
								<input type="text" class="form-control number_validation aadharvalid" placeholder="Aadhar card No." name="addhar_card" required="required" maxlength="12" style="width: 88%;float: left;">
								<div class="image-upload pan-aadhar" style="width: 10%;">
									<label for="aadhar-file">
										<i class="fa fa-upload"></i>
									</label>

									<input id="aadhar-file" type="file" name="aadhar_image">
									<span class="aadhar-file"></span>
								</div>
							</div>
						</div>
						 	<div class="col-md-6">
							<div class="form-group">
								<label>Signature image.<span class="text-danger">*</span></label>
							  
								<div class="image-upload signature image-upload pan-aadhar" style="width: 100%;">
									<label for="signature-file">
										<i class="fa fa-upload"></i>
									</label>

									<input id="signature-file" type="file" name="signature_image" required="required">
									<span class="signature-file"></span>
								</div>
							</div>
						</div>

						<div class="col-md-12"><h4>Applying For</h4></div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Applying For <span class="text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="Applying for" name="applying" required="required" style="height: 42px;">

							</div>
						</div>
						<div class="col-md-12"><h4>Correspondence Address</h4></div>
						
						<input type="hidden" name="addressType[]" value="Correspondence Address">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleFormControlSelect1">House/Flat/Block No. <span class="text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="House/Flat/Block No." name="house_no[]" required="required" style="height: 42px;">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Area/Street/Colony/Sector/Apartment </label>
								<input type="text" class="form-control" placeholder="Area/Street/Colony/Sector/Apartment" name="address[]" required="required" style="height: 42px;">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Landmark </label>
								<input type="text" class="form-control" placeholder="Landmark" name="landmark[]" style="height: 42px;" required="required">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="country">Country Of Residence <span class="text-danger">*</span></label>
								<select class="form-control country" stid="cr-state" name="country[]" id="country" required="required">
								<option value="" selected="">Select Country</option>
																<option value="Afghanistan" values="3">Afghanistan</option>
								<option value="Åland" values="15">Åland</option>
								<option value="Albania" values="6">Albania</option>
								<option value="Algeria" values="62">Algeria</option>
								<option value="American Samoa" values="11">American Samoa</option>
								<option value="Andorra" values="1">Andorra</option>
								<option value="Angola" values="8">Angola</option>
								<option value="Anguilla" values="5">Anguilla</option>
								<option value="Antarctica" values="9">Antarctica</option>
								<option value="Antigua and Barbuda" values="4">Antigua and Barbuda</option>
								<option value="Argentina" values="10">Argentina</option>
								<option value="Armenia" values="7">Armenia</option>
								<option value="Aruba" values="14">Aruba</option>
								<option value="Australia" values="13">Australia</option>
								<option value="Austria" values="12">Austria</option>
								<option value="Azerbaijan" values="16">Azerbaijan</option>
								<option value="Bahamas" values="32">Bahamas</option>
								<option value="Bahrain" values="23">Bahrain</option>
								<option value="Bangladesh" values="19">Bangladesh</option>
								<option value="Barbados" values="18">Barbados</option>
								<option value="Belarus" values="36">Belarus</option>
								<option value="Belgium" values="20">Belgium</option>
								<option value="Belize" values="37">Belize</option>
								<option value="Benin" values="25">Benin</option>
								<option value="Bermuda" values="27">Bermuda</option>
								<option value="Bhutan" values="33">Bhutan</option>
								<option value="Bolivia" values="29">Bolivia</option>
								<option value="Bonaire" values="30">Bonaire</option>
								<option value="Bosnia and Herzegovina" values="17">Bosnia and Herzegovina</option>
								<option value="Botswana" values="35">Botswana</option>
								<option value="Bouvet Island" values="34">Bouvet Island</option>
								<option value="Brazil" values="31">Brazil</option>
								<option value="British Indian Ocean Territory" values="106">British Indian Ocean Territory</option>
								<option value="British Virgin Islands" values="239">British Virgin Islands</option>
								<option value="Brunei" values="28">Brunei</option>
								<option value="Bulgaria" values="22">Bulgaria</option>
								<option value="Burkina Faso" values="21">Burkina Faso</option>
								<option value="Burundi" values="24">Burundi</option>
								<option value="Cambodia" values="117">Cambodia</option>
								<option value="Cameroon" values="47">Cameroon</option>
								<option value="Canada" values="38">Canada</option>
								<option value="Cape Verde" values="52">Cape Verde</option>
								<option value="Cayman Islands" values="124">Cayman Islands</option>
								<option value="Central African Republic" values="41">Central African Republic</option>
								<option value="Chad" values="215">Chad</option>
								<option value="Chile" values="46">Chile</option>
								<option value="China" values="48">China</option>
								<option value="Christmas Island" values="54">Christmas Island</option>
								<option value="Cocos [Keeling] Islands" values="39">Cocos [Keeling] Islands</option>
								<option value="Colombia" values="49">Colombia</option>
								<option value="Comoros" values="119">Comoros</option>
								<option value="Cook Islands" values="45">Cook Islands</option>
								<option value="Costa Rica" values="50">Costa Rica</option>
								<option value="Croatia" values="98">Croatia</option>
								<option value="Cuba" values="51">Cuba</option>
								<option value="Curacao" values="53">Curacao</option>
								<option value="Cyprus" values="55">Cyprus</option>
								<option value="Czech Republic" values="56">Czech Republic</option>
								<option value="Democratic Republic of the Congo" values="40">Democratic Republic of the Congo</option>
								<option value="Denmark" values="59">Denmark</option>
								<option value="Djibouti" values="58">Djibouti</option>
								<option value="Dominica" values="60">Dominica</option>
								<option value="Dominican Republic" values="61">Dominican Republic</option>
								<option value="East Timor" values="221">East Timor</option>
								<option value="Ecuador" values="63">Ecuador</option>
								<option value="Egypt" values="65">Egypt</option>
								<option value="El Salvador" values="210">El Salvador</option>
								<option value="Equatorial Guinea" values="88">Equatorial Guinea</option>
								<option value="Eritrea" values="67">Eritrea</option>
								<option value="Estonia" values="64">Estonia</option>
								<option value="Ethiopia" values="69">Ethiopia</option>
								<option value="Falkland Islands" values="72">Falkland Islands</option>
								<option value="Faroe Islands" values="74">Faroe Islands</option>
								<option value="Fiji" values="71">Fiji</option>
								<option value="Finland" values="70">Finland</option>
								<option value="France" values="75">France</option>
								<option value="French Guiana" values="80">French Guiana</option>
								<option value="French Polynesia" values="175">French Polynesia</option>
								<option value="French Southern Territories" values="216">French Southern Territories</option>
								<option value="Gabon" values="76">Gabon</option>
								<option value="Gambia" values="85">Gambia</option>
								<option value="Georgia" values="79">Georgia</option>
								<option value="Germany" values="57">Germany</option>
								<option value="Ghana" values="82">Ghana</option>
								<option value="Gibraltar" values="83">Gibraltar</option>
								<option value="Greece" values="89">Greece</option>
								<option value="Greenland" values="84">Greenland</option>
								<option value="Grenada" values="78">Grenada</option>
								<option value="Guadeloupe" values="87">Guadeloupe</option>
								<option value="Guam" values="92">Guam</option>
								<option value="Guatemala" values="91">Guatemala</option>
								<option value="Guernsey" values="81">Guernsey</option>
								<option value="Guinea" values="86">Guinea</option>
								<option value="Guinea-Bissau" values="93">Guinea-Bissau</option>
								<option value="Guyana" values="94">Guyana</option>
								<option value="Haiti" values="99">Haiti</option>
								<option value="Heard Island and McDonald Islands" values="96">Heard Island and McDonald Islands</option>
								<option value="Honduras" values="97">Honduras</option>
								<option value="Hong Kong" values="95">Hong Kong</option>
								<option value="Hungary" values="100">Hungary</option>
								<option value="Iceland" values="109">Iceland</option>
								<option value="India" values="105">India</option>
								<option value="Indonesia" values="101">Indonesia</option>
								<option value="Iran" values="108">Iran</option>
								<option value="Iraq" values="107">Iraq</option>
								<option value="Ireland" values="102">Ireland</option>
								<option value="Isle of Man" values="104">Isle of Man</option>
								<option value="Israel" values="103">Israel</option>
								<option value="Italy" values="110">Italy</option>
								<option value="Ivory Coast" values="44">Ivory Coast</option>
								<option value="Jamaica" values="112">Jamaica</option>
								<option value="Japan" values="114">Japan</option>
								<option value="Jersey" values="111">Jersey</option>
								<option value="Jordan" values="113">Jordan</option>
								<option value="Kazakhstan" values="125">Kazakhstan</option>
								<option value="Kenya" values="115">Kenya</option>
								<option value="Kiribati" values="118">Kiribati</option>
								<option value="Kosovo" values="245">Kosovo</option>
								<option value="Kuwait" values="123">Kuwait</option>
								<option value="Kyrgyzstan" values="116">Kyrgyzstan</option>
								<option value="Laos" values="126">Laos</option>
								<option value="Latvia" values="135">Latvia</option>
								<option value="Lebanon" values="127">Lebanon</option>
								<option value="Lesotho" values="132">Lesotho</option>
								<option value="Liberia" values="131">Liberia</option>
								<option value="Libya" values="136">Libya</option>
								<option value="Liechtenstein" values="129">Liechtenstein</option>
								<option value="Lithuania" values="133">Lithuania</option>
								<option value="Luxembourg" values="134">Luxembourg</option>
								<option value="Macao" values="148">Macao</option>
								<option value="Macedonia" values="144">Macedonia</option>
								<option value="Madagascar" values="142">Madagascar</option>
								<option value="Malawi" values="156">Malawi</option>
								<option value="Malaysia" values="158">Malaysia</option>
								<option value="Maldives" values="155">Maldives</option>
								<option value="Mali" values="145">Mali</option>
								<option value="Malta" values="153">Malta</option>
								<option value="Marshall Islands" values="143">Marshall Islands</option>
								<option value="Martinique" values="150">Martinique</option>
								<option value="Mauritania" values="151">Mauritania</option>
								<option value="Mauritius" values="154">Mauritius</option>
								<option value="Mayotte" values="247">Mayotte</option>
								<option value="Mexico" values="157">Mexico</option>
								<option value="Micronesia" values="73">Micronesia</option>
								<option value="Moldova" values="139">Moldova</option>
								<option value="Monaco" values="138">Monaco</option>
								<option value="Mongolia" values="147">Mongolia</option>
								<option value="Montenegro" values="140">Montenegro</option>
								<option value="Montserrat" values="152">Montserrat</option>
								<option value="Morocco" values="137">Morocco</option>
								<option value="Mozambique" values="159">Mozambique</option>
								<option value="Myanmar [Burma]" values="146">Myanmar [Burma]</option>
								<option value="Namibia" values="160">Namibia</option>
								<option value="Nauru" values="169">Nauru</option>
								<option value="Nepal" values="168">Nepal</option>
								<option value="Netherlands" values="166">Netherlands</option>
								<option value="New Caledonia" values="161">New Caledonia</option>
								<option value="New Zealand" values="171">New Zealand</option>
								<option value="Nicaragua" values="165">Nicaragua</option>
								<option value="Niger" values="162">Niger</option>
								<option value="Nigeria" values="164">Nigeria</option>
								<option value="Niue" values="170">Niue</option>
								<option value="Norfolk Island" values="163">Norfolk Island</option>
								<option value="North Korea" values="121">North Korea</option>
								<option value="Northern Mariana Islands" values="149">Northern Mariana Islands</option>
								<option value="Norway" values="167">Norway</option>
								<option value="Oman" values="172">Oman</option>
								<option value="Pakistan" values="178">Pakistan</option>
								<option value="Palau" values="185">Palau</option>
								<option value="Palestine" values="183">Palestine</option>
								<option value="Panama" values="173">Panama</option>
								<option value="Papua New Guinea" values="176">Papua New Guinea</option>
								<option value="Paraguay" values="186">Paraguay</option>
								<option value="Peru" values="174">Peru</option>
								<option value="Philippines" values="177">Philippines</option>
								<option value="Pitcairn Islands" values="181">Pitcairn Islands</option>
								<option value="Poland" values="179">Poland</option>
								<option value="Portugal" values="184">Portugal</option>
								<option value="Puerto Rico" values="182">Puerto Rico</option>
								<option value="Qatar" values="187">Qatar</option>
								<option value="Republic of the Congo" values="42">Republic of the Congo</option>
								<option value="Réunion" values="188">Réunion</option>
								<option value="Romania" values="189">Romania</option>
								<option value="Russia" values="191">Russia</option>
								<option value="Rwanda" values="192">Rwanda</option>
								<option value="Saint Barthélemy" values="26">Saint Barthélemy</option>
								<option value="Saint Helena" values="199">Saint Helena</option>
								<option value="Saint Kitts and Nevis" values="120">Saint Kitts and Nevis</option>
								<option value="Saint Lucia" values="128">Saint Lucia</option>
								<option value="Saint Martin" values="141">Saint Martin</option>
								<option value="Saint Pierre and Miquelon" values="180">Saint Pierre and Miquelon</option>
								<option value="Saint Vincent and the Grenadines" values="237">Saint Vincent and the Grenadines</option>
								<option value="Samoa" values="244">Samoa</option>
								<option value="San Marino" values="204">San Marino</option>
								<option value="São Tomé and Príncipe" values="209">São Tomé and Príncipe</option>
								<option value="Saudi Arabia" values="193">Saudi Arabia</option>
								<option value="Senegal" values="205">Senegal</option>
								<option value="Serbia" values="190">Serbia</option>
								<option value="Seychelles" values="195">Seychelles</option>
								<option value="Sierra Leone" values="203">Sierra Leone</option>
								<option value="Singapore" values="198">Singapore</option>
								<option value="Sint Maarten" values="211">Sint Maarten</option>
								<option value="Slovakia" values="202">Slovakia</option>
								<option value="Slovenia" values="200">Slovenia</option>
								<option value="Solomon Islands" values="194">Solomon Islands</option>
								<option value="Somalia" values="206">Somalia</option>
								<option value="South Africa" values="248">South Africa</option>
								<option value="South Georgia and the South Sandwich Islands" values="90">South Georgia and the South Sandwich Islands</option>
								<option value="South Korea" values="122">South Korea</option>
								<option value="South Sudan" values="208">South Sudan</option>
								<option value="Spain" values="68">Spain</option>
								<option value="Sri Lanka" values="130">Sri Lanka</option>
								<option value="Sudan" values="196">Sudan</option>
								<option value="Suriname" values="207">Suriname</option>
								<option value="Svalbard and Jan Mayen" values="201">Svalbard and Jan Mayen</option>
								<option value="Swaziland" values="213">Swaziland</option>
								<option value="Sweden" values="197">Sweden</option>
								<option value="Switzerland" values="43">Switzerland</option>
								<option value="Syria" values="212">Syria</option>
								<option value="Taiwan" values="228">Taiwan</option>
								<option value="Tajikistan" values="219">Tajikistan</option>
								<option value="Tanzania" values="229">Tanzania</option>
								<option value="Thailand" values="218">Thailand</option>
								<option value="Togo" values="217">Togo</option>
								<option value="Tokelau" values="220">Tokelau</option>
								<option value="Tonga" values="224">Tonga</option>
								<option value="Trinidad and Tobago" values="226">Trinidad and Tobago</option>
								<option value="Tunisia" values="223">Tunisia</option>
								<option value="Turkey" values="225">Turkey</option>
								<option value="Turkmenistan" values="222">Turkmenistan</option>
								<option value="Turks and Caicos Islands" values="214">Turks and Caicos Islands</option>
								<option value="Tuvalu" values="227">Tuvalu</option>
								<option value="U.S. Minor Outlying Islands" values="232">U.S. Minor Outlying Islands</option>
								<option value="U.S. Virgin Islands" values="240">U.S. Virgin Islands</option>
								<option value="Uganda" values="231">Uganda</option>
								<option value="Ukraine" values="230">Ukraine</option>
								<option value="United Arab Emirates" values="2">United Arab Emirates</option>
								<option value="United Kingdom" values="77">United Kingdom</option>
								<option value="United States" values="233">United States</option>
								<option value="Uruguay" values="234">Uruguay</option>
								<option value="Uzbekistan" values="235">Uzbekistan</option>
								<option value="Vanuatu" values="242">Vanuatu</option>
								<option value="Vatican City" values="236">Vatican City</option>
								<option value="Venezuela" values="238">Venezuela</option>
								<option value="Vietnam" values="241">Vietnam</option>
								<option value="Wallis and Futuna" values="243">Wallis and Futuna</option>
								<option value="Western Sahara" values="66">Western Sahara</option>
								<option value="Yemen" values="246">Yemen</option>
								<option value="Zambia" values="249">Zambia</option>
								<option value="Zimbabwe" values="250">Zimbabwe</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label for="state">State <span class="text-danger"> *</span></label>
								<select class="form-control state" id="cr-state" ctid="cr-city" name="state[]" required="required">
								<option value="">Select State</option>


								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="city">City <span class="text-danger"> *</span></label>
								<select class="form-control" id="cr-city" name="city[]" required="required">
										
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Pincode <span class="text-danger"> *</span></label>
								<input type="text" class="form-control number_validation pinvalid" placeholder="PINCODE" name="pin_code[]" required="required" style="height: 42px;">
							</div>
						</div>
                   <div class="col-md-12"><h4>Permanent Address</h4></div>
				   <div class="col-md-12">
				   <div class="form-group">
								<label for="exampleFormControlSelect1">Same as Correspondence</label>
						<input type="checkbox" name="sameas" id="sameas" value="sameas"> 
						</div>
						</div>
					</div>
						<div class=" row Permanentaddress">
				   <input type="hidden" name="addressType[]" value="Permanent Address">
				  
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleFormControlSelect1">House/Flat/Block No. <span class="text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="House/Flat/Block No." name="house_no[]" required="" style="height: 42px;">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Area/Street/Colony/Sector/Apartment </label>
								<input type="text" class="form-control" placeholder="Area/Street/Colony/Sector/Apartment" name="address[]" required="" style="height: 42px;">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Landmark </label>
								<input type="text" class="form-control" placeholder="Landmark" name="landmark[]" style="height: 42px;">
							</div>
						</div>
                        					<div class="col-md-6">
							<div class="form-group">
								<label for="country">Country Of Residence <span class="text-danger">*</span></label>
								<select class="form-control country" stid="pr-state" name="country[]" id="country" required="">
								<option value="" selected="">Select Country</option>
																<option value="Afghanistan" values="3">Afghanistan</option>
								<option value="Åland" values="15">Åland</option>
								<option value="Albania" values="6">Albania</option>
								<option value="Algeria" values="62">Algeria</option>
								<option value="American Samoa" values="11">American Samoa</option>
								<option value="Andorra" values="1">Andorra</option>
								<option value="Angola" values="8">Angola</option>
								<option value="Anguilla" values="5">Anguilla</option>
								<option value="Antarctica" values="9">Antarctica</option>
								<option value="Antigua and Barbuda" values="4">Antigua and Barbuda</option>
								<option value="Argentina" values="10">Argentina</option>
								<option value="Armenia" values="7">Armenia</option>
								<option value="Aruba" values="14">Aruba</option>
								<option value="Australia" values="13">Australia</option>
								<option value="Austria" values="12">Austria</option>
								<option value="Azerbaijan" values="16">Azerbaijan</option>
								<option value="Bahamas" values="32">Bahamas</option>
								<option value="Bahrain" values="23">Bahrain</option>
								<option value="Bangladesh" values="19">Bangladesh</option>
								<option value="Barbados" values="18">Barbados</option>
								<option value="Belarus" values="36">Belarus</option>
								<option value="Belgium" values="20">Belgium</option>
								<option value="Belize" values="37">Belize</option>
								<option value="Benin" values="25">Benin</option>
								<option value="Bermuda" values="27">Bermuda</option>
								<option value="Bhutan" values="33">Bhutan</option>
								<option value="Bolivia" values="29">Bolivia</option>
								<option value="Bonaire" values="30">Bonaire</option>
								<option value="Bosnia and Herzegovina" values="17">Bosnia and Herzegovina</option>
								<option value="Botswana" values="35">Botswana</option>
								<option value="Bouvet Island" values="34">Bouvet Island</option>
								<option value="Brazil" values="31">Brazil</option>
								<option value="British Indian Ocean Territory" values="106">British Indian Ocean Territory</option>
								<option value="British Virgin Islands" values="239">British Virgin Islands</option>
								<option value="Brunei" values="28">Brunei</option>
								<option value="Bulgaria" values="22">Bulgaria</option>
								<option value="Burkina Faso" values="21">Burkina Faso</option>
								<option value="Burundi" values="24">Burundi</option>
								<option value="Cambodia" values="117">Cambodia</option>
								<option value="Cameroon" values="47">Cameroon</option>
								<option value="Canada" values="38">Canada</option>
								<option value="Cape Verde" values="52">Cape Verde</option>
								<option value="Cayman Islands" values="124">Cayman Islands</option>
								<option value="Central African Republic" values="41">Central African Republic</option>
								<option value="Chad" values="215">Chad</option>
								<option value="Chile" values="46">Chile</option>
								<option value="China" values="48">China</option>
								<option value="Christmas Island" values="54">Christmas Island</option>
								<option value="Cocos [Keeling] Islands" values="39">Cocos [Keeling] Islands</option>
								<option value="Colombia" values="49">Colombia</option>
								<option value="Comoros" values="119">Comoros</option>
								<option value="Cook Islands" values="45">Cook Islands</option>
								<option value="Costa Rica" values="50">Costa Rica</option>
								<option value="Croatia" values="98">Croatia</option>
								<option value="Cuba" values="51">Cuba</option>
								<option value="Curacao" values="53">Curacao</option>
								<option value="Cyprus" values="55">Cyprus</option>
								<option value="Czech Republic" values="56">Czech Republic</option>
								<option value="Democratic Republic of the Congo" values="40">Democratic Republic of the Congo</option>
								<option value="Denmark" values="59">Denmark</option>
								<option value="Djibouti" values="58">Djibouti</option>
								<option value="Dominica" values="60">Dominica</option>
								<option value="Dominican Republic" values="61">Dominican Republic</option>
								<option value="East Timor" values="221">East Timor</option>
								<option value="Ecuador" values="63">Ecuador</option>
								<option value="Egypt" values="65">Egypt</option>
								<option value="El Salvador" values="210">El Salvador</option>
								<option value="Equatorial Guinea" values="88">Equatorial Guinea</option>
								<option value="Eritrea" values="67">Eritrea</option>
								<option value="Estonia" values="64">Estonia</option>
								<option value="Ethiopia" values="69">Ethiopia</option>
								<option value="Falkland Islands" values="72">Falkland Islands</option>
								<option value="Faroe Islands" values="74">Faroe Islands</option>
								<option value="Fiji" values="71">Fiji</option>
								<option value="Finland" values="70">Finland</option>
								<option value="France" values="75">France</option>
								<option value="French Guiana" values="80">French Guiana</option>
								<option value="French Polynesia" values="175">French Polynesia</option>
								<option value="French Southern Territories" values="216">French Southern Territories</option>
								<option value="Gabon" values="76">Gabon</option>
								<option value="Gambia" values="85">Gambia</option>
								<option value="Georgia" values="79">Georgia</option>
								<option value="Germany" values="57">Germany</option>
								<option value="Ghana" values="82">Ghana</option>
								<option value="Gibraltar" values="83">Gibraltar</option>
								<option value="Greece" values="89">Greece</option>
								<option value="Greenland" values="84">Greenland</option>
								<option value="Grenada" values="78">Grenada</option>
								<option value="Guadeloupe" values="87">Guadeloupe</option>
								<option value="Guam" values="92">Guam</option>
								<option value="Guatemala" values="91">Guatemala</option>
								<option value="Guernsey" values="81">Guernsey</option>
								<option value="Guinea" values="86">Guinea</option>
								<option value="Guinea-Bissau" values="93">Guinea-Bissau</option>
								<option value="Guyana" values="94">Guyana</option>
								<option value="Haiti" values="99">Haiti</option>
								<option value="Heard Island and McDonald Islands" values="96">Heard Island and McDonald Islands</option>
								<option value="Honduras" values="97">Honduras</option>
								<option value="Hong Kong" values="95">Hong Kong</option>
								<option value="Hungary" values="100">Hungary</option>
								<option value="Iceland" values="109">Iceland</option>
								<option value="India" values="105">India</option>
								<option value="Indonesia" values="101">Indonesia</option>
								<option value="Iran" values="108">Iran</option>
								<option value="Iraq" values="107">Iraq</option>
								<option value="Ireland" values="102">Ireland</option>
								<option value="Isle of Man" values="104">Isle of Man</option>
								<option value="Israel" values="103">Israel</option>
								<option value="Italy" values="110">Italy</option>
								<option value="Ivory Coast" values="44">Ivory Coast</option>
								<option value="Jamaica" values="112">Jamaica</option>
								<option value="Japan" values="114">Japan</option>
								<option value="Jersey" values="111">Jersey</option>
								<option value="Jordan" values="113">Jordan</option>
								<option value="Kazakhstan" values="125">Kazakhstan</option>
								<option value="Kenya" values="115">Kenya</option>
								<option value="Kiribati" values="118">Kiribati</option>
								<option value="Kosovo" values="245">Kosovo</option>
								<option value="Kuwait" values="123">Kuwait</option>
								<option value="Kyrgyzstan" values="116">Kyrgyzstan</option>
								<option value="Laos" values="126">Laos</option>
								<option value="Latvia" values="135">Latvia</option>
								<option value="Lebanon" values="127">Lebanon</option>
								<option value="Lesotho" values="132">Lesotho</option>
								<option value="Liberia" values="131">Liberia</option>
								<option value="Libya" values="136">Libya</option>
								<option value="Liechtenstein" values="129">Liechtenstein</option>
								<option value="Lithuania" values="133">Lithuania</option>
								<option value="Luxembourg" values="134">Luxembourg</option>
								<option value="Macao" values="148">Macao</option>
								<option value="Macedonia" values="144">Macedonia</option>
								<option value="Madagascar" values="142">Madagascar</option>
								<option value="Malawi" values="156">Malawi</option>
								<option value="Malaysia" values="158">Malaysia</option>
								<option value="Maldives" values="155">Maldives</option>
								<option value="Mali" values="145">Mali</option>
								<option value="Malta" values="153">Malta</option>
								<option value="Marshall Islands" values="143">Marshall Islands</option>
								<option value="Martinique" values="150">Martinique</option>
								<option value="Mauritania" values="151">Mauritania</option>
								<option value="Mauritius" values="154">Mauritius</option>
								<option value="Mayotte" values="247">Mayotte</option>
								<option value="Mexico" values="157">Mexico</option>
								<option value="Micronesia" values="73">Micronesia</option>
								<option value="Moldova" values="139">Moldova</option>
								<option value="Monaco" values="138">Monaco</option>
								<option value="Mongolia" values="147">Mongolia</option>
								<option value="Montenegro" values="140">Montenegro</option>
								<option value="Montserrat" values="152">Montserrat</option>
								<option value="Morocco" values="137">Morocco</option>
								<option value="Mozambique" values="159">Mozambique</option>
								<option value="Myanmar [Burma]" values="146">Myanmar [Burma]</option>
								<option value="Namibia" values="160">Namibia</option>
								<option value="Nauru" values="169">Nauru</option>
								<option value="Nepal" values="168">Nepal</option>
								<option value="Netherlands" values="166">Netherlands</option>
								<option value="New Caledonia" values="161">New Caledonia</option>
								<option value="New Zealand" values="171">New Zealand</option>
								<option value="Nicaragua" values="165">Nicaragua</option>
								<option value="Niger" values="162">Niger</option>
								<option value="Nigeria" values="164">Nigeria</option>
								<option value="Niue" values="170">Niue</option>
								<option value="Norfolk Island" values="163">Norfolk Island</option>
								<option value="North Korea" values="121">North Korea</option>
								<option value="Northern Mariana Islands" values="149">Northern Mariana Islands</option>
								<option value="Norway" values="167">Norway</option>
								<option value="Oman" values="172">Oman</option>
								<option value="Pakistan" values="178">Pakistan</option>
								<option value="Palau" values="185">Palau</option>
								<option value="Palestine" values="183">Palestine</option>
								<option value="Panama" values="173">Panama</option>
								<option value="Papua New Guinea" values="176">Papua New Guinea</option>
								<option value="Paraguay" values="186">Paraguay</option>
								<option value="Peru" values="174">Peru</option>
								<option value="Philippines" values="177">Philippines</option>
								<option value="Pitcairn Islands" values="181">Pitcairn Islands</option>
								<option value="Poland" values="179">Poland</option>
								<option value="Portugal" values="184">Portugal</option>
								<option value="Puerto Rico" values="182">Puerto Rico</option>
								<option value="Qatar" values="187">Qatar</option>
								<option value="Republic of the Congo" values="42">Republic of the Congo</option>
								<option value="Réunion" values="188">Réunion</option>
								<option value="Romania" values="189">Romania</option>
								<option value="Russia" values="191">Russia</option>
								<option value="Rwanda" values="192">Rwanda</option>
								<option value="Saint Barthélemy" values="26">Saint Barthélemy</option>
								<option value="Saint Helena" values="199">Saint Helena</option>
								<option value="Saint Kitts and Nevis" values="120">Saint Kitts and Nevis</option>
								<option value="Saint Lucia" values="128">Saint Lucia</option>
								<option value="Saint Martin" values="141">Saint Martin</option>
								<option value="Saint Pierre and Miquelon" values="180">Saint Pierre and Miquelon</option>
								<option value="Saint Vincent and the Grenadines" values="237">Saint Vincent and the Grenadines</option>
								<option value="Samoa" values="244">Samoa</option>
								<option value="San Marino" values="204">San Marino</option>
								<option value="São Tomé and Príncipe" values="209">São Tomé and Príncipe</option>
								<option value="Saudi Arabia" values="193">Saudi Arabia</option>
								<option value="Senegal" values="205">Senegal</option>
								<option value="Serbia" values="190">Serbia</option>
								<option value="Seychelles" values="195">Seychelles</option>
								<option value="Sierra Leone" values="203">Sierra Leone</option>
								<option value="Singapore" values="198">Singapore</option>
								<option value="Sint Maarten" values="211">Sint Maarten</option>
								<option value="Slovakia" values="202">Slovakia</option>
								<option value="Slovenia" values="200">Slovenia</option>
								<option value="Solomon Islands" values="194">Solomon Islands</option>
								<option value="Somalia" values="206">Somalia</option>
								<option value="South Africa" values="248">South Africa</option>
								<option value="South Georgia and the South Sandwich Islands" values="90">South Georgia and the South Sandwich Islands</option>
								<option value="South Korea" values="122">South Korea</option>
								<option value="South Sudan" values="208">South Sudan</option>
								<option value="Spain" values="68">Spain</option>
								<option value="Sri Lanka" values="130">Sri Lanka</option>
								<option value="Sudan" values="196">Sudan</option>
								<option value="Suriname" values="207">Suriname</option>
								<option value="Svalbard and Jan Mayen" values="201">Svalbard and Jan Mayen</option>
								<option value="Swaziland" values="213">Swaziland</option>
								<option value="Sweden" values="197">Sweden</option>
								<option value="Switzerland" values="43">Switzerland</option>
								<option value="Syria" values="212">Syria</option>
								<option value="Taiwan" values="228">Taiwan</option>
								<option value="Tajikistan" values="219">Tajikistan</option>
								<option value="Tanzania" values="229">Tanzania</option>
								<option value="Thailand" values="218">Thailand</option>
								<option value="Togo" values="217">Togo</option>
								<option value="Tokelau" values="220">Tokelau</option>
								<option value="Tonga" values="224">Tonga</option>
								<option value="Trinidad and Tobago" values="226">Trinidad and Tobago</option>
								<option value="Tunisia" values="223">Tunisia</option>
								<option value="Turkey" values="225">Turkey</option>
								<option value="Turkmenistan" values="222">Turkmenistan</option>
								<option value="Turks and Caicos Islands" values="214">Turks and Caicos Islands</option>
								<option value="Tuvalu" values="227">Tuvalu</option>
								<option value="U.S. Minor Outlying Islands" values="232">U.S. Minor Outlying Islands</option>
								<option value="U.S. Virgin Islands" values="240">U.S. Virgin Islands</option>
								<option value="Uganda" values="231">Uganda</option>
								<option value="Ukraine" values="230">Ukraine</option>
								<option value="United Arab Emirates" values="2">United Arab Emirates</option>
								<option value="United Kingdom" values="77">United Kingdom</option>
								<option value="United States" values="233">United States</option>
								<option value="Uruguay" values="234">Uruguay</option>
								<option value="Uzbekistan" values="235">Uzbekistan</option>
								<option value="Vanuatu" values="242">Vanuatu</option>
								<option value="Vatican City" values="236">Vatican City</option>
								<option value="Venezuela" values="238">Venezuela</option>
								<option value="Vietnam" values="241">Vietnam</option>
								<option value="Wallis and Futuna" values="243">Wallis and Futuna</option>
								<option value="Western Sahara" values="66">Western Sahara</option>
								<option value="Yemen" values="246">Yemen</option>
								<option value="Zambia" values="249">Zambia</option>
								<option value="Zimbabwe" values="250">Zimbabwe</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label for="state">State <span class="text-danger"> *</span></label>
								<select class="form-control state" id="pr-state" ctid="pr-city" name="state[]" required="required">
								<option value="">Select State</option>


								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="city">City <span class="text-danger"> *</span></label>
								<select class="form-control" id="pr-city" name="city[]" required="required">
										
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Pincode <span class="text-danger"> *</span></label>
								<input type="text" class="form-control number_validation pinvalid" placeholder="PINCODE" name="pin_code[]" required="required" style="height: 42px;">
							</div>
						</div>
						
						 </div>
						 <div class="row">
						<div class="col-md-12"><h4> Personal Details</h4></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Nationality <span class="text-danger"> *</span></label>
								<select class="form-control" name="nationality" required="required">
									<option value="">Please Select</option>
									<option value="Indian">Indian</option>
								</select>
							</div>
						</div>
                         

                         	<div class="col-md-6">
							<div class="form-group">
								<label for="">Settled in India from Other Country <span class="text-danger"> *</span></label>
								<select class="form-control" name="Settled" required="required">
									<option value="No">No</option>
									<option value="Yes">Yes</option>
								</select>
							</div>
						</div>

                       <div class="col-md-6">
							<div class="form-group">
								<label for="">From Which Country</label>
								<select class="form-control" name="countrycccc">
									<option value="India">India</option>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="">Do You Have a Teacher In Your Family<span class="text-danger"> *</span></label>
								<select class="form-control" name="service" required="required">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
						</div>


                      <div class="col-md-6">
							<div class="form-group">
								<label for="">Are you NCC Cadet?<span class="text-danger"> *</span></label>
								<select class="form-control" name="cadet" required="required">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
						</div>


                          <div class="col-md-6">
							<div class="form-group">
								<label for="">Were You a Volunteer Earlier?<span class="text-danger"> *</span></label>
								<select class="form-control" name="volunteer" required="required">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
						</div>

 
                             <div class="col-md-6">
							<div class="form-group">
								<label for="">Are You Existing State Government Employee (Substantive)?<span class="text-danger"> *</span></label>
								<select class="form-control" name="goverment_employee" required="required">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
						</div>


                             <div class="col-md-6">
							<div class="form-group">
								<label for="">Is Your Family Income Less Than 2.50 Lacs?<span class="text-danger"> *</span></label>
								<select class="form-control" name="income" required="required">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
						</div>


                         <div class="col-md-6">
							<div class="form-group">
								<label for="">Do You Have a Degree/Diploma In Teacher Related Subjects ?<span class="text-danger"> *</span></label>
								<select class="form-control" name="dergree_diploma" required="required">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
						</div>
						<div class="col-md-12"><h4>Character Verification Details</h4></div>
                  <div class="col-md-12">
							<div class="form-group">
								<label for="">Whether any FIR has ever been lodged against you?<span class="text-danger"> *</span></label>
								<select class="form-control" name="fir" required="required">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
						</div>

                        <div class="col-md-12"><h4>Higher Qualification Details  </h4>

						<div class="qua-row">
							<table class="table table-striped table-responsive" style="width:100%">
								<thead>
									<tr><th>Name of Exam</th>
									<th>Subject Group</th>
									<th>University / School / Institute</th>
									<th>Roll No</th>
									<th>Year</th>
									<th>Percentage/Grade</th>
									
									<th class="text-center">Upload</th>
									<th>Action</th>
								</tr></thead>
								<tbody class="input_fields_wrap">
									<tr>
										<td><input type="text" name="qualification[]" required=""></td>
										<td><input type="text" name="subject[]" required=""></td>
										<td><input type="text" name="board[]" required=""></td>
										<td><input type="text" name="rollno[]" required=""></td>
										<td><input type="text" name="Passout[]" required=""></td>
										<td><div class="resultdiv"><select name="resultype[]"><option value="Percentage">PCT</option><option value="Grade">GRD</option></select></div><div class="resultdiv"><input type="text" name="Percentage[]" required=""></div></td>
										<td class="text-center"><div class="image-upload">
											<label for="10th-file"><i class="fa fa-upload"></i></label>

											<input id="10th-file" type="file" name="qulifyimage" required="">
											<span class="10th-file"></span>
										</div>
									</td>
									<td></td>
								</tr>
							
					</tbody>

				</table>
			</div>
			<div class="col-md-12"><h4>Debarrded</h4></div>
			<div class="col-md-12">
				<div class="form-group">
								<label for="">Has any Board/Public Service Commission Debarred you for use of unfair means etc in its Competitve/Recruitment Exam?/<span class="text-danger"> *</span></label>
								<select class="form-control" name="Debarrded" required="required">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>			</div>
							
		<!--					
<div class="col-md-12  des-none"><h4>Upload Image</h4></div>							
<div class="select-image des-none">
	
<div class="image-upload">
	<label for="profileFile">
		<img src="<?php echo base_url()?>assets/images/default_profile.png" id="profileprivew" style="width:198px;height:174px;" />
		<p class="text-center">Upload Your  Image</p>
	</label>

	<input id="profileFile" type="file"  name="upload_image" required />
	<div class="img-size">	<p class="text-center" style="margin-bottom: 30px;">upload image under 200kb</p></div>
</div>

</div> --->
						

							<div class="col-md-12"><h4>Declaration</h4></div>
		<div class="col-md-12">
			<p>I have carefully read the terms and conditions, instructions and relevant rules of Advertisement and I hereby undertake to abide above conditions and particularly for conditions
prescribed for eligibility for this recruitment. I do hereby declare and verify that all information furnished in application are true and correct. My candidature/appointment may be
rejected at any stage and appropriate action may be taken against me by Recruiting Authority/Appointing Authority, if I am found ineligible or if any documents, information are found
incorrect or false. I do hereby also declare and verify that I fulfill all conditions relating to age, educational qualification, suitability and character etc. prescribed for eligibility for this
recruitment. I shall not attempt to effect selection process by any means, directly or indirectly. I do hereby undertake that if I am appointed I shall perform the duties and functions as
specified by the Appointing Authority from time to time.
</p>
		<input type="checkbox" name="acceptinput" required="" value="Accept"> I Accept
				</div>					


		</div>
		
	</div>


</div>
</div>
<div class="col-md-2">
				<div class="select-image">
	
<div class="image-upload">
	<label for="profileFile">
		<img src="<?php echo base_url()?>assets/images/default_profile.png" id="profileprivew" style="width:198px;height:174px;">
		<p class="text-center upload-img">Upload Your  Image</p>
	</label>

	<input id="profileFile" type="file" name="upload_image" required="">
	<div class="img-size">	<p class="text-center">upload image under 200kb</p></div>
</div>

</div>
</div>
<div class="col-md-12 text-center save-data">
			<input type="submit" name="save" value="Save Now">
		</div>
</div>
</form>
<div class="paymentgatway" style="display:none;">
<form>
<input type="hidden" name="usersID" id="usersID">
<input type="hidden" name="orderId" id="orderId">
<div class="row">
			<!--Login Form Start-->
			<div class="col-md-9">
				<div class="Regis PadLR0" style="padding: 0px;">
					<div class="row">
						<div class="row">
		<div class="col-md-6"></div><div class="col-md-6">Rs. 200/-</div></div>
						<div class="col-md-6 text-center paybutton">
			
			<a href="#" onclick="razorpaySubmit(this);" class="button4" id="razorpaySubmit"><img src="https://bruzoo.in/assets/web/razorpay.png"></a>
			<a href="#" onclick="cashfreeSubmit(this);" class="button4"><img src="https://bruzoo.in/assets/web/Cashfree_Logo.png"></a>
		<!--	<a href="#" class="button4" ><img src="https://bruzoo.in/assets/web/Paypal-logo.png"></a> -->
		</div>	
		<div class="col-md-6">
						<img src="<?php echo base_url()?>assets/images/pay.png">
						</div>
		
</div>
</div>
</div>
</div>
</form>
</div>
<div class="validateOTP" style="display:none">
<span id="otpmessage"></span>
 <form name="validateForm" id="validateForm">
	  <input type="hidden" name="customerMobile" id="customerMobile">
        <div class="Regis PadLR0">
					<div class="row ">
						<div class="col-md-6">
							<div class="form-group">
								<label>OTP <span class="text-danger"> *</span></label>
								<input text="" class="form-control" placeholder="Enter OTP" name="OTP" required="required" maxlength="6" minlength="6">
							</div>
						</div>
						<div class="col-md-6">
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							
								<input type="button" name="resend" value="Resend OTP" onclick="sendOTP()">
							</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							
								<input type="submit" name="save" value="Validate">
							</div>
							</div>
							</div>
						</div>
      </div>
      </div>
	  </form>

</div>

</div>
</div>