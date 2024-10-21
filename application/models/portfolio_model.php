<?php

class Portfolio_model extends CI_Model
{

 function __consturct()
 {
  parent::__construct();
}
public function getAll_portfolio()
{
  $this->db->order_by('post_date','DESC');
  $query = $this->db->get('tbl_portfolio');
  return $query;

}

public function getAll_portfolio_by_user_id($user_id)
{
  $this->db->where('office_id',$user_id);
  $qry = $this->db->get('tbl_member');
  foreach($qry->result() as $row)
  {
    $skill_id=$row->id;
    $this->db->where('skilled_id',$skill_id);
    $this->db->order_by('post_date','DESC');
    $query = $this->db->get('tbl_portfolio');
    return $query;
  }
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
public function portfolio()
{
  $query = $this->db->get('tbl_portfolio');
  return $query;
}
public function getagri_portfolio()
{
  // $this->db->limit(1);
  $agri='agriculture';
  $this->db->where('skill',$agri);
  $query = $this->db->get('tbl_portfolio');
  return $query;
}
public function save_portfolio($data)
{
 $ins = array(
  'skilled_id' => $data['skilled_id'],
  'skill' => $data['skill'],
  'title' => $data['title'],
  'company' => $data['company'],
  'description' => $data['description'],
  'post_date'   => $data['post_date'],  
  'p_file'      =>$data['p_file']
);  

 $query=$this->db->insert('tbl_portfolio', $ins);
 return $query;       
}

public function portfolio_edit($s_id)
{
  $this->db->where('id',$s_id);
  $query  = $this->db->get('tbl_portfolio');
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
// public function get_developer_by_portfolio_id($s_id)
// {
//   $this->db->where('id',$s_id);
//   $query = $this->db->get('tbl_portfolio');
//   foreach($query->result() as $mem_id)
//   {
//     $skld_id=$mem_id->skilled_id;
//     $this->db->where('id',$skld_id);
//   $query1 = $this->db->get('tbl_member');
//   $result = $query->row();
//   return $result;
// }
// }
public function search_portfolio($title)
{
    $this->db->where('title',$title);
    $query = $this->db->get('tbl_portfolio');
    $result = $query->row();
    return $result;  
}
public function update_portfolio($data,$id)
{
  $this->db->where('id',$id);
  $this->db->update('tbl_portfolio',$data);
}
public function search_by_id($id)
{
  // $this->db->from('tbl_portfolio');
  $this->db->where('id',$id);
  $query = $this->db->get('tbl_portfolio');
  $result=$query->row();
  return $result;
}
public function delete($s_id)
{
    $this->db->delete('tbl_portfolio',array('id'=>$s_id));
}

}


?>