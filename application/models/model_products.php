<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_products extends CI_Model {
	public function all() {
		//ambil database
		$this->db->select('categories.id as id, categories.name as category_name, GROUP_CONCAT(products.name SEPARATOR ",") as products');
		$this->db->from('categories');
		$this->db->join('products', 'products.category_id = categories.id', 'left outer');
		$this->db->group_by("categories.name");
		$hasil = $this->db->get();
    	if($hasil->num_rows()>0) {
			return $hasil->result();
		} else {
			return array();
		}
	}


	public function create_category($data_category)
	{
		$this->db->insert('categories', $data_category);
	}
}