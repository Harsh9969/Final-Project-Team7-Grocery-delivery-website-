<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardadmin extends CI_Controller {
	function __construct()
    {
        parent::__construct();
		if(!$this->session->Admin)
		{
			redirect(base_url());
		}
    }
	public function index()
	{
		/*$this->load->view('header');
		$this->load->view('admin/dashboard');
		$this->load->view('footer');*/
		$this->load->view('admin/index');
	}
	public function dashboard()
	{
		$this->db->select('*');
		$this->db->from('product');
		$query = $this->db->get();
		$result=$query->num_rows();
		$data['products']=$result;
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		$result=$query->num_rows();
		$data['users']=$result;	
		$this->db->select('*');
		$this->db->from('orders');
		$query = $this->db->get();
		$result=$query->num_rows();
		$data['orders']=$result;		
		$this->load->view('admin/dashbord',$data);
	}

	public function addproduct()
	{
		$category=$this->input->post('category');
		$name=$this->input->post('name');
		$price=$this->input->post('price');
		$details=$this->input->post('details');
		$image=$this->input->post('photo');

		$config['upload_path'] = './assets/images/products/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2000;
		$config['max_width'] = 1500;
		$config['max_height'] = 1500;
		$config['file_name'] = random_string('alnum', 8);

		$this->load->library('upload', $config);


		if (!$this->upload->do_upload('photo')) {
			$data['e1']= array('error' => $this->upload->display_errors());
			die(print_r($data));
		} else {
			$file = $this->upload->data();
			$data = array(
			'category' => $category,
			'name' => $name,
			'price' => $price,
			'details' => $details,
			'image' => $file['file_name'],
			);
			$this->db->insert('product', $data);
			redirect(base_url()."Dashboardadmin/viewproduct");
		}
	}

	public function viewproduct()
	{
		$this->db->select('*');
		$this->db->from('product');
		$query = $this->db->get();
		$result=$query->result();
		$data['products']=$result;
		$this->load->view('admin/productview',$data);
	}
}
