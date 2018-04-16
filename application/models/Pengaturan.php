<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }
    function getProfil($email='')
    {        
        $query = $this->db->query("SELECT * FROM t_registrasi where email='".$email."'");
        return $query->result();        
    }
    function getAllGroups()
    {        
        $query = $this->db->query('SELECT type FROM t_sertifikat_mst group by type order by type asc');
        return $query->result();        
    }
    function getAllKab()
    {        
        $query = $this->db->query('SELECT * FROM t_sertifikat_mst WHERE TYPE = (SELECT TYPE FROM t_sertifikat_mst GROUP BY TYPE ORDER BY TYPE ASC LIMIT 1)');
        return $query->result();        
    }

    function getDataIklan($id = '')
    {        
        $query = $this->db->query("SELECT * FROM t_iklan WHERE id= ".$id."");
        return $query->result();        
    }

    function getDataKapal($id = '')
    {        
        $query = $this->db->query("SELECT * FROM t_kapal WHERE clasification_no= ".$id."");
        return $query->result();        
    }

    function getImage($id = '')
    {        
        $query = $this->db->query("SELECT * FROM t_foto_kapal WHERE clasification_no= ".$id." order by main Desc");
        return $query->result();        
    }

    function getCountry()
    {        
        $query = $this->db->query('SELECT iso,nicename FROM country');
        return $query->result();        
    }
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    function sendMail($email) {
        $ci = get_instance();
        
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://mail.marinebusiness.co.id";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "cs@marinebusiness.co.id";
        $config['smtp_pass'] = "admin123^";
        $config['charset'] = 'utf-8';
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
              
        $config['send_multipart'] = FALSE;
        
        
        $ci->email->initialize($config);
 
        $ci->email->from('cs@marinebusiness.co.id', 'Marine Business');
        $list = array($email);
        $ci->email->to($list);
        $ci->email->subject('Verifikasi Akun Anda Sekarang');
        $ci->email->message('isi email');
        if ($this->email->send()) {
            // echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }

    function Autonumber()   {
          $this->db->select('RIGHT(kode_pengajuan,4) as kode', FALSE);
          $this->db->order_by('id','DESC');    
          $this->db->limit(1);    
          $query = $this->db->get('t_pengajuan');      //cek dulu apakah ada sudah ada kode di tabel.    
          if($query->num_rows() <> 0){      
           //jika kode ternyata sudah ada.      
           $data = $query->row();      
           $kode = intval($data->kode) + 1;    
          }
          else {      
           //jika kode belum ada      
           $kode = 1;    
          }
          $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
          $kodejadi = "MB-2209-".$kodemax;    // hasilnya ODJ-9921-0001 dst.
          return $kodejadi;  
    }
}
