<?php $title="Booster Registration"; include 'include/header.php'; worker_register(); ?>
<section id="registration" class="padding-4	 pt-5 bg-02" style="min-height: 90vh;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-11">
				<div class="single-profile p-3 mt-5 bg-01">
					<div class="profile-card">
						<div class="card-title text-center">
							<h3 class="section-title">Do you want to start working at the leading boosting company?</h3>
							<span class="text-primary">Fill up the registration form and start your boosting business</span>
							<hr>
						</div>
						<div class="card-content mt-4">
							<div class="row justify-content-center">
								<div class="col-md-12">
									<div class="row align-items-center">
										<div class="col-md-6">
											<form method="POST">
												<div class="form-group">
													<label for="">Nickname</label>
													<input type="text" name="nickname" class="form-control" required>
												</div>
												<div class="form-group">
													<label for="">Discord or Skype</label>
													<input type="text" name="discord_skype" class="form-control" required>
												</div>
												<div class="form-group">
													<label for="">Email</label>
													<input type="email" name="email" class="form-control" required>
												</div>
												<div class="form-group">
													<label for="">Password</label>
													<input type="password" name="password" class="form-control password-value" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$" title="Min 6 charecters and must have 1 numeric 1 Capital 1 Small and 1 special charecter " id="password_input">
													<span id="password_input_error" class="text-danger" style="display: none;">Please fill this</span>
												</div>
												<div class="form-group">
													<label for="">Confirm Password</label>
													<input type="password" name="confirmpassword" class="form-control password-value" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$" title="Min 6 charecters and must have 1 numeric 1 Capital 1 Small and 1 special charecter " id="confirm_password_input">
													<span class="text-danger" id="same_password_error" style="display: none;">Enter Same Password</span>
												</div>
												<div class="form-group">
													<label for="">Steam Profile Link (<small>Boostingelite support will contact you over steam</small>)</label>
													<input type="url" name="steam_profile" class="form-control" required>
												</div>
												<div class="form-group">
													<label for="">Define what you want to become:</label>
													<select class="form-control" name="type" required>
														<option hidden value="">Select option</option>
														<option value="CS:GO Booster">CS:GO Booster</option>
														<option value="CS:GO Coacher">CS:GO Coacher</option>
														<option value="Both">Both</option>
													</select>
												</div>
												<div class="form-group">
													<label for="">Languages you are speaking</label>
													<input type="hidden" name="languages" id="embend-language">
													<select class="js-select2 fifth-val" multiple="multiple"  id="all-languages" required>
														<option value="" hidden>Select Languages</option>
														<option value="Afrikaans">Afrikaans</option>
														<option value="Albanian">Albanian</option>
														<option value="Amharic">Amharic</option>
														<option value="Arabic">Arabic</option>
														<option value="Armenian">Armenian</option>
														<option value="Assamese">Assamese</option>
														<option value="Aymara">Aymara</option>
														<option value="Azeri">Azeri</option>
														<option value="Belarusian">Belarusian</option>
														<option value="Bengali">Bengali</option>
														<option value="Bislama">Bislama</option>
														<option value="Bosnian">Bosnian</option>
														<option value="Bulgarian">Bulgarian</option>
														<option value="Cantonese">Cantonese</option>
														<option value="Catalan">Catalan</option>
														<option value="Chinese">Chinese</option>
														<option value="Croatian">Croatian</option>
														<option value="Czech">Czech</option>
														<option value="Danish">Danish</option>
														<option value="Dari">Dari</option>
														<option value="Dhivehi">Dhivehi</option>
														<option value="Dutch">Dutch</option>
														<option value="Dzongkha">Dzongkha</option>
														<option value="English">English</option>
														<option value="English (American)">English (American)</option>
														<option value="Estonian">Estonian</option>
														<option value="Fijian">Fijian</option>
														<option value="Filipino">Filipino</option>
														<option value="Finnish">Finnish</option>
														<option value="French">French</option>
														<option value="Frisian">Frisian</option>
														<option value="Gaelic ">Gaelic </option>
														<option value="Georgian">Georgian</option>
														<option value="German">German</option>
														<option value="Ghanaian">Ghanaian</option>
														<option value="Greek">Greek</option>
														<option value="Guarani">Guarani</option>
														<option value="Gujarati">Gujarati</option>
														<option value="Haitian Creole">Haitian Creole</option>
														<option value="Hausa">Hausa</option>
														<option value="Hebrew">Hebrew</option>
														<option value="Hindi">Hindi</option>
														<option value="Hiri Motu">Hiri Motu</option>
														<option value="Hungarian">Hungarian</option>
														<option value="Icelandic">Icelandic</option>
														<option value="Igbo">Igbo</option>
														<option value="Indonesian">Indonesian</option>
														<option value="Italian">Italian</option>
														<option value="Japanese">Japanese</option>
														<option value="Javanese">Javanese</option>
														<option value="Kannada">Kannada</option>
														<option value="Kashmiri">Kashmiri</option>
														<option value="Kazakh">Kazakh</option>
														<option value="Khmer">Khmer</option>
														<option value="Korean">Korean</option>
														<option value="Kurdish">Kurdish</option>
														<option value="Kyrgyz">Kyrgyz</option>
														<option value="Lao">Lao</option>
														<option value="Latin">Latin</option>
														<option value="Latvian">Latvian</option>
														<option value="Lithuanian">Lithuanian</option>
														<option value="Luxembourgish">Luxembourgish</option>
														<option value="Macedonian">Macedonian</option>
														<option value="Malay">Malay</option>
														<option value="Malayalam">Malayalam</option>
														<option value="Maltese">Maltese</option>
														<option value="Māori">Māori</option>
														<option value="Marathi">Marathi</option>
														<option value="Moldovan">Moldovan</option>
														<option value="Mongolian">Mongolian</option>
														<option value="Ndebele">Ndebele</option>
														<option value="Nepali">Nepali</option>
														<option value="Northern Sotho">Northern Sotho</option>
														<option value="Norwegian">Norwegian</option>
														<option value="Oriya">Oriya</option>
														<option value="Pashtu">Pashtu</option>
														<option value="Persian">Persian</option>
														<option value="Polish">Polish</option>
														<option value="Portuguese">Portuguese</option>
														<option value="Punjabi">Punjabi</option>
														<option value="Quechua">Quechua</option>
														<option value="Rhaeto-Romansh">Rhaeto-Romansh</option>
														<option value="Romanian">Romanian</option>
														<option value="Russian">Russian</option>
														<option value="Sanskrit">Sanskrit</option>
														<option value="Serbian">Serbian</option>
														<option value="Sesotho">Sesotho</option>
														<option value="Sindhi">Sindhi</option>
														<option value="Sinhala">Sinhala</option>
														<option value="Slovak">Slovak</option>
														<option value="Slovene">Slovene</option>
														<option value="Somali">Somali</option>
														<option value="Sotho">Sotho</option>
														<option value="Spanish">Spanish</option>
														<option value="Swahili">Swahili</option>
														<option value="Swazi">Swazi</option>
														<option value="Swedish">Swedish</option>
														<option value="Tajik">Tajik</option>
														<option value="Tamil">Tamil</option>
														<option value="Telugu">Telugu</option>
														<option value="Tetum">Tetum</option>
														<option value="Thai">Thai</option>
														<option value="Tok Pisin">Tok Pisin</option>
														<option value="Tsonga">Tsonga</option>
														<option value="Tswana">Tswana</option>
														<option value="Turkish">Turkish</option>
														<option value="Turkmen">Turkmen</option>
														<option value="Ukrainian">Ukrainian</option>
														<option value="Urdu">Urdu</option>
														<option value="Uzbek">Uzbek</option>
														<option value="Venda">Venda</option>
														<option value="Vietnamese">Vietnamese</option>
														<option value="Welsh">Welsh</option>
														<option value="Xhosa">Xhosa</option>
														<option value="Yoruba">Yoruba</option>
														<option value="Zulu">Zulu</option></select>
													</div>
                                                <div class="form-group">
                                                    <label>Why Should We Hire You</label>
                                                    <textarea name="why_should_hire" rows="2" class="form-control"></textarea >
                                                </div>
													<p><small>You will recive complete instructions via email explaining how it works, after we approve you as a booster/coacher.</small></p>
													<div class="form-group">
														<button class="btn btn-success w-100" type="submit" name="worker_register" id="form_sumbit_btn"><i class="fa fa-paper-plane"></i> Apply</button>
													</div>
												</form>
											</div>
											<div class="col-md-6">
												<div class="rigth-side-text">
													<div class="text-title text-center text-primary">
														<h5>What you get?</h5>
													</div>
													<div class="text-div">
														<ol>
															<li>Biggest earning percantage</li>
															<li>Most advanced technologies to server you</li>
															<li>Direct contact with the clients</li>
															<li>Flexible working hours</li>
														</ol>
													</div>
													<div class="text-title text-center text-primary">
														<h5>Requirements</h5>
													</div>
													<div class="text-div">
														<ol>
															<li></li>
															<li>Seriousness</li>
															<li>Be aware of your reviews (<span class="text-danger">ban is possible</span>)</li>
														</ol>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>
</section>
<?php include 'include/footer.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
	<script type="text/javascript">
		
		$("#all-languages").select2({
			closeOnSelect : false,
			placeholder : "Select Languages",
			allowHtml: true,
			allowClear: true,
			tags: true 
		});

		$("#all-languages").change(function() {
			$("#embend-language").val($("#all-languages").val().toString());
		});
</script>