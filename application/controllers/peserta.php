<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
   
	class Peserta extends CI_Controller
	{	
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
			$this->load->helper('url_helper');
			$this->load->model('formulir_model'); 
			$logged = $this->session->userdata('user_data');
			$user_role = $this->session->userdata['user_data']['role'];
			if (!isset($logged)){
			   redirect('sign');
			}else if ($user_role == 'Peserta') {
				 
			}
			 else if ($user_role == 'Admin'){
				redirect('admin');
			} else if ($user_role == 'Panitia'){
				redirect('panitia');
			}
	 	}
 		function logout(){
		$this->session->unset_userdata('user_data');
		redirect('');
		print_r($_SESSION);
		}
 		

 		public function index(){
 			$this->dashboard_peserta();
		}

 		public function dashboard_peserta(){ 
 			$this->load->view('includes/header');  
 			$this->load->view('pages/peserta/dashboard' ); 
 			$this->load->view('includes/footer'); 
		}

		public function formulir(){
			$username = $this->session->userdata['user_data']['username'];
	 		$data['peserta'] = $this->db->get_where('peserta',array('username' => $username))->row();

	 		 
	 					$this->load->view('includes/header');  
	 		 			$this->load->view('pages/peserta/formulir-pendaftaran',$data ); 
	 		 			$this->load->view('includes/footer'); 
	 		 	 
		}
 		
 		public function simpanformulir(){  
			$username   		= $this->session->userdata['user_data']['username'];
		 	$nama				= $this->input->post('nama_lengkap');
		 	$nim 				= $this->input->post('nim');
		 	$tempat_lahir 		= $this->input->post('tempat_lahir'); 
			$tanggal_lahir 		= $this->input->post('tanggal_lahir'); 
			$agama 				= $this->input->post('agama');
		 	$jk 				= $this->input->post('jk');
		 	$ipk 				= $this->input->post('ipk');
			$jurusan 			= $this->input->post('jurusan');
			$angkatan 			= $this->input->post('angkatan');
			$line 				= $this->input->post('line');
			$ig 				= $this->input->post('ig');
			$alamat 			= $this->input->post('alamat');
			$hobi 				= $this->input->post('hobi');
			$tb 				= $this->input->post('tb');
			$bb 				= $this->input->post('bb');
			$motivasi 			= $this->input->post('motivasi');
			$riwayat_organisasi = $this->input->post('riwayat_organisasi');
			$nama_prestasi 		= $this->input->post('nama_prestasi'); 
			$instansi			= $this->input->post('instansi');
			$tahun				= $this->input->post('tahun');

			if($ipk > 4 || $ipk < 2){
				$this->session->set_flashdata('msg', '<div class="alert alert-danger">IPK yang anda inputkan tidak boleh lebih dari 4! Isi kembali IPK yang sesuai!</div>');
				redirect('Peserta/formulir');
				exit;
			}

 
				if($this->input->post('simpan')){ 
					if(isset ($nama,$nim,$tempat_lahir,$tanggal_lahir,$agama,$jk ,$ipk,$jurusan,$angkatan ,$line,$ig ,$alamat,$hobi ,$tb ,$bb ,$motivasi,$riwayat_organisasi)){ 

						if(isset($nama_prestasi)){
							$prestasi = $nama_prestasi;
							$prestasi = implode(',', $prestasi);
						} else {
							$prestasi = array();
							$prestasi = implode(',', $prestasi);
						}

						if(isset($instansi)){
							$nama_instansi = $instansi;
							$nama_instansi = implode(',', $nama_instansi) ;
						} else {
							$nama_instansi = array();
							$nama_instansi = implode(',', $nama_instansi);
						}

						if(isset($tahun)){
							$t = $tahun;
							$t = implode(',', $t) ;
						} else {
							$t = array();
							$t = implode(',', $t);
						}						

						$input = array(
							'nama_lengkap'		=> $nama,
							'nim'				=> $nim, 
							'tempat_lahir'		=> $tempat_lahir,
							'tanggal_lahir'		=> $tanggal_lahir,
							'agama'				=> $agama,
							'jk'				=> $jk,
							'ipk'				=> $ipk, 
							'jurusan'			=> $jurusan,
							'angkatan'			=> $angkatan,
							'line'				=> $line,
							'ig'				=> $ig,
							'alamat'			=> $alamat,
							'hobi'				=> $hobi,
							'tb'				=> $tb,
							'bb'				=> $bb,
							'motivasi'			=> $motivasi,
							'riwayat_organisasi'=> $riwayat_organisasi,
							'prestasi'			=> $prestasi,
							'instansi_pemberi'	=> $nama_instansi,
							'tahun_prestasi'	=> $t
						);

						$this->formulir_model->update($username , $input);
						$this->session->set_flashdata('msg', '<div class="alert alert-success">Data berhasil disimpan! Cetak Formulir!</div>');
						redirect('Peserta/formulir');
						exit;
					} else {
						$this->session->set_flashdata('msg', '<div class="alert alert-danger">Data tidak berhasil disimpan. Lengkap data Anda.!</div>');
						redirect('Peserta/formulir');
						exit;
					} 
				} 
		 
			}

	 

	   	 function cetak_formulir() {
	   	 	$username   = $this->session->userdata['user_data']['username'];
	 		$data['peserta'] =  $this->formulir_model->getform();	

			$html =	$this->load->view('pages/peserta/cetakformulir',$data,true);  
 
 
	        $pdfFilePath = "Formulir Pendaftaran PBGF - " . $username . ".pdf"; 
		  
		    $this->load->library('m_pdf');
	  	  
	        $this->m_pdf->pdf->WriteHTML($html);
	        
	        $this->m_pdf->pdf->Output($pdfFilePath, "D");
	    }
 	}

?>