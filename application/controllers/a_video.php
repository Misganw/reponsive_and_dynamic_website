<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_video extends CI_Controller {

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
		    function __construct()
    {
        parent::__construct();
        $this->load->database();        
        $this->load->model('Video_model');
        $this->load->library('encryption');
        $this->load->library('session');
    }
	public function index()
	{
         $data['video_list'] = $this->Video_model->getAll_video();
        $this->load->view('admin_video',$data);
        //$this->load->view('front_view', $data);
	}
	public function add_video()
	{
        $data['member_list'] = $this->Video_model->get_member();
		$this->load->view('add_video',$data);
	}
    public function save_video()
    {
        //validate the form data 
        $this->form_validation->set_rules('skill', 'skill', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            echo validation_errors();
        }
        else
        {      
        	$data['skill'] = $this->input->post('skill', TRUE); 
            $data['skilled_id'] = $this->input->post('skilled_id', TRUE); 
            $data['title'] = $this->input->post('title', TRUE);    
            $data['description'] = $this->input->post('description', TRUE);
            $data['post_date']  = $this->input->post('post_date', TRUE);
             $data['rand_id'] = substr($data['title'],0,3).rand(1000,90000); 
            // $data['rand_id'] = substr($data['b_name'],0,3).rand(1000,90000); 


            $file_name = $_FILES['p_file']['name'];
            $fileSize = $_FILES["p_file"]["size"]/1024;
            $fileType = $_FILES["p_file"]["type"];
            $new_file_name=''; 
            $new_file_name .= $data['rand_id'];

            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./assets/video",
                'allowed_types' => "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|m4v|3gp",
                'overwrite' => TRUE,
                            'max_size' => "20240000", // Can be set to particular file size , here it is 50 MB(2048 Kb)
                            'max_height'      => "4000",
                            'max_width'       => "4000"   
                        );
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 


            if (!$this->upload->do_upload('p_file'))
            {
                echo $this->upload->display_errors();
            }
            else
            {
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $data['p_file'] = $upload_data['file_name'];
                //store pic data to the db
                $this->Video_model->save_video($data);
                // echo "Successfully Added";
                redirect(site_url().'a_video/insert_success');
            }
        }

    }
    function search()
    {
        $term = $this->input->get('term'); 
        $this->db->like('title', $term); 
        $data = $this->db->get("tbl_video")->result(); 
        echo json_encode($data);
    }
    public function search_video()
    {
        $title = $this->input->post('title', TRUE);
        $data['s_video']=$this->Video_model->search_video($title); 
        $this->load->view('admin_video',$data);
    }
    public function edit_video()
    {
         $s_id = base64_decode($this->input->get('I'));
		 $data['video'] = $this->Video_model->video();
         $data['member_list'] = $this->Video_model->get_member();
         $data['basic_info']=$this->Video_model->video_edit($s_id);
        // $data['basic_item']=$this->gallery_model->get_item($mem_id);   
        $this->load->view('add_video', $data);     
    }
    
    public function update_video()
    {
        $id = $this->input->post('id');
        $skld = $this->input->post('skilled_id');
        $inv = $this->input->post('skill');
        $tit = $this->input->post('title');
        $disc = $this->input->post('description');
        $pd = $this->input->post('post_date');
        $rand= substr($tit,0,3).rand(1000,90000); 

        $data =  array('skilled_id'=>$skld,'title'=>$tit, 'skill'=>$inv,'description' => $disc,'post_date' => $pd);

        $file_name = $_FILES['p_file']['name'];
        $fileSize = $_FILES["p_file"]["size"]/1024;
        $fileType = $_FILES["p_file"]["type"];
        $new_file_name='';
        $new_file_name .= $rand;

        $config = array(
            'file_name' => $new_file_name,
            'upload_path' => "./assets/video",
            'allowed_types' => "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp|wmv|webm",
            'overwrite' => TRUE,
                            'max_size' => "202400000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                            'max_height'      => "5000",
                            'max_width'       => "5000" 
                        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config); 


        if (! $this->upload->do_upload('p_file'))
        {
        // echo $this->upload->display_errors();
            $this->Video_model->update_video($data,$id);
             redirect(site_url().'a_video/update_success');
        }
        else
        {
                //now get the file uploaded data 
            $upload_data = $this->upload->data();
                //get the uploaded file name
            $data['p_file'] = $upload_data['file_name'];
            $this->Video_model->update_video($data,$id);
            $this->session->set_flashdata('message','Data Updated Successfully !!!');
            redirect(site_url().'a_video/edit_video');
            // echo "Data Updated Successfully";
        }            
    }
    public function video_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['video_detail']=$this->Video_model->video_detail($s_id); 
        $this->load->view('video_detail', $data);     
    }
    
    public function delete_video()
    {
        $s_id = base64_decode($this->input->get('I'));
         $data['basic_info']=$this->Video_model->delete_video($s_id);   
        $this->load->view('admin_video', $data);     
    }

    public function delete()
    {
       $s_id = base64_decode($this->input->get('I'));        
       // $id = $this->input->post('id');
        $this->Video_model->delete($s_id);
        $this->session->set_flashdata('delete_message','Data Deleted Successfully !!!');
         redirect(site_url().'a_video');
    }
    public function insert_success()
    {
        $this->add_video();
    }
   public function update_success()
    {
        $this->session->set_flashdata('message','Data Updated Successfully !!!');
         $this->add_video();
    }
}
