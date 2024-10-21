<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etech_tut extends CI_Controller {

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
	 * 
	 */
	    function __construct()
    {
        parent::__construct();
        $this->load->database();        
        $this->load->model('Blog_model');
        $this->load->model('Detail_model');
        $this->load->library('encryption');
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('etech_tut/b_header'); 
         $data['blog_list'] = $this->Blog_model->getAll_blog();
        $this->load->view('etech_tut/blog', $data);
         $this->load->view('etech_tut/b_footer'); 
	}
	public function get_recent_blog()
	{
		 $data['recent_blog'] = $this->Blog_model->get_recent_blog();
        $this->load->view('blog_detail', $data);
	}
	public function add_blog()
	{
		$this->load->view('add_blog');
	}
    function search()
    {
        $term = $this->input->get('term'); 
        $this->db->like('title', $term); 
        $data = $this->db->get("tbl_blog")->result(); 
        echo json_encode($data);
    }
    public function search_blog()
    {
        // $ul=$this->session->userdata('user_level');
        $search_title = $this->input->post('title', TRUE);
        $data['search_blog']=$this->Blog_model->search_blog($search_title); 
        $this->load->view('admin_blog',$data);
    }

 public function blog_detail2()
    {
        $this->load->view('etech_tut/b_header');  
           $s_id = base64_decode($this->input->get('I'));
           $data['blog_detail']=$this->Blog_model->blog_detail($s_id); 
           $data['comment_detail']=$this->Blog_model->comm_detail($s_id); 
           $data['recent_blog']=$this->Blog_model->get_recent_blog($s_id); 
           $this->load->view('etech_tut/blog_detail', $data);   
        $this->load->view('etech_tut/b_footer');    
    }



// BOOTSTRAP

	public function html_encoder()
	{
        $this->load->view('html_encoder');
	}
// BOOTSTRAP

}
