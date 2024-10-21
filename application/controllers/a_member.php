<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_member extends CI_Controller {

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
        $this->load->model('Team_model');
        $this->load->library('encryption');
        $this->load->library('session');
    }
	public function index()
	{
         $data['team_list'] = $this->Team_model->getAll_team();
        $this->load->view('admin_team', $data);
         // $this->load->view('index', $data);
	}
	public function add_team()
	{
		$this->load->view('add_member');
	}


    public function save_team()
    {
        //validate the form data 
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('qebelie_id', 'Qebelie ID', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == FALSE)
        {
             redirect(site_url().'a_member/validation_error');
        }
        else
        {     
            $data['office_id'] = $this->input->post('office_id', TRUE); 
        	$data['first_name'] = $this->input->post('first_name', TRUE);  
        	$data['middle_name'] = $this->input->post('middle_name', TRUE);  
        	$data['last_name'] = $this->input->post('last_name', TRUE);  
        	// $data['username'] = $this->input->post('username', TRUE);
        	// $data['password'] = $this->input->post('password', TRUE);
        	$data['sex'] = $this->input->post('sex', TRUE);  
        	$data['age'] = $this->input->post('age', TRUE);  
        	$data['phone'] = $this->input->post('phone', TRUE);  
        	$data['email'] = $this->input->post('email', TRUE);  
        	$data['qebelie_id'] = $this->input->post('qebelie_id', TRUE);  
        	$data['department'] = $this->input->post('department', TRUE);  
        	$data['education_level'] = $this->input->post('education_level', TRUE);  
        	$data['role'] = $this->input->post('role', TRUE);  
            $data['major_skill'] = $this->input->post('major_skill', TRUE);   
            $data['moderate_skill'] = $this->input->post('moderate_skill', TRUE);  
            $data['minner_skill'] = $this->input->post('minner_skill', TRUE);   
            $data['description'] = $this->input->post('description', TRUE);
            $data['post_date']  = $this->input->post('post_date', TRUE);
            // $data['rand_id'] = substr($data['first_name'],0,3).rand(1000,90000); 
   
            $data_1['username'] = $this->input->post('username', TRUE);
            $data_1['password'] = $this->encryption->encrypt($this->input->post('password', TRUE));
            $data_1['user_level'] = $this->input->post('user_level', TRUE);
            $data_1['status'] = $this->input->post('status', TRUE);

            $this->db->where('qebelie_id',$data['qebelie_id']);
            $this->db->or_where('office_id',$data['office_id']);
            $query = $this->db->get('tbl_member');

            $this->db->select('*');
            $this->db->from('tbl_user');
            $this->db->where(array('username'=>$data_1['username']));
            $query_1= $this->db->get();
            
            $this->db->where('email',$data['email']);
            $query_2 = $this->db->get('tbl_member');

            if($query->num_rows()>0)
            {
                // echo 'The Qebele or Member ID is already registerd please try again';
                 redirect(site_url().'a_member/insert_failed');
            }
            else if($query_1->num_rows()>0)
            {              
                // echo 'The Email or User name is already registerd please try again';
                 redirect(site_url().'a_member/insert_failed2');
            }
            else if($query_2->num_rows()>0)
            {              
                // echo 'The Email or User name is already registerd please try again';
                 redirect(site_url().'a_member/email_failed');
            }
            else
            {
            $file_name = $_FILES['image']['name'];
            $fileSize = $_FILES["image"]["size"]/1024;
            $fileType = $_FILES["image"]["type"];
            $new_file_name=''; 
            $new_file_name .= $data['office_id'];

            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./assets/team",
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
               // echo $this->upload->display_errors();
               $this->Team_model->update_team($data,$data1,$oid);
               redirect(site_url().'a_member/insert_success');
            }
            else
            {
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $data['image'] = $upload_data['file_name'];
                //store pic data to the db
                $this->Team_model->save_team($data,$data_1);
                // echo "Successfully Added";
                redirect(site_url().'a_member/insert_success');
            }
        }
        }

    }
    function search()
    {
        $term = $this->input->get('term'); 
        $this->db->like('title', $term); 
        $data = $this->db->get("tbl_member")->result(); 
        echo json_encode($data);
    }
    public function search_team()
    {
        // $ul=$this->session->userdata('user_level');
        $search_title = $this->input->post('title', TRUE);
        $data['search_team']=$this->Team_model->search_team($search_title); 
        $this->load->view('admin_team',$data);
    }
    public function edit_team()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['basic_info']=$this->Team_model->team_edit($s_id);
         $data['basic_user']=$this->Team_model->get_user($s_id);
        $this->load->view('add_member', $data);     
    }
    public function update_team()
    {
        // $oid = $this->input->post('id');
        $oid = $this->input->post('office_id');
        $fn = $this->input->post('first_name');
        $mn = $this->input->post('middle_name');
        $ln = $this->input->post('last_name');
        $sx = $this->input->post('sex');
        $ag = $this->input->post('age');
        $ph = $this->input->post('phone');
        $em = $this->input->post('email');
        $qid = $this->input->post('qebelie_id');
        $dep = $this->input->post('department');
        $edl = $this->input->post('education_level');
        $r = $this->input->post('role');
        $mj_skill = $this->input->post('major_skill');
        $md_skill = $this->input->post('moderate_skill');
        $mn_skill = $this->input->post('minner_skill');
        $disc = $this->input->post('description');
        $pd = $this->input->post('post_date');


        $un = $this->input->post('username');
        $pass = $this->encryption->encrypt($this->input->post('password', TRUE));
        $ul = $this->input->post('user_level');
        $st = $this->input->post('status');

        $data =  array('office_id'=>$oid,'first_name' => $fn,'middle_name' => $mn,'last_name'=>$ln,'sex' => $sx,'age' => $ag,'phone'=>$ph,'email' => $em,'qebelie_id' => $qid,'department'=>$dep,'education_level' => $edl,'role' => $r,'major_skill'=>$mj_skill,'moderate_skill'=>$md_skill,'minner_skill'=>$mn_skill,'description' => $disc,'post_date' => $pd);
         $data1 =  array('user_id'=>$oid,'first_name' => $fn,'middle_name' => $mn,'username'=>$un,'password' => $pass,'user_level' => $ul,'status'=>$st);

        $file_name = $_FILES['image']['name'];
        $fileSize = $_FILES["image"]["size"]/1024;
        $fileType = $_FILES["image"]["type"];
        $new_file_name='';
        $new_file_name .= $oid;

        $config = array(
            'file_name' => $new_file_name,
            'upload_path' => "./assets/team",
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
            $this->Team_model->update_team($data,$data1,$oid);
             redirect(site_url().'a_member/update_success');
        }
        else
        {
                //now get the file uploaded data 
            $upload_data = $this->upload->data();
                //get the uploaded file name
            $data['image'] = $upload_data['file_name'];
            $this->Team_model->update_team($data,$data1,$oid);
            $this->session->set_flashdata('message','Data Updated Successfully !!!');
            redirect(site_url().'a_member/edit_team');
            // echo "Data Updated Successfully";
        }            
    }
    public function team_detail()
    {
         $s_id = base64_decode($this->input->get('I'));
         $data['team_detail']=$this->Team_model->team_detail($s_id); 
        $this->load->view('team_detail', $data);     
    }
    public function delete_team()
    {
        $s_id = base64_decode($this->input->get('I'));
         $data['basic_info']=$this->Team_model->delete_team($s_id);   
        $this->load->view('team_detail', $data);     
    }

    public function delete()
    {
       $s_id = base64_decode($this->input->get('I'));        
       // $id = $this->input->post('id');
        $this->Team_model->delete($s_id);
        $this->session->set_flashdata('delete_message','Data Deleted Successfully !!!');
         redirect(site_url().'a_member');
    }
    public function insert_success()
    {
        $this->add_team();
    }
   public function insert_failed()
    {
    $this->session->set_flashdata('duplicated_id','The kebele or Member ID is already registerd please try again');
        $this->add_team();
    }
   public function insert_failed2()
    {
     $this->session->set_flashdata('duplicated_email_and_username','The Email or User name is already registerd please try again'); 
        $this->add_team();
    }
    public function email_failed()
    {
     $this->session->set_flashdata('duplicated_email','The Email is already registerd please try again'); 
        $this->add_team();
    }
   public function update_success()
    {
        $this->session->set_flashdata('message','Data Updated Successfully !!!');
         $this->add_team();
    }
public function validation_error()
{
    $this->add_team();
}

}
