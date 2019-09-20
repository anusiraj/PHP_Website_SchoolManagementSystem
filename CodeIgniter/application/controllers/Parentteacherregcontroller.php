<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parentteacherregcontroller extends CI_Controller 
{


	public function index()
	{

	//}
	//public function insert()
	//{
		//$this->load->view('login');
		$this->load->library("form_validation");
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('place','Place','required');
		$this->form_validation->set_rules('mobile','Mobile no','required|numeric');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('Date of birth','dob','regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]');
	    $this->form_validation->set_rules('country','Country','required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('user','User','required');
		$this->form_validation->set_rules('userid','User Id','required');
		$this->form_validation->set_rules('password','Password','required|numeric|greater_than[0.99]|regex_match[/^[0-9,]+$/]');
		if(empty($_FILES['photo']['name']))
		{
			$this->form_validation->set_rules('photo','Photo,required');
		}

		$ide=$this->uri->segment('3');
		$query=$this->db->get_where("parent",array("id"=>$ide));
		$data['records']=$query->result();

		
		if($this->form_validation->run()==FALSE)
		{
			if(count($data)>0)
			{
				$this->load->view('Parentteacherreg',$data);
			}
			else
			{
				
				$this->load->view('Parentteacherreg');
			}
		}
		else
		{

	        $this->load->model('Parentteacherregmodel');
			$data=array('name'=>$this->input->post('name'),'address'=>$this->input->post('address'),
				'place'=>$this->input->post('place'),'mobile'=>$this->input->post('mobile'),
				'gender'=>$this->input->post('gender'),'dob'=>$this->input->post('dob'),
				'email'=>$this->input->post('email'),'country'=>$this->input->post('country'),
				 'user'=>$this->input->post('user'),'userid'=>$this->input->post('userid'),
				 'password'=>$this->input->post('password'),'photo'=>$_FILES['photo']['name']);
			
			$hdnid=$this->input->post('hdbox');
        	if($hdnid!='')
        	{
        		$this->Parentteacherregmodel->update($data,$hdnid);
        		$this->do_up();
        		$this->listnew();
        	}
        	else
        	{
			$this->Parentteacherregmodel->insert($data);
			$this->do_up();
			$this->listnew();
			}

	}
}

	public function do_up()
	 {
		$config['upload_path']='./uploads';
		$config['allowed_types']='gif|jpg|png|jpeg';
	 	$config['max_size']=800000;
		$config['max_width']=1024;
		$config['max_height']=768;
		$this->load->library('upload',$config);
	$this->upload->do_upload('photo');
	 }

	 public function listnew()
	 {
	 	$this->load->helper('url');
	 	$query=$this->db->get('parent');
	 	$data['records']=$query->result();
		$this->load->view('Parentteacherreglisting',$data);	
     }
     public function delete()
	 {
	 	$this->load->model("Parentteacherregmodel");
	 	$ide=$this->uri->segment('3');
	 	$this->Parentteacherregmodel->delete($ide);
	 	$this->listnew(); 
	 }
	 public function login()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','required|numeric|greater_than[0.99]|regex_match[/^[0-9,]+$/]');
		$this->load->view('login');
	}
	public function login_validate()
	{
		$emai=$this->input->post('email');
		$pass=$this->input->post('password');
		$this->db->select('*');
		$this->db->from('parent');
		$this->db->where('email',$emai);
		$this->db->where('password',$pass);
		$query=$this->db->get();
		$result=$query->num_rows();
		if($result>0){
			$res=$query->row();
			$this->session->set_userdata('email',$emai);
		    $this->session->set_userdata('password',$pass);
		    $this->load->view('Parentteacherreg');
		}
		else
		{
			echo "Failed";
		}
	}

}
?>
