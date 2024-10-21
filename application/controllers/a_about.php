<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_about extends CI_Controller {

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
        $this->load->model('About_model');
        $this->load->library('encryption');
        $this->load->library('session');
    }
	public function index()
	{
         $data['about_list'] = $this->About_model->getAll_about();
        $this->load->view('admin_about', $data);
	}
	public function get_recent_about()
	{
		 $data['recent_about'] = $this->About_model->get_recent_about();
        $this->load->view('about_detail', $data);
	}
	public function add_about()
	{
		$this->load->view('add_about');
	}
    public function save_about()
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
            $data['title'] = $this->input->post('title', TRUE);    
            $data['description'] = $this->input->post('description', TRUE);
            $data['upload_by'] = $this->input->post('upload_by', TRUE);    
            $data['post_date']  = $this->input->post('post_date', TRUE);
            // $data['rand_id'] = substr($data['b_name'],0,3).rand(1000,90000); 


            $file_name = $_FILES['image']['name'];
            $fileSize = $_FILES["image"]["size"]/1024;
            $fileType = $_FILES["image"]["type"];
            $new_file_name=''; 
            $new_file_name .= $data['title'];

            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./assets/abouts",
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
                $this->About_model->save_about($data);
                // echo "Successfully Added";
                redirect(site_url().'a_about/insert_success');
            }
        }

    }
    function search()
    {
        $term = $this->input->get('term'); 
        $this->db->like('title', $term); 
        $data = $this->db->get("tbl_about")->result(); 
        echo json_encode($data);
    }
    public function search_about()
    {
        // $ul=$this->session->userdata('user_level');
        $search_title = $this->input->post('title', TRUE);
        $data['search_about']=$this->About_model->search_about($search_title); 
        $this->load->view('admin_about',$data);
    }
    public function edit_about()
    {
         $s_id = base64_decode($this->input->get('I'));
        // $data['basic'] = $this->gallery_model->get_basic($mem_id); 
         $data['basic_info']=$this->About_model->about_edit($s_id);
        // $data['basic_item']=$this->gallery_model->get_item($mem_id);   
        $this->load->view('add_about', $data);     
    }
    public function update_about()
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
            'upload_path' => "./assets/abouts",
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
            $this->About_model->update_about($data,$id);
             redirect(site_url().'a_about/update_success');
        }
        else
        {
                //now get the file uploaded data 
            $upload_data = $this->upload->data();
                //get the uploaded file name
            $data['image'] = $upload_data['file_name'];
            $this->About_model->update_about($data,$id);
            $this->session->set_flashdata('message','Data Updated Successfully !!!');
            redirect(site_url().'a_about/edit_about');
            // echo "Data Updated Successfully";
        }            
    }
    public function about_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
          $data['about_detail']=$this->About_model->about_detail($s_id); 
           $data['comment_detail']=$this->About_model->comm_detail($s_id); 
           $data['recent_about']=$this->About_model->get_recent_about($s_id); 
           $this->load->view('about_detail', $data);     
    }
    public function delete_about()
    {
        $s_id = base64_decode($this->input->get('I'));
         $data['basic_info']=$this->About_model->delete_about($s_id);   
        $this->load->view('about_detail', $data);     
    }

    public function delete()
    {
       $s_id = base64_decode($this->input->get('I'));        
       // $id = $this->input->post('id');
        $this->About_model->delete($s_id);
        $this->session->set_flashdata('delete_message','Data Deleted Successfully !!!');
         redirect(site_url().'a_about');
    }
    public function insert_success()
    {
        $this->add_about();
    }
   public function update_success()
    {
        $this->session->set_flashdata('message','Data Updated Successfully !!!');
         $this->add_about();
    }


}
