<?php
class Pegawai extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pegawai');
	}
	function index(){
		$this->load->view('v_pegawai');
	}

	function data_pegawai(){
		$data=$this->m_pegawai->pegawai_list();
		echo json_encode($data);
	}

	function get_pegawai(){
		$nik=$this->input->get('id');
		$data=$this->m_pegawai->get_pegawai_by_nik($nik);
		echo json_encode($data);
	}

	function simpan_pegawai(){
		$nik=$this->input->post('nik');
		$nama=$this->input->post('nama');
		$unit=$this->input->post('unit');
		$status=$this->input->post('status');
		$data=$this->m_pegawai->simpan_pegawai($nik,$nama,$unit,$status);
		echo json_encode($data);
	}

	function update_pegawai(){
		$nik=$this->input->post('nik');
		$nama=$this->input->post('nama');
		$unit=$this->input->post('unit');
		$status=$this->input->post('status');
		$data=$this->m_pegawai->update_pegawai($nik,$nama,$unit,$status);
		echo json_encode($data);
	}

	function hapus_pegawai(){
		$nik=$this->input->post('kode');
		$data=$this->m_pegawai->hapus_pegawai($nik);
		echo json_encode($data);
	}

	function pencarian(){
		$status=$this->input->get('status');
		$data['hasil'] = $this->m_pegawai->katagori($status)->result_array();
		echo json_encode($data);
		$this->load->view("v_katagori",$data);
    } 
}