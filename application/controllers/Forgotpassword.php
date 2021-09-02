<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpassword extends CI_Controller {

	public function index()
	{
			$this->load->view('forgotepassword');
		
	}

	public function checkemail()
	{
		$email=$this->input->get('email');
		$this->db->select('*');
        $this->db->where('email', $email);
        $this->db->from('user');
    	$query = $this->db->get();
        $result=$query->result();
        if($result)
		{
			die("Hello");
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function updatepassword()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$data1['password']=$password;
        $this->db->where('email', $email);
        $result=$this->db->update('user', $data1);
		if($result)
		{
			$this->session->set_flashdata('Message', 'Password Chnege Sucessfully');
			redirect(base_url()+'Login');
		}
	}
}
