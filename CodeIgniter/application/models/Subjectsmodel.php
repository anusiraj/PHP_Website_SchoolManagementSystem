<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjectsmodel extends CI_model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert($data)
	{
		if($this->db->insert("subject",$data))
		{
			return true;
		}
	}
}
?>