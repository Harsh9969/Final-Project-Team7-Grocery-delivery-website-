<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
		$this->load->view('user/dashboard',$data);
		$this->load->view('footer');
	}

	

	public function address()
	{
		$this->db->select('*');
		$this->db->where('id', $this->session->User);
		$this->db->from('user');
		$query = $this->db->get();
		$result=$query->result();
		$data['user']=$result[0];
		//die(print_r($data['user']->fname));
		$this->load->view('header');
		$this->load->view('user/myaccount',$data);
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
		redirect(base_url()."Dashboard/address");
	}
	public function myorder()
	{
		$this->db->select('*');
		$this->db->where('userid', $this->session->User);
		$this->db->from('orders');
		$query = $this->db->get();
		$result=$query->result();
		$data['orders']=$result;
		$this->load->view('header');
		$this->load->view('user/myorder',$data);
		$this->load->view('footer');
	}
	public function myorderdetails()
	{
		$oid = $this->input->get('orderid');
		$this->db->select('*');
		$this->db->where('id', $oid);
		$this->db->from('orders');
		$query = $this->db->get();
		$result=$query->result();
		$data['order']=$result[0];
		$this->load->view('header');
		$this->load->view('user/orderdetails',$data);
		$this->load->view('footer');
	}
	public function myorderdetailspdf()
	{
		$oid = $this->input->get('orderid');
		$this->db->select('*');
		$this->db->where('id', $oid);
		$this->db->from('orders');
		$query = $this->db->get();
		$result=$query->result();
		$data['order']=$result[0];
		$this->load->view('header');
		$this->load->view('user/orderdetailspdf',$data);
		$this->load->view('footer');
	}
}
