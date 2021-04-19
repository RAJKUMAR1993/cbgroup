<?php admin_header(); ?>
<?php admin_sidebar(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />


             <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Contacts List</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Contacts List</li>
                    </ol>
                </div>
            </div>
              <div class="container-fluid">
                <div class="row">
                    
                 <!----tables---->
                <div class="container-fluid">
                  <div class="row">
                    <form name="bulk_action_form" action="" method="post" onSubmit="return delete_confirm();"/>
                      <div class="col-12">
                          <div class="card">
                              <div class="card-body">
                                  <div class="table-responsive">
                                      <table id="file_export" class="table table-striped table-bordered display">
                                      <input type="submit" class="btn btn-danger btn-sm float-right" name="bulk_delete_submit" value="Delete" style="margin-left: 10px; ">
                                          <thead>
                                              <tr>
                                            
                                              <th>S.No</th>
                                              <th>Name</th>
                                              <th>Email</th>
                                              <th>Mobile Number</th>
                                              <th>Message</th>
                                              <th>Date</th>
                                              <th>Action <input type="checkbox" id="select_all" value=""/> </th>
                                         
                                              </tr>

                                          </thead>
                                          <tbody>
                                        <?php  $i = 0;
                                                foreach ($contact as $contacts) {  ?> 
                                            <tr>
                                       
                                              <td><?php echo ++$i ?></td>
                                              <td><?php echo $contacts->name ?></td>
                                              <td><?php echo $contacts->email ?></td>
                                              <td><?php echo $contacts->mobile_number ?></td>
                                              <td><?php echo $contacts->message ?></td>
                                              <td><?php echo date("d-m-Y h:i:s a",strtotime($contacts->created_date));?></td>

                                              <td>
                                              <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $contacts->id; ?>"/></td>  
                                              </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  </form>
                </div>
              </div>
                
      
<?php admin_footer(); ?> 
<script type="text/javascript">
    $(".menu_icon").on("change",function(){
        var menu_id = $(this).attr("menu_id");
        $("#menu_icon").val(menu_id);
        });
  $(".main_icon").on("change",function(){
    var main_id = $(this).attr("main_id");
    $("#main_icon").val(main_id);
  });

    function archiveFunction(id) {
         //alert(id);
            Swal({
        title: 'Are you sure?',
        text: 'You will not be able to recover this selected Email!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, keep it'
        }).then((result) => {
        if (result.value) {

            Swal(
            'Deleted!',
            'Your Selected Menu has been deleted.',
            'success'
            )
            $.ajax({
                method: 'POST',
                data: {'id' : id },
                url: '<?php echo base_url() ?>admin/settings/del_contact/'+id,
                success: function(data) {
                    location.reload();   
                }
            });
        
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal(
            'Cancelled',
            'Your Selected Menu is safe :)',
            'success',
            
            )
        }
    })
    }
  
</script>

   <script>
function delete_confirm(){
    //alert(result);
    if($('.checkbox:checked').length > 0){
        var result = confirm("Are you sure to delete selected data?");
        if(result){
            return true;
        }else{
            return false;
        }
    }else{
        alert('Select at least 1 record to delete.');
        return false;
    }
}
 
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>

