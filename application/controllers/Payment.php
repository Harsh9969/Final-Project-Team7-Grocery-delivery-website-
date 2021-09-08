<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function index()
	{
		if(!$this->session->User)
		{
			$this->load->view('login');
		}
		else
		{
			$this->form_validation->set_rules('cardno', 'Card Number', 'required|numeric');
        	$this->form_validation->set_rules('exdate', 'Expiry Date', 'required');
        	$this->form_validation->set_rules('cvv', 'CVV', 'required|numeric');
			if ($this->form_validation->run() == FALSE)
			{
				//error
				$this->load->view('payment');
			}
			else
			{
				$cardno=$this->input->post('cardno');
				$exdate=$this->input->post('exdate');
				$cvv=$this->input->post('cvv');
				//die($exdate);
				$this->db->from('card');
				$this->db->select('*');
				$this->db->where('cardno', $cardno);
				$this->db->where('exdate', $exdate);
				$this->db->where('cvv', $cvv);
				$query = $this->db->get();
				$result=$query->result();
				if($result)
				{
					
					$this->db->select('*');
					$this->db->from('cart');
					$this->db->where('userid', $this->session->User);
					$query = $this->db->get();
					$products=$query->result();
					$iid_array=array();
					$qty_array=array();
					$total=0;
					foreach($products as $item)
					{
						array_push($iid_array, $item->itemid);
						array_push($qty_array, $item->qty);

						$this->db->select('*');
						$this->db->from('product');
						$this->db->where('id', $item->itemid);
						$query = $this->db->get();
						$data=$query->result();
						$total=$total+($data[0]->price*$item->qty);

					}
					$allitemid= implode("-", $iid_array);
					$allitemqty= implode("-", $qty_array);
					
					$data = array(
						'itemid' => $allitemid,
						'userid' => $this->session->User,
						'qty' => $allitemqty,
						'total' => $total,
						'orderdate' => date("Y-m-d"),
						'status' => 'Placed Order',
						
					);
					
					$this->db->insert('orders', $data);
					$oid=$this->db->insert_id();
					$this->db->where('userid', $this->session->User);
					$this->db->delete('cart');
					$this->db->select('*');
					$this->db->from('orders');
					$this->db->where('id',$oid);
					$query = $this->db->get();
					$data['osucess']=$query->result();
					$this->load->view('ordersuccess',$data);
				}
				else{
					$this->session->set_flashdata('Message', 'Card Details Not Valid');
					$this->load->view('payment');
				}
				
			}
		}
		
	}
}
