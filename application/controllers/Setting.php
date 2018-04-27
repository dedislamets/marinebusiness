<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('Registrasi');
    $this->load->model('file');
    $this->load->model('Pengaturan');
    $this->load->model('Email');
    $this->load->model('Pengajuan_model');
    $this->load->helper('date');
    $this->load->model("calendar_model");
    $email = $this->session->userdata('email');
    if (empty($email)) { 
      redirect('register');    
    } 
  }

  public function index()
  {
    $data['script'] = '';
    $email = $this->session->userdata('email');
    if (empty($email)) { 
      redirect('register');    
    } 
    $data = array();		
    if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
      $filesCount = count($_FILES['userFiles']['name']);
      for($i = 0; $i < $filesCount; $i++){
        $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
        $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
        $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
        $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
        $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
        $uploadPath = 'uploads/files/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('userFile')){
          $fileData = $this->upload->data();
          $uploadData[$i]['file_name'] = $fileData['file_name'];
          $uploadData[$i]['created'] = date("Y-m-d H:i:s");
          $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
          $uploadData[$i]['jenis'] = "KTP";
          $uploadData[$i]['email'] = $email;
        }
      }                        
    }
    if($this->input->post('fileSubmitNPWP') && !empty($_FILES['userFilesNPWP']['name'])){
      $filesCount = count($_FILES['userFilesNPWP']['name']);
      for($i = 0; $i < $filesCount; $i++){
        $_FILES['userFilesNPWP']['name'] = $_FILES['userFilesNPWP']['name'][$i];
        $_FILES['userFilesNPWP']['type'] = $_FILES['userFilesNPWP']['type'][$i];
        $_FILES['userFilesNPWP']['tmp_name'] = $_FILES['userFilesNPWP']['tmp_name'][$i];
        $_FILES['userFilesNPWP']['error'] = $_FILES['userFilesNPWP']['error'][$i];
        $_FILES['userFilesNPWP']['size'] = $_FILES['userFilesNPWP']['size'][$i];
        $uploadPath = 'uploads/files/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('userFilesNPWP')){
          $fileData = $this->upload->data();
          $uploadData[$i]['file_name'] = $fileData['file_name'];
          $uploadData[$i]['created'] = date("Y-m-d H:i:s");
          $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
          $uploadData[$i]['jenis'] = "NPWP";
          $uploadData[$i]['email'] = $email;
        }
      }                
    }
    if($this->input->post('fileSubmitIJAZAH') && !empty($_FILES['userFilesIJAZAH']['name'])){
      $filesCount = count($_FILES['userFilesIJAZAH']['name']);
      for($i = 0; $i < $filesCount; $i++){
        $_FILES['userFilesIJAZAH']['name'] = $_FILES['userFilesIJAZAH']['name'][$i];
        $_FILES['userFilesIJAZAH']['type'] = $_FILES['userFilesIJAZAH']['type'][$i];
        $_FILES['userFilesIJAZAH']['tmp_name'] = $_FILES['userFilesIJAZAH']['tmp_name'][$i];
        $_FILES['userFilesIJAZAH']['error'] = $_FILES['userFilesIJAZAH']['error'][$i];
        $_FILES['userFilesIJAZAH']['size'] = $_FILES['userFilesIJAZAH']['size'][$i];
        $uploadPath = 'uploads/files/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('userFilesIJAZAH')){
          $fileData = $this->upload->data();
          $uploadData[$i]['file_name'] = $fileData['file_name'];
          $uploadData[$i]['created'] = date("Y-m-d H:i:s");
          $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
          $uploadData[$i]['jenis'] = "IJAZAH";
          $uploadData[$i]['email'] = $email;
        }
      }                
    }
    if($this->input->post('fileSubmitSIUP') && !empty($_FILES['userFilesSIUP']['name'])){
      $filesCount = count($_FILES['userFilesSIUP']['name']);
      for($i = 0; $i < $filesCount; $i++){
        $_FILES['userFilesSIUP']['name'] = $_FILES['userFilesSIUP']['name'][$i];
        $_FILES['userFilesSIUP']['type'] = $_FILES['userFilesSIUP']['type'][$i];
        $_FILES['userFilesSIUP']['tmp_name'] = $_FILES['userFilesSIUP']['tmp_name'][$i];
        $_FILES['userFilesSIUP']['error'] = $_FILES['userFilesSIUP']['error'][$i];
        $_FILES['userFilesSIUP']['size'] = $_FILES['userFilesSIUP']['size'][$i];
        $uploadPath = 'uploads/files/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('userFilesSIUP')){
          $fileData = $this->upload->data();
          $uploadData[$i]['file_name'] = $fileData['file_name'];
          $uploadData[$i]['created'] = date("Y-m-d H:i:s");
          $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
          $uploadData[$i]['jenis'] = "SIUP";
          $uploadData[$i]['email'] = $email;
        }
      }                
    }
    if($this->input->post('fileSubmitTDP') && !empty($_FILES['userFilesTDP']['name'])){
      $filesCount = count($_FILES['userFilesTDP']['name']);
      for($i = 0; $i < $filesCount; $i++){
        $_FILES['userFilesTDP']['name'] = $_FILES['userFilesTDP']['name'][$i];
        $_FILES['userFilesTDP']['type'] = $_FILES['userFilesTDP']['type'][$i];
        $_FILES['userFilesTDP']['tmp_name'] = $_FILES['userFilesTDP']['tmp_name'][$i];
        $_FILES['userFilesTDP']['error'] = $_FILES['userFilesTDP']['error'][$i];
        $_FILES['userFilesTDP']['size'] = $_FILES['userFilesTDP']['size'][$i];
        $uploadPath = 'uploads/files/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('userFilesTDP')){
          $fileData = $this->upload->data();
          $uploadData[$i]['file_name'] = $fileData['file_name'];
          $uploadData[$i]['created'] = date("Y-m-d H:i:s");
          $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
          $uploadData[$i]['jenis'] = "TDP";
          $uploadData[$i]['email'] = $email;
        }
      }                
    }
    if(!empty($uploadData)){
            //Insert file information into the database
      $insert = $this->file->insert($uploadData);
      $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
      $this->session->set_flashdata('statusMsg',$statusMsg);
    }
    $data['title'] = 'Pengaturan';
    $data['main'] = 'setting/index';
		//Get files data from database
    $data['data'] = $this->Pengaturan->getProfil($email);        
    $data['files_ktp'] = $this->file->getRows($email,'KTP');
    $data['files_npwp'] = $this->file->getRows($email,'NPWP');		
    $data['files_ijazah'] = $this->file->getRows($email,'IJAZAH');		
    $data['files_siup'] = $this->file->getRows($email,'SIUP');		
    $data['files_tdp'] = $this->file->getRows($email,'TDP');		
    $this->load->view('home', $data, FALSE);
  }

  public function iklan()
  {
    $email = $this->session->userdata('email');
    $listing = $this->db->select('t_iklan.*,nama_foto')
    ->from('t_iklan')
    ->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
    ->where(array('email'=>$email, 'main' => 1))
    ->group_by('t_iklan.id')
    ->order_by('date_iklan','desc')
    ->get()
    ->result();		
    $live = $this->db->select('t_iklan.*,nama_foto')
    ->from('t_iklan')
    ->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
    ->where(array('email'=>$email, 'status' => 1, 'main' => 1))
    ->group_by('t_iklan.id')
    ->order_by('date_iklan','desc')				
    ->get()
    ->result();
    $nonaktif = $this->db->select('t_iklan.*,nama_foto')
    ->from('t_iklan')
    ->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
    ->where(array('email'=>$email, 'status' => 0, 'main' => 1))
    ->group_by('t_iklan.id')
    ->order_by('date_iklan','desc')				
    ->get()
    ->result();
    $data['data'] = $this->Pengaturan->getProfil($email);
    $data['title'] = 'Pengaturan';
    $data['main'] = 'setting/iklan';	
    $data['listing'] = $listing;
    $data['live'] = $live;	
    $data['script'] = 'script/index';  
    $data['nonaktif'] = $nonaktif;	
    $this->load->view('home', $data, FALSE);
  }

  public function pengajuan()
  {        
    $email = $this->session->userdata('email');  
    $data['data'] = $this->Pengaturan->getProfil($email);      
    $data['title'] = 'List Pengajuan';
    $data['main'] = 'setting/pengajuan'; 
    $data['script'] = 'script/pengajuan';           
    $this->load->view('home', $data, FALSE);
  }

  public function baru()
  {								
    $data['title'] = 'Tambah Iklan';
    $data['main'] = 'setting/iklanbaru';
    $data['script'] = '';
    $data['groups'] = $this->Pengaturan->getAllGroups();
    $data['kab'] = $this->Pengaturan->getAllKab();		
    $data['country'] = $this->Pengaturan->getCountry();	
    $data['mode']	= 'new';	
    $this->load->view('home', $data, FALSE);		
  }

  public function edit($id)
  {								
    $data['title'] = 'Edit Iklan';
    $data['main'] = 'setting/iklanbaru';
    $data['script'] = '';
    $data['groups'] = $this->Pengaturan->getAllGroups();
    $data['kab'] = $this->Pengaturan->getAllKab();		
    $data['country'] = $this->Pengaturan->getCountry();
    $data['edit1'] = $this->Pengaturan->getDataIklan($id);
    $data['edit2'] = $this->Pengaturan->getDataKapal($id);
    $data['image'] = $this->Pengaturan->getImage($id);
    $data['mode'] = 'edit';		
    $this->load->view('home', $data, FALSE);		
  }

  public function upload()
  {                                              
    $email = $this->session->userdata('email');
    $data['title'] = 'Upload Sign';
    $data['main'] = 'setting/upload-sign';
    $data['script'] = '';
    $data['data'] = $this->Pengaturan->getProfil($email);
    $data['groups'] = $this->Pengaturan->getPengajuan($email);
    $data['groups_2'] = $this->Pengaturan->getPengajuan_2($email);
    $data['mode'] = 'edit';     
    $this->load->view('home', $data, FALSE);        
  }

  public function calendar()
  {                                  

    $email = $this->session->userdata('email');
    $data['title'] = 'Calendar Meet Up';
    $data['main'] = 'setting/calendar';
    $data['script'] = '';
    $data['data'] = $this->Pengaturan->getProfil($email);
    $data['groups'] = $this->Pengaturan->getMeetSaya($email);
    $data['groups_2'] = $this->Pengaturan->getMeetClient($email);
    $data['mode'] = 'edit';     
    $this->load->view('home', $data, FALSE);        
  }
  public function get_calendar()
  {                                              
    $email = $this->session->userdata('email');        
    $data['calendar'] = $this->Pengaturan->get_calendar($email);        
    $this->load->view('home', $data, FALSE);        
  }

  public function get_events()
  {
         // Our Start and End Dates
   $start = $this->input->get("start");
   $end = $this->input->get("end");

         $startdt = new DateTime('now'); // setup a local datetime
         $startdt->setTimestamp($start); // Set the date based on timestamp
         $start_format = $startdt->format('Y-m-d H:i:s');

         $enddt = new DateTime('now'); // setup a local datetime
         $enddt->setTimestamp($end); // Set the date based on timestamp
         $end_format = $enddt->format('Y-m-d H:i:s');

         $events = $this->calendar_model->get_events($start_format, $end_format);

         $data_events = array();

         foreach($events->result() as $r) {

           $data_events[] = array(
             "id" => $r->ID,
             "title" => $r->title,
             "description" => $r->description,
             "end" => $r->end,
             "start" => $r->start
           );
         }

         echo json_encode(array("events" => $data_events));
         exit();
       }

       public function add_event() 
       {
        /* Our calendar data */
        $name = $this->input->post("name", TRUE);
        $desc = $this->input->post("description", TRUE);
        $start_date = $this->input->post("start_date", TRUE);
        $end_date = $this->input->post("end_date", TRUE);

        if(!empty($start_date)) {            
         $sd = date("Y-m-d H:i:s",strtotime($start_date));           
         $start_date = $sd;           
           //$start_date_timestamp = $sd->getTimestamp();
       } else {
         $start_date = date("Y-m-d H:i:s", time());
           //$start_date_timestamp = time();
       }

       if(!empty($end_date)) {           
         $end_date = date("Y-m-d H:i:s",strtotime($end_date));
           //$end_date_timestamp = $ed->getTimestamp();
       } else {
         $end_date = date("Y-m-d H:i:s", time());
           //$end_date_timestamp = time();
       }

       $this->calendar_model->add_event(array(
         "title" => $name,
         "description" => $desc,
         "start" => $start_date,
         "end" => $end_date
       )
     );

       redirect(site_url("setting/calendar"));
     }

     public function edit_event()
     {
      $eventid = intval($this->input->post("eventid"));
      $event = $this->calendar_model->get_event($eventid);
      if($event->num_rows() == 0) {
       echo"Invalid Event";
       exit();
     }

     $event->row();

     /* Our calendar data */
     $name = $this->input->post("name");
     $desc = $this->input->post("description");
     $start_date = $this->input->post("start_date");
     $end_date = $this->input->post("end_date");
     $delete = intval($this->input->post("delete"));
     
     if(!$delete) {

       if(!empty($start_date)) {
        $sd = date("Y-m-d H:i:s",strtotime($start_date));                     
        $start_date = $sd;                    
      } else {
        $start_date = date("Y-m-d H:i:s", time());                    
      }

      if(!empty($end_date)) {                    
        $ed = date("Y-m-d H:i:s",strtotime($end_date)); 
        $end_date = $ed;                    
      } else {
        $end_date = date("Y-m-d H:i:s", time());                    
      }

      $this->calendar_model->update_event($eventid, array(
        "title" => $name,
        "description" => $desc,
        "start" => $start_date,
        "end" => $end_date,
      )
    );

    } else {
     $this->calendar_model->delete_event($eventid);
   }

   redirect(site_url("setting/calendar"));
 }
 public function update_calendar()
 {                                 
  $startdate = $this->input->post('startdate').'+'.$this->input->post('zone');             
  $type =  $this->input->post('type');
  $email = $this->session->userdata('email');
  $data = array(
    'title'     => $this->input->post('title'),
    'startdate' => $startdate,
    'enddate'   => $startdate,
    'allDay'    => false                         
  );
  $this->db->insert('t_calendar', $data);
  $lastid = $this->db->insert_id();
  $response = array(
    'error' => false,                    
    'id'    => $lastid
  );                          
  $this->output->set_content_type('application/json')
  ->set_output(json_encode($response));
}

public function foto($id='')
{							
  $response = [];
  if(!empty($id)) {
   $response = $this->Pengaturan->getImage($id);
 }													
 $this->output->set_content_type('application/json')
 ->set_output(json_encode($response));			
}

public function get_sertifikat($id){
  $data=$this->db->get_where('t_sertifikat_mst',array('type'=>$id))->result();
  $response = array(
   'error' => false,
   'data'	=> $data
 );											
  $this->output->set_content_type('application/json')
  ->set_output(json_encode($response));
}

public function get_pdf($kode_pengajuan){
  $data=$this->db->get_where('t_pengajuan',array('kode_pengajuan'=>$kode_pengajuan))->result();        
  $response = array(
    'error' => false,
    'data'  => $data
  );                                          
  $this->output->set_content_type('application/json')
  ->set_output(json_encode($response));
}
public function download($id,$sign){
  $data=$this->db->get_where('t_pengajuan',array('id'=>$id))->result(); 
  
  $this->load->helper('download'); 
  if($sign==1){
    $pdf = 'assets/pdf/'. $data[0]->pdf_1;  
  }else{
    $pdf = 'assets/pdf/'. $data[0]->pdf_2;  
  }                             
  force_download($pdf,NULL);        
}

public function proses_upload(){
  $uploadPath = 'uploads/';
  $config['upload_path'] = $uploadPath;        
  $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
  $this->load->library('upload',$config);
  $this->upload->initialize($config);        
  if($this->upload->do_upload('userfile')){
   $token = $this->input->post('token_foto');
   $nama = $this->upload->data('file_name');
   $id = $this->input->post('clasification_no');
   $this->db->insert('t_foto_kapal',array('nama_foto'=>$nama, 
     'token'=>$token,
     'main' => 1,
     'clasification_no' => $id));
   echo $this->db->last_query();
 }
}
public function proses_upload_sign(){
  $uploadPath                 = 'assets/pdf/';
  $config['upload_path']      = $uploadPath;        
  $config['allowed_types']    = 'jpg|png|pdf|jpeg';

  $this->load->library('upload',$config);
  $this->upload->initialize($config);        
  if($this->upload->do_upload('userfile')){
    $token  = $this->input->post('token_sertifikat');
    $kode_pengajuan     = $this->input->post('kode');            
    $nama   = $this->upload->data('file_name');

    $where = array(
      'kode_pengajuan' => $kode_pengajuan
    );
    $data = array(
      'pdf_2' => $nama, 
      'tgl_sign_1' => date('Y-m-d h:i:s'),
      'status' => 'Sign 1'         
    );
    $this->db->where($where);
    $this->db->update('t_pengajuan',$data);            
  }
  $response = array(
    'error' => false,                    
  );  
  $this->output->set_content_type('application/json')->set_output(json_encode($response));

}

public function proses_upload_sign_2(){
  $uploadPath                 = 'assets/pdf/';
  $config['upload_path']      = $uploadPath;        
  $config['allowed_types']    = 'jpg|png|pdf|jpeg';

  $this->load->library('upload',$config);
  $this->upload->initialize($config);        
  if($this->upload->do_upload('userfile')){
    $token  = $this->input->post('token_sertifikat');
    $kode_pengajuan     = $this->input->post('kode');            
    $nama   = $this->upload->data('file_name');

    $where = array(
      'kode_pengajuan' => $kode_pengajuan
    );
    $data = array(
      'pdf_3' => $nama, 
      'tgl_sign_2' => date('Y-m-d h:i:s'),
      'status' => 'Sign 2'         
    );
    $this->db->where($where);
    $this->db->update('t_pengajuan',$data);            
  }
  $response = array(
    'error' => false,                    
  );  
  $this->output->set_content_type('application/json')->set_output(json_encode($response));

}

public function proses_upload_sertifikat(){
  $uploadPath 				= 'uploads/';
  $config['upload_path'] 		= $uploadPath;        
  $config['allowed_types'] 	= 'gif|jpg|png|ico|jpeg';

  $this->load->library('upload',$config);
  $this->upload->initialize($config);        
  if($this->upload->do_upload('userfile')){
   $token 	= $this->input->post('token_sertifikat');
   $id 	= $this->input->post('id');
   $clasification_no 	= $this->input->post('clasification_no');
   $nama 	= $this->upload->data('file_name');

   $where = array(
    'id' => $id
  );
   $data = array(
    'dokumen' => $nama,	
    'clasification_no' => $clasification_no			
  );
   $this->db->where($where);
   $this->db->update('t_sertifikat',$data);        	
 }
 $table = '<table class="table table-dark"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">Type</th><th scope="col" class="center">Certificate</th><th scope="col" class="center">Document</th><th class="center">Action</th></tr></thead><tbody>';
 $email = $this->session->userdata('email');    

 $this->db->select('t_sertifikat_mst.kode_sertifikat,nama_sertifikat,dokumen,t_sertifikat.id');
 $this->db->from('t_sertifikat');
 $this->db->join('t_sertifikat_mst', 't_sertifikat.kode_sertifikat=t_sertifikat_mst.kode_sertifikat');        
 $this->db->where('token', $token);
 $this->db->or_where('clasification_no', $this->input->post('clasification_no'));
 $query = $this->db->get();

 $no=1;  
 foreach ($query->result() as $value) {
  $table .='<tr><th scope="row">'.$no.'</th><td>'.$value->kode_sertifikat.'</td><td class="left">'.$value->nama_sertifikat.'</td><td class="left"><a href="'.base_url().'uploads/'. $value->dokumen .'" data-lightbox="roadtrip">'.$value->dokumen.'</a></td><td><a href="javascript:void(0)" onclick="hapus_sertifikat('.$value->id.')"><i class="fa fa-eraser"></i>&nbsp;Remove</a></td></tr>';			
  $no++;
}

$table .= "</tbody></table>";
$response = array(
 'error' => false,
 'tabel'	=> $table
);											
$this->output->set_content_type('application/json')->set_output(json_encode($response));
}

public function find_sertifikat($clasification_no){
  $table = '<table class="table table-dark"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">Type</th><th scope="col" class="center">Certificate</th><th scope="col" class="center">Document</th><th class="center">Action</th></tr></thead><tbody>';

  $email = $this->session->userdata('email');   

  $this->db->select('t_sertifikat_mst.kode_sertifikat,nama_sertifikat,dokumen,t_sertifikat.id');
  $this->db->from('t_sertifikat');
  $this->db->join('t_sertifikat_mst', 't_sertifikat.kode_sertifikat=t_sertifikat_mst.kode_sertifikat');
  $this->db->where(array('clasification_no' => $clasification_no));
  $query = $this->db->get();

  $no=1;  
  foreach ($query->result() as $value) {
    $table .='<tr><th scope="row">'.$no.'</th><td>'.$value->kode_sertifikat.'</td><td class="left">'.$value->nama_sertifikat.'</td><td class="left"><a href="'.base_url().'uploads/'. $value->dokumen .'" data-lightbox="roadtrip">'.$value->dokumen.'</a></td><td><a href="javascript:void(0)" onclick="hapus_sertifikat('.$value->id.')"><i class="fa fa-eraser"></i>&nbsp;Remove</a></td></tr>';			
    $no++;
  }	

  $table .= "</tbody></table>";
  $response = array(
   'error' => false,
   'tabel'	=> $table
 );											
  $this->output->set_content_type('application/json')->set_output(json_encode($response));
}

public function simpan()
{		
  $token =  $this->input->post('token');
  $email = $this->session->userdata('email');
  $data = array(
    'kode_sertifikat' 	=> $this->input->post('type'),
    'token'				=> $token,
    'email'				=> $email,		        		        
  );
  $this->db->insert('t_sertifikat', $data);
  $lastid = $this->db->insert_id();
  $response = array(
   'error' => false,
   'token' => $token,
   'id'	=> $lastid
 );							
  $this->output->set_content_type('application/json')
  ->set_output(json_encode($response));
}

public function getlist()
{     
  header('Content-Type: application/json');
  echo $this->Pengajuan_model->get_all_produk();           

        //$email = $this->session->userdata('email');  
        // $this->db->from('t_pengajuan');
        // $this->db->where('email',$email);        
        // $query = $this->db->get();
        // $result = $query->result_array();
  

        // $response = array(
        //             'total' => $query->num_rows(),
        //             'rows' => $result
        //             );                                          
        // $this->output->set_content_type('application/json')->set_output(json_encode($response));
}
public function ajax_save_profil()
{				
  $email = $this->session->userdata('email');
  $data = array(
    'nama' 		=> $this->input->post('fullName'),
    'phone' 	=> $this->input->post('hp'),
    'biodata' 	=> $this->input->post('biodata'),
    'address' 	=> $this->input->post('address'),		        	        		       
  );
  $this->db->where('email', $email);
  $this->db->update('t_registrasi',$data);
  

  $response = array(
   'error' => false,
   'msg'	=> 'Sukses'									
 );							
  $this->output->set_content_type('application/json')
  ->set_output(json_encode($response));
}

public function simpan_data()
{				
  $datestring = '%Y-%m-%d';
  $email = $this->session->userdata('email');
  $data = array(
    'title' 			=> $this->input->post('title'),
    'description' 		=> $this->input->post('description'),
    'date_iklan' 		=> mdate($datestring),
    'status' 			=> 0,		        
    'type' 				=> $this->input->post('inputState'),
    'type_charter' 		=> $this->input->post('typeCharter'),
    'service' 			=> $this->input->post('gridRadios'),
		        //Time & bareboat Charter
    'price_charter'		=> str_replace(",","",$this->input->post('price_charter')),
    'duration' 			=> $this->input->post('duration'),
    'duration_uom' 		=> $this->input->post('duration_uom'),
    'area' 				=> $this->input->post('area'),
		        //freight Charter
    'price_freight'		=> str_replace(",","",$this->input->post('price_freight')),
    'portloading' 		=> $this->input->post('portloading'),
    'portdiscarge' 		=> $this->input->post('portdiscarge'),
    'qty_freight' 		=> str_replace(",","",$this->input->post('qty_freight')),
		        //CSM
    'price_csm'			=> str_replace(",","",$this->input->post('price_csm')),
    'duration_csm' 		=> $this->input->post('duration_csm'),
    'duration_csm_uom' 	=> $this->input->post('duration_csm_uom'),
    'area_csm'	 		=> $this->input->post('area_csm'),
    'country'	 		=> $this->input->post('country'),
		        // 'address_from' 		=> $this->input->post('address'),
		        // 'latitude' 			=> $this->input->post('latitude'),
		        // 'longitude' 		=> $this->input->post('longtitude'),		        
    'email'				=> $email,
  );
  $data_kapal = array(
    'vessel_nama' 			=> $this->input->post('vessel'),
    'owners' 				=> $this->input->post('owner'),
    'place_build' 			=> $this->input->post('place_build'),
    'year_build' 			=> $this->input->post('year_build'),		        
    'builder' 				=> $this->input->post('builder'),
    'keel_laid' 			=> $this->input->post('keel'),
    'launching' 			=> $this->input->post('launching'),
    'port_registry' 		=> $this->input->post('port'),
    'construction' 			=> $this->input->post('construction'),
    'call_sign'				=> $this->input->post('call'),
    'clasification'			=> $this->input->post('clasification'),
    'imo'					=> $this->input->post('imo'),
		        //'s_phone'				=> $this->input->post('phone'),
    'loa'					=> str_replace(",","",$this->input->post('loa')),
    'length'				=> str_replace(",","",$this->input->post('length')),
    'breadth'				=> str_replace(",","",$this->input->post('breadth')),
    'depth'					=> str_replace(",","",$this->input->post('dept')),
    'summer_draught'		=> str_replace(",","",$this->input->post('summer')),
    'grt'					=> str_replace(",","",$this->input->post('grt')),
    'nrt'					=> str_replace(",","",$this->input->post('nrt')),
    'sideboard'				=> str_replace(",","",$this->input->post('side')),
    'deck_capacity'			=> str_replace(",","",$this->input->post('desk2')),
    'max_deck_load'			=> str_replace(",","",$this->input->post('load')),		        
    'deck_area'				=> $this->input->post('desk'),
    'email'					=> $email,
  );

  if ($this->input->post('mode') == "edit") {
    
   $this->db->where('id', $this->input->post('idKapal'));
   $this->db->update('t_kapal',$data_kapal);

   $this->db->where('id', $this->input->post('idIklan'));
   $this->db->update('t_iklan',$data); 
   $str = $this->db->last_query();

 } else {
   $data['token'] = $this->input->post('token_s');

   $this->db->insert('t_iklan', $data);
   $id = $this->db->insert_id();

   $data_kapal['clasification_no'] = $id;
   $this->db->insert('t_kapal', $data_kapal);
   $str = $this->db->last_query();

   $token=$this->input->post('token_s');    	
   $where = array(
    'token' => $token
  );
   $updatedata = array(
    'clasification_no' => $id,				
  );
   $this->db->where($where);
   $this->db->update('t_foto_kapal',$updatedata);
   $this->db->where($where);
   $this->db->update('t_iklan',$updatedata);
   $this->db->where($where);
   $this->db->update('t_sertifikat',$updatedata);  
   
 }
 
 
 $response = array(
   'error' => false,
   'data'	=>$data,
   'data_kapal'	=> $data_kapal,
   'query'			=> $str					
 );							
 $this->output->set_content_type('application/json')
 ->set_output(json_encode($response));
}

public function export_pdf($id = "") {

  if(!empty($this->session->userdata('email'))){

    $datestring = '%Y-%m-%d';                        

    $email = $this->session->userdata('email');
    $data_produk = $this->db->get_where('t_iklan',array('id' => $id))->result();
    $data_buyer = $this->db->get_where('t_registrasi',array('email'=>$email, 'verified' => 1))->result();
    $data_seller = $this->db->get_where('t_registrasi',array('email'=>$data_produk[0]->email, 'verified' => 1))->result();
    if($data_produk[0]->price_charter > 0) {
      $price = $data_produk[0]->price_charter;
    }elseif($data_produk[0]->price_freight > 0) {
      $price = $data_produk[0]->price_freight;
    }elseif($data_produk[0]->price_csm > 0) {
      $price = $data_produk[0]->price_csm;
    }else{
      $price = $data_produk[0]->price;
    }
    
			//$this->load->library('pdf');
    
		    //$this->pdf->setPaper('A4', 'potrait');
		    //$this->pdf->filename = "laporan.pdf";

    $html = '
    <style type="text/css">
    td {                    
      padding-left: 0;
    }                

    </style>
    <h3 style="text-align: center;font-weight: bold;display: block;font-size: 1.17em;padding-bottom:0;margin-bottom:0">SURAT PERJANJIAN (AGREEMENT) <br>KOMISI MARINE BUSSINESS</h3>
    <div class="container" style="margin-right: auto;margin-left: auto;padding-left: 15px;padding-right: 15px;">
    <div style="padding: 15px;padding-top:0">
    <hr>
    <p>Yang Bertanda tangan dibawah ini :</p>
    <table>
    <tr>
    <td style="vertical-align: top">Nama</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_seller[0]->nama .'</td>
    </tr>
    <tr>
    <td style="vertical-align: top">KTP</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_seller[0]->ktp .'</td>
    </tr>               
    <tr>
    <td style="vertical-align: top">Alamat</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_seller[0]->address .'</td>
    </tr>
    
    </table>
    <p style="margin-top: 0">Selaku yang memberikan pernyataan komitmen fee disebut sebagai pihak pertama (penjual).</p><br>
    <table>
    <tr>
    <td style="vertical-align: top">Nama</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_buyer[0]->nama .'</td>
    </tr>
    <tr>
    <td style="vertical-align: top">KTP</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_buyer[0]->ktp .'</td>
    </tr>
    <tr>
    <td style="vertical-align: top">Alamat</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_buyer[0]->address .'</td>
    </tr>
    <tr>
    <td style="vertical-align: top">Perusahaan</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_buyer[0]->perusahaan .'</td>
    </tr>
    <tr>
    <td>Telepon</td>
    <td>:</td>
    <td>'. $data_buyer[0]->phone .'</td>
    </tr>
    </table>
    <p style="margin-top: 0">Selaku yang memberikan pernyataan komitmen fee disebut sebagai pihak kedua (pembeli).</p><br>

    <table>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td>PT Marine Bussiness</td>
    </tr>           
    <tr>
    <td style="vertical-align: top">Alamat</td>
    <td style="vertical-align: top">:</td>
    <td>Jl. Candrabraga PUP Taman Elok Blok. E 10/9 Rt.005/032<br>Kel. Bahagia. Kec. Babelan. <br>Kab. Bekasi</td>
    </tr>           
    </table>
    <p style="margin-top: 0">Selaku yang menerima pernyataan komitmen fee disebut sebagai pihak ketiga (admin).</p>
    <p style="font-weight: bold; text-align: center;">Menerangkan</p>
    <p style="margin-bottom: 0">Pihak pertama berjanji dan menyatakan akan memberikan fee kepada pihak ketiga dengan ketentuan sebagai berikut :</p>
    <table>
    <tr>
    <td style="vertical-align: top">1.</td>
    <td>Pihak pertama memberikan fee terhadap pihak kedua dan ketiga sesuai dengan presentase fee yang sudah ditentukan di produk.</td>
    </tr>
    <tr>
    <td style="vertical-align: top">2.</td>
    <td>Presentasi Pembagian fee adalah :</td>
    </tr>
    <tr>
    <td></td>
    <td>a.  40% untuk pihak pertama (penjual)</td>
    </tr>
    <tr>
    <td></td>
    <td>b.  40% untuk pihak kedua (pembeli)</td>
    </tr>
    <tr>
    <td></td>
    <td>c.  20% untuk pihak ketiga (admin)</td>
    </tr>
    </table>

    <p style="text-align: right;">Bekasi, 28 Maret 2018</p>            
    <div style="width:70%;float:left">
    <p>Pihak Pertama</p>                    
    <br>
    <p>.........................</p>
    </div>                
    <div style="width:20%;float:right">
    <p>Pihak Kedua</p>                    
    <br>
    <p>..........................</p>
    </div>            
    </div>
    </div>  ';
    $data = array(                             
      "id" => $id,
      "email" => $this->session->userdata('email'),
      "html" => $html                
    );
    $filename = "assets/pdf/". $data['email'].'_'. $data['id'].'.pdf';

    $data = array(
      'id_kapal'          => $id,
      'jenis_pengajuan'   => $data_produk[0]->type_charter .' ' .$data_produk[0]->service,
      'tgl_pengajuan'     => mdate($datestring),
      'status'            => "Waiting Verification",               
      'nilai_pengajuan'   => $price,
      'title_pengajuan'   => $data_produk[0]->title,
      'id_buyer'          => $data_buyer[0]->id,                
      'nama_buyer'        => $data_buyer[0]->nama,
      'id_seller'         => $data_seller[0]->id,
      'nama_seller'       => $data_seller[0]->nama, 
      'kode_pengajuan'    => $this->Pengaturan->Autonumber(),
      'email'             => $email,
      'pdf_1'             => $filename                         
    );
    $this->db->insert('t_pengajuan', $data);
    $id_pengajuan = $this->db->insert_id();

		    //$filename = $this->pdf->load_view('agreement/index', $data2);
            //$html = $this->load->view('agreement/index', $data2, true);
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
    $mpdf->WriteHTML($html);
    $mpdf->Output($filename);

    $body = "<h2>Terima Kasih telah menggunakan jasa Marine Business untuk bisnis anda.</h2>";
    $body .= "<p>Anda sudah mengajukan agreement dengan pengiklan, kami akan memproses pengajuan anda segera. Mohon menunggu 2x24 Jam.</p>";
    $body .= "<p>Berikut kami kirimkan Agreement Letter, mohon tanda tangani diatas materai sebagai bukti sah dan upload kembali disini.</p><br>";
    $body .="<p>Email ini dikirimkan secara otomatis oleh sistem. Jangan membalas email ini. Jika ada pertanyaan silahkan hubungi contact person kami (021) 0878787877</p>";
    $body .="CS Marine Business";
    $this->Email->sendPhpMail($this->session->userdata('email'), 'Agreement Letter Marine Business', $body, $filename);	
    
    $link = 'notification/success/'. $id_pengajuan;
            //redirect($link);                      
    echo'
    <script>
    window.location.href = "'.base_url().''.$link.'";
    </script>
    ';
  }else{
   redirect('register');
 }
 
}

public function view_agreement_pdf($id = "") {
  
  if(!empty($this->session->userdata('email'))){

    $datestring = '%Y-%m-%d';                        

    $email = $this->session->userdata('email');
    $data_pengajuan = $this->db->get_where('t_pengajuan',array('id' => $id, 'email' => $email))->result();           
    $data_buyer = $this->db->get_where('t_registrasi',array('id'=>$data_pengajuan[0]->id_seller, 'verified' => 1))->result();
    $data_seller = $this->db->get_where('t_registrasi',array('id'=>$data_pengajuan[0]->id_buyer, 'verified' => 1))->result();       
    $html = '
    <style type="text/css">
    td {                    
      padding-left: 0;
    }                

    </style>
    <h3 style="text-align: center;font-weight: bold;display: block;font-size: 1.17em;padding-bottom:0;margin-bottom:0">SURAT PERJANJIAN (AGREEMENT) <br>KOMISI MARINE BUSSINESS</h3>
    <div class="container" style="margin-right: auto;margin-left: auto;padding-left: 15px;padding-right: 15px;">
    <div style="padding: 15px;padding-top:0">
    <hr>
    <p>Yang Bertanda tangan dibawah ini :</p>
    <table>
    <tr>
    <td style="vertical-align: top">Nama</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_pengajuan[0]->nama_seller .'</td>
    </tr>
    <tr>
    <td style="vertical-align: top">KTP</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_seller[0]->ktp .'</td>
    </tr>               
    <tr>
    <td style="vertical-align: top">Alamat</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_seller[0]->address .'</td>
    </tr>
    
    </table>
    <p style="margin-top: 0">Selaku yang memberikan pernyataan komitmen fee disebut sebagai pihak pertama (penjual).</p><br>
    <table>
    <tr>
    <td style="vertical-align: top">Nama</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_buyer[0]->nama .'</td>
    </tr>
    <tr>
    <td style="vertical-align: top">KTP</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_buyer[0]->ktp .'</td>
    </tr>
    <tr>
    <td style="vertical-align: top">Alamat</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_buyer[0]->address .'</td>
    </tr>
    <tr>
    <td style="vertical-align: top">Perusahaan</td>
    <td style="vertical-align: top">:</td>
    <td>'. $data_buyer[0]->perusahaan .'</td>
    </tr>
    <tr>
    <td>Telepon</td>
    <td>:</td>
    <td>'. $data_buyer[0]->phone .'</td>
    </tr>
    </table>
    <p style="margin-top: 0">Selaku yang memberikan pernyataan komitmen fee disebut sebagai pihak kedua (pembeli).</p><br>

    <table>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td>PT Marine Bussiness</td>
    </tr>           
    <tr>
    <td style="vertical-align: top">Alamat</td>
    <td style="vertical-align: top">:</td>
    <td>Jl. Candrabraga PUP Taman Elok Blok. E 10/9 Rt.005/032<br>Kel. Bahagia. Kec. Babelan. <br>Kab. Bekasi</td>
    </tr>           
    </table>
    <p style="margin-top: 0">Selaku yang menerima pernyataan komitmen fee disebut sebagai pihak ketiga (admin).</p>
    <p style="font-weight: bold; text-align: center;">Menerangkan</p>
    <p style="margin-bottom: 0">Pihak pertama berjanji dan menyatakan akan memberikan fee kepada pihak ketiga dengan ketentuan sebagai berikut :</p>
    <table>
    <tr>
    <td style="vertical-align: top">1.</td>
    <td>Pihak pertama memberikan fee terhadap pihak kedua dan ketiga sesuai dengan presentase fee yang sudah ditentukan di produk.</td>
    </tr>
    <tr>
    <td style="vertical-align: top">2.</td>
    <td>Presentasi Pembagian fee adalah :</td>
    </tr>
    <tr>
    <td></td>
    <td>a.  40% untuk pihak pertama (penjual)</td>
    </tr>
    <tr>
    <td></td>
    <td>b.  40% untuk pihak kedua (pembeli)</td>
    </tr>
    <tr>
    <td></td>
    <td>c.  20% untuk pihak ketiga (admin)</td>
    </tr>
    </table>

    <p style="text-align: right;">Bekasi, 28 Maret 2018</p>            
    <div style="width:70%;float:left">
    <p>Pihak Pertama</p>                    
    <br>
    <p>.........................</p>
    </div>                
    <div style="width:20%;float:right">
    <p>Pihak Kedua</p>                    
    <br>
    <p>..........................</p>
    </div>            
    </div>
    </div>  ';            
    
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->SetWatermarkImage('assets/images/watermark.jpg');
    $mpdf->showWatermarkImage = true;
    $mpdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
    $mpdf->WriteHTML($html);
    $mpdf->Output();
    
  }else{
    redirect('register');
  }
  
}
	//Untuk menghapus foto
function remove_foto(){
		//Ambil token foto
  $token=$this->input->post('token');
  $this->db->from('t_foto_kapal');
  $this->db->where('token', $token);
  $this->db->or_where('clasification_no', $this->input->post('id'));
  $foto = $this->db->where('nama_foto', $this->input->post('name'))->get();
  $last_query = $this->db->last_query();
  
  if($foto->num_rows()>0){
   $hasil=$foto->row();
   $nama_foto=$hasil->nama_foto;
   if(file_exists($file='uploads/'.$nama_foto)){
    unlink($file);
  }
  $this->db->from('t_foto_kapal');
  $this->db->where('clasification_no', $this->input->post('id'));
  $this->db->where('nama_foto', $this->input->post('name'))->delete();			
}
echo $last_query;
}

function remove_sertifikat(){
		//Ambil token foto
  $token=$this->input->post('token');		
  $id=$this->input->post('id');		
  $foto=$this->db->get_where('t_sertifikat',array('id'=>$id));
  if($foto->num_rows()>0){
   $hasil=$foto->row();
   $dokumen=$hasil->dokumen;
   if(file_exists($file='uploads/'.$dokumen)){
    unlink($file);
  }
  $this->db->delete('t_sertifikat',array('id'=>$id));
}

$table = '<table class="table table-dark"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">Type</th><th scope="col" class="center">Certificate</th><th scope="col" class="center">Document</th><th class="center">Action</th></tr></thead><tbody>';
$email = $this->session->userdata('email');

$this->db->select('t_sertifikat_mst.kode_sertifikat,nama_sertifikat,dokumen,t_sertifikat.id');
$this->db->from('t_sertifikat');
$this->db->join('t_sertifikat_mst', 't_sertifikat.kode_sertifikat=t_sertifikat_mst.kode_sertifikat');
$this->db->where('token', $token);
$this->db->or_where('clasification_no', $this->input->post('clasification_no'));
$query = $this->db->get();

$no=1;  
foreach ($query->result() as $value) {
  $table .='<tr><th scope="row">'.$no.'</th><td>'.$value->kode_sertifikat.'</td><td class="left">'.$value->nama_sertifikat.'</td><td class="left"><a href="'.base_url().'uploads/'. $value->dokumen .'" data-lightbox="roadtrip">'.$value->dokumen.'</a></td><td><a href="javascript:void(0)" onclick="hapus_sertifikat('.$value->id.')"><i class="fa fa-eraser"></i>&nbsp;Remove</a></td></tr>';			
  $no++;
}		
$str = $this->db->last_query();
$table .= "</tbody></table>";
$response = array(
 'error' => false,
 'tabel'	=> $table,
 'query'	=> $str
);											
$this->output->set_content_type('application/json')->set_output(json_encode($response));
}

public function setutama(){
  $response = array('error' => true);
  $this->db->from('t_foto_kapal');
  $this->db->where('main', 1);
  $cek = $this->db->where('clasification_no', $this->input->post('clasification_no'))->get();
  if($cek->num_rows()>0){
   $hasil=$cek->row();
   $this->db->set(array('main'=> 0 ));
   $this->db->where('clasification_no', $this->input->post('clasification_no'));
   $this->db->update('t_foto_kapal');						

   $this->db->set(array('main'=> 1 ));
   $this->db->where('id', $this->input->post('id'));
   $this->db->update('t_foto_kapal');	

   $response['error'] = false;
   $response['data'] = $hasil->id;	
 }
 
 $this->output->set_content_type('application/json')
 ->set_output(json_encode($response));
}    

}