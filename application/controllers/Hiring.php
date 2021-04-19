<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hiring extends CI_Controller {

		public function index()
	{
		$this->load->view('hiring');
	}
}
