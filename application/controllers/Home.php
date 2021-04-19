<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Home_Model");
        
    }
	public function index()
	{
		$this->load->view('home');
	}
	
	
	public function booking(){
	
	  $data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),          
            'date' => $this->input->post('date'),   
            'time' => $this->input->post('time'),   
		);
		//print_R($data);die;
		$booking = $this->Home_Model->booking($data);
        if ($booking) {
         $to_email = $this->input->post('email'); 
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'localhost',
                'smtp_port' => 465,
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'wordwrap' => TRUE
              );
                  $this->email->initialize($config);
            //Send mail with data
            $subject = "Enquiry Information.";
            $message = "Enquiry Information.";
            $this->email->from('', "Admin");
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send()) {
                echo json_encode(["status"=>"success","message"=>"<div class='alert alert-success'>We have received your request successfully, We'll contact you soon.</div>"]);
            } else {
                echo json_encode(["status"=>"error","message"=>"<div class='alert alert-danger'>Error Occured  </div>"]);
            }
        }
    }
    
    
     //subscribe news latter//
	public function subscribe(){
		$email = $this->input->post("sub_email",true);
	    $data = [
	
			"email"=> $this->input->post("sub_email"),
		];
		
		$subscribe = $this->db->insert("tbl_subscribers",$data);
		//print_r($subscribe);die;
		if($subscribe){
		  $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'localhost',
                'smtp_port' => 465,
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'wordwrap' => TRUE
              );
            $this->email->initialize($config);
            //Send mail with data
            $subject = "Enquiry Information.";
            $message = "Enquiry Information.";
            $this->email->from('admin@cbgroup.in', "Admin");
            $this->email->to($data['email'],'admin@cbgroup.in');
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send()) {
                echo json_encode(["status"=>"success","message"=>"<div class='alert alert-success'>We have received your request successfully, We'll contact you soon.</div>"]);
            } else {
                echo json_encode(["status"=>"error","message"=>"<div class='alert alert-danger'>Error Occured  </div>"]);
            }
	    } 
    }
	
}
	
	

