<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function index()
	{
		$category = $this->input->get('category');
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('category', $category);
		$query = $this->db->get();
		$result=$query->result();
		$data['products']=$result;
		// die(print_r($result));
		$this->load->view('header');
		$this->load->view('product',$data);
		$this->load->view('footer');
	}

	public function productdetail()
	{
		$productid = $this->input->get('productid');
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('id', $productid);
		$query = $this->db->get();
		$result=$query->result();
		if(!$result)
		{
			redirect(base_url());
		}
		$data['item']=$result[0];
		$this->load->view('header');
		$this->load->view('productdetail',$data);
		$this->load->view('footer');
	}
	public function search()
	{
		$name = $this->input->get('name');
		$this->db->from('product');
		$this->db->like('name', $name);
		$this->db->or_like('category', $name);
		$this->db->or_like('details', $name);
    	$query = $this->db->get();
        $result=$query->result();
		$data['products']=$result;
		$this->load->view('header');
		$this->load->view('product',$data);
		$this->load->view('footer');
	}
}
