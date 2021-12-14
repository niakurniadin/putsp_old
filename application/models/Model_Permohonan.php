<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Permohonan extends CI_Model
{
  public function get_all_data()
  {
    $this->db->select('*');
    $this->db->from('tb_project');
    $this->db->order_by('id','desc');
    return $this->db->get()->result();
  }
  public function add($data)
  {
    $this->db->insert('tb_project', $data);
  }
}