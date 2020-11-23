<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Jobs extends CI_Controller 

{

	function __construct() 

	{

        parent::__construct();

        $this->load->model('admin/Model_header');

        $this->load->model('admin/Model_job');

    }
	
	
	
	public function careers(){
		
		
		$data['service'] = $this->Model_job->career();
		
		$this->load->view('admin/jobs/careers',$data);
	}
	
	
	
	public function applyJob(){
		
		 if(isset($_POST['form1'])) {
			 
			 $temp_name= $_FILES["file"]["tmp_name"];
			  $file_name= $_FILES["file"]["name"];
			  //$file_add=$_SERVER['DOCUMENT_ROOT']."/public/cvs/".$file_name;
			 $file_add=base_url()."public/cvs/".$file_name;
			 if(move_uploaded_file($temp_name,$file_add))
			 {
				 echo "yes";
				 exit();
			 }
			 else
			 {
				 echo "no";
				 
			 }
			 
			 $pagina = array();
			$pagina['firstname'] = $this->input->post('firstname');
			$pagina['lastname'] = $this->input->post('lastname');
			$pagina['email'] = $this->input->post('email');
			$pagina['phone'] = $this->input->post('phone');
			
			$pagina['file'] = $file_add;
			if($this->db->insert('savejobs', $pagina)){
				redirect(base_url().'jobs/careers/success');
					exit();
			}
			else {
				redirect(base_url().'jobs/careers/error');
					exit();
			}		
			 
				// if($_FILES["file"]["size"] > 0){
				// $tmpName = $_FILES["file"]['tmp_name'];         
				// $fp = fopen($tmpName, 'r');
				// $file = fread($fp, filesize($tmpName));
				// $file = addslashes($file);
				// fclose($fp);
    }

			
			
			
						
		 }
      
	  
	  public  function details($id){
		  
		  $res = $this->Model_job->details($id);
          $this->load->view('details', ['r1'=>$res]);  
	  } 
}
	  
	  
	  
	  
	  
	  
	  