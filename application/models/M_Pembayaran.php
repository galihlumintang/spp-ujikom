<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pembayaran extends CI_Model {
	
	//Data Pembayaran Baru
	public function Data_Pembayaran_SPP($data_cari){
		$this->db->order_by('pembayaran.tgl_bayar','pembayaran.tahun_dibayar', 'desc');
		$this->db->like($data_cari);
		$this->db->select('*');
		$this->db->from('pembayaran');
		$this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
		$this->db->join('petugas', 'petugas.id_petugas = pembayaran.id_petugas');
		return $this->db->get()->result_array();
	}

	public function data_pembayaran($bulan, $tahun, $nisn){
		$this->db->where('nisn', $nisn);
		$this->db->where('bulan_dibayar', $bulan);
		$this->db->where('tahun_dibayar', $tahun);
		$this->db->where('status_pembayaran_siswa', '');
		return $this->db->get('pembayaran')->row();
	}

	public function data_pembayaran_status($bulan, $tahun, $nisn, $status){
		$this->db->where('nisn', $nisn);
		$this->db->where('bulan_dibayar', $bulan);
		$this->db->where('tahun_dibayar', $tahun);
		$this->db->where('status_pembayaran_siswa', $status);
		return $this->db->get('pembayaran')->row();
	}
	//
	public function Proses_Pencarian_Data_Siswa($nis){
		$this->db->where('siswa.nis', $nis);
		$this->db->select('*');
		$this->db->from('kelas', 'spp');
		$this->db->join('siswa', 'siswa.id_kelas = kelas.id_kelas');
		$this->db->join('spp', 'spp.id_spp = siswa.id_spp');
		return $this->db->get('')->row();
	}

	public function Update_ID_SPP($nisn, $data_update){
		$this->db->where('nisn', $nisn);
		return $this->db->update('siswa', $data_update);
	}

	
}