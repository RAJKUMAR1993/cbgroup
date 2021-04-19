<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partnerwithus extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Home_Model");
        
    }

	
		public function index()
	{
		$this->load->view('partner_with_us');
	}
	
	public function partner_reg(){
	
	   	$data = array(
			'name' => $this->input->post('name'),
			'company_name' => $this->input->post('companyname'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),  
			'country' => $this->input->post('country'),
			'state' => $this->input->post('state'),
			'city' => $this->input->post('city'),
		   );
	$partner = $this->Home_Model->partner_reg($data);
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
            $message = 'Dear '.$data['name'].',
			            Thank you for your purchase from '.$data['company_name'].'. The details of your purchase are below.
			            Email ID: '.$data['email'].'
			            Mobile Number: '.$data['phone'].'
			            Country: '.$data['country'].'
			            State: '.$data['state'].'
			            City: '.$data['city'].'
			            Thanks and Enjoy!';
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
}
