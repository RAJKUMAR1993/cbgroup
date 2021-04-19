<?php admin_header(); ?>
<?php admin_sidebar(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />


             <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Events</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>admin/about/story">Events</a> </li>
                    </ol>
                </div>
            </div>
              <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                    </div>
                    <div class="col-6">
                    </div>
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header card-header-primary">
                                <h4 class="card-title text-white">Events Story</h4>
                            </div>
                            <div class="card-body">
                               
                                <form class="floating-labels mt-4" action="<?php echo base_url() ?>admin/about/story_update"method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $story_edit->id ?>">
                                
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group mb-5 focused">
                                           <input type="file" class="form-control" name="story_image" id="input2" >
                                           <input type="hidden" name="old_story_image" class="old_story_image" value="<?php echo $story_edit->image ?>">
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-3">
                                    <div class="form-group mb-5">
                                        <input type="text" class="form-control" name="text-file" value="<?php echo $story_edit->text ?>" id="input3" required>
                                        <span class="bar"></span>
                                        <label for="input3">Title</label>
                                    </div>
                                    </div>
                                   <div class="col-md-3">    
                            <div class="form-group mb-5">
                                <input type="text" class="form-control" name="event" id="input3" value="<?php echo $story_edit->event ?>" required>
                                <span class="bar"></span>
                                <label for="input3">Name of the Event</label>
                            </div>
                        </div>
                        <div class="col-md-3">    
                            <div class="form-group mb-5">
                                <input type="text" class="form-control" name="delegate" id="input3" value="<?php echo $story_edit->delegate ?>" required>
                                <span class="bar"></span>
                                <label for="input3">Name of the delegate</label>
                            </div>
                        </div>
                        <div class="col-md-3">    
                            <div class="form-group mb-5">
                                <input type="text" class="form-control" name="date" id="input3" value="<?php echo $story_edit->date ?>" required>
                                <span class="bar"></span>
                                <label for="input3">Date</label>
                            </div>
                        </div>
                        <div class="col-md-3">    
                            <div class="form-group mb-5">
                                <input type="text" class="form-control" name="time" id="input3" value="<?php echo $story_edit->time ?>" required>
                                <span class="bar"></span>
                                <label for="input3">Time</label>
                            </div>
                        </div>
                                    <div class="col-md-3">
                                    <img class="thumbnail" style="height: 70px; width: 100px;" src="<?php echo base_url(); ?><?php echo $story_edit->image ?>" alt="">
                                    </div>
                                    <div class="col-md-3">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                  </div>
                </div>
         
            
                 <!----tables---->
                 
      
<?php admin_footer(); ?> 

