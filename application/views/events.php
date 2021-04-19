

<?php include 'includes/header.php';?>


<!-- Hero Start -->
	<section class="bg-half bg-light d-table w-100" style="background: url('<?php echo base_url() ?>assets/images/events-bread.jpg') center center;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center">
					<div class="page-next-level">
						<h4 class="title">Events</h4>
						<div class="page-next">
							<nav aria-label="breadcrumb" class="d-inline-block">
								<ul class="breadcrumb bg-white rounded shadow mb-0">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>

									<li class="breadcrumb-item active" aria-current="page">Events</li>
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
	<!--end section-->
	<!-- Hero End -->

	<!-- Shape Start -->
	<div class="position-relative">
		<div class="shape overflow-hidden text-light">
			<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
			</svg>
		</div>
	</div>
	<!--Shape End-->

	<!-- Blog STart -->
	<section class="section bg-light events-page">
		<div class="container">
			<div class="row">
			 <?php foreach ($story as $st) {  ?>
				<div class="col-lg-4 col-md-6 mb-4 pb-2">
				
					<div class="card blog rounded border-0 shadow overflow-hidden">
					 
						<div class="position-relative">
							<?php if($st->image){ ?>
							<img src="<?php echo base_url(); ?><?php echo $st->image ?>" class="card-img-top" alt="..." width="50%"> 
							<?php } ?>
							<div class="overlay rounded-top"></div>
						</div>
						<div class="card-body ">
							<h5><a href="javascript:void(0)" class="card-title title text-dark"><?php echo $st->text ?></a></h5>
							<span class="text-muted"><?php echo $st->event ?></span><br>
							<span class="text-muted"><?php echo $st->delegate ?></span>
							<div class="post-meta d-flex justify-content-between mt-3">
								<ul class="list-unstyled mb-0">
									<li class="list-inline-item mr-2 mb-0"><i class="mdi mdi-calendar-check"></i> <?php echo $st->date ?></li>
									<li class="list-inline-item"><i class="mdi mdi-clock mr-1"></i><?php echo $st->time ?></li>
								</ul>
							</div>
							<div class="text-center pt-4"> <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#booknow">Register</a> </div>
						</div>
					
					</div>
				
				</div>
					<?php } ?>
			


				<!-- PAGINATION START -->

				<!-- PAGINATION END -->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--end section-->
	
	<div id="booknow" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Register Now</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form class="mt-4" method="post" action="<?php echo  base_url() ?>events/event_registration">
						<div class="row">
							<div class="col-12">
								<div class="form-group position-relative">
									<label>Name <span class="text-danger">*</span></label>
									<input name="name" id="firstname" type="text" class="form-control" placeholder="First Name :" required> 
								</div>
							</div>
							<!--end col-->
							<!--end col-->
							<div class="col-12">
								<div class="form-group position-relative">
									<label>Phone Number<span class="text-danger">*</span></label>
									<input type="text" name="phone" id="phone" class="form-control" placeholder="State Name :" required>
								</div>
							</div>
							<!--end col-->
							<div class="col-12">
								<div class="form-group position-relative">
									<label>Email <span class="text-danger">*</span></label>
									<input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required> 
								</div>
							</div>
							<div class="col-md-12">
								<button class="btn btn-primary btn-block" type="submit">Submit</button>
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
	
	
	<!--end section-->





<?php include 'includes/footer.php';?>