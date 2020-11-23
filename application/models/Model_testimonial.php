<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Model_testimonial extends CI_Model 

{

    public function get_testimonial_data()

    {
       
       $query = $this->db->get_where('tbl_testimonial', array('status' => 1));
       

        return $query->result_array();

    }

}