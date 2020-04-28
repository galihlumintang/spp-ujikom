<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_Siswa');
	}

	public function index(){
		$this->load->view('Home_Spp');
	}

	public function Login_siswa(){
		$this->load->view('Siswa/Account/Login.php');
	}

	public function Proses_Login(){
		$nis	 = $this->input->post('nis', true);
		$password	 = $this->input->post('password', true);

		$ambil = $this->M_Siswa->Proses_Login($nis, $password);
		$cek = count($ambil);
		if($cek > 0){
			$data_session = array('nisn' => $ambil->nisn,
									'nis' => $ambil->nis,
									'nama' => $ambil->nama,);
			$this->session->set_userdata($data_session);
			redirect('Siswa/Home');
		}else{
			redirect('Siswa/Login_siswa');
		}
	}

public function Home(){
		if(empty($this->session->userdata('nis'))){
			redirect('Siswa');
		}else{
			$nisn = $this->session->userdata('nisn');
			$data['data']		  = $this->M_Siswa->Home($nisn);
			$data['jumlah_bayar'] = $this->M_Siswa->Jumlah_Bayar($nisn);
			$data['jumlah_bulan'] = $this->M_Siswa->Jumlah_Bulan($nisn);

			$this->load->view('Siswa/Layout/Navbar');
			$this->load->view('Siswa/Home', $data);
			$this->load->view('Siswa/Layout/Footer');
		}
	}

	public function Profile(){
		$nis = $this->session->userdata('nis');
		if(empty($nis)){
			redirect('Siswa');
		}else{
			$data['profile'] = $this->M_Siswa->Profile($nis);

			$this->load->view('Siswa/Layout/Navbar');
			$this->load->view('Siswa/Account/Profile', $data);
			$this->load->view('Siswa/Layout/Footer');
		}
	}

	public function Ubah_Password(){
		$nis = $this->session->userdata('nis');
		if(empty($nis)){
			redirect('Siswa');
		}else{
			$this->load->view('Siswa/Layout/Navbar');
			$this->load->view('Siswa/Account/Ubah_Password');
			$this->load->view('Siswa/Layout/Footer');
		}
	}

	public function Proses_ubah_Password(){
		$nis 		= $this->session->userdata('nis');

		$pass_lama  = $this->input->post('pass_lama', true);
		$pass_baru  = $this->input->post('pass_baru', true);
		$pass_baru2 = $this->input->post('pass_baru2', true);

		$ambil = $this->db->get_where('siswa', array('nis' => $nis, 'password' => $pass_lama))->row();
		$cek   = count($ambil);
		if($cek > 0){
			if($pass_baru == $pass_baru2){
				$data = array('password' => $pass_baru);
				$update = $this->M_Siswa->Proses_ubah_Password($nis, $data);
				if($update){
					redirect('Siswa/Profile');
				}else{
					echo "Gagal Update Password!";
				}
			}else{
				echo "Masukan kedua Password baru dengan benar!";
			}
		}else{
			echo "Password lama anda tidak sesuai!";
		}
	}

	public function Logout(){
		$this->session->sess_destroy();
		redirect('Siswa');
	}
}