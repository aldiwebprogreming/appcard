<?php 

	/**
	 * 
	 */
	class Data_user extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){

			$data['title'] = 'Data Buyer';
			$data['sub_tilte'] =  "Data Buyer";

			$data['buyer'] = $this->db->get('tbl_buyer')->result_array();

			$this->load->view('template/header', $data);
			$this->load->view('Home/buyer', $data);
			$this->load->view('template/footer');
		}


		function send_card(){

			$date  = date("m/d/Y");
			$dua_hari= mktime(0,0,0,date("n"),date("j")+2,date("Y"));
			$up = date("m/d/", $dua_hari);

			$this->db->like('BirthDate', $up);
			$get = $this->db->get('tbl_buyer')->result_array();
		
			foreach ($get as $list) {
			

				$data = [
					'nama_user' => $list['UserName'],
					'keterangan' => $list['Email'],
					'tgl_ultah' => $list['BirthDate'],
				];

				$nama = $list['UserName'];
				$email = $list['Email'];

				$this->_kirimEmail($nama, $email);
				$input = $this->db->insert('tbl_ultah', $data);
				
			}

			if ($input) {
				$this->session->set_flashdata('message', 'swal("sukses!", "Ucapan berhasil dikirim", "success");');
					redirect('data-buyer');
				}
			
			
		}

		private function _kirimEmail($nama,$email){


			$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'alldii1956@gmail.com',
			'smtp_pass' => 'aldimantap123',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n",
		];



		$this->load->library('email', $config);
		$this->email->initialize($config);

	      $this->email->from('alldii1956@gmail.com', 'ebunga');
	      $this->email->to($email);
	      $this->email->subject('Info ebunga');

	      // $get = file_get_contents(base_url('email/email.php?id=3'));
	      $get1 = file_get_contents(base_url('email/email3.php'));
	      $get2 = file_get_contents(base_url('email/email4.php'));	
	  		$this->email->message("$get1 <div style='color:#30373b;font-family:Antonio, Arial, sans-serif;font-size:30px;font-weight:bold;line-height:18px;text-align:center; color: orange;'>
                          $nama
                        </div> $get2");
	 	

        if ($this->email->send()) {
        	
		        	echo "berhasil";
		        } else {


		        	  echo 'Email tidak berhasil dikirim';
		               echo '<br />';
		               echo $this->email->print_debugger();
		        }


		}

		function dataultah(){

			$data['title'] = "Data ultah";
			$data['sub_title'] = "Data Ultah Hari ini";

			$date  = date("m/d/Y");
			$dua_hari= mktime(0,0,0,date("n"),date("j")+2,date("Y"));
			$up = date("m/d/", $dua_hari);

			echo $up;

			$this->db->like('BirthDate', $up);
			$data['ultah'] = $this->db->get('tbl_buyer')->result_array();

			$this->db->like('BirthDate', $up);
			$data['row'] = $this->db->get('tbl_buyer')->num_rows();

			$this->load->view('template/header', $data);
			$this->load->view('Home/data_ultah', $data);
			$this->load->view('template/footer');


		}

	 
	}

 ?>