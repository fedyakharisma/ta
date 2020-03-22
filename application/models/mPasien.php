<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mPasien extends CI_Model
{

    public function view()
    {
        $this->db->select("*");
        $this->db->order_by("nama", "ASC");
        return $this->db->get("pasien")->result();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    
	// public function getByid($where, $table)
	// {
	// 	return $this->db->get_where($table, $where);
	// }
}
                        
/* End of file mPasien.php */
