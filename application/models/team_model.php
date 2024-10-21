<?php

class Team_model extends CI_Model
{

 function __consturct()
 {
  parent::__construct();
}
public function getAll_team()
{
  $this->db->order_by('post_date','DESC');
  $query = $this->db->get('tbl_member');
  return $query;
}

public function save_team($data,$data_1)
{
 $ins = array(
  'office_id' => $data['office_id'],
  'first_name' => $data['first_name'],
  'middle_name' => $data['middle_name'],
  'last_name' => $data['last_name'],
  'sex' => $data['sex'],
  'age' => $data['age'],
  'phone' => $data['phone'],
  'email' => $data['email'],
  'qebelie_id' => $data['qebelie_id'],
  'department' => $data['department'],
  'education_level' => $data['education_level'],
   'role' => $data['role'],
   'major_skill'=> $data['major_skill'],   
   'moderate_skill'=> $data['moderate_skill'],  
  'minner_skill' =>$data['minner_skill'],  
  'description' => $data['description'],
  'post_date'   => $data['post_date'], 
  'image'      =>$data['image']
);  

  $ins_1 = array(
  'user_id' => $data['office_id'],
  'first_name' => $data['first_name'],
  'middle_name' => $data['middle_name'],
  'username' => $data_1['username'],
  'password' => $data_1['password'],
  'user_level' => $data_1['user_level'],
  'status'      => $data_1['status']
);  
    // else
    // {
 $query=$this->db->insert('tbl_member', $ins);
 $query_1=$this->db->insert('tbl_user', $ins_1);
 return $query;
 return $query_1;      
}

public function team_edit($s_id)
{
  $this->db->where('id',$s_id);
  $query  = $this->db->get('tbl_member');
  $result = $query->row();
  return $result;
}

public function get_user($s_id)
{
  $this->db->where('id',$s_id);
  $list = $this->db->get('tbl_member');
  foreach ($list->result() as $user) 
  {
    $sid=$user->office_id;
    $this->db->where('user_id',$sid);
    $query = $this->db->get('tbl_user');
    $result = $query->row();
    return $result;
  } 
}


public function team_detail($s_id)
{
  $this->db->where('id',$s_id);
  $query  = $this->db->get('tbl_member');
  $result = $query->row();
  return $result;
}
public function search_team($search_title)
{
    $this->db->where('title',$search_title);
    $query = $this->db->get('tbl_member');
    $result = $query->row();
    return $result;  
}
public function update_team($data,$data1,$oid)
{
  $this->db->where('office_id',$oid);
  $this->db->update('tbl_member',$data);
  $this->db->where('user_id',$oid);
  $this->db->update('tbl_user',$data1);
}
public function search_by_id($id)
{
  // $this->db->from('tbl_service');
  $this->db->where('id',$id);
  $query = $this->db->get('tbl_member');
  $result=$query->row();
  return $result;
}
public function delete($s_id)
{
  $query = $this->db->get_where('tbl_member',array('id'=>$s_id));
  if($query->num_rows()>0)
  {
   foreach ($query->result() as $user) 
   {
    $uid=$user->office_id;
    $this->db->delete('tbl_user',array('user_id'=>$uid));
    $this->db->delete('tbl_member',array('id'=>$s_id));
  } 
}
}





public function emselect()
{
  $query=$this->db->get('tbl_users');
  $result = $query->result();
  return $result;
}

public function catselect(){
  $query = $this->db->get('tbl_item');
  $result = $query->result();
  return $result;
}
public function getAll_book()
{
  $id = $this->session->userdata('user_level');
  if($id=='admin')
  {
    $query=$this->db->get('tbl_book');
    return $query;
  }
  else
  {
  $this->db->where('user_level',$id);
  $query = $this->db->get('tbl_book');
  return $query;
  }
}


public function GetBasic($id)
{
  $sql = "SELECT * from `tbl_users` WHERE `username`='$id'";
  $query=$this->db->query($sql);
  $result = $query->row();
  return $result;          
}
public function get_image($id)
{
  $this->db->where('username',$id);
  $list = $this->db->get('tbl_users');
  foreach ($list->result() as $user) 
  {
    $uid=$user->user_id;
  }

  $this->db->where('member_id',$uid);
  $query = $this->db->get('member');
  $result = $query->row();
  return $result;

}


public function get_basic($mem_id)
{
  // $id = $this->session->userdata('username');
  $this->db->where('username',$mem_id);
  $list = $this->db->get('tbl_users');
  foreach ($list->result() as $user) 
  {
    $uid=$user->user_id;
  }
    $this->db->where('member_id',$uid);
    $query = $this->db->get('member');
    $result = $query->row();
  
    return $result;
}
public function get_role($id)
{
  $this->db->where('username',$id);
  $query  = $this->db->get('tbl_users');
  $result = $query->row();
  return $result;
}

public function get_item($id)
{
  $this->db->where('username',$id);
  $list = $this->db->get('tbl_users');
  foreach ($list->result() as $user) 
  {
    $uid=$user->user_id;
    $this->db->where('member_id',$uid);
    $mem_id = $this->db->get('member');
 foreach ($mem_id->result() as $user) 
  {
    $sid=$user->service_type;
    $this->db->where('id',$sid);
    $query = $this->db->get('tbl_item');
    $result = $query->row();
    return $result;
  } 

}
}
public function book_update($data,$id)
{
  $this->db->where('id',$id);
  $this->db->update('tbl_book',$data);
}

public function search_user_id($id)
{
  $this->db->from('member');
  $this->db->where('id',$id);
  $query = $this->db->get();
  return $query->row();
}

public function edit_user($id)
{
  // $sql = "SELECT * from `tbl_users` WHERE `id`='$id'";
  $this->db->where('id',$id);
  $query=$this->db->get('tbl_users');
  $result = $query->row();
  return $result;          
}

public function user_update($data,$id)
{
  $this->db->where('id',$id);
  $this->db->update('tbl_users',$data);
}

public function add_user($data)
{
  $this->db->insert('attendance', $data);
}
public function bulk_insert($data)
{
  $this->db->insert_batch('attendance', $data);
}
public function getAll_member()
{
  $query = $this->db->get('member');
  return $query;
}

}


?>