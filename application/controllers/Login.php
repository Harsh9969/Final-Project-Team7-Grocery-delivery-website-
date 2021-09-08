<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
        {
			//error
			$this->load->view('login');
		}
		else
		{
			
			$email=$this->input->post('email');
			$password=$this->input->post('password');
            $this->db->from('user');
			$this->db->select('*');
            $this->db->where('email', $email);
            $this->db->where('password', $password);
            $query = $this->db->get();
            $result=$query->result();
            if($result)
			{
				
				$this->session->set_userdata($result);
				$this->session->set_userdata('User', $result[0]->id);
				
				redirect(base_url());
			}
			else if($email=="admin@admin.com" && $password=="admin")
			{
					$this->session->set_userdata('Admin', 'Admin');
					redirect(base_url().'Dashboardadmin');
			}
			else
			{
				$this->session->set_flashdata('Message', 'Email Id or Password Incorrect');
				$this->load->view('login');
				
			}

			
		}
	}
}
