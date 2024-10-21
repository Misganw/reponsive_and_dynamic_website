<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_comment extends CI_Controller {

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
        $this->load->model('Comment_model');
        $this->load->library('encryption');
        $this->load->library('session');
    }
	public function index()
	{
         $data['comment_list'] = $this->Comment_model->getAll_comment();
        $this->load->view('admin_comment', $data);
	}
	public function add_comment()
	{
		$this->load->view('add_comment');
	}
    public function save_comment()
    {
        //validate the form data 
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            echo validation_errors();
        }
        else
        {  

            $data['post_id'] = base64_decode($this->input->get('I'));
            $data['name'] = $this->input->post('name', TRUE);  
             $data['email'] = $this->input->post('email', TRUE);       
            $data['comment'] = $this->input->post('comment', TRUE);  
            $data['post_date']  = $this->input->post('post_date', TRUE);
            // $data['rand_id'] = substr($data['b_name'],0,3).rand(1000,90000); 


            $file_name = $_FILES['image']['name'];
            $fileSize = $_FILES["image"]["size"]/1024;
            $fileType = $_FILES["image"]["type"];
            $new_file_name=''; 
            $new_file_name .= $data['name'];

            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./assets/comment",
                'allowed_types' => "pgif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp",
                'overwrite' => TRUE,
                            'max_size' => "20240000", // Can be set to particular file size , here it is 50 MB(2048 Kb)
                            'max_height'      => "1800",
                            'max_width'       => "1800"   
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
                $this->Comment_model->save_comment($data);
                $this->session->set_flashdata('save_success','Comment Saved Successfully !!!');
                redirect(site_url().'a_blog');
            }
        }

    }
    function search()
    {
        $term = $this->input->get('term'); 
        $this->db->like('title', $term); 
        $data = $this->db->get("tbl_comment")->result(); 
        echo json_encode($data);
    }
    public function search_comment()
    {
        // $ul=$this->session->userdata('user_level');
        $search_title = $this->input->post('title', TRUE);
        $data['search_comment']=$this->Comment_model->search_comment($search_title); 
        $this->load->view('admin_comment',$data);
    }
    public function edit_comment()
    {
         $s_id = base64_decode($this->input->get('I'));
        // $data['basic'] = $this->gallery_model->get_basic($mem_id); 
         $data['basic_info']=$this->Comment_model->comment_edit($s_id);
        // $data['basic_item']=$this->gallery_model->get_item($mem_id);   
        $this->load->view('add_comment', $data);     
    }
    public function update_comment()
    {
        $id = $this->input->post('id');
        $tit = $this->input->post('title');
        $upby = $this->input->post('upload_by');
        $disc = $this->input->post('description');
        $pd = $this->input->post('post_date');

        $data =  array('title'=>$tit,'upload_by'=>$upby,'description' => $disc,'post_date' => $pd);

        $file_name = $_FILES['image']['name'];
        $fileSize = $_FILES["image"]["size"]/1024;
        $fileType = $_FILES["image"]["type"];
        $new_file_name='';
        $new_file_name .= $tit;

        $config = array(
            'file_name' => $new_file_name,
            'upload_path' => "./assets/comments",
            'allowed_types' => "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp|wmv|webm",
            'overwrite' => TRUE,
                            'max_size' => "202400000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                            'max_height' => "1800",
                            'max_width' => "1800"
                        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config); 


        if (! $this->upload->do_upload('image'))
        {
        // echo $this->upload->display_errors();
            $this->Comment_model->update_comment($data,$id);
             redirect(site_url().'a_comment/update_success');
        }
        else
        {
                //now get the file uploaded data 
            $upload_data = $this->upload->data();
                //get the uploaded file name
            $data['image'] = $upload_data['file_name'];
            $this->Comment_model->update_comment($data,$id);
            $this->session->set_flashdata('message','Data Updated Successfully !!!');
            redirect(site_url().'a_comment/edit_comment');
            // echo "Data Updated Successfully";
        }            
    }
    public function comment_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['comment_detail']=$this->Comment_model->comm_detail($s_id); 
        $this->load->view('blog_detail', $data);  
        $this->load->view('blog', $data);    
    }

    public function delete_comment()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['basic_info']=$this->Comment_model->delete_comment($s_id);   
        $this->load->view('blog_detail', $data);     
    }

    public function delete()
    {
       $s_id = base64_decode($this->input->get('I'));        
       // $id = $this->input->post('id');
        $this->Comment_model->delete($s_id);
        $this->session->set_flashdata('delete_message','Data Deleted Successfully !!!');
         redirect(site_url().'a_comment');
    }

    public function insert_success()
    { 
         redirect(site_url().'a_blog');
    }
   public function update_success()
    {
        $this->session->set_flashdata('message','Data Updated Successfully !!!');
         $this->comment_detail();
    }


}
