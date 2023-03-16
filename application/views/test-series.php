<style type="text/css">
	.free {
		box-shadow: 0 0 0 3px #fff, 0px 21px 5px -18px rgb(0 0 0 / 60%);
		background: #696;
	}
	.test-area-card.card-body button {
		margin-bottom: 15px;
	}
	.section-title-wrapper {
		margin: 52px 0px;
		position: relative;
	}

	.section-title h3 {
		color: #410a6e;
		font-size: 23px;
		line-height: 22px;
		margin-bottom: 19px;
		text-transform: uppercase;
		margin-top: 10px;
	}

	.grid {
		position: relative;
		clear: both;
		margin: 0 auto;
		padding: 0px!important; 
		max-width: 1000px;
		list-style: none;
		text-align: center;
	}

	section{
		padding:0px;
	}
</style>

<section class="text-series">

	<div class="scholar-images-banner">
		<img src="<?php echo base_url()?>assets/images/test-series.jpg" style="width: 100%;height: auto;">

	</div>
	
	
	
			
		
	<?php


	if($this->session->userdata('logged_in')){?>
	<div class="container" >
		<div class="row">
			
			<div class="col-md-9">
				<section class="test-area">
					<?php 
					$advertisments_on_position = get_advertisment_by_position('home_page_below_category');
					if($advertisments_on_position)
					{

						foreach ($advertisments_on_position as $advertisment_on_position) 
						{
							$ads_img_url = $path = base_url("assets/images/advertisment/$advertisment_on_position->image");
							?>
							<div class="col-12 text-center p-0 my-5">
								<?php
								if($advertisment_on_position->is_goole_adsense == 0)
									{ ?>
										<a class="w-100 h-100 d-flex" target="_blank" href="<?php echo $advertisment_on_position->url; ?>">
											<img class="w-100 advertisment_image_on_front" height="200px" src="<?php echo $ads_img_url; ?>">
										</a>
										<?php
									}
									else
									{
										echo "<div class='w-100 px-2 bg-white'>". htmlspecialchars_decode($advertisment_on_position->google_ad_code)."</div>";
									}
									?>
								</div>
								<?php 
							}
						} ?>

						<?php $latest_quiz_show_on_home = (isset($this->settings->latest_quiz_show_on_home) && $this->settings->latest_quiz_show_on_home == "YES") ? TRUE : FALSE; ?>


						<?php 
						if($latest_quiz_show_on_home == TRUE)
							{  ?>
								<!-- Latest Quiz Work Start --> 
								<div class="col-12">
									<div class="row">
										<div class="col-12 text-center"> <!-- <h2 class="heading"><?php echo lang('latest_quizes') ?></h2>  -->
											
											<div class="section-title-wrapper">
												<div class="section-title">
													<h3><?php echo lang('latest_quizes') ?></h3>
												</div>
											</div>
										</div>
										<?php 
										$data['quiz_list_data'] = $latest_quiz_data;
										$this->load->view('quiz_data_list',$data); 
										?>
									</div>
								</div>


								
								<!-- Latest Quiz Work End -->
								<?php 
							}  ?>

							<?php $popular_quiz_show_on_home = (isset($this->settings->popular_quiz_show_on_home) && $this->settings->popular_quiz_show_on_home == "YES") ? TRUE : FALSE; ?>


							<?php 
							if($popular_quiz_show_on_home == TRUE)
								{  ?>
									<!-- Popular Quiz Work Start -->
									<div class="col-12">
										<div class="row">
											<div class="col-12 text-center"> 
												<!-- <h2 class="heading"><?php echo lang('popular_quizes'); ?></h2> -->
												<div class="section-title-wrapper">
													<div class="section-title">
														<h3><?php echo lang('popular_quizes'); ?></h3>
													</div>
												</div>
											</div>
											<?php
											$data['quiz_list_data'] = $popular_quiz_data;
											$this->load->view('quiz_data_list',$data); 
											?>

										</div>
									</div>
									
									<!-- Popular Quiz Work End --> 
									<?php 
								}  ?>

								<?php $upcoming_quiz_show_on_home = (isset($this->settings->upcoming_quiz_show_on_home) && $this->settings->upcoming_quiz_show_on_home == "YES") ? TRUE : FALSE; ?>
								<?php 
								if($upcoming_quiz_show_on_home == TRUE)
									{  ?>
										<!-- Upcoming Quiz Work Start -->
										<div class="col-12">
											<div class="row">
												<div class="col-12 text-center"> 
													<!-- <h2 class="heading"><?php echo lang('upcoming_quizes'); ?></h2> -->
													<div class="section-title-wrapper">
														<div class="section-title">
															<h3><?php echo lang('upcoming_quizes'); ?></h3>
														</div>
													</div>
												</div> 
												<?php
												$data['quiz_list_data'] = $upcoming_quiz_data;
												$this->load->view('quiz_data_list',$data); 
												?> 
											</div>
										</div>
										<!-- Upcoming Quiz Work End -->
									<?php } ?>  
									
									

									<!-- study start matirial -->

									<div class="container"> 



										<?php $show_home_page_latest_study_material = (isset($this->settings->show_home_page_latest_study_material) && $this->settings->show_home_page_latest_study_material == "YES") ? TRUE : FALSE; ?>


										<?php
										if($latest_study_material_data && $show_home_page_latest_study_material == TRUE)
											{ ?>
												<!-- Latest study material Work Start --> 
												<div class="col-12">
													<div class="row">
														<div class="col-12 text-center"> <h2 class="heading"><?php echo lang('latest_study_material') ?></h2> </div>
														<?php 
														$data['paid_s_m_array'] = $paid_s_m_array;
														$data['study_material_list_data'] = $latest_study_material_data;
														$this->load->view('study_material_data_list',$data); 
														?>
													</div>
												</div>
												<!-- Latest study material Work End -->  
												<?php
											}?>


											<?php $show_home_page_popular_study_material = (isset($this->settings->show_home_page_popular_study_material) && $this->settings->show_home_page_popular_study_material == "YES") ? TRUE : FALSE; ?>

											<?php
											if($popular_study_material_data  && $show_home_page_popular_study_material == TRUE)
												{ ?>
													<!-- Popular study material Work Start -->
													<div class="col-12">
														<div class="row">
															<div class="col-12 text-center"> <h2 class="heading"><?php echo lang('popular_study_material') ?></h2> </div>
															<?php 
															$data['study_material_list_data'] = $popular_study_material_data;
															$this->load->view('study_material_data_list',$data); 
															?>
														</div>
													</div>
													<!-- Popular study material Work End --> 
													<?php
												}?>
											</div>

											<!-- End study matirial -->


											<?php $show_home_page_testimonial = (isset($this->settings->show_home_page_testimonial) && $this->settings->show_home_page_testimonial == "YES") ? TRUE : FALSE; ?>

											<?php
											if($testimonial_data && $show_home_page_testimonial == TRUE)
												{ ?>
													<div class="container-fluid p-0">
														<!-- Testimonials Work Start -->
														<div class="col-12 text-center">
															<h2 class="text-center heading"><?php echo lang('front_testimonial'); ?></h2>
															
														</div>

														<section class="testimonial-section" style="<?php echo get_admin_setting('testimonial_background');?> ">
															<div class="testimonials testimonial-reel">
																<?php
																$testimonial_path  = base_url('/assets/images/testimonial/');
																foreach ($testimonial_data as  $testimonial_array) 
																{ 

																	$image_name = $testimonial_array->profile ? $testimonial_array->profile : "user.png";
																	$image_real_name = $image_name ; 
																	$image_name = $testimonial_path.$image_real_name;
																	if(!is_file(FCPATH."assets/images/testimonial/".$image_real_name))
																	{
																		$image_name = base_url('assets/default/user.png');
																	}
																	$testimonial_profile = $image_name;

																	?>
																	<div class="testimonial">
																		<p>“<?php echo strip_tags($testimonial_array->content); ?>”</p>
																		<img src="<?php echo xss_clean($testimonial_profile); ?>">
																		<div class="details">
																			<span><?php echo xss_clean($testimonial_array->name); ?></span>
																		</div>
																	</div>
																	<!-- / Testimonial -->
																	<?php
																} ?>
															</div>
														</section>
														<!-- Testimonials Work End -->
														</div><?php
													} 
													?>

													<?php 
													$advertisments_on_position = get_advertisment_by_position('home_page_below_testimonials');
													if($advertisments_on_position)
													{
														foreach ($advertisments_on_position as $advertisment_on_position) 
														{
															$ads_img_url = $path = base_url("assets/images/advertisment/$advertisment_on_position->image");
															?>
															<div class="container">
																<div class="row">
																	<div class="col-12 text-center p-0 my-5">
																		<?php
																		if($advertisment_on_position->is_goole_adsense == 0)
																			{ ?>
																				<a class="w-100 h-100 d-flex" target="_blank" href="<?php echo $advertisment_on_position->url; ?>">
																					<img class="w-100 advertisment_image_on_front" height="200px" src="<?php echo $ads_img_url; ?>">
																				</a>
																				<?php
																			}
																			else
																			{
																				echo "<div class='w-100 px-2 bg-white'>". htmlspecialchars_decode($advertisment_on_position->google_ad_code)."</div>";
																			}
																			?>
																		</div>
																	</div>
																</div>
																<?php      
															}
														} ?>

													</section>
												</div>


												<div class="col-md-3">
													
													<div class="categories">
														<div class="section-title-wrapper">
															<div class="section-title">
																<h3>Quizes Categories</h3>
															</div>
														</div>


														<?php 
														$user_id = isset($this->user['id']) ? $this->user['id'] : 0;
														$category_img_dir = base_url("assets/images/category_image/");
														$data['is_premium_member'] = $is_premium_member;
														$data['paid_quizes_array'] = $paid_quizes_array;

														if($category_data)
														{  
															$i = 0;
															foreach ($category_data as $category_array) 
															{
																$i++;
																$difficulty_star =  get_category_stars($category_array->id,$user_id); 
																$category_image = $category_array->category_image ? $category_array->category_image : "default.jpg";
																$category_image_name = $category_image ; 
																$category_image = $category_img_dir.$category_image;
																if(!is_file(FCPATH."assets/images/category_image/".$category_image_name))
																{
																	$category_image = base_url('assets/default/default.jpg');
																}
																?>

																<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12category_data_section" >  
																	<div class="grid">
																		<figure class="effect-ming">
																			<img src="<?php echo xss_clean($category_image); ?>" alt="img09"/>
																			<figcaption>


																				<?php 
																				$category_url = base_url('category/').$category_array->category_slug;
																				$category_class = "";
																				if($user_id > 0 && $difficulty_star) 
																				{ 
																					$category_url = "javascript:void(0)";
																					$category_class = "difficulty_level_model";
																				} ?>


																				<a href="<?php echo $category_url; ?>" class="<?php echo $category_class; ?>" data-category_slug='<?php echo $category_array->category_slug; ?>'>&nbsp;</a>
																				<div class="row">
																					<div class="col-12 mb-3">
																						<h2 class="category_name"><?php echo xss_clean($category_array->category_title);?></h2>
																					</div>
																					<?php
																					if($user_id > 0 && $difficulty_star) 
																					{ 
																						$easy_star = ($difficulty_star['d_l_1'] == 1) ? "gold-star" : "";
																						$medium_star = ($difficulty_star['d_l_2'] == 2) ? "gold-star" : "";
																						$hard_star = ($difficulty_star['d_l_3'] == 3) ? "gold-star" : "";
																						?>
																						<div class="col-12">
																							<span><i class="fa fa-star level-star <?php echo $easy_star;?>"></i></span>
																							<span><i class="fa fa-star level-star <?php echo $medium_star;?>"></i></span>
																							<span><i class="fa fa-star level-star <?php echo $hard_star;?>"></i></span>
																						</div>
																						<?php 
																					} ?>                  
																				</div>


																			</figcaption>     
																		</figure>
																	</div>
																</div>

																<?php 
																if($i == 6 OR $i > 6) { break;}
															}

															if($i == 6 OR $i > 6)
																{ ?>

																	<div class="col-md-12 col-xl-12 col-sm-12 text-center my-5"> 
																		<a href="<?php echo base_url('all-quiz-categories'); ?>" class="btn btn-success btn-lg mt-5"><?php echo lang("view_all_categories") ?></a>
																	</div>

																	<?php
																} 
															}
															else
																{ ?>

																	<div class="col-12 text-center mt-5">
																		<h3 class="text-danger mt-5"><?php echo lang('no_category_found_in')." "; ?>   </h3>

																	</div>
																	<?php
																} ?>  



															</div>
														</div>
													</div>
												</div>
												<?php 
												
	}else{?>
	
	<div class="container">
		<div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>Test Series</h3>
                                    </div>
                                </div>
            <div class="row">
<div class="col-md-12">

			<div class="test-form">
				<form method="post" action="<?=base_url()?>test-series" id="testusersform" >
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
					<div class="row">
					<div class="col-md-6 form-group">
							<input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name" required>
						</div>
						<div class="col-md-6 form-group">
							<input type="tel" name="lastname" id="lastname" class="form-control" placeholder="Last Name" required>
						</div>
						
						<div class="col-md-6 form-group">
							<input type="text" name="username" id="username" class="form-control" placeholder="User Name" required>
						</div>
						<div class="col-md-6 form-group">
							<input type="tel" name="phone" id="phone" class="form-control" placeholder="Mobile No." required>
						</div>
						<div class="col-md-6 form-group">
							<input type="email" name="emailid" id="emailid"  class="form-control" placeholder="Email Id" required>
						</div>
						<div class="col-md-6 form-group">
							<select class="form-control" name="category" id="category" required>
								<option>Select Class/Course</option>
								<?php 
								
								$category = $this->TestModel->getcateogry();
								
								foreach($category as $rows){
									echo '<option value="'.$rows->id.'">'.$rows->category_title.'</option>';
									
									
								}
								
								?>
							</select>
						</div>
						
						<div class="col-md-12 form-group text-center">
							<button class="btn btn-primary b1">Submit</button>
						</div>
					</div>
				</form>
				
				
		</div>
	</div>
</div>
	</div>
	
	<?php } ?>
												
											</section>




											
<script>

$(document).ready(function () {

		$("#testusersform").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				username: {
					required: true,
					minlength: 5,
					remote:'<?=base_url()?>Home_Controller/checkusername'
				},
				
				emailid: {
					required: true,
					email: true
				},
				phone: {
					required: true,
					minlength: 10,
					remote:'<?=base_url()?>Home_Controller/checkmobile'
				}
			},
			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 5 characters",
					remote:'username already exist'
				},
				emailid: "Please enter a valid email address",
				phone:{ 
				required: "Please enter mobile number",
				remote:'mobile number already exist'
				
				}
			}, 
			submitHandler: function(event){
            submittestuser();
        }
		});


  function submittestuser() {
    $.ajax({
      type: "POST",
      url: "<?=base_url()?>Home_Controller/submittestusers",
      data: $('#testusersform').serialize(),
      dataType: "json",
      success: function(data)
        {
          if(data.status=='success'){
			  
			  location.reload(true);
		  }
        }
    });

  }
});

</script>