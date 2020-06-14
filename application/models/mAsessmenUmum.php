<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mAsessmenUmum extends CI_Model
{
    public function delete($id_pemeriksaan)
    {
        $this->db->where('id_pemeriksaan', $id_pemeriksaan);
        $this->db->delete('asessmen_umum');
    }

    public function viewGetWhereUmum()
    {
        $this->db->select("*");
        return $this->db->get("asessmen_umum")->result();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function get($table)
    {
        return $this->db->get($table)->result();
    }
}
                        
/* End of file mAsessmen.php */
