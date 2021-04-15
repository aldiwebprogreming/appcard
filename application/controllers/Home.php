<?php 
	
	/**
	 * 
	 */
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){

			$data['title'] = 'Dashboard';
			$data['sub_tilte'] =  "Dashboard";

			$this->load->view('template/header', $data);
			$this->load->view('Home/dashboard', $data);
			$this->load->view('template/footer');
		}

	 
	}

 ?>