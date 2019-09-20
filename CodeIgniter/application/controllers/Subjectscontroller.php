<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjectscontroller extends CI_Controller 
{


	
	public function index()
	{   
		$this->load->library("form_validation");
		$this->form_validation->set_rules('class','Class');
		$this->form_validation->set_rules('subjects','Subjects');
		if($this->form_validation->run()==FALSE)
		{
			
				$this->load->view('Subjects');
			
		}
		else
		{
		$this->load->model('Subjectsmodel');
		$data=array('class'=>$this->input->post('class'),'subjects'=>$this->input->post('subjects'));
		$this->Subjectsmodel->insert($data);
	    }
	}
}
?>