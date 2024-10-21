<?php
class Login_model extends CI_Model
{

  function save_user($data)
  {
    $this->db->insert('tbl_users',$data);
  }
  function get_user_data()
  {
    $result = $this->db->get('tbl_users');
    return $result;
  }
  function get_user_id($id)
  {
    $query = $this->db->get_where('tbl_users', array('user_id' => $id));
    return $query;
  }


  function validate($username,$password)
  {
    // $this->load->library('encryption');
    $this->db->where('username',$username);
    // $this->db->where('password', $password);
    $query = $this->db->get('tbl_user');
    if($query->num_rows()>0)
    {
       foreach ($query->result() as $row) 
       {
          $stored_pass=$this->encryption->decrypt($row->password);
         if($password==$stored_pass)
         {
          return $query;
         }
        }
    }
  }
  public function get_image($id)
{
  $this->db->where('username',$id);
  $list = $this->db->get('tbl_user');
  foreach ($list->result() as $user) 
  {
    $uid=$user->user_id;
    $this->db->where('office_id',$uid);
    $query = $this->db->get('tbl_member');
    $result = $query->row();
    return $result;
  }

}

public function user_edit($s_id)
{
  $this->db->where('username',$s_id);
  $query  = $this->db->get('tbl_user');
  $result = $query->row();
  return $result;
}
public function update_user($data,$id)
{
  $this->db->where('id',$id);
  $this->db->update('tbl_user',$data);
}

}
?>