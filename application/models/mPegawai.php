<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mPegawai extends CI_Model
{
    function update($nip, $nama_lengkap, $no_telp, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $alamat, $jabatan, $id_data_pegawai)
    {
        $hasil = $this->db->query("UPDATE data_pegawai SET nip='$nama_lengkap', nama_lengkap='$no_telp', tempat_lahir='$tempat_lahir', tanggal_lahir='$alamat', alamat='$jabatan', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp', id_role='$jabatan' WHERE id_data_pegawai='$id_data_pegawai'");
        return $hasil;
    }

    public function delete($id_data_pegawai)
    {
        $this->db->where('id_data_pegawai', $id_data_pegawai);
        $this->db->delete('data_pegawai');
    }

    public function view()
    {
        $this->db->select("*");
        $this->db->order_by("nama_lengkap", "ASC");
        return $this->db->get("v_data_pegawai")->result();
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
