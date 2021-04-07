<?php
class EncryptionDecryption_model extends CI_Model
{
 function insert($data)
 {
  $this->db->insert('sample_data', $data);
 }

 function fetch_data()
 {
  $this->db->order_by('id', 'DESC');
  $query = $this->db->get('sample_data');
  return $query;
 }

 function fetch_single_data($id)
 {
  $this->db->where('id', $id);
  return $this->db->get('sample_data');
 }

 function edit($id, $data)
 {
  $this->db->where('id', $id);
  $this->db->update('sample_data', $data);
 }
}

?>