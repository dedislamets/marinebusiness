<?php

class Pengajuan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function get_all_produk() {
		$this->load->library('datatables');
        
		$this->datatables->select('kode_pengajuan,title_pengajuan,jenis_pengajuan,nama_seller,nilai_pengajuan, status');
        $this->datatables->from('t_pengajuan');        
        return $this->datatables->generate();
	}

}