<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

	function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_career');
		
    }

	public function index()
	{
		$header['setting'] = $this->Model_common->get_setting_data();
		$header['page'] = $this->Model_common->get_page_data();
		$header['comment'] = $this->Model_common->get_comment_code();
		$header['social'] = $this->Model_common->get_social_data();
		$header['language'] = $this->Model_common->get_language_data();
		$header['latest_news'] = $this->Model_common->get_latest_news();
		$header['popular_news'] = $this->Model_common->get_popular_news();

		$this->load->view('view_header',$header);
		
		$data['service'] = $this->Model_career->career();
		
		$this->load->view('view_careers',$data);
		$this->load->view('view_footer');
	}
	
	
		public function view($id)

	{

		$header['setting'] = $this->Model_common->get_setting_data();

		$header['page'] = $this->Model_common->get_page_data();

		$header['comment'] = $this->Model_common->get_comment_code();

		$header['social'] = $this->Model_common->get_social_data();

		$header['language'] = $this->Model_common->get_language_data();

		$header['latest_news'] = $this->Model_common->get_latest_news();

		$header['popular_news'] = $this->Model_common->get_popular_news();



		//$header['service_by_heading'] = $this->Model_service->get_service_data_order_by_heading();



		$data['res'] = $this->Model_career->get_jobs_detail($id);
        
		//$res = $this->Model_career->details($id);
		 
//$this->load->view('viewcareer_detail', ['r1'=>$res]); 


		$this->load->view('view_header',$header);

		$this->load->view('viewcareer_detail',$data);
		         

		$this->load->view('view_footer');

	}
}

