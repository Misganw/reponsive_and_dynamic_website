<?php

class Detail_model extends CI_Model
{

 function __consturct()
 {
  parent::__construct();
}
public function getAll_detail()
{
  // $this->db->limit(1);
  $query = $this->db->get('tbl_service');
  return $query;
}

public function service_detail($s_id)
{
  $this->db->where('id',$s_id);
  $query  = $this->db->get('tbl_service');
  $result = $query->row();
  return $result;
}

public function portfolio_detail($s_id)
{
  $this->db->where('id',$s_id);
  $query  = $this->db->get('tbl_portfolio');
  $result = $query->row();
  return $result;
}
public function certificate_detail($s_id)
{
  $this->db->where('id',$s_id);
  $query  = $this->db->get('tbl_certificate');
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
public function get_all_by_sub_category($subcat_id)
{
  $this->db->where('sub_category',$subcat_id);
  $query  = $this->db->get('tbl_blog');
  $result = $query->result();
  return $result;
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
public function team_detail($s_id)
{
  $this->db->where('id',$s_id);
  $query  = $this->db->get('tbl_member');
  $result = $query->row();
  return $result;
}

}



?>