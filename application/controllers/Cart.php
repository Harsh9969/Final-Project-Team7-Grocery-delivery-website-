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


		$this->db->from('cart');
		$this->db->select('*');
		$this->db->where('userid', $userid);
		$this->db->where('itemid', $productid);
		$query = $this->db->get();
		$result=$query->result();
		// die(print_r($result));
		if($result)
		{
			$data1['qty']=($result[0]->qty)+1;
			$this->db->where('itemid', $productid);
			$this->db->update('cart', $data1);
			echo ($result[0]->qty)+1;
		}
		else
		{
			$data = array(
			'userid' => $userid,
			'itemid' => $productid,
			'qty' => 1,
			);
			echo 1;
			$result =$this->db->insert('cart', $data);
		}
		
	}
	public function removefromcart()
	{
		if(!$this->session->User)
		{
			die("Please Login First");
		}
		$userid=$this->session->User;
		$productid=$this->input->get('productid');
		$this->db->from('cart');
		$this->db->select('*');
		$this->db->where('userid', $userid);
		$this->db->where('itemid', $productid);
		$query = $this->db->get();
		$result=$query->result();
		// die(print_r($result));
		if($result)
		{
			if($result[0]->qty==1)
			{
				$this->db->where('userid', $userid);
				$this->db->where('itemid', $productid);
				$this->db->delete('cart');
				echo "delete";
			}
			else{
				$data1['qty']=($result[0]->qty)-1;
				$this->db->where('itemid', $productid);
				$this->db->update('cart', $data1);
				echo ($result[0]->qty)-1;
			}
			
		}
		else
		{
			echo "ITEM NOT FOUND";
		}
	}
	public function checkitem()
	{
		$userid=$this->session->User;
		$productid=$this->input->get('productid');
		$this->db->from('cart');
		$this->db->select('*');
		$this->db->where('userid', $userid);
		$this->db->where('itemid', $productid);
		$query = $this->db->get();
		$result=$query->result();
		// die(print_r($result));
		if($result)
		{
			echo $result[0]->qty;
		}
	}

	public function deletefromcart()
	{
		if(!$this->session->User)
		{
			die("Please Login First");
		}
		$userid=$this->session->User;
		$productid=$this->input->get('productid');
		$this->db->from('cart');
		$this->db->select('*');
		$this->db->where('userid', $userid);
		$this->db->where('itemid', $productid);
		$query = $this->db->get();
		$result=$query->result();
		// die(print_r($result));
		if($result)
		{
			
				$this->db->where('userid', $userid);
				$this->db->where('itemid', $productid);
				$this->db->delete('cart');
				echo "delete";
		}
		else
		{
			echo "ITEM NOT FOUND";
		}
	}
}
