

<?php include 'includes/header.php';?>

<!-- Hero Start -->
	<section class="bg-half bg-light d-table w-100" style="background: url('<?php echo base_url() ?>assets/images/patner-bread.jpg') center center;background-size: cover">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center">
					<div class="page-next-level">
						<h4 class="title"> Partner With Us </h4>
						<div class="page-next">
							<nav aria-label="breadcrumb" class="d-inline-block">
								<ul class="breadcrumb bg-white rounded shadow mb-0">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Partner With Us </li>
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
	<!-- Shape Start -->
	<div class="position-relative bg-light">
		<div class="shape overflow-hidden text-light">
			<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
			</svg>
		</div>
	</div>
	<!--Shape End-->
	<!-- Hero End -->
	<section class="section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<div class="section-title mb-4 pb-2">
						<h4 class="title mb-4 head_line">Career Bridge Group is the Best Ever</h4>
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
			<!--end col-->
			<div class="row ">
				<div class="col-md-4 mt-4">
					<div class="media key-feature bg-white align-items-center p-3 rounded shadow-big">
						<div class="media-body">
							<h4 class="title mb-0">Fully Responsive</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 mt-4">
					<div class="media key-feature bg-white align-items-center p-3 rounded shadow-big">
						<div class="media-body">
							<h4 class="title mb-0">Direct Represented Universities</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 mt-4">
					<div class="media key-feature bg-white align-items-center p-3 rounded shadow-big">
						<div class="media-body">
							<h4 class="title mb-0">Easy Application flow</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 mt-4">
					<div class="media key-feature bg-white align-items-center p-3 rounded shadow-big">
						<div class="media-body">
							<h4 class="title mb-0">User friendly application interface</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 mt-4">
					<div class="media key-feature bg-white align-items-center p-3 rounded shadow-big">
						<div class="media-body">
							<h4 class="title mb-0">Highest Commission rates</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 mt-4">
					<div class="media key-feature bg-white align-items-center p-3 rounded shadow-big">
						<div class="media-body">
							<h4 class="title mb-0">Dedicated Partner Team</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 mt-4">
					<div class="media key-feature bg-white align-items-center p-3 rounded shadow-big">
						<div class="media-body">
							<h4 class="title mb-0">Offline & Online Support</h4>
						</div>
					</div>
				</div>
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--end section-->
	<!-- Start -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<div class="section-title mb-4 pb-2">
						<h4 class="title mb-4 head_line">Register Now</h4>
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
			<div class="row pt-5">
				<div class="col-lg-6 col-md-6 pr-0">
					<div class="rounded shadow-lg p-4">
					<div id="message"></div>
						<h5 class="mb-0">Your Details :</h5>
						<form class="mt-4" action="<?php echo base_url();?>partnerwithus/partner_reg" method="post" id="">
							<div class="row">
								<div class="col-12">
									<div class="form-group position-relative">
										<label>Your Name <span class="text-danger">*</span></label>
										<input name="name" id="firstname" type="text" class="form-control" placeholder="First Name :" required> </div>
								</div>
								<!--end col-->
								<div class="col-12">
									<div class="form-group position-relative">
										<label>Company Name <span class="text-danger">*</span></label>
										<input name="companyname" id="companyname" type="text" class="form-control" placeholder="Company Name :" required> </div>
								</div>
								<!--end col-->
								<div class="col-12">
									<div class="form-group position-relative">
										<label>Phone <span class="text-danger">*</span></label>
										<input type="text" name="phone" id="phone" class="form-control" placeholder="State Name :" required> </div>
								</div>
								<!--end col-->
								<div class="col-12">
									<div class="form-group position-relative">
										<label>Your Email <span class="text-danger">*</span></label>
										<input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required> </div>
								</div>
								<div class="col-md-6">
									<div class="form-group position-relative">
										<label>Town / City <span class="text-danger">*</span></label>
										<input type="text" name="city" id="city" class="form-control" placeholder="City Name :" required> </div>
								</div>
								<!--end col-->
								<div class="col-md-6">
									<div class="form-group position-relative">
										<label>Postal Code <span class="text-danger">*</span></label>
										<input type="text" name="postcode" id="postcode" class="form-control" placeholder="Zip :" required> </div>
								</div>
								<!--end col-->
								<div class="col-md-6">
									<div class="form-group position-relative">
										<label>State <span class="text-danger">*</span></label>
										<input type="text" name="state" id="state" class="form-control" placeholder="State Name :" required> </div>
								</div>
								<!--end col-->
								<div class="col-md-6">
									<div class="form-group position-relative">
										<label>Country <span class="text-danger">*</span></label>
										<input type="text" name="country" id="state" class="form-control" placeholder="Country :" required> </div>
								</div>
								<!--end col-->
								<div class="pull-right pl-3" align=right>
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
								<!--end col-->
							</div>
							<!--end row-->
						</form>
						<!--end form-->
					</div>
				</div>
				<!--end col-->
				<div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 pl-0">
					<div class="shadow-lg"><img src="<?php echo base_url() ?>assets/images/partner.jpg" class="img-responsive" width="100%" /></div>
				</div>
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--end section-->
	<!-- End -->





