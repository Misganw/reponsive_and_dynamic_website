<?php

class Blog_model extends CI_Model
{

 function __consturct()
 {
  parent::__construct();
}
public function getAll_blog()
{
  $this->db->order_by('post_date','DESC');
  $query = $this->db->get('tbl_blog');
  return $query;
}

public function getAll_blog_by_user_id($user_id)
{
  $this->db->where('office_id',$user_id);
  $qry = $this->db->get('tbl_member');
  foreach($qry->result() as $row)
  {
    $uid=$row->id;
    $this->db->where('upload_by',$uid);
    $this->db->order_by('post_date','DESC');
    $query = $this->db->get('tbl_blog');
    return $query;
  }
}

public function blog()
{
  $query = $this->db->get('tbl_blog');
  return $query;
}

public function get_recent_blog($s_id)
{

 $this->db->where('id',$s_id);
 $query  = $this->db->get('tbl_blog');
 foreach($query->result() as $r)
 {
  $pid=$r->id;
  $this->db->limit(20);
  $this->db->order_by('post_date','DESC');
  $this->db->where('post_id',$pid);
  $query = $this->db->get('post_comments');
  $result=$query->result();
  return $result;
}

}

public function get_member()
{
  $query = $this->db->get('tbl_member');
  return $query;
}
public function get_member_by_blogid($id_user)
{
  $this->db->where('id',$id_user);
  $query = $this->db->get('tbl_member');
  $result = $query->row();
  return $result;
}

public function save_blog($data)
{
 $ins = array(
  'category'   => $data['category'],
  'sub_category' => $data['sub_category'],
  'upload_by'   => $data['upload_by'],
  'title' => $data['title'],
  'description' => $data['description'],
  'post_date'   => $data['post_date'],  
  'image'      =>$data['image']
);  

 $query=$this->db->insert('tbl_blog', $ins);
 return $query;       
}

public function blog_edit($s_id)
{
  $this->db->where('id',$s_id);
  $query  = $this->db->get('tbl_blog');
  $result = $query->row();
  return $result;
}
public function blog_detail($s_id)
{
  $this->db->where('id',$s_id);
  $query  = $this->db->get('tbl_blog');
  $result = $query->row();
  return $result;
}

public function comm_detail($s_id)
{
  $this->db->where('id',$s_id);
  $query  = $this->db->get('tbl_blog');
  foreach($query->result() as $r)
  {
    $pid=$r->id;
    $this->db->where('post_id',$pid);
    $query = $this->db->get('post_comments');
    $result=$query->result();
    return $result;
  }
}
public function search_blog($search_title)
{
  $this->db->where('title',$search_title);
  $query = $this->db->get('tbl_blog');
  $result = $query->row();
  return $result;  
}
public function update_blog($data,$id)
{
  $this->db->where('id',$id);
  $this->db->update('tbl_blog',$data);
}
public function search_by_id($id)
{
  // $this->db->from('tbl_blog');
  $this->db->where('id',$id);
  $query = $this->db->get('tbl_blog');
  $result=$query->row();
  return $result;
}
public function delete($s_id)
{
  $this->db->delete('tbl_blog',array('id'=>$s_id));
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
      $sid=$user->blog_type;
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