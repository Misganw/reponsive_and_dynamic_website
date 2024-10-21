<?php

class Video_model extends CI_Model
{

 function __consturct()
 {
  parent::__construct();
}
public function getAll_video()
{
  $this->db->order_by('post_date','DESC');
  $query = $this->db->get('tbl_video');
  return $query;
}
public function get_member()
{
  $query = $this->db->get('tbl_member');
  return $query;
}
public function get_member_by_portfolioid($id)
{
  $this->db->where('id',$id);
  $query = $this->db->get('tbl_member');
  $result = $query->row();
  return $result;
}
public function video()
{
  $query = $this->db->get('tbl_video');
  return $query;
}
public function getagri_video()
{
  // $this->db->limit(1);
  $agri='agriculture';
  $this->db->where('skill',$agri);
  $query = $this->db->get('tbl_video');
  return $query;
}
public function save_video($data)
{
 $ins = array(
  'skilled_id' => $data['skilled_id'],
  'skill' => $data['skill'],
  'title' => $data['title'],
  'description' => $data['description'],
  'post_date'   => $data['post_date'],  
  'p_file'      =>$data['p_file']
);  

 $query=$this->db->insert('tbl_video', $ins);
 return $query;       
}

public function video_edit($s_id)
{
  $this->db->where('id',$s_id);
  $query  = $this->db->get('tbl_video');
  $result = $query->row();
  return $result;
}
public function video_detail($s_id)
{
  $this->db->where('id',$s_id);
  $query  = $this->db->get('tbl_video');
  $result = $query->row();
  return $result;
}
public function search_video($title)
{
    $this->db->where('title',$title);
    $query = $this->db->get('tbl_video');
    $result = $query->row();
    return $result;  
}
public function update_video($data,$id)
{
  $this->db->where('id',$id);
  $this->db->update('tbl_video',$data);
}
public function search_by_id($id)
{
  // $this->db->from('tbl_video');
  $this->db->where('id',$id);
  $query = $this->db->get('tbl_video');
  $result=$query->row();
  return $result;
}
public function delete($s_id)
{
    $this->db->delete('tbl_video',array('id'=>$s_id));
}








}


?>