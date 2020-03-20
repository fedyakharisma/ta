<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mDokter extends CI_Model
{

    public function view()
    {
        $this->db->select("*");
        return $this->db->get("tb_dokter")->result();
    }
}
                        
/* End of file mDokter.php */
