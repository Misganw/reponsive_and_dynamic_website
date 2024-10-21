<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	/**
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('encryption');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function auth()
	{
		$this->form_validation->set_rules('username', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			echo validation_errors();
		}
		else
		{
			$username = $this->input->post('username',TRUE);
			$password = $this->input->post('password', TRUE);
			$validate = $this->Login_model->validate($username,$password);
			

			if($validate)
			{
				$i          = $validate->row_array();
				$user_id   = $i['user_id'];
				$username   = $i['username'];
				$email      = $i['email'];
				$password   = $i['password'];
				$user_level = $i['user_level'];
				$status     = $i['status'];
				$user_session = array(
					'user_id'      => $user_id,
					'username'      => $username,
					'email'         => $email,
					'user_level'    => $user_level,
					'status'        => $status,
					'logged_in'     => TRUE
				);
				$this->session->set_userdata($user_session);

				if($status ==='active')
				{
					if($user_level === 'admin')
					{
						redirect('E_tech/admin_home');
					}
					elseif($user_level === 'user')
					{
						redirect('E_tech/admin_home');
					}
					else
					{
						redirect('login');
					}
				}
				else
				{  
					echo $this->session->set_flashdata('Activate','Can not Login. Please wait untile your account is Activated by the admin');
					redirect('login');
				}
			}
			else
			{
               $stored_pass=$this->encryption->decrypt($password);

				echo $this->session->set_flashdata('msg',$stored_pass);
				redirect('login');
			

			}
		}
		echo $stored_pass;
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect ('E_tech');

	}

	public function edit_user()
	{
		$s_id = base64_decode($this->input->get('I'));
		$data['basic_info']=$this->Login_model->user_edit($s_id); 
		$this->load->view('change', $data);     
	}

	public function update_user()
	{
		$id = $this->input->post('id');
		$un = $this->input->post('username');
		$pass = $this->encryption->encrypt($this->input->post('password', TRUE));
		$ul = $this->input->post('user_level');
		$st = $this->input->post('status');

		$data =  array('username'=>$un,'password' => $pass,'user_level' => $ul,'status'=>$st);
		$this->Login_model->update_user($data,$id);
		$this->session->set_flashdata('message','Data Updated Successfully !!!');
		redirect(site_url().'login/edit_user');
            // echo "Data Updated Successfully";
	}            

}
