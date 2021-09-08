<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('fname', 'first name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE)
        {
			//error
			$this->load->view('signup');
		}
		else
		{
			//store and redirect 
			$fname=$this->input->post('fname');
			$lname=$this->input->post('lname');
			$email=$this->input->post('email');
			$password=$this->input->post('password');

			$this->db->from('user');
			$this->db->select('*');
            $this->db->where('email', $email);
            $query = $this->db->get();
            $result=$query->result();
            if($result)
			{
				
				$this->session->set_flashdata('Message2', '<script>alert("Email Id already exist");</script>');
				redirect(base_url().'Registration');
			}
			else
			{
				//store and redirect 
			$fname=$this->input->post('fname');
			$lname=$this->input->post('lname');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$address=$this->input->post('add');
			$City=$this->input->post('city');
			$zipcode=$this->input->post('zpcode');
			$state=$this->input->post('state');
			$data = array(
				'fname' => $fname,
				'lname' => $lname,
				'email' => $email,
				'password' => $password,
				'address'=> $address,
				'city'=> $City,
				'zipcode'=> $zipcode,
				'state'=> $state,
				'country'=>'Canada',
				'status'=>'APPROVED',
			);
			
			$this->db->insert('user', $data);
			$this->session->set_flashdata('Message', '<script>alert("Account created successfully");</script>');
			redirect(base_url().'login');

			}

			

			
		}
		
	}
}
