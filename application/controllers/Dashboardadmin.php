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
	
	public function updateproduct()
	{
		$productid=$this->input->post('productid');
		$category=$this->input->post('category');
		$name=$this->input->post('name');
		$price=$this->input->post('price');
		$details=$this->input->post('details');
		//$image=$this->input->post('photo');
		
			$config['upload_path'] = './assets/images/products/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 2000;
			$config['max_width'] = 1500;
			$config['max_height'] = 1500;
			$config['file_name'] = random_string('alnum', 8);

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('photo')) {
				$data['e1']= array('error' => $this->upload->display_errors());
				if($data['e1']['error'])
				{
					$data = array(
						'category' => $category,
						'name' => $name,
						'price' => $price,
						'details' => $details,
						);
			
		
				$this->db->where('id', $productid);
				$this->db->update('product', $data);
				redirect(base_url()."Dashboardadmin/viewproduct");
				}
			} else {
				$file = $this->upload->data();
				$data = array(
				'category' => $category,
				'name' => $name,
				'price' => $price,
				'details' => $details,
				'image' => $file['file_name'],
				);
				
			}
			
		$this->db->where('id', $productid);
		$this->db->update('product', $data);
		redirect(base_url()."Dashboardadmin/viewproduct");
		
    public function viewuser()
	{
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		$result=$query->result();
		$data['users']=$result;
		$this->load->view('admin/userview',$data);
	}
	public function vieworder()
	{
		$this->db->select('*');
		$this->db->from('orders');
		$query = $this->db->get();
		$result=$query->result();
		$data['orders']=$result;
		$this->load->view('admin/orderview',$data);
	}
	public function removeproduct()
	{
		$productid=$this->input->get('productid');
		$this->db->where('id', $productid);
		$this->db->delete('product');
		redirect(base_url()."Dashboardadmin/viewproduct");
	}
	public function removeuser()
	{
		$productid=$this->input->get('userid');
		$this->db->where('id', $productid);
		$this->db->delete('user');
		redirect(base_url()."Dashboardadmin/viewproduct");
	}

	public function viewupdateproduct()
	{
		$productid=$this->input->get('productid');
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('id', $productid);
		$query = $this->db->get();
		$result=$query->result();
		$data['products']=$result[0];
		
		$this->load->view('admin/updateproduct',$data);
	}

		
	}
	public function updateuser()
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
			$userid=$this->input->post('userid');
			$lname=$this->input->post('lname');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$address=$this->input->post('add');
			$City=$this->input->post('city');
			$zipcode=$this->input->post('zpcode');
			$state=$this->input->post('state');
			$mobile=$this->input->post('mobile');
			$data = array(
				'fname' => $fname,
				'lname' => $lname,
				'email' => $email,
				'password' => $password,
				'address'=> $address,
				'city'=> $City,
				'zipcode'=> $zipcode,
				'state'=> $state,
				'mobile'=> $mobile,
				'country'=>'Canada',
			);
			$this->db->where('id', $userid);
			$this->db->update('user', $data);
			$this->session->set_flashdata('Message', '<script>alert("Account created successfully");</script>');
			redirect(base_url().'Dashboardadmin/viewuser');

		}
	}
	public function updateuserstatus()
    {
        $vid=$this->input->get('userid');
        $status=$this->input->get('status');
            
        $table="user";
        if("APPROVED"==$status)
        {
            $data = array(
            'status' => "UNAPPROVED",
            );
        }else
        {
             $data = array(
            'status' => "APPROVED",
            );
        }
        
        $where = array(
            'id' => $vid
        );
        $this->db->update($table, $data,$where);
		redirect(base_url().'Dashboardadmin/viewuser');
    }
    public function orderdetilas()
	{
		$oid = $this->input->get('orderid');
		$this->db->select('*');
		$this->db->where('id', $oid);
		$this->db->from('orders');
		$query = $this->db->get();
		$result=$query->result();
		$data['order']=$result[0];
		$this->load->view('admin/orderdetails',$data);
	}


	public function removeorder()
	{
		$productid=$this->input->get('productid');
		$this->db->where('id', $productid);
		$this->db->delete('orders');
		redirect(base_url()."Dashboardadmin/vieworder");
	}


	public function updateorderstatus()
	{	

		$oid = $this->input->get('orderid');
		$status = $this->input->get('status');
		$data['status']=$status;
		$this->db->where('id', $oid);
		echo $this->db->update('orders', $data);
	}
}
