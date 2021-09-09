<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

	public function index()
	{
		$this->db->select('*');
		$this->db->from('wishlist');
		$this->db->where('userid', $this->session->User);
		$query = $this->db->get();
		$result=$query->result();
		$data['products']=$result;
		$this->load->view('header');
		$this->load->view('wishlist',$data);
		$this->load->view('footer');
	}
	public function addtowishlist()
	{
		if(!$this->session->User)
		{
			die("Please Login First");
		}
		$productid=$this->input->get('productid');
		$this->db->from('wishlist');
		$this->db->select('*');
		$this->db->where('userid', $this->session->User);
		$this->db->where('itemid', $productid);
		$query = $this->db->get();
		$result=$query->result();
		if($result)
		{
				$this->db->where('userid', $this->session->User);
				$this->db->where('itemid', $productid);
				$this->db->delete('wishlist');
				echo "Remove";
		}
		else{
			$data = array(
				'userid' => $this->session->User,
				'itemid' => $productid,
			);
			$this->db->insert('wishlist', $data);
			echo "Add";
		}
		
	}
	public function removefromwishlist()
	{
		if(!$this->session->User)
		{
			die("Please Login First");
		}
		$userid=$this->session->User;
		$productid=$this->input->get('productid');

		$this->db->where('userid',$userid );
		$this->db->where('itemid', $productid);
		$this->db->delete('wishlist');
		echo "Remove";
	}
}
