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

			 function logout(){

			$this->session->unset_userdata('username');
			redirect('login/');
		}

			
		}

 ?>