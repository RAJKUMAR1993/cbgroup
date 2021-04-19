<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MY_Controller {

	public function __construct(){
				
			parent::__construct();
			$this->load->model("Admin");
	}

	public function index(){
		$data['social'] = json_decode($this->db->get_where("tbl_options",["option_name"=>"social"])->row()->option_value);
		$data['contact'] = json_decode($this->db->get_where("tbl_options",["option_name"=>"contact"])->row()->option_value);
		$data['img'] = $this->db->get_where("tbl_options",["option_name"=>"image"])->row();
		$data['copy_rights'] = $this->db->get_where("tbl_options",["option_name"=>"copyright"])->row();

		$data['contact_email'] = $this->db->get_where("tbl_options",["option_name"=>"contact_email"])->row();
		
		$this->load->view('admin/settings',$data);	
		
	}
		
	public function updatecontact(){
		$data = [
			"mobile_number"=>$this->input->post("mobile"),
			"email"=>$this->input->post("email"),
			"details"=>$this->input->post("details"),
		];
		$this->db->where("id",2)->update("tbl_options",["option_value"=>json_encode($data)]);
		$data1=["Status"=>'Active',"Message"=>"Successfully Updated."];
		echo json_encode($data1);
		exit();
		
	}
	public function updatsocial_links(){
		//echo "fvnfd";die;
	$data = [
		"facebook"=>$this->input->post("facebook"),
		"instagram"=>$this->input->post("instagram"),
		"linkedin"=>$this->input->post("linkedin"),
		"twitter"=>$this->input->post("twitter"),
	];

	$this->db->where("id",1)->update("tbl_options",["option_value"=>json_encode($data)]);
	  $this->session->set_flashdata("umsg"," Successfully Updated","umsg");
	$data1=["Status"=>'Active',"Message"=>"Successfully Updated."];
	echo json_encode($data1);
	exit();
	
}
	public function imageupload(){
		
		if($_FILES['image']['name'] != ""){
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = '*';
			$config['file_name'] = $_FILES['image']['name'];				 

			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('image')){
				$uploadData = $this->upload->data();
				$picture = $uploadData['file_name'];
						
				}
			}else{
					$picture = $this->input->post("old_image");
		}
		$data = array(
			"option_value" => $picture,
			"option_name" => "image"
		);
		
		
			$d = $this->db->where("id", 11)->update(" tbl_options",["option_value"=>$picture]);	
		
		if($d){
			
				$this->session->set_flashdata("vmsg",'<div class="alert alert-success">Updated Successfully</div>');
		
			redirect("admin/settings");
			
		}else{
			
			$this->session->set_flashdata("vmsg",'<div class="alert alert-danger">Error Occured</div>');	
			redirect("admin/settings");
			
		}
	}
	public function updatecopy_rights(){
	
		// $copy_rights = $this->input->post("copy_rights");
		// $data = array(
		// 	"option_value" => $copy_rights,
		// 	"option_name" => "copyright",
		// );
        $this->db->where("id",6)->update("tbl_options",["option_value"=> $this->input->post("copy_rights"),"option_name" => "copyright",]);
	//	echo $this->db->last_query();die;
		$this->session->set_flashdata("vmsg",'<div class="alert alert-success">Updated Successfully</div>');
		redirect("admin/settings");
	}
	
	public function updatecontact_email(){
	
        $this->db->where("id",12)->update("tbl_options",["option_value"=> $this->input->post("contact_email"),"option_name" => "contact_email",]);
  //	echo $this->db->last_query();die;
		$this->session->set_flashdata("vmsg",'<div class="alert alert-success">Updated Successfully</div>');
		redirect("admin/settings");
	}
	
	
	
	public function booking(){
		if($this->input->post('bulk_delete_submit1')){
			//	print_r("check");die;
					$ids = $this->input->post('checked_id');
					if(!empty($ids)){
						$delete = $this->Admin->delete_booking($ids);
						if($delete){
							$data['statusMsg'] = 'Selected users have been deleted successfully.';
						}else{
							$data['statusMsg'] = 'Some problem occurred, please try again.';
						}
					}else{
						$data['statusMsg'] = 'Select at least 1 record to delete.';
					}
				}
	$data["subscribe"] = $this->db->get_where("tbl_booking")->result();
	$this->load->view('admin/booking/booking',$data);	
	}
	
	 public function del_booking($id){
		$d = $this->db->delete("tbl_booking",["id"=>$id]);
		
		if($d){
			
			unlink($this->input->post("email"));
			$this->alert->pnotify("smsg",'Deleted Successfully');	
			redirect("admin/settings/booking");	
			
		}else{
			
			$this->alert->pnotify("emsg",'Error Occured');	
			redirect("admin/settings/booking");	
			
		}
		
	
	}
	
	
	public function subscribe(){
		if($this->input->post('bulk_delete_submit2')){
			    //print_r("check");die;
					$ids = $this->input->post('checked_id');
					if(!empty($ids)){
						$delete = $this->Admin->delete_subscribes($ids);
						if($delete){
							$data['statusMsg'] = 'Selected users have been deleted successfully.';
						}else{
							$data['statusMsg'] = 'Some problem occurred, please try again.';
						}
					}else{
						$data['statusMsg'] = 'Select at least 1 record to delete.';
					}
				}
                $data["subscribe"] = $this->db->get_where("tbl_subscribers")->result();
		        $this->load->view('admin/solutions_list',$data);	

     } 
     public function del_sub($id){
		$d = $this->db->delete("tbl_subscribers",["id"=>$id]);
		
		if($d){
			
			unlink($this->input->post("email"));
			$this->alert->pnotify("smsg",'Deleted Successfully');	
			redirect("admin/settings/subscribe");	
			
		}else{
			
			$this->alert->pnotify("emsg",'Error Occured');	
			redirect("admin/settings/subscribe");	
			
		}
	}
	
	
	
	public function contacts(){
		if($this->input->post('bulk_delete_submit')){
	//	print_r("check");die;
            $ids = $this->input->post('checked_id');
            if(!empty($ids)){
				$delete = $this->Admin->delete($ids);
                if($delete){
                    $data['statusMsg'] = 'Selected users have been deleted successfully.';
                }else{
                    $data['statusMsg'] = 'Some problem occurred, please try again.';
                }
            }else{
                $data['statusMsg'] = 'Select at least 1 record to delete.';
            }
        }
        $data["contact"] = $this->db->get_where("tbl_contact")->result();
		$this->load->view('admin/contact/contacts',$data);	

     } 
    public function del_contact($id){
		$d = $this->db->delete("tbl_contact",["id"=>$id]);
		
		if($d){
			
			unlink($this->input->post("email"));
			$this->alert->pnotify("smsg",'Deleted Successfully');	
			redirect("admin/settings/contacts");	
			
		}else{
			
			$this->alert->pnotify("emsg",'Error Occured');	
			redirect("admin/settings/contacts");	
			
		}
    }
	public function events(){
        $data["event"] = $this->db->get_where("events")->result();
		$this->load->view('admin/events',$data);	

     } 
    public function del_events($id){
		$d = $this->db->delete("events",["id"=>$id]);
		
		if($d){
			
			unlink($this->input->post("email"));
			$this->alert->pnotify("smsg",'Deleted Successfully');	
			redirect("admin/settings/events");	
			
		}else{
			
			$this->alert->pnotify("emsg",'Error Occured');	
			redirect("admin/settings/events");	
			
		}
    }
}