<?php include 'includes/header.php';?>
<section class="bg-half bg-light d-table w-100" style="background: url('<?php echo base_url() ?>assets/images/hire-bread.jpg') center center;">
		<div class="bg-overlay bg-overlay-white"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center">
					<div class="page-next-level">
						<h4 class="title">Hiring</h4>
						<div class="page-next">
							<nav aria-label="breadcrumb" class="d-inline-block">
								<ul class="breadcrumb bg-white rounded shadow mb-0">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Hiring</li>
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
	<div class="position-relative">
		<div class="shape overflow-hidden text-white">
			<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
			</svg>
		</div>
	</div>
	<div class="text-center">
		
<img src="<?php echo base_url() ?>assets/images/coming-soon.jpg" >
	</div>
	<!-- Modal -->
	<div id="jobapply" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Job Apply</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

				</div>
				<div class="modal-body">

					<form class="rounded">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group position-relative">
									<label>Your Name :<span class="text-danger">*</span></label>
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm icons">
										<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
										<circle cx="12" cy="7" r="4"></circle>
									</svg>
									<input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group position-relative">
									<label>Your Email :<span class="text-danger">*</span></label>
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail fea icon-sm icons">
										<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
										<polyline points="22,6 12,13 2,6"></polyline>
									</svg>
									<input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group position-relative">
									<label>Your Phone no. :<span class="text-danger">*</span></label>
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone fea icon-sm icons">
										<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
									</svg>
									<input name="number" id="number" type="number" class="form-control pl-5" placeholder="Your phone no. :">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label>Job Title :</label>
									<select class="form-control custom-select" id="Sortbylist-Shop">
										<option>Graphic Designer</option>
										<option>Web Developer</option>
										<option>Hr Recruiter</option>
										<option>Manager</option>
										<option>Accountent</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group position-relative">
									<label>Description :</label>
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle fea icon-sm icons">
										<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
									</svg>
									<textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Describe the job :"></textarea>
								</div>
							</div>
							<!--end col-->
							<div class="col-md-12">
								<div class="form-group position-relative">
									<label>Upload Your Cv / Resume :</label>
									<input type="file" class="form-control-file" id="fileupload">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
									</div>
								</div>
							</div>
							<!--end col-->
						</div>
						<!--end row-->
						<div class="row">
							<div class="col-sm-12">
								<input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Apply Now">
							</div>
							<!--end col-->
						</div>
						<!--end row-->
					</form>
					<!--end form-->

				</div>
			</div>
		</div>
	</div>
	
<?php include 'includes/footer.php';?>