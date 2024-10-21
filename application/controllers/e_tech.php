<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_tech extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Service_model');
		$this->load->model('Team_model');
		$this->load->model('Blog_model');
		$this->load->model('Video_model');
		$this->load->model('Portfolio_model');
		$this->load->model('Certificate_model');
		$this->load->model('Question_model');
		$this->load->model('Detail_model');
		$this->load->library('encryption');
		$this->load->library('session');
	}
	public function index()
	{
		 $data['service_list'] = $this->Service_model->getAll_service();
		 $data['team_list'] = $this->Team_model->getAll_team();
		 $data['portfolio_list'] = $this->Portfolio_model->getAll_portfolio();
		 $data['video_list'] = $this->Video_model->getAll_video();
		 $data['blog_list'] = $this->Blog_model->getAll_blog();
		 $data['question_list'] = $this->Question_model->getAll_question();    
		 $data['certificate_list'] = $this->Certificate_model->getAll_certificate();    
           $this->load->view('front_view', $data);
        
	}
	public function about_as()
	{
	     $this->load->view('about_as');
	}
		public function privacy()
	{
	     $this->load->view('privacy');
	}
 public function term()
   {
	     $this->load->view('term');
	}
 public function disclaimer()
   {
	     $this->load->view('disclaimer');
	}
	public function admin_home()
	{
		$data['team_list'] = $this->Team_model->getAll_team();
		$this->load->view('admin_home', $data);
	}
   public function blog()
   {
   	$this->load->view('blog');
   }
    public function service()
   {
   	$this->load->view('service');
   }
    public function team()
   {
   	$this->load->view('team');
   }
   public function portfolio()
   {
   	$this->load->view('portfolio');
   }

    public function login()
   {
   	$this->load->view('login');
   }
   public function admin()
   {
   	$this->load->view('admin');
   }
 public function service_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['service_detail']=$this->Detail_model->service_detail($s_id); 
        $this->load->view('service', $data);     
    }
 public function blog_detail()
    {
    	    $this->load->view('etech_tut/b_header');  
         $s_id = base64_decode($this->input->get('I'));
         $data['blog_detail']=$this->Detail_model->blog_detail($s_id);
         $data['comment_detail']=$this->Detail_model->comm_detail($s_id); 
        $data['recent_blog']=$this->Detail_model->get_recent_blog($s_id); 
        $this->load->view('etech_tut/blog_detail', $data);  
        $this->load->view('etech_tut/b_footer');    
    }
 public function portfolio_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['portfolio_detail']=$this->Detail_model->portfolio_detail($s_id); 
         //$data['skilled'] = $this->Portfolio_model->get_developer_by_portfolio_id($s_id);
        $this->load->view('portfolio', $data);     
    }
 public function certificate_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['certificate_detail']=$this->Detail_model->certificate_detail($s_id); 
         //$data['skilled'] = $this->Portfolio_model->get_developer_by_portfolio_id($s_id);
        $this->load->view('certificate', $data);     
    }
    public function team_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['team_detail']=$this->Team_model->team_detail($s_id); 
        $this->load->view('team', $data);     
    }
    public function join_us()
    {
    	$this->load->view('join_us');
    }
}
