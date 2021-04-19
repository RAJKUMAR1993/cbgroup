<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Home_Model");
        
    }

	public function index()
	{
		$this->load->view('contact');
	}
	public function mailsending(){
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'mobile_number' => $this->input->post('phone_number'),          
			'message' => $this->input->post('message'),
			'created_date' => date("Y-m-d H:i:s")
		);
        $mail = $this->Home_Model->get_in_touch($data);
        if ($mail) {
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
            $subject = "testing";
            $this->email->from('teja@demoworks.in', "Admin");
            $this->email->to("rajkumar@thecolormoon.com");
            $this->email->subject($subject);
            $this->email->message($data['message']);
            if ($this->email->send()) {
                $this->session->set_flashdata('success', 'Mail sent!');
                redirect('contact');
            } else {
                //$this->session->set_flashdata('msg', '<div class="alert alert-danger">Problem in sending</div>');
                redirect('contact');
            }
		}
	}
	public function privacy_policy(){
	
	
	$this->load->view('privacypolicy');
	}
	
	public function partner_with_us(){
	
	
	$this->load->view('partner_with_us');
	}
}
