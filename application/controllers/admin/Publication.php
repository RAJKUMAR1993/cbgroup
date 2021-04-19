<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publication extends MY_Controller {

	public function __construct(){
				
			parent::__construct();
	}

	public function index(){
        $data["publications"] = $this->db->get_where("tb_publications",array("deleted"=> 0))->result();
		$this->load->view('admin/publication/publication',$data);	
		
	}

    public function add(){
        $image_id = $this->input->post("image_id");
		
		if($_FILES['image']['name'] != ""){
			$config['upload_path'] = 'uploads/publications/';
			$config['allowed_types'] = '*';
			$config['file_name'] = $_FILES['image']['name'];				 

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
          
			if($this->upload->do_upload('image')){
				$uploadData = $this->upload->data();
				$picture = 'uploads/publications/'.$uploadData['file_name'];
				
				if($image_id){
					
					unlink($this->input->post("old_image"));
						
				}
			}else{
				
				if($image_id){
			
					$picture = $this->input->post("old_image");

				}else{

					$picture = '';
						
				}
				
			}
		}
     
		$data = array(
            "image" => $picture,
			"title"=>$this->input->post("title"),
			"short_description"=>$this->input->post("short_description"),
			"long_description"=>$this->input->post("long_description"),
            "created_date"=> date("Y-m-d H:i:s"),
        );
		//print_r($data);die;
		$p = $this->db->insert("tb_publications",$data);
			
			if($p){
				$this->session->set_flashdata("success"," Successfully Added","success");
					redirect("admin/publication");
			}else{
				$this->session->set_flashdata("error","Error Occured ","error");
					redirect("admin/publication");
			}
	}
	public function status(){
			
		$id=$this->input->post_get("id",true);
		$status = $this->input->post("status",true);
		$data=array('status'=>$status);
		
		$this->db->set($data);
		$this->db->where("id",$id);
		$d=$this->db->update("tb_publications");
		if($d){
			if($status=="Active"){
				$this->session->set_flashdata("Success","Successfully Enabled","success");
			}else{
				$this->session->set_flashdata("Success","Successfully  Disabled","success");
			}
		}else{
			if($status=="Active"){
				$this->session->set_flashdata("Error","Error Occured While Enabling ","error");
			}else{
				$this->session->set_flashdata("Error","Error Occured While Disabling ","error");
				
			}	
		}
	}	
	
    public function update($id){
				
        $data["pub"] = $this->db->get_where("tb_publications",array("id"=>$id))->row();
       
        $this->load->view("admin/publication/edit_publication",$data);
    }

    public function edit(){
		// /print_r( $_REQUEST);die;
        $id = $this->input->post("id");
		$title = $this->input->post("title");
		$short_description = $this->input->post("short_description",true);
		$long_description = $this->input->post("long_description",true);
		$date = date("Y-m-d H:i:s");
    
		
		if($_FILES['image']['name'] != ""){
			$config['upload_path'] = 'uploads/publications/';
			$config['allowed_types'] = '*';
			$config['file_name'] = $_FILES['image']['name'];				 

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
          
			if($this->upload->do_upload('image')){
				$uploadData = $this->upload->data();
				$picture = 'uploads/publications/'.$uploadData['file_name'];
					
					unlink($this->input->post("old_image"));
						
				}
			}else{
					$picture = $this->input->post("old_image");

			
		}
		$data = array(
            "image" => $picture,
			"title"=>$title,
			"short_description"=>$short_description,
			"long_description"=>$long_description,
            "updated_date"=> $date,
        );
	
		$this->db->where('id', $id);
		$n = 	$this->db->update('tb_publications', $data);

        
		if($n){
			$this->session->set_flashdata("success"," Successfully Updated","success");
				//$this->alert->pnotify("success","Navbar Menu Successfully Updated","success");
				redirect("admin/publication");
		}else{
			$this->session->set_flashdata("error","Error Occured While Updating ","error");
				//$this->alert->pnotify("error","Error Occured While Updating Navbar Menu","error");
				redirect("admin/publication");
		}
    }
    public function delete($id){

		$data = array("deleted"=>1,"status"=>"Inactive");
		$this->db->set($data);
		$this->db->where("id",$id);
		$d = $this->db->update("tb_publications");
		if($d){
				$data = array("deleted"=>1,"status"=>"Inactive");
				$this->db->set($data);
				$this->db->where("id",$id);
				$d = $this->db->update("tb_publications");
				$this->session->set_flashdata("success","Successfully Deleted","success");
				//$this->alert->pnotify("success","Navbar Menu Successfully Deleted","success");
				redirect("admin/publication");
		}else{
			$this->session->set_flashdata("error","Error Occured While Deleting","error");
				//$this->alert->pnotify("error","Error Occured While Deleting Navbar Menu","error");
				redirect("admin/publication");
	}
		

	}
}