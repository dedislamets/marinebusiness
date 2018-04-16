<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profil extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Registrasi');
		// $this->load->library('m_pdf');
	}
	public function index()
	{
		$this->db->from('t_profil');
		$data['data'] = $this->db->get()->result();		
		
		$data['title'] = 'Profil';
		$data['main'] = 'profil/index';	

		$this->load->view('home', $data, FALSE);
	}
}