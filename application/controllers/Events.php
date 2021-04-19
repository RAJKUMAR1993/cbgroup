<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct(){
				
			parent::__construct();
	}


	public function index(){
			$data["story"] = $this->db->get_where("tbl_stories",array("deleted"=> 0))->result();

		$this->load->view('events',$data);
	}


	public function event_registration(){

		$event= $this->db->get_where("tbl_stories",array("deleted"=> 0))->result();

		foreach($event as $key => $evnets){
			echo $evnets->event;
//	echo "<pre/>";	print_r($evnets->event);
				if($evnets->event = "Name of the Event"){
					echo "success"
					
				}
				if($evnets->event = "Name "){
					echo "success"
					
				}

				if($evnets->event = " of "){
					echo "success"
					
				}

				if($evnets->event = "the "){
					echo "success"
					
				}

				if($evnets->event = "Event"){
					echo "success"
					
				}

		}


	}
}
