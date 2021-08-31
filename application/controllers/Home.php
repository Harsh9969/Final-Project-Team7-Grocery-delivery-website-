<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->db->from('product');
    	$query = $this->db->get();
        $result=$query->result();
		$data['products']=$result;
		$this->load->view('header');
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
}
