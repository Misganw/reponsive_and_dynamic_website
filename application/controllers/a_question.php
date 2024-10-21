<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_question extends CI_Controller {

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
        $this->load->model('Question_model');
        $this->load->library('encryption');
        $this->load->library('session');
    }
	public function index()
	{
         $data['question_list'] = $this->Question_model->getAll_question();        
         $this->load->view('index', $data);
	}
	public function add_question()
	{
		$this->load->view('add_question');
	}
    public function save_question()
    {
        //validate the form data 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('description', 'Discription', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            echo validation_errors();
        }
        else
        {      
            $data['name'] = $this->input->post('title', TRUE);  
            $data['email'] = $this->input->post('email', TRUE);
            $data['phone'] = $this->input->post('phone', TRUE);
            $data['title'] = $this->input->post('title', TRUE);  
            $data['description'] = $this->input->post('description', TRUE);
            $data['post_date']  = $this->input->post('post_date', TRUE);

                $this->Question_model->save_question($data);
                // echo "Successfully Added";
                redirect(site_url().'a_question/insert_success');
        }
    }



    function search()
    {
        $term = $this->input->get('term'); 
        $this->db->like('title', $term); 
        $data = $this->db->get("tbl_question")->result(); 
        echo json_encode($data);
    }
    public function search_question()
    {
        // $ul=$this->session->userdata('user_level');
        $search_title = $this->input->post('title', TRUE);
        $data['search_question']=$this->Question_model->search_question($search_title); 
        $this->load->view('admin_question',$data);
    }
    public function edit_question()
    {
         $s_id = base64_decode($this->input->get('I'));
        // $data['basic'] = $this->gallery_model->get_basic($mem_id); 
         $data['basic_info']=$this->Question_model->question_edit($s_id);
        // $data['basic_item']=$this->gallery_model->get_item($mem_id);   
        $this->load->view('add_question', $data);     
    }
    public function update_question()
    {
        $id = $this->input->post('id');
        $tit = $this->input->post('title');
        $disc = $this->input->post('discription');
        $pd = $this->input->post('post_date');

        $data =  array('title'=>$tit,'discription' => $disc,'post_date' => $pd);

        $file_name = $_FILES['image']['name'];
        $fileSize = $_FILES["image"]["size"]/1024;
        $fileType = $_FILES["image"]["type"];
        $new_file_name='';
        $new_file_name .= $tit;

        $config = array(
            'file_name' => $new_file_name,
            'upload_path' => "./assets/questions",
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
            $this->Question_model->update_question($data,$id);
             redirect(site_url().'a_question/update_success');
        }
        else
        {
                //now get the file uploaded data 
            $upload_data = $this->upload->data();
                //get the uploaded file name
            $data['image'] = $upload_data['file_name'];
            $this->Question_model->update_question($data,$id);
            $this->session->set_flashdata('message','Data Updated Successfully !!!');
            redirect(site_url().'a_question/edit_question');
            // echo "Data Updated Successfully";
        }            
    }
    public function question_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['question_detail']=$this->Question_model->question_detail($s_id); 
        $this->load->view('question_detail', $data);     
    }
    public function delete_question()
    {
        $s_id = base64_decode($this->input->get('I'));
         $data['basic_info']=$this->Question_model->delete_question($s_id);   
        $this->load->view('question_detail', $data);     
    }

    public function delete()
    {
       $s_id = base64_decode($this->input->get('I'));        
       // $id = $this->input->post('id');
        $this->Question_model->delete($s_id);
        $this->session->set_flashdata('delete_message','Data Deleted Successfully !!!');
         redirect(site_url().'a_question');
    }
    public function insert_success()
    {
        redirect(site_url().'E_tech');
    }
   public function update_success()
    {
        $this->session->set_flashdata('message','Data Updated Successfully !!!');
         $this->add_question();
    }


}
