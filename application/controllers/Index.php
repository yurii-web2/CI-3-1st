<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Index extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			# code...
		}

		public function index() {
			// $data = new stdClass();
			// $data->title = "CI3 Project"
			$data["title"] = "CI3 Project | Index";
			$data["content"] = "index/index";
			
			$this->load->view('frontend', $data);
		}
	}
?>