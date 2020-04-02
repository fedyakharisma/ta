<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mProfil extends CI_Model
{

    public function getAll()
    {
        $this->db->select("*");
        return $this->db->get("v_data_pegawai")->result();
    }

    public function getWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update($nip, $nama_lengkap, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $no_telp)
    {
        $query = $this->db->query("UPDATE data_pegawai SET nama_lengkap='$nama_lengkap', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp' WHERE nip='$nip'");
        return $query;
    }
}
                        
/* End of file mProfil.php */
