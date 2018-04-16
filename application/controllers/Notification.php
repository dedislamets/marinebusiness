<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notification extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Success';
		$data['main'] = 'notification/index';		
		$this->load->view('home', $data, FALSE);		
	}
	public function success($id)
	{
		$data_pengajuan = $this->db->get_where('t_pengajuan',array('id' => $id))->result();
		$data['title'] = 'Success';
		$data['main'] = 'notification/index';	
		$data['data'] = $data_pengajuan;
		
		$this->load->view('home', $data, FALSE);		
	}
}
