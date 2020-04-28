<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_Pembayaran');
	}
	//PEMBAYARAN SPP
	public function Data_Pembayaran_SPP(){
		$nis 	= $this->input->post('nis', true);	//mengambil data dari form input nis dan dimasukan kedalam variabe nis
		$nama 	= $this->input->post('nama', true);	//mengambil data dari form input nama dan dimasukan kedalam variabel nama
		$kelas 	= $this->input->post('kelas', true);//mengambil data dari form input kelas dan dimasukan kedalam variabel kelas
		$tb 	= $this->input->post('tb', true);	//mengambil data dari form input tb(tahun bayar) dan dimasukan kedalam variabel tb(tahun bayar)
		$tgl 	= $this->input->post('tgl', true);	//mengambil data dari form input tgl(tgl bayar) dan dimasukan kedalam variabel tgl(tgl bayar)

		// data filter atau cari
		$data_cari = array(
							'siswa.nis'					=> $nis,  //'siswa.nis' adalah table siswa dan kolom nis diisi dengan variable nis
							'siswa.nama'				=> $nama, //'siswa.nama' adalah table siswa dan kolom nama diisi dengan variable nama
							'siswa.id_kelas'			=> $kelas,//'siswa.id_kelas' adalah table siswa dan kolom id_kelas diisi dengan variable kelas
							'pembayaran.tahun_dibayar'	=> $tb,	  //'pembayaran.tahun dibayar' adalah table pembayaran dan kolom tahun dibayar diisi dengan variable tb (tahun bayar)
							'pembayaran.tgl_bayar'		=> $tgl,);//'pembayaran.tgl_bayar' adalah table pembayaran dan kolom tgl_bayar diisi dengan variable tgl
		// *(ditulis 'siswa.nis' karena saat mengambil data menggunakan join)*

		// data untuk excel (header atau judul)
		$data['ket2'] = array('nis'			=> $nis,  
							'nama'			=> $nama,
							'id_kelas'		=> $kelas,
							'tahun_dibayar'	=> $tb,
							'tgl_bayar'		=> $tgl,);

		
		if($this->session->userdata('level') == 'petugas'){ //filter ketika mengakses dengan level petugas

			$data['data_kelas'] = $this->db->get('kelas')->result_array(); // mengambil data kelas
			$data['data'] 		= $this->M_Pembayaran->Data_Pembayaran_SPP($data_cari); // mengambil data pembayaran

			$this->load->view('Layout_admin/Navbar_Petugas'); //menampilkan navbar untuk petugas
			$this->load->view('Pembayaran_SPP/Data_Pembayaran_SPP', $data); //menampilkan view data pembayaran dan memasukan data kedalam view agar dapat digunakan

		}else if($this->session->userdata('level') == 'admin'){ //filter ketika mengakses dengan level admin

			$data['data_kelas'] = $this->db->get('kelas')->result_array(); // mengambil data kelas
			$data['data'] 		= $this->M_Pembayaran->Data_Pembayaran_SPP($data_cari); // mengambil data pembayaran

			$this->load->view('Layout_admin/Navbar'); //menampilkan navbar untuk admin
			$this->load->view('Pembayaran_SPP/Data_Pembayaran_SPP', $data); //menampilkan view data pembayaran dan memasukan data kedalam view agar dapat digunakan

		}else{ // ketika mengakses belum login atau level user
			redirect('Petugas'); //Login
		}
	}

	public function Pencarian_Data_Siswa(){
		if($this->session->userdata('level') == 'petugas'){
			$this->load->view('Layout_admin/Navbar_Petugas');
			$this->load->view('Pembayaran_SPP/Pencarian_Data_Siswa');
		}else if($this->session->userdata('level') == 'admin'){
			$this->load->view('Layout_admin/Navbar');
			$this->load->view('Pembayaran_SPP/Pencarian_Data_Siswa');
		}else{
			redirect('Petugas');
		}
	}

	public function Proses_Pencarian_Data_Siswa(){
		$nis = $this->input->post('nis', true);

		$data['data_siswa'] = $this->M_Pembayaran->Proses_Pencarian_Data_Siswa($nis);
		
		if(!empty($data['data_siswa'])){

			if($this->session->userdata('level') == 'admin'){
				$this->load->view('Layout_admin/Navbar');
				$this->load->view('Pembayaran_SPP/Pembayaran_SPP', $data);
			}else{
				$this->load->view('Layout_admin/Navbar_Petugas');
				$this->load->view('Pembayaran_SPP/Pembayaran_SPP', $data);
			}
		}else{
			echo 'NISN yang anda masukan tidak ditemukan!';
		}
	}

	public function Pembayaran_SPP($nisn){
		$bulan 		= $this->input->post('bulan', true);
		$tahun 		= $this->input->post('tahun', true);
		$id_spp 	= $this->input->post('id_spp', true);

		$id_petugas = $this->session->userdata('id_petugas');

		//JUMLAH BAYAR
		$harga = '300000';
		$hitung = $bulan*$harga;
		$jumlah_bayar = $hitung;

		//HITUNG BULAN DIBAYAR
		$ambil = $this->db->get_where('pembayaran', array('nisn'=> $nisn))->result_array();
		foreach ($ambil as $a) {
			$hitung2 += $a['bulan_dibayar'];
		}
		
		$cek = $hitung2+$bulan;
		
		if($cek > 36){
			echo "NISN tersebut sudah membayar seluruh SPP (3 Tahun)";
		}else{
			if($cek <13){
				$data = array(
						'id_petugas'	=> $id_petugas,
						'nisn'			=> $nisn,
						'tgl_bayar'		=> date('Y-m-d'),
						'bulan_dibayar'	=> $bulan,
						'tahun_dibayar'	=> '1',
						'id_spp'		=> '1',
						'jumlah_bayar'	=> $jumlah_bayar,
					);

				$tambah = $this->db->insert('pembayaran', $data);
			}else if($cek >12 && $cek <25){
				$data = array(
						'id_petugas'	=> $id_petugas,
						'nisn'			=> $nisn,
						'tgl_bayar'		=> date('Y-m-d'),
						'bulan_dibayar'	=> $bulan,
						'tahun_dibayar'	=> '2',
						'id_spp'		=> '2',
						'jumlah_bayar'	=> $jumlah_bayar,
					);

				$data_update = array('id_spp' => '2');
				$update_tb = $this->M_Pembayaran->Update_ID_SPP($nisn, $data_update);
				if(!$update_tb){
					echo 'Gagal Update Data Siswa (ID_SPP)';
				}
				$tambah = $this->db->insert('pembayaran', $data);
			}else if($cek >24 && $cek <37){
				$data = array(
						'id_petugas'	=> $id_petugas,
						'nisn'			=> $nisn,
						'tgl_bayar'		=> date('Y-m-d'),
						'bulan_dibayar'	=> $bulan,
						'tahun_dibayar'	=> '3',
						'id_spp'		=> '3',
						'jumlah_bayar'	=> $jumlah_bayar,
					);

				$data_update = array('id_spp' => '3');
				$update_tb = $this->M_Pembayaran->Update_ID_SPP($nisn, $data_update);
				if(!$update_tb){
					echo 'Gagal Update Data Siswa (ID_SPP)';
				}
				$tambah = $this->db->insert('pembayaran', $data);
			}
			
			if($tambah){
				redirect('Pembayaran/Data_Pembayaran_SPP');
			}else{
				echo 'Gagal Insert Data!';
			}
		}
	}

	
}