

<?php include 'includes/header.php';?>




<section class="bg-half bg-light d-table w-100" style="background: url('<?php echo base_url() ?>assets/images/contact-bread.jpg') center center;">
		<div class="bg-overlay bg-overlay-white"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center">
					<div class="page-next-level">
						<h4 class="title">Contact</h4>
						<div class="page-next">
							<nav aria-label="breadcrumb" class="d-inline-block">
								<ul class="breadcrumb bg-white rounded shadow mb-0">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>

									<li class="breadcrumb-item active" aria-current="page">Contact</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>


	<!-- Hero End -->

	<!-- Shape Start -->
	<div class="position-relative bg-light">
		<div class="shape overflow-hidden text-light">
			<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
			</svg>
		</div>
	</div>
	<!--Shape End-->

	<!-- Start Contact -->
	<section class="section bg-light">
		<div class="container">
			<div class="row p-1">
				<div class="d-inline">
					<div class="card contact-detail shadow py-5 text-center border-0">
						<div class="card-body p-0">
							<div class="icon">
								<img src="<?php echo base_url() ?>assets/images/icon/bitcoin.svg" class="avatar avatar-small" alt="">
							</div>
							<div class="content mt-3">
								<h4 class="title font-weight-bold">Phone</h4>
								<a href="tel:+919948662255" class="text-primary">+9948 66 22 55</a>
							</div>
						</div>
					</div>

				</div>
				<div class="d-inline">
					<div class="card contact-detail shadow py-5 text-center border-0">
						<div class="card-body p-0">
							<div class="icon">
								<img src="<?php echo base_url() ?>assets/images/icon/Email.svg" class="avatar avatar-small" alt="">
							</div>
							<div class="content mt-3">
								<h4 class="title font-weight-bold">Mail</h4>
								<a href="mailto:connect@cbgroup.in" class="text-primary">connect@cbgroup.in</a>
							</div>
						</div>
					</div>

				</div>
				<!--end col-->
				<div class="d-inline">
					<div class="card contact-detail py-5 shadow text-center border-0">
						<div class="card-body p-0">
							<div class="icon">
								<img src="<?php echo base_url() ?>assets/images/icon/wifi.svg" class="avatar avatar-small" alt="">
							</div>
							<div class="content mt-3">
								<h4 class="title font-weight-bold">Social Media</h4>
								<ul class="cnt_social">
									<li>
										<a href="https://www.facebook.com/CareerBridgeGroup/"><i class="mdi mdi-facebook" target="_blank"></i></a>
									</li>
									<li>
										<a href="https://www.instagram.com/connect.cbg/"><i class="mdi mdi-instagram" target="_blank"></i></a>
									</li>
									<li>
										<a href="https://twitter.com/CBGConnect"><i class="mdi mdi-twitter" target="_blank"></i></a>
									</li>
									<li>
										<a href="https://www.linkedin.com/in/career-bridge-group-11b24022/" target="_blank"><i class="mdi mdi-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="d-inline">
					<div class="card contact-detail py-5 shadow text-center border-0">
						<div class="card-body p-0">
							<div class="icon">
								<img src="<?php echo base_url() ?>assets/images/icon/video.svg" class="avatar avatar-small" alt="">
							</div>
							<div class="content mt-3">
								<h4 class="title font-weight-bold">Zoom</h4>
								<ul class="cnt_social">
									<li>
										<a href="https://us02web.zoom.us/j/9200335879"><i class="mdi mdi-video" target="_blank"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="d-inline">
					<div class="card contact-detail py-5 shadow text-center border-0">
						<div class="card-body p-0">
							<div class="icon">
								<img src="<?php echo base_url() ?>assets/images/icon/location.svg" class="avatar avatar-small" alt="">
							</div>
							<div class="content mt-3">
								<h4 class="title font-weight-bold">Location</h4>
								<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4727.437964559316!2d78.44938981269502!3d17.423968437463504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb97357c644755%3A0x25244fd23eb064b8!2sCareer%20Bridge!5e0!3m2!1sen!2sin!4v1599532125665!5m2!1sen!2sin" class="video-play-icon h6 text-primary">We are in Google maps</a>

							</div>
						</div>
					</div>
				</div>
				<!--end col-->

			</div>


			<!--end row-->
		</div>
		<!--end container-->
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6  mt-4 pt-2">
					<div class="card shadow rounded border-0">
			              <?php if ($this->session->flashdata('success')) { ?>
                          <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                 <strong><?php echo $this->session->flashdata('success'); ?></strong>
                             </div>
                           <?php }?>
						<div class="card-body py-5">
							<h4 class="card-title">Get In Touch !</h4>
							<div class="custom-form mt-4">
								<div id="message"></div>
								<form method="post" action="" name="contact-form" id="contact">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group position-relative">
												<label>Name <span class="text-danger">*</span></label>
												<i data-feather="user" class="fea icon-sm icons"></i>
												<input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
											</div>
										</div>
										<!--end col-->
										<div class="col-md-6">
											<div class="form-group position-relative">
												<label>Phone Number</label>
												<i data-feather="book" class="fea icon-sm icons"></i>
												<input name="phone_number" id="subject" type="tel" class="form-control pl-5" placeholder="Phone Number :">
											</div>
										</div>
										<!--end col-->
										<div class="col-md-12">
											<div class="form-group position-relative">
												<label>Email <span class="text-danger">*</span></label>
												<i data-feather="mail" class="fea icon-sm icons"></i>
												<input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
											</div>
										</div>
										<!--end col-->
										<div class="col-md-12">
											<div class="form-group position-relative">
												<label>How can we help you.</label>
												<i data-feather="message-circle" class="fea icon-sm icons"></i>
												<textarea name="message" id="comments" rows="4" class="form-control pl-5" placeholder="How can we help you."></textarea>
											</div>
										</div>
									</div>
									<!--end row-->
									<div class="row">
										<div class="col-sm-12 text-center">
											<input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Send Message">
											<div id="simple-msg"></div>
										</div>
										<!--end col-->
									</div>
									<!--end row-->
								</form>
								<!--end form-->
							</div>
							<!--end custom-form-->
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-8 col-md-6 pl-md-3 pr-md-3 mt-4 pt-2">
					<div class="card map map-height-two shadow rounded p-2 map-gray border-0">
						<div class="card-body p-0">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4727.437964559316!2d78.44938981269502!3d17.423968437463504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb97357c644755%3A0x25244fd23eb064b8!2sCareer%20Bridge!5e0!3m2!1sen!2sin!4v1599532125665!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->


	</section>
	
	<?php include 'includes/footer.php';?>