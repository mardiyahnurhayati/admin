<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
 		$this->load->model('m_data');  
    }


    public function index()
	{
		$query=$this->m_data->GetData('alternatif');
		$data['alternatif'] = null;
        if($query){
         $data['alternatif'] =  $query;
        }

		$this->load->view('admin/header_admin');
		$this->load->view('admin/v_alternatif',$data);
		$this->load->view('admin/footer_admin');
	}
	public function tampil(){
		$query=$this->m_data->GetDataAlternatif();
		$data['alternatif'] = null;
        if($query){
         $data['alternatif'] =  $query;
        }
		$this->load->view('admin/header_admin');
		$this->load->view('admin/v_dataalternatif',$data);
		$this->load->view('admin/footer_admin');
	}
	public function tambah_alternatif(){

		$this->load->view('admin/header_admin');
		$this->load->view('admin/v_tambah_alternatif');
		$this->load->view('admin/footer_admin');
	}
	public function tambah_aksi_alternatif(){
		$data=array(
			'nama_alternatif'=>$this->input->post('nama_alternatif'),
			'deskripsi'=>$this->input->post('deskripsi'),
			'keaktifan'=>$this->input->post('keaktifan'),
			'pengembangan_kompetensi'=>$this->input->post('pengembangan_kompetensi'),
			'pengalaman_organisasi'=>$this->input->post('pengalaman_organisasi'),
			'kepopuleran'=>$this->input->post('kepopuleran'),
		);
		$this->m_data->insert('alternatif',$data);
		redirect('Admin');
	}
	public function edit_alternatif($id){
		$ks = $this->m_data->GetWhere('alternatif', array('id_alternatif' => $id));
		$data = array(
        	'id'=> $ks[0]['id_alternatif'],
            'nama_alternatif' => $ks[0]['nama_alternatif'],
            'deskripsi' => $ks[0]['deskripsi'],
            'keaktifan' => $ks[0]['keaktifan'],
            'pengembangan_kompetensi' => $ks[0]['pengembangan_kompetensi'],
            'pengalaman_organisasi' => $ks[0]['pengalaman_organisasi'],
            'kepopuleran' => $ks[0]['kepopuleran'],
            );
		$this->load->view('admin/header_admin');
		$this->load->view('admin/v_editalternatif',$data);
		$this->load->view('admin/footer_admin');
	}
	public function edit_alter($id_alternatif,$id_kriteria){
		$ks = $this->m_data->GetWhere('rangking', array('id_alternatif' => $id_alternatif,'id_kriteria'=>$id_kriteria));
		$query=$this->m_data->GetWhere('nilai',array('id_kriteria'=>$id_kriteria));
		$data['alternatif']=$this->m_data->GetData('alternatif');
		$data['kriteria']=$this->m_data->GetData('kriteria');
		$data['data'] = null;
        if($query){
         $data['data'] =  $query;
        }
		$data = array(
            'id_alternatif' => $ks[0]['id_alternatif'],
            'id_kriteria' => $ks[0]['id_kriteria'],
            'nilai_rangking' => $ks[0]['nilai_rangking'],
            );
		$this->load->view('admin/header_admin');
		$this->load->view('admin/alternatif_edit',$data);
		$this->load->view('admin/footer_admin');
	}
	public function edit_aksi_alter(){

		$data=array(
			'alternatif'=>$this->input->post('alternatif'),
			'kriteria'=>$this->input->post('kriteria'),
			'rangking'=>$this->input->post('rangking'),
		);
		$where=array(
			'id_alternatif'=>$this->input->post('alternatif'),
			'id_kriteria'=>$this->input->post('kriteria')
		);
		$data = $this->m_data->update('alternatif',$data,$where);
        redirect('Admin');
	}
	public function delete_alternatif($id_alternatif,$id_kriteria){
		$id = array('id_alternatif' => $id_alternatif,'id_kriteria'=>$id_kriteria);
        $this->load->model('m_data');
        $this->m_data->Delete('rangking', $id);
        redirect('Admin/tampil_alternatif');
	}
	public function edit_aksi_alternatif(){
		$data=array(
			'nama_alternatif'=>$this->input->post('nama_alternatif'),
			'deskripsi'=>$this->input->post('deskripsi'),
			'keaktifan'=>$this->input->post('keaktifan'),
			'pengembangan_kompetensi'=>$this->input->post('pengembangan_kompetensi'),
			'pengalaman_organisasi'=>$this->input->post('pengalaman_organisasi'),
			'kepopuleran'=>$this->input->post('kepopuleran'),
		);
		$where=array(
			'id'=>$this->input->post('id')
		);
		$data = $this->m_data->update('alternatif',$data,$where);
        redirect('Admin');
	}
	public function hapus_alternatif($id){
		$id = array('id_alternatif' => $id);
        $this->load->model('m_data');
        $this->m_data->Delete('alternatif', $id);
        redirect('Admin');
	}


}
