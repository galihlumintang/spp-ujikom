<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Siswa extends CI_Model {
	public function Proses_Login($nis, $password){
		$this->db->where('nis', $nis);
		$this->db->where('password', $password);
		return $this->db->get('siswa')->row();
	}

	public function Home($nisn){
		$this->db->where('nisn', $nisn);
		return $this->db->get('pembayaran')->result_array();
	}

	public function Jumlah_Bayar($nisn){
		$this->db->where('nisn', $nisn);
		$this->db->select_sum('jumlah_bayar');
		return $this->db->get('pembayaran')->row();
	}

	public function Jumlah_Bulan($nisn){
		$this->db->where('nisn', $nisn);
		$this->db->select_sum('bulan_dibayar');
		return $this->db->get('pembayaran')->row();
	}

	public function Profile($nis){
		$this->db->where('siswa.nis', $nis);
		$this->db->from('kelas');
		$this->db->join('siswa', 'siswa.id_kelas = kelas.id_kelas');
		return $this->db->get()->row();
	}

	public function Proses_ubah_Password($nis, $data){
		$this->db->where('nis', $nis);
		return $this->db->update('siswa', $data);
	}
}