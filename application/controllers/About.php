<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


	public function index()
	{
	   $this->load->view('about_cbg');
	}
	
	public function why_cbg(){
		$this->load->view('why_cbg');
	}
	
	public function what_students(){
		$this->load->view('what_students');
	}
	
	
	public function our_team(){
		$this->load->view('our_team');
	}
}
