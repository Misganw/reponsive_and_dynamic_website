<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_portfolio extends CI_Controller {

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
        $this->load->model('Portfolio_model');
        $this->load->library('encryption');
        $this->load->library('session');
    }
	public function index()
	{
         $user_id = base64_decode($this->input->get('I'));
         $data['portfolio_list'] = $this->Portfolio_model->getAll_portfolio_by_user_id($user_id);
        $this->load->view('admin_portfolio',$data);
         
	}
    public function get_portfolio()
    {
         $user_id = base64_decode($this->input->get('I'));
         $data['portfolio_list'] = $this->Portfolio_model->getAll_portfolio_by_user_id($user_id);
        $this->load->view('admin_portfolio',$data);
    }
	public function add_portfolio()
	{
        $data1['member_list'] = $this->Portfolio_model->get_member();
		$this->load->view('add_portfolio',$data1);
	}
    public function save_portfolio()
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
            $data['skilled_id'] = $this->input->post('skilled_id', TRUE);   
        	$data['skill'] = $this->input->post('skill', TRUE); 
            $data['title'] = $this->input->post('title', TRUE);  
            $data['company'] = $this->input->post('company', TRUE);   
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
                'upload_path' => "./assets/portfolio",
                'allowed_types' => "pgif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp",
                'overwrite' => TRUE,
                            'max_size' => "20240000", // Can be set to particular file size , here it is 50 MB(2048 Kb)
                            'max_height'      => "2500",
                            'max_width'       => "2500"   
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
                $this->Portfolio_model->save_portfolio($data);
                // echo "Successfully Added";
                redirect(site_url().'a_portfolio/insert_success');
            }
        }

    }
    function search()
    {
        $term = $this->input->get('term'); 
        $this->db->like('title', $term); 
        $data = $this->db->get("tbl_portfolio")->result(); 
        echo json_encode($data);
    }
    public function search_portfolio()
    {
        $title = $this->input->post('title', TRUE);
        $data['s_portfolio']=$this->Portfolio_model->search_portfolio($title); 
        $this->load->view('admin_portfolio',$data);
    }
    public function edit_portfolio()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['member_list'] = $this->Portfolio_model->get_member();
		 $data['portfolio'] = $this->Portfolio_model->portfolio();
         $data['basic_info']=$this->Portfolio_model->portfolio_edit($s_id);
        // $data['basic_item']=$this->gallery_model->get_item($mem_id);   
        $this->load->view('add_portfolio', $data);     
    }
    public function update_portfolio()
    {
        $id = $this->input->post('id');
        $skld_id = $this->input->post('skilled_id');
        $inv = $this->input->post('skill');
        $tit = $this->input->post('title');
        $comp = $this->input->post('company');
        $disc = $this->input->post('description');
        $pd = $this->input->post('post_date');
         $rand= substr($tit,0,3).rand(1000,90000);

        $data =  array('skilled_id'=>$skld_id,'title'=>$tit, 'company'=>$comp, 'skill'=>$inv,'description' => $disc,'post_date' => $pd);

        $file_name = $_FILES['p_file']['name'];
        $fileSize = $_FILES["p_file"]["size"]/1024;
        $fileType = $_FILES["p_file"]["type"];
        $new_file_name='';
        $new_file_name .= $rand;

        $config = array(
            'file_name' => $new_file_name,
            'upload_path' => "./assets/portfolio",
            'allowed_types' => "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp|wmv|webm",
            'overwrite' => TRUE,
                            'max_size' => "202400000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                            'max_height'      => "2500",
                            'max_width'       => "2500" 
                        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config); 


        if (! $this->upload->do_upload('p_file'))
        {
        // echo $this->upload->display_errors();
            $this->Portfolio_model->update_portfolio($data,$id);
             redirect(site_url().'a_portfolio/update_success');
        }
        else
        {
                //now get the file uploaded data 
            $upload_data = $this->upload->data();
                //get the uploaded file name
            $data['p_file'] = $upload_data['file_name'];
            $this->Portfolio_model->update_portfolio($data,$id);
            $this->session->set_flashdata('message','Data Updated Successfully !!!');
            redirect(site_url().'a_portfolio/edit_portfolio');
            // echo "Data Updated Successfully";
        }            
    }
    public function portfolio_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['portfolio_detail']=$this->Portfolio_model->portfolio_detail($s_id); 

        $this->load->view('portfolio_detail', $data);     
    }
    
    public function delete_portfolio()
    {
        $s_id = base64_decode($this->input->get('I'));
         $data['basic_info']=$this->Portfolio_model->delete_portfolio($s_id);   
        $this->load->view('admin_portfolio', $data);     
    }

    public function delete()
    {
       $s_id = base64_decode($this->input->get('I'));        
       // $id = $this->input->post('id');
        $this->Portfolio_model->delete($s_id);
        $this->session->set_flashdata('delete_message','Data Deleted Successfully !!!');
         redirect(site_url().'a_portfolio');
    }
    public function insert_success()
    {
        $this->add_portfolio();
    }
   public function update_success()
    {
        $this->session->set_flashdata('message','Data Updated Successfully !!!');
         $this->add_portfolio();
    }
}
