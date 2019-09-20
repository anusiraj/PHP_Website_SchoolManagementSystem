<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examgradescontroller extends CI_Controller 
{


	public function index()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules('marks','Marks','required');
		$this->form_validation->set_rules('grades','Grades','required');

		$ide=$this->uri->segment('3');
		$query=$this->db->get_where("examgrades",array("id"=>$ide));
		$data['records']=$query->result();

		if($this->form_validation->run()==FALSE)
		{
			if(count($data)>0)
			{
				$this->load->view('Examgrades',$data);
			}
			else
			{
			$this->load->view('Examgrades');
			}
		}
		else
		{
			$this->load->model('Examgradesmodel');
			$data=array('marks'=>$this->input->post('marks'),'grades'=>$this->input->post('grades'));

			$hdnid=$this->input->post('hdbox');
        	if($hdnid!='')
        	{
        		$this->Examgradesmodel->update($data,$hdnid);
        		$this->listnew();
        	}
        	else
        	{
			$this->Examgradesmodel->insert($data);
			$this->listnew();
			}
		}
	}
	
	 public function listnew()
	 {
	 	$this->load->helper('url');
	 	$query=$this->db->get('examgrades');
	 	$data['records']=$query->result();
		$this->load->view('Examgradeslisting',$data);	
     }
     public function delete()
	 {
	 	$this->load->model("Examgradesmodel");
	 	$ide=$this->uri->segment('3');
	 	$this->Examgradesmodel->delete($ide);
	 	$this->listnew(); 
	 }
}
?>