
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
     
    class User extends CI_Controller 
    {
     
    	function __construct()
        {
    		parent::__construct();
    		$this->load->model('Users_model');
    		$this->load->library('encryption');
           $this->load->library('session');
     
            //get all users
            $this->data['users'] = $this->Users_model->getAllUsers();
    	}
     
    	public function index()
        {
    		$this->load->view('etech_tut/register', $this->data);
    	}
     
    	public function register()
        {
            // $this->load->config('email');
            // $this->load->library('email');
            //$this->load->library('email');

    		$this->form_validation->set_rules('email', 'Email', 'valid_email|required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]|max_length[30]');
            // $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'required|matches[password]');
     
            if ($this->form_validation->run() == FALSE) { 
             	$this->load->view('etech_tut/register', $this->data);
    		}
    		else{
    			//get user inputs
    			$email = $this->input->post('email');
    			$password = $this->input->post('password');
     
    			//generate simple random code
    			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    			$code = substr(str_shuffle($set), 0, 12);
     
    			//insert user to users table and get id
    			$user['email'] = $email;
    			$user['password'] = $password;
    			$user['code'] = $code;
    			$user['active'] = false;
    			$id = $this->Users_model->insert($user);
     
    			//set up email
    			$config = array(
    		  		'protocol' => 'smtp',
    		  		'smtp_host' => 'ssl://smtp.ethioptec.com',
    		  		'smtp_port' => 465,
                    'smtp_crypto' => 'ssl',
                    'charset'      => 'utf-8',
                    //'charset'    => 'utf-8',
    		  		'smtp_user' => 'mail@ethioptec.com', // change it to yours
    		  		'smtp_pass' => '21mail@Ethioptec27', // change it to yours
    		  		'mailtype' => 'html',
                    'validation'=>TRUE,
    		  		'wordwrap' => TRUE
                    //'newline'=>"\r\n"
                    
    			);

                //fsnq vkha dybc tous 
     
    			$message = 	"
    						<html>
    						<head>
    							<title>Verification Code</title>
    						</head>
    						<body>
    							<h2>Thank you for Registering.</h2>
    							<p>Your Account:</p>
    							<p>Email: ".$email."</p>
    							<p>Password: ".$password."</p>
    							<p>Please click the link below to activate your account.</p>
    							<h4><a href='".site_url()."user/activate/".$id."/".$code."'>Activate My Account</a></h4>
    						</body>
    						</html>
    						";
      

    		    $this->load->library('email', $config);
                //$this->email->initialize($config);
    		    $this->email->set_newline("\r\n");
                // $this->email->set_crlf("\r\n");
    		    $this->email->from($config['smtp_user'],'Ethiop_Computing');
    		    $this->email->to($email);
    		    $this->email->subject('Signup Verification Email');
    		    $this->email->message($message);
     
    		    //sending email
    		    if($this->email->send()){
    		    	$this->session->set_flashdata('message','Activation code sent to email');
    		    }
    		    else{
    		    	$this->session->set_flashdata('message', $this->email->print_debugger());
     
    		    }
     
            	redirect('User/register');
    		}
     
    	}
     
    	public function activate()
        {
    		$id =  $this->uri->segment(3);
    		$code = $this->uri->segment(4);
     
    		//fetch user details
    		$user = $this->Users_model->getUser($id);
     
    		//if code matches
    		if($user['code'] == $code)
            {
    			//update user active status
    			$data['active'] = true;
    			$query = $this->Users_model->activate($data, $id);
     
    			if($query)
                {
    				$this->session->set_flashdata('message', 'User activated successfully');
    			}
    			else{
    				$this->session->set_flashdata('message', 'Something went wrong in activating account');
    			}
    		}
    		else{
    			$this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
    		}
     
    		redirect('register');
     
    	}
     
    }
?>