<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studycountries extends CI_Controller {

		public function index()
	{
		$this->load->view('studycountries');
	}
	
	public function scholarshipcountries(){
	
	$this->load->view('scholarshipcountries');
	}
	
	public function visacountries(){
	
	$this->load->view('visacountries');
	}
	
	
	public function study_usa(){
	
	
	$this->load->view('studyusa');
	}
	
	public function study_uk(){
	
	
	$this->load->view('studyuk');
	}
    
    public function study_australia(){
	
	
	$this->load->view('study_australia');
	}
	public function study_canada(){
	
	
	$this->load->view('study_canada');
	}
    
    
}
