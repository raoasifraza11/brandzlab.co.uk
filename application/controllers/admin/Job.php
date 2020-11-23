<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Job extends CI_Controller 

{

	function __construct() 

	{

        parent::__construct();
		
		

        $this->load->model('admin/Model_header');

        $this->load->model('admin/Model_job');
		
		$this->load->model('Model_common');

    }
	
	
	public function add(){
				 if(isset($_POST['form1'])) {
			    extract($_POST);
				$form_data = array(
                     
					'title' => $title,
					'responsibilities' => $responsibilities,
					'skills' => $skills,
					'meta_title' => $meta_title,
					'meta_keyword' => $meta_keyword,
					'meta_description'=> $meta_description,
					'qualification	'=> $qualification,
					'experience	'=> $experience,
					'gender	'=> $gender,
					'age	'=> $age
					
					
	            );
				
				if($this->Model_job->add($form_data))
				{
					redirect(base_url().'admin/job/add/success');
					exit();
				}
				else
				{
					redirect(base_url().'admin/job/add/error');
					exit();
				}
				
				 
			    
		 }
		
		 $header['setting'] = $this->Model_header->get_setting_data();
		 $this->load->view('admin/jobs/add',$header);
		//echo " Hello World";
		 	
	}
	
	public function viewjobs(){
		
		
		$header['setting'] = $this->Model_header->get_setting_data();
		$this->load->view('admin/view_header',$header);
		$data['service'] = $this->Model_job->view();
		
		$this->load->view('admin/jobs/view_jobs',$data);

	}
	
	public function delete($id){
		
	         $tot = $this->Model_job->checkDelete($id);
	  
    		redirect(base_url().'admin/job/viewjobs');

	}
	
	
	public function edit($id){
		
		
		
		
		//$header['setting'] = $this->Model_header->get_setting_data();
		//$this->load->view('admin/jobs/update',$header);
		
		$res = $this->Model_job->checkEdit($id);
		//print_r($res);
		$this->load->view('admin/jobs/update', ['r1'=>$res]);  
		
		
	}
	
	public function update(){
		
		 if(isset($_POST['form1'])) {
		
			
		 }
    }
	
	
	public function appliedJob(){
		
		
		$header['setting'] = $this->Model_header->get_setting_data();
		$this->load->view('admin/view_header',$header);
		
		
		
		$data['service'] = $this->Model_job->showAppliedJob();
	    $this->load->view('admin/jobs/appliedjob',$data);
		
	}
	
	public function showmodel($id){
		
		
		 $res = $this->Model_job->showmodel($id);
		 
		
		
		
		//$this->load->view('admin/jobs/view_jobs', ['r1'=>$res]);	
	}
	
	
	
	//public function showmodel($id){
		
		
		// $res = $this->Model_job->showmodel($id);
		//print_r($res);
		// $this->load->view('admin/jobs/view_jobs', ['r1'=>$res]);
		
		
	// }
	
	
       




	
   }