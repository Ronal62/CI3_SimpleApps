<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('templates/header', $data);
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}

	public function mahasiswa()
	{
		$data['title'] = 'Mahasiswa';
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa');
		$this->load->view('templates/footer');
	}

	public function matakuliah()
	{
		$data['title'] = 'Matakuliah';
		$this->load->view('templates/header', $data);
		$this->load->view('matakuliah');
		$this->load->view('templates/footer');
	}

	public function kontak()
	{
		$data['title'] = 'Kontak';
		$this->load->view('templates/header', $data);
		$this->load->view('kontak');
		$this->load->view('templates/footer');
	}
}