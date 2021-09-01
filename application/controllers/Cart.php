<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->where('userid', $this->session->User);
		$query = $this->db->get();
		$result=$query->result();
		$data['products']=$result;
		$this->load->view('header');
		$this->load->view('cart',$data);
		$this->load->view('footer');
	}
	public function addtocart()
	{
		//$userid=$this->input->get('userid');
		if(!$this->session->User)
		{
			die("Please Login First");
		}
		$userid=$this->session->User;
		$productid=$this->input->get('productid');
		$data = array(
			'userid' => $userid,
			'itemid' => $productid,
			'qty' => 1,
		);
		return $this->db->insert('cart', $data);
	}
	public function removefromcart()
	{
		$userid=$this->input->get('userid');
		$productid=$this->input->get('productid');
	}
}
