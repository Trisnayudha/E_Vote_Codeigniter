<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vote_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('tb_vote');
        if ($id != null) {
            $this->db->where('id_vote', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
