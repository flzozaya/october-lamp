<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {


	public function get_all_products()
	{
		return $this->db->query("SELECT * FROM products_inventory")->result_array();
	}

	public function get_product_row($pd_id)
	{
		return $this->db->query("SELECT * FROM products_inventory WHERE id = ?" , $pd_id)->row_array();
	}

	public function delete_product_row($id)
	{
		return $this->db->query("DELETE FROM products_inventory WHERE id = ?", $id);
	}

	public function create_new_product($posted_data)
	{

		$query = "INSERT INTO products_inventory 
		(name, 
		description, 
		price, 
		created_at, 
		updated_at) 
			VALUES (?,?,?, NOW(), NOW())";


		$values = array(
				 $posted_data['new_product_name'],
				 $posted_data['new_product_description'],
				 $posted_data['new_product_price']
				);

         return $this->db->query($query, $values);
	}

	public function update_this_product($updated_product, $id)
	{
		//UPDATE table_name SET column_name1 = 'some_value', column_name2='another_value' WHERE condition(s)

		$update_query = "UPDATE products_inventory SET 
		name = ?,
		description = ?,
		price = ?
		WHERE id = ?";

		$updated_product_values = array(
			$updated_product['updated_product_name'],
			$updated_product['updated_product_description'],
			$updated_product['updated_product_price'],
			$id
			);

		return $this->db->query($update_query, $updated_product_values);

	}
}
?>