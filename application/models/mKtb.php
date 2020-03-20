<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mKtb extends CI_Model
{

    public function view()
    {
        $this->db->select("*");
        $this->db->order_by("no_rm", "ASC");
        return $this->db->get("ktb")->result();
    }
}
                        
/* End of file mKtb.php */
