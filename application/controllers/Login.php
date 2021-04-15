<?php 	

		/**
		 * 
		 */
		class Login extends CI_Controller
		{
			
			function __construct()
			{
				parent:: __construct();
			}

			function index(){

				$data['title'] = "Login";

					$this->load->view('Login/index', $data);

			}

			function action(){


				$username = $this->input->post('username');
				$pass = $this->input->post('pass');	

					$cek = $this->db->get_where('login',array('username' => $username))->row_array();
					if ($cek) {
						
						if (password_verify($pass, $cek['pass'] )) {
								
							$data = [
								'username' => $username,
								'role' => $cek['role']
							];

							$this->session->set_userdata($data);
							redirect('home');
							
						}else{
							$this->session->set_flashdata('message', 'swal("Gagal!", "Password anda salah", "error");');
							redirect('login/');
						}
					} else{
						$this->session->set_flashdata('message', 'swal("Gagal!", "Username anda salah", "error");');
							redirect('login/');
					}
				
			}

			function add_admin(){

				$data['title'] = "Tambah admin";
				$data['sub_title'] = "Tambah Admin";

				$this->load->view('template/header', $data);
				$this->load->view('Home/add_admin', $data);
				$this->load->view('template/footer');
				

				
			}

			function add_action(){
				if ($this->input->post('kirim')) {

					$pass = password_hash($this->input->post('pass'), PASSWORD_DEFAULT);
					
					$data = [
						'username' => $this->input->post('username'),
						'pass' => $pass,
						'role' => $this->input->post('role')

					];

					$input = $this->db->insert('login', $data);
					if ($input== true) {
						$this->session->set_flashdata('message', 'swal("Sukses!", "Data anda berhasil di tambah", "success");');
				redirect('login/data_admin');
						
					}
				}
			}


			function data_admin(){

				$data['title'] = "Data admin";
				$data['sub_title'] = "Data Admin";
				$data['admin'] = $this->db->get('login')->result_array();

				$this->load->view('template/header', $data);
				$this->load->view('Home/data_admin', $data);
				$this->load->view('template/footer');


			}


			function hapus(){

				$id = $this->input->get('id');

				$this->db->where('id', $id);
				$this->db->delete('login');
				$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil dihapus", "success");');
				redirect('login/data_admin');
			}
		}

 ?>