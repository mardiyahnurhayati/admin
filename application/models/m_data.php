<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model{
	public function GetData($table){
		$res=$this->db->get($table);
		return $res->result();
	}
	public function Insert($table,$data){
		$res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
	}

	public function GetWhere($table, $data){
        $res=$this->db->get_where($table, $data);
        return $res->result_array();
    }

 
    function edit_data($where,$table){
      return $this->db->get_where($table,$where);
    }

    public function Update($table, $data, $where){
        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }

    public function Delete($table, $where){
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }
	public function getDataAlternatif(){
		$this->db->select("a.nama_alternatif as alternatif, k.nama_kriteria as kriteria, r.nilai_rangking as rangking, r.id_kriteria as id_kriteria, r.id_alternatif as id_alternatif");
		$this->db->from('rangking as r');
		$this->db->join('alternatif as a','a.id_alternatif=r.id_alternatif');
		$this->db->join('kriteria as k','k.id_kriteria=r.id_kriteria');
		$query=$this->db->get();
        return $query->result();

	}	
}