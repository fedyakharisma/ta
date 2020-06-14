<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mPegawai extends CI_Model
{
    function update_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function pegawai_list()
    {
        $hasil = $this->db->query('SELECT * FROM data_pegawai');
        return $hasil->result();
    }
    // function updatePass($id_data_pegawai, $password)

    public function delete($pgw_nip)
    {
        $this->db->where('pgw_nip', $pgw_nip);
        $this->db->delete('tb_pegawai');
    }

    public function view()
    {
        $this->db->select("*");
        $this->db->order_by("nama_lengkap", "ASC");
        return $this->db->get("v_pegawai")->result();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function updateAksesPegawai($username, $password, $pgw_nip)
    {
        $hasil = $this->db->query("UPDATE tb_pegawai SET username='$username', password='$password' WHERE pgw_nip='$pgw_nip'");
        return $hasil;
    }
}
                        
/* End of file mPegawai.php */
