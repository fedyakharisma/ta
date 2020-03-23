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

    public function delete($no_rm)
    {
        $this->db->where('no_rm', $no_rm);
        $this->db->delete('pasien');
    }

    public function updatePasien($tanggaldaftar, $norm, $namapasien, $nobpjs, $tempat, $tanggallahir, $jk, $alamat, $nipktpnrp, $keterangan)
    {
        $hasil = $this->db->query("UPDATE pasien SET tanggal_daftar='$tanggaldaftar', nama='$namapasien', no_bpjs='$nobpjs', tempat='$tempat', tanggal_lahir='$tanggallahir', jenis_kelamin='$jk', alamat='$alamat', nip_ktp_nrp='$nipktpnrp', keterangan='$keterangan' WHERE no_rm ='$norm'");
        return $hasil;
    }
    
	// public function getByid($where, $table)
	// {
	// 	return $this->db->get_where($table, $where);
	// }
}
                        
/* End of file mPasien.php */
