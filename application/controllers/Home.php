<?php 
	
	/**
	 * 
	 */
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('username') == NULL) {
			redirect('login/');
			}
		}

		function index(){

			$data['title'] = 'Dashboard';
			$data['sub_tilte'] =  "Dashboard";

			$data['buyer'] = $this->db->get('tbl_buyer')->num_rows();
			$data['send_email'] = $this->db->get('tbl_ultah')->num_rows();


			$date = date('m/d/Y');
			$this->db->like('BirthDate', $date);
			$data['ultah'] = $this->db->get('tbl_buyer')->num_rows();


			$this->load->view('template/header', $data);
			$this->load->view('Home/dashboard', $data);
			$this->load->view('template/footer');
		}

	 
	}

 ?>