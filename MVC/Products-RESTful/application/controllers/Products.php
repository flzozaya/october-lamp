<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->model('Product');
		$products = $this->Product->get_all_products();

		$this->load->view('index', array('allproducts' => $products));
	}

	public function new_product()
	{
		$this->load->view('new');
	}

	public function show($id)
	{
		$this->load->model('Product');
		$selected_product = $this->Product->get_product_row($id);
	
		$this->load->view('show', array('product_row' => $selected_product));
	}

	public function edit($id)
	{
		$this->load->model('Product');
		$edit_this_pd =	$this->Product->get_product_row($id);


		//$this->load->view('edit');

		$this->load->view('edit', array('edit_pd_row' => $edit_this_pd));
	}

	public function update($id)
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('updated_product_name', 'Product Name', 'required');
			$this->form_validation->set_rules('updated_product_price', 'Product Description', 'required');

			/*if(){

			}*/





			$this->load->model('Product');
			$update_data = $this->input->post();
			$this->Product->update_this_product($update_data, $id);
		}

		redirect('/');
	}

	public function create()
	{
		if($this->input->post())
		{
			$this->load->model('Product');
			$new_pd_data = $this->input->post();
			$this->Product->create_new_product($new_pd_data);
		}

		redirect('/');
	}

	public function delete($id)
	{
		$this->load->model('Product');
		$this->Product->delete_product_row($id);

		redirect('/');
	}
}
?>