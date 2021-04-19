<?php //$d  = &get_instance(); ?>
</div>
    </div>
    <footer class="footer">
		© 2020 Proxima by utsin.com
	</footer>
	<!-- ============================================================== -->
	<!-- End footer -->
	<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  --> 
   
</div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>adminassets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() ?>adminassets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>adminassets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="<?php echo base_url() ?>adminassets/dist/js/app.min.js"></script>
    <script src="<?php echo base_url() ?>adminassets/dist/js/app.init.mini-sidebar.js"></script>
    <script src="<?php echo base_url() ?>adminassets/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() ?>adminassets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url() ?>adminassets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>adminassets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>adminassets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>adminassets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="<?php echo base_url() ?>adminassets/dist/js/pages/dashboards/dashboard1.js"></script>
    <script src="<?php echo base_url() ?>adminassets/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url() ?>adminassets/select2/dist/js/select2.min.js"></script>
    <script src="<?php echo base_url() ?>adminassets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>adminassets/dist/js/pages/datatable/custom-datatable.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>adminassets/dist/js/pages/datatable/datatable-advanced.init.js"></script>
    <script src="<?php echo base_url() ?>adminassets/summernote/dist/summernote.js"></script>
    <script src="<?php echo base_url() ?>adminassets/js/jasny-bootstrap.js"></script>
    <script src="<?php echo base_url();?>adminassets/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url();?>adminassets/sweetalert/sweetalert2.min.js"></script>
    <script src="<?php echo base_url();?>adminassets/js/bootstrap-switch.min.js"></script>
    <script src="<?php echo base_url();?>adminassets/js/app-style-switcher.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.0/jquery.toast.min.js"></script>
    <script>
    var radioswitch = function() {
        var bt = function() {
            $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioState")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
            })
        };
        return {
            init: function() {
                bt()
            }
        }
    }();
    $(document).ready(function() {
        radioswitch.init()
    });
    </script>
</body>

</html>


<script type="text/javascript">  
    $('.summernote').summernote({
    toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'italic', 'underline', 'clear']],
    ['fontname', ['fontname']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['table', ['table']],
   // ['insert', ['link', 'picture', 'hr']],
    ['view', ['fullscreen', 'codeview']],
    ['help', ['help']]
  ],
  height: 350,
});

</script>
