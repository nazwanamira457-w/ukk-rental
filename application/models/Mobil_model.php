<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil_model extends CI_Model {
public function get_all() {
return $this->db->order_by('id', 'DESC')->get('mobil')->result_array();
}
public function get_by_id($id) {
    return $this->db->get_where('mobil', ['id' => (int) $id])->row_array();
}

public function delete($id) {
    return $this->db->delete('mobil', ['id' => (int) $id]);
}
}