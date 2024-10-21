<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {


	    function __construct()
    {
        parent::__construct();
        $this->load->database();        
        $this->load->model('Detail_model');
        $this->load->model('Blog_model');
        $this->load->model('Login_model');
        $this->load->model('Team_model');
        $this->load->model('Portfolio_model');
        $this->load->library('encryption');
        $this->load->library('session');
    }
  // public function login()
  // {
  //   $this->load->view('login');
  // }
    public function index()
    {
     redirect(site_url().'dt_invt');
    }

    public function service_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['service_detail']=$this->Detail_model->service_detail($s_id); 
        $this->load->view('service', $data);     
    }
 public function blog_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['blog_detail']=$this->Detail_model->blog_detail($s_id);
         $data['comment_detail']=$this->Detail_model->comm_detail($s_id); 
        $data['recent_blog']=$this->Detail_model->get_recent_blog($s_id); 
        $this->load->view('blog', $data);     
    }
 public function portfolio_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['portfolio_detail']=$this->Detail_model->portfolio_detail($s_id); 
        $this->load->view('portfolio', $data);     
    }
    public function team_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['team_detail']=$this->Team_model->team_detail($s_id); 
        $this->load->view('team', $data);     
    }

}
