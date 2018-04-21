<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->data['hasil'] = $this->model_crud->getUser('data_anggota');
		$this->load->view('welcome_message', $this->data);
	}

	public function form_input(){
		$this->load->view('form-input');
	}

	public function insert(){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$no_telepon = $_POST['no_telepon'];
		$data = array('nama' => $nama, 'alamat' => $alamat, 'jenis_kelamin' => $jenis_kelamin, 'no_telepon' => $no_telepon);
		$tambah = $this->model_crud->tambahData('data_anggota',$data);
		if($tambah > 0){
			redirect('welcome/index');
		}else {
			echo 'Gagal';
		}
	}

	public function delete($id){
		$hapus = $this->model_crud->hapusData('data_anggota',$id);
		if($hapus > 0){
			redirect('welcome/index');
		}else {
			echo 'Gagal';
		}
	}

	public function form_edit($id){
		$this->data['dataEdit'] = $this->model_crud->dataEdit('data_anggota',$id);
		$this->load->view('form-edit', $this->data);
	}

	public function update($id){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$no_telepon = $_POST['no_telepon'];
		$data = array('nama' => $nama, 'alamat' => $alamat, 'jenis_kelamin' => $jenis_kelamin, 'no_telepon' => $no_telepon);
		$edit = $this->model_crud->editData('data_anggota',$data,$id);
		if($edit > 0){
			redirect('welcome/index');
		}else {
			echo 'Gagal';
		}
	}
}