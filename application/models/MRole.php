<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mRole extends CI_Model
{
    public function getAll()
    {
        $this->db->select("*");
        $this->db->limit(3, 1);
        return $this->db->get("role")->result();
    }
}
                        
/* End of file mRole.php */
