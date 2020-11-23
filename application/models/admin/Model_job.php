<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Model_job extends CI_Model 

{
	
	function add($data){
		 
		  return $this->db->insert('jobs',$data);			  		 	
    }
	
	
	function view() {

        $sql = "SELECT * FROM jobs";

        $query = $this->db->query($sql);

        return $query->result_array();
    }
	
	function career(){
		
		
		$sql = "SELECT * FROM jobs";
        $query = $this->db->query($sql);
        return $query->result_array();
		
	}
	
	function details($id){
		$query=$this->db->select(['id','title','responsibilities','skills'])->from('jobs')->where('id',$id)->get();
	    return $query->row();
	}
	
	
	function checkDelete($id){
		
		 $this->db->where('id',$id);

        $this->db->delete('jobs');
		
	}
	
	function checkEdit($id){
		
		$query=$this->db->select(['id','title','responsibilities','skills','meta_title'])->from('jobs')->where('id',$id)->get();
	    return $query->row();
				
	}
	
	function showAppliedJob(){
		
		
		$sql = "SELECT * FROM savejobs";
        $query = $this->db->query($sql);
        return $query->result_array();
		
	}
	
	function showmodel($id){
		$query=$this->db->select(['id','title','responsibilities','skills','meta_title'])->from('jobs')->where('id',$id)->get();
	    return $query->row();
		
	}
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
 }