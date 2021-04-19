 <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
            <?php   $social_links = json_decode($this->db->get_where("tbl_options",["option_name"=>"social"])->row()->option_value); //print_r($data['social']);  ?>
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <h4 class="text-light footer-head">Social Media</h4>

                    <ul class="list-unstyled social-icon social mb-0 mt-4">
                    <?php if($social_links->facebook){ ?>
                        <li class="list-inline-item">
                            <a href="<?php echo $social_links->facebook ?>" target="_blank" class="rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook fea icon-sm fea-social">
									<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
								</svg>
                            </a>
                        </li>
                        <?php }?>
                        <?php if($social_links->instagram){ ?>
                        <li class="list-inline-item">
                         
                            <a href="<?php echo $social_links->instagram ?>" target="_blank" class="rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram fea icon-sm fea-social">
									<rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
									<path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
									<line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
								</svg>
                            </a>
                        </li>
                        
                        <?php 
                        }
                        
                        if($social_links->twitter){ ?>
                        <li class="list-inline-item">
                            <a href="<?php echo $social_links->twitter ?>" target="_blank" class="rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter fea icon-sm fea-social">
									<path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
								</svg>
                            </a>
                        </li>
                        
                        <?php 
                        }
                        if($social_links->linkedin){ ?>
                        <li class="list-inline-item">
                            <a href="<?php echo $social_links->linkedin ?>" target="_blank" class="rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin fea icon-sm fea-social">
									<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
									<rect x="2" y="9" width="4" height="12"></rect>
									<circle cx="4" cy="4" r="2"></circle>
								</svg>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                    <!--end icon-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Company</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="<?php echo base_url() ?>home" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>Home</a></li>
                        <li><a href="<?php echo base_url() ?>about/why_cbg" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> About Us</a></li>
                        <li><a href="<?php echo base_url() ?>services" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Services</a></li>
                        <li><a href="<?php echo base_url() ?>contact/privacy_policy" s class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Privacy Policy</a></li>
                        <li><a href="<?php echo base_url() ?>contact" s class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Contact Us</a></li>
                    </ul>
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Useful Links</h4>
                    <ul class="list-unstyled footer-list mt-4">

                        <li><a href="<?php echo base_url() ?>about/why_cbg" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Why Career Bridge Group</a></li>
                        <li><a href="<?php echo base_url() ?>about/what_students" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> What Students Say About us</a></li>
                        <li><a href="<?php echo base_url() ?>live" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Live</a></li>
                        <li><a href="<?php echo base_url() ?>events" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Events</a></li>
                        <li><a href="<?php echo base_url() ?>hiring" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Hiring</a></li>
                        <li><a href="<?php echo base_url() ?>contact/partner_with_us" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Partner With Us</a></li>

                    </ul>
                </div>
                <!--end col-->
                 <?php $contact = json_decode($this->db->get_where("tbl_options",["option_name"=>"contact"])->row()->option_value); ?>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0 address">
                    <h4 class="text-light footer-head ">Address</h4>

                    <div class="media pb-2">
                        <i class="mdi mdi-map-marker"></i>
                        <div class="media-body">
                            <?php echo $contact->details ?>
                        </div>
                    </div>
                    <div class="media pb-2">

                        <i class="mdi mdi-cellphone-iphone"></i>
                        <div class="media-body">+<?php echo $contact->mobile_number ?> </div>
                    </div>

                    <div class="media">
                        <i class="mdi mdi-email-open"></i>
                        <di class="media-body">

                             <?php echo $contact->email ?>
                        </di>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                        <?php $copyright = $this->db->get_where("tbl_options",["option_name"=>"copyright"])->row()->option_value; ?>

                    <div class="text-sm-left">
                        <p class="mb-0"><?php echo $copyright; ?></p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!-- Footer End -->
    <!-- Back to top --><a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <div class="whatsapp"><a href="https://wa.me/919948662255" target="_blank"><i class="mdi mdi-whatsapp"></i></a></div>
    <!-- modal-->
    
    <!-- Book now-->
    
    <!-- Back to top <a href="#" class="btn btn-icon2 btn-soft-primary chat">Online</a>-->
    <!--Start of Tawk.to Script-->


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXQMTZ4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--Start of Tawk.to Script-->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/604c3b7cf7ce1827092f9cb1/1f0ksgodt';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!--End of Tawk.to Script-->
    <!-- Back to top -->
    <!-- javascript -->
    <script src="<?php echo base_url() ?>assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/scrollspy.min.js"></script>
    <!-- SLIDER -->
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js "></script>
    <script src="<?php echo base_url() ?>assets/js/owl.init.js "></script>
    <script src="<?php echo base_url() ?>assets/js/swiper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/swiper.init.js"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/magnific.init.js"></script>
    <!-- Counter -->
    <script src="<?php echo base_url() ?>assets/js/counter.init.js "></script>
    <!-- Icons -->
    <script src="<?php echo base_url() ?>assets/js/feather.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/flatpickr.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/flatpickr.init.js"></script>
    <!-- Main Js -->
    <script src="<?php echo base_url() ?>assets/js/app.js"></script>
    <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>

    

</body>

</html>

<script type="text/javascript">
    $(document).ready(function(){
        $("#contact-form").on('submit', function(e) {
       
            e.preventDefault();
            var contactForm = $(this);
            $.ajax({
                url: "<?php echo base_url();?>home/booking",
                type: 'post',
                data: contactForm.serialize(),
                dataType : "json",
                success: function(response){
                  if(response.success == "success"){
                    $("#message").html(response.message);
                    setTimeout(function() {
                      location.reload();
                    }, 3000);
                  }else{
                    $("#message").html(response.message);
                    setTimeout(function() {
                      location.reload();
                    }, 3000);
                  }
                },
                error:function(data){
                  $("#message").html(response.message);
                }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#subscribe").on('submit', function(e) {
       // alert(contactForm);
            e.preventDefault();
            var contactForm = $(this);
            $.ajax({
                url: "<?php echo base_url();?>home/subscribe",
                type: 'post',
                data: contactForm.serialize(),
                dataType : "json",
                success: function(response){
                  if(response.success == "success"){
                    $("#message1").html(response.message);
                    setTimeout(function() {
                      location.reload();
                    }, 3000);
                  }else{
                    $("#message1").html(response.message);
                    setTimeout(function() {
                      location.reload();
                    }, 3000);
                  }
                },
                error:function(data){
                  $("#message1").html(response.message);
                }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#partnerwithus").on('submit', function(e) {
        alert(contactForm);
            e.preventDefault();
            var contactForm = $(this);
            $.ajax({
                url: "<?php echo base_url();?>partnerwithus/partner_reg",
                type: 'post',
                data: contactForm.serialize(),
                dataType : "json",
                success: function(response){
                  if(response.success == "success"){
                    $("#message1").html(response.message);
                    setTimeout(function() {
                      location.reload();
                    }, 3000);
                  }else{
                    $("#message1").html(response.message);
                    setTimeout(function() {
                      location.reload();
                    }, 3000);
                  }
                },
                error:function(data){
                  $("#message1").html(response.message);
                }
            });
        });
    });
</script>