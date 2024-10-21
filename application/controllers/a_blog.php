<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_blog extends CI_Controller {

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
       $user_id = $this->session->userdata('user_id');
         $data['blog_list'] = $this->Blog_model->getAll_blog_by_user_id($user_id);
        $this->load->view('header2.php');
        $this->load->view('etech_tut/admin_blog',$data);
        $this->load->view('etech_tut/blog', $data);
        $this->load->view('footer2.php');
         // $this->load->view('index', $data);

         $this->session->set_flashdata('user_id',$user_id);
	}

	public function get_blog()
	{
       // $user_id = $this->session->userdata('user_id');
        $user_id = base64_decode($this->input->get('I'));
         $data['blog_list'] = $this->Blog_model->getAll_blog_by_user_id($user_id);
        $this->load->view('header2.php');
        $this->load->view('etech_tut/admin_blog',$data);
        $this->load->view('footer2.php');
         // $this->load->view('index', $data);

         $this->session->set_flashdata('user_id',$user_id);
	}
	public function get_recent_blog()
	{
		 $data['recent_blog'] = $this->Blog_model->get_recent_blog();
        $this->load->view('blog_detail', $data);
	}
	public function add_blog()
	{
		$data1['member_list'] = $this->Blog_model->get_member();
        $this->load->view('add_blog',$data1);
	}
    public function save_blog()
    {
        //validate the form data 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            echo validation_errors();
        }
        else
        {     
            $data['category'] = $this->input->post('category', TRUE);    
            $data['sub_category'] = $this->input->post('sub_category', TRUE);
            $data['title'] = $this->input->post('title', TRUE);    
            $data['description'] = $this->input->post('description', TRUE);
            $data['upload_by'] = $this->input->post('upload_by', TRUE);    
            $data['post_date']  = $this->input->post('post_date', TRUE);
            $data['rand_id'] = substr($data['title'],0,3).rand(1000,90000); 


            $file_name = $_FILES['image']['name'];
            $fileSize = $_FILES["image"]["size"]/1024;
            $fileType = $_FILES["image"]["type"];
            $new_file_name=''; 
            $new_file_name .= $data['rand_id'];

            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./assets/blogs",
                'allowed_types' => "pgif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp",
                'overwrite' => TRUE,
                            'max_size' => "20240000", // Can be set to particular file size , here it is 50 MB(2048 Kb)
                           'max_height'      => "5000",
                            'max_width'       => "5000"  
                        );
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 


            if (!$this->upload->do_upload('image'))
            {
                echo $this->upload->display_errors();
            }
            else
            {
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $data['image'] = $upload_data['file_name'];
                //store pic data to the db
                $this->Blog_model->save_blog($data);
                // echo "Successfully Added";
                redirect(site_url().'a_blog/insert_success');
            }
        }

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
    public function edit_blog()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['member_list'] = $this->Blog_model->get_member();
         //$data['blog'] = $this->Blog_model->blog();
         $data['basic_info']=$this->Blog_model->blog_edit($s_id);
        // $data['basic_item']=$this->gallery_model->get_item($mem_id);   
        $this->load->view('add_blog', $data);     
    }
    public function update_blog()
    {
         $id = $this->input->post('id');
        $cat = $this->input->post('category');
        $subcat = $this->input->post('sub_category');
        $tit = $this->input->post('title');
        $upby = $this->input->post('upload_by');
        $disc = $this->input->post('description');
        $pd = $this->input->post('post_date');
        $rand= substr($tit,0,3).rand(1000,90000);


        $data =  array('category'=>$cat,'sub_category'=>$subcat,'title'=>$tit,'upload_by'=>$upby,'description' => $disc,'post_date' => $pd);

        $file_name = $_FILES['image']['name'];
        $fileSize = $_FILES["image"]["size"]/1024;
        $fileType = $_FILES["image"]["type"];
        $new_file_name='';
        $new_file_name .= $rand;

        $config = array(
            'file_name' => $new_file_name,
            'upload_path' => "./assets/blogs",
            'allowed_types' => "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp|wmv|webm",
            'overwrite' => TRUE,
                            'max_size' => "202400000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                          'max_height'      => "2500",
                            'max_width'       => "2500" 
                        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config); 


        if (! $this->upload->do_upload('image'))
        {
        // echo $this->upload->display_errors();
            $this->Blog_model->update_blog($data,$id);
             redirect(site_url().'a_blog/update_success');
        }
        else
        {
                //now get the file uploaded data 
            $upload_data = $this->upload->data();
                //get the uploaded file name
            $data['image'] = $upload_data['file_name'];
            $this->Blog_model->update_blog($data,$id);
            $this->session->set_flashdata('message','Data Updated Successfully !!!');
            redirect(site_url().'a_blog/edit_blog');
            // echo "Data Updated Successfully";
        }            
    }
    public function blog_detail()
    {
         $this->load->view('header2');    
         $s_id = base64_decode($this->input->get('I'));
          $data['blog_detail']=$this->Blog_model->blog_detail($s_id); 
           $data['comment_detail']=$this->Blog_model->comm_detail($s_id); 
           $data['recent_blog']=$this->Blog_model->get_recent_blog($s_id); 
           $this->load->view('etech_tut/blog_detail', $data);  
            $this->load->view('footer2');       
    }
    public function delete_blog()
    {
        $s_id = base64_decode($this->input->get('I'));
         $data['basic_info']=$this->Blog_model->delete_blog($s_id);   
        $this->load->view('blog_detail', $data);     
    }

    public function delete()
    {
       $s_id = base64_decode($this->input->get('I'));        
       // $id = $this->input->post('id');
        $this->Blog_model->delete($s_id);
        $this->session->set_flashdata('delete_message','Data Deleted Successfully !!!');
         redirect(site_url().'a_blog');
    }
    public function insert_success()
    {
        $this->add_blog();
    }
   public function update_success()
    {
        $this->session->set_flashdata('message','Data Updated Successfully !!!');
         $this->add_blog();
    }


}
