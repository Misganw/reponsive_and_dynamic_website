<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_service extends CI_Controller {

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
        $this->load->model('Service_model');
        $this->load->library('encryption');
        $this->load->library('session');
    }
	public function index()
	{
         $data['service_list'] = $this->Service_model->getAll_service();
        $this->load->view('admin_service', $data);
        // $this->load->view('index', $data);
	}
	public function add_service()
	{
		$this->load->view('add_service');
	}
    public function save_service()
    {
        //validate the form data 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('discription', 'Discription', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            echo validation_errors();
        }
        else
        {      
            $data['title'] = $this->input->post('title', TRUE);    
            $data['discription'] = $this->input->post('discription', TRUE);
            $data['post_date']  = $this->input->post('post_date', TRUE);
            $data['rand_id'] = substr($data['title'],0,3).rand(1000,90000); 
            // $data['rand_id'] = substr($data['b_name'],0,3).rand(1000,90000); 


            $file_name = $_FILES['image']['name'];
            $fileSize = $_FILES["image"]["size"]/1024;
            $fileType = $_FILES["image"]["type"];
            $new_file_name=''; 
            $new_file_name .= $data['rand_id'];

            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./assets/services",
                'allowed_types' => "gif|jpg|jpeg|png|webp|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp",
                'overwrite' => TRUE,
                            'max_size' => "20240000", // Can be set to particular file size , here it is 50 MB(2048 Kb)
                           'max_height'      => "4000",
                            'max_width'       => "4000"   
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
                $this->Service_model->save_service($data);
                // echo "Successfully Added";
                redirect(site_url().'a_service/insert_success');
            }
        }

    }
    function search()
    {
        $term = $this->input->get('term'); 
        $this->db->like('title', $term); 
        $data = $this->db->get("tbl_service")->result(); 
        echo json_encode($data);
    }
    public function search_service()
    {
        // $ul=$this->session->userdata('user_level');
        $search_title = $this->input->post('title', TRUE);
        $data['search_service']=$this->Service_model->search_service($search_title); 
        $this->load->view('admin_service',$data);
    }
    public function edit_service()
    {
         $s_id = base64_decode($this->input->get('I'));
        // $data['basic'] = $this->gallery_model->get_basic($mem_id); 
         $data['basic_info']=$this->Service_model->service_edit($s_id);
        // $data['basic_item']=$this->gallery_model->get_item($mem_id);   
        $this->load->view('add_service', $data);     
    }
    public function update_service()
    {
        $id = $this->input->post('id');
        $tit = $this->input->post('title');
        $disc = $this->input->post('discription');
        $pd = $this->input->post('post_date');
        $rand= substr($tit,0,3).rand(1000,90000);

        $data =  array('title'=>$tit,'discription' => $disc,'post_date' => $pd);

        $file_name = $_FILES['image']['name'];
        $fileSize = $_FILES["image"]["size"]/1024;
        $fileType = $_FILES["image"]["type"];
        $new_file_name='';
        $new_file_name .= $rand;

        $config = array(
            'file_name' => $new_file_name,
            'upload_path' => "./assets/services",
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
            $this->Service_model->update_service($data,$id);
             redirect(site_url().'a_service/update_success');
        }
        else
        {
                //now get the file uploaded data 
            $upload_data = $this->upload->data();
                //get the uploaded file name
            $data['image'] = $upload_data['file_name'];
            $this->Service_model->update_service($data,$id);
            $this->session->set_flashdata('message','Data Updated Successfully !!!');
            redirect(site_url().'a_service/edit_service');
            // echo "Data Updated Successfully";
        }            
    }
    public function service_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['service_detail']=$this->Service_model->service_detail($s_id); 
        $this->load->view('service_detail', $data);     
    }
    public function delete_service()
    {
        $s_id = base64_decode($this->input->get('I'));
         $data['basic_info']=$this->Service_model->delete_service($s_id);   
        $this->load->view('service_detail', $data);     
    }

    public function delete()
    {
       $s_id = base64_decode($this->input->get('I'));        
       // $id = $this->input->post('id');
        $this->Service_model->delete($s_id);
        $this->session->set_flashdata('delete_message','Data Deleted Successfully !!!');
         redirect(site_url().'a_service');
    }
    public function insert_success()
    {
        $this->add_service();
    }
   public function update_success()
    {
        $this->session->set_flashdata('message','Data Updated Successfully !!!');
         $this->add_service();
    }


}
