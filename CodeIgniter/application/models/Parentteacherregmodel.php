<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parentteacherregmodel extends CI_model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert($data)
	{
		if($this->db->insert("parent",$data))
		{
			return true;
		}
	}
	function update($data,$id)
	{
		$this->db->set($data);
		$this->db->where("id",$id);
		$this->db->update("parent",$data);
	}
	function delete($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("parent");
	}
}
?>
