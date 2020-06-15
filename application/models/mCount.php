<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mCount extends CI_Model
{

     function get_data_stok(){
        $a=date('Y');
        $data = $this->db->query("SELECT MONTH(waktu) AS waktuu, COUNT(no_rm) AS no_rm,DATE_FORMAT(waktu,'%M ' '%Y') AS waktu FROM kunjungan WHERE DATE_FORMAT(waktu,'%Y') = $a GROUP BY waktuu");
          
        return $data->result();
    }

    public function countpasienbaru()
    {
        
        $a=date('Y-m-d');
        $this->db->select('waktu,count(no_rm) as t,no_rm');
        
        $this->db->where('SUBSTR(waktu,1,10)' ,$a);
        $this->db->group_by('no_rm');
        $this->db->having('count(no_rm) = 1');
        $query = $this->db->get('kunjungan');
        
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        elseif ($query->num_rows()==0){
            return 0;
        }

    }
    public function countpasienlama()
    {
        $a=date('Y-m-d');
        $this->db->select('waktu,count(no_rm) as t,no_rm');
        
        $this->db->where('SUBSTR(waktu,1,10)' ,$a);
        $this->db->group_by('no_rm');
        $this->db->having('count(no_rm) > 1');
        $query = $this->db->get('kunjungan');
        
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        elseif ($query->num_rows()==0){
            return 0;
        }
    }
    public function countpasienantri()
    {
       $a=date('Y-m-d');
        $this->db->select('*');
        
        $this->db->where('SUBSTR(waktu,1,10)' ,$a);
        $this->db->where('status' ,'Dalam Antrian');

        $query = $this->db->get('kunjungan');
        
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        elseif ($query->num_rows()==0){
            return 0;
        }
    }
    public function countpasienselesai()
    {
       $a=date('Y-m-d');
        $this->db->select('*');
        
        $this->db->where('SUBSTR(waktu,1,10)' ,$a);
        $this->db->where('status' ,'Selesai diperiksa');


        $query = $this->db->get('kunjungan');
        
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        elseif ($query->num_rows()==0){
            return 0;
        }
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