<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
   
	class Peserta extends CI_Controller
	{	
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
			$this->load->helper('url_helper');
			$this->load->model('Peserta_model'); 
			// $logged = $this->session->userdata('user_data');
			// $user_role = $this->session->userdata['user_data']['role'];
			$username = $this->session->userdata('username');
			$role     = $this->session->userdata('role');
			if (!isset($username, $role)){
			   redirect('login');
			   exit;
			}

			if ($role == 'Peserta') {
				redirect('peserta');	 
			}
			else if ($role == 'admin'){
				redirect('admin');
			} else if ($role == 'Panitia'){
				redirect('admin');
			} else {
				redirect('login');
			}
	 	}
 		function logout(){
			// $this->session->unset_userdata('username');
	 		$this->session->sess_destroy();
			redirect('login');
			// print_r($_SESSION);
		}
 		

 		public function index(){
 			$this->dashboard_peserta();
		}

 		public function dashboard_peserta(){ 
 			$data = [
 				'title' 	=> 'Peserta | ',
 				'content'	=> 'pages/peserta/dashboard'
 			]; 

 			$this->load->view('includes/templates', $data);
		}

		public function formulir(){
			$username = $this->session->userdata('username');
	 		//$data['peserta'] = $this->db->get_where('peserta',array('username' => $username))->row();

	 		$data = [
 				'title' 	=> 'Formulir| ',
 				'content'	=> 'pages/peserta/formulir-pendaftaran',
 				'peserta'	=> $this->Peserta_model->get_row($username)
 			]; 

 			$this->load->view('includes/templates', $data); 
	 		 	 
		}
 		
 		public function simpanformulir(){  
			if($this->input->post('simpan')){
				$username   		= $this->session->userdata('username');
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

				if(strlen($nim) != 14){
					$this->session->set_flashdata('msg', '<div class="alert alert-danger">NIM yang anda masukkan salah!</div>');
					redirect('Peserta/formulir');
					exit;
				}

				if($jk == "Laki - Laki"){
					if($tb < 165){
						$this->session->set_flashdata('msg', '<div class="alert alert-danger">Tinggi badan minimal untuk laki-laki 165 cm!</div>');
						redirect('Peserta/formulir');
						exit;		
					}
				} else if($jk == "Perempuan"){
					if($tb < 155){
						$this->session->set_flashdata('msg', '<div class="alert alert-danger">Tinggi badan minimal untuk perempuan 155 cm!</div>');
						redirect('Peserta/formulir');
						exit;		
					}
				}

				if($ipk > 4 || $ipk < 2.5){
					$this->session->set_flashdata('msg', '<div class="alert alert-danger">IPK yang anda inputkan tidak boleh lebih dari 4 atau kurang dari 2,50! Isi kembali IPK yang sesuai!</div>');
					redirect('Peserta/formulir');
					exit;
				}


				if(isset ($nama,$nim,$tempat_lahir,$tanggal_lahir,$agama,$jk ,$ipk,$jurusan,$angkatan ,$line,$ig ,$alamat,$hobi ,$tb ,$bb , $motivasi, $riwayat_organisasi)){ 

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

					$this->Peserta_model->update($username , $input);
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

	   	public function cetak_formulir() {
	   	 	$username   = $this->session->userdata('username');
	 		$data['peserta'] =  $this->Peserta_model->get_row($username);	

			$html =	$this->load->view('pages/peserta/cetakformulir',$data,true);  
 
 
	        $pdfFilePath = "Formulir Pendaftaran PBGF - " . $username . ".pdf"; 
		  
		    $this->load->library('m_pdf');
	  	  
	        $this->m_pdf->pdf->WriteHTML($html);
	        
	        $this->m_pdf->pdf->Output($pdfFilePath, "D");
	    }

	    function cetak(){
	    	$data['peserta'] = $this->Peserta_model->get_row($this->session->userdata('username'));
	    	$this->load->view('pages/peserta/cetakformulir', $data);
	    }
 	}

?>