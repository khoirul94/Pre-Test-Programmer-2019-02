<?php
class M_pegawai extends CI_Model{

	function pegawai_list(){
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->join('unit','pegawai.id_unit=unit.id_unit');
		$this->db->join('status','pegawai.id_status=status.id_status');
		$query = $this->db->get();
		return $query->result();
	}

	function simpan_pegawai($nik,$nama,$unit,$status){
		$hasil=$this->db->query("INSERT INTO pegawai (nik,nama,id_unit,id_status)VALUES('$nik','$nama','$unit','$status')");
		return $hasil;
	}

	function get_pegawai_by_nik($nik){
		$hsl=$this->db->query("SELECT * FROM pegawai WHERE nik='$nik'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nik' => $data->nik,
					'nama' => $data->nama,
					'id_unit' => $data->id_unit,
					'id_status' => $data->id_status,
					);
			}
		}
		return $hasil;
	}

	function update_pegawai($nik,$nama,$unit,$status){
		$hasil=$this->db->query("UPDATE pegawai SET nama='$nama',id_unit='$unit',id_status=$status WHERE nik='$nik'");
		return $hasil;
	}

	function hapus_pegawai($nik){
		$hasil=$this->db->query("DELETE FROM pegawai WHERE nik='$nik'");
		return $hasil;
	}

	function katagori($status){
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->join('unit','pegawai.id_unit=unit.id_unit');
		$this->db->join('status','pegawai.id_status=status.id_status');
		$query = $this->db->get();
		return $this->db->get_where('pegawai', "id_status='$status'");
	}
	
}