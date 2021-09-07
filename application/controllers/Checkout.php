<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
	function __construct()
    {
        parent::__construct();
		if(!$this->session->User)
		{
			redirect(base_url()."Login");
		}

    }
	public function index()
	{
		$this->db->select('*');
		$this->db->where('id', $this->session->User);
		$this->db->from('user');
		$query = $this->db->get();
		$result=$query->result();
		$data['user']=$result[0];
		//die(print_r($data['user']->fname));
		$this->load->view('header');
		$this->load->view('checkout',$data);
		$this->load->view('footer');
	}

	public function updateaddress()
	{
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$zipcode = $this->input->post('zipcode');
		$state = $this->input->post('state');
		$country = $this->input->post('country');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$table="user";
        $data = array(
            'fname' => $fname,
            'lname' => $lname,
            'address' => $address,
            'city' => $city,
            'zipcode' => $zipcode,
            'state' => $state,
            'country' => $country,
            'email' => $email,
            'mobile' => $mobile,
			);
        $where = array(
            'id' => $this->session->User,
        );
        $this->db->update($table, $data,$where);
		//die(print_r($data['user']->fname));
		redirect(base_url()."Payment");
	}
}
