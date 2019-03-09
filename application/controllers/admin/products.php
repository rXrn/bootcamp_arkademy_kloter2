<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->model('model_products');
        }

	public function index()
	{
		$data['hasil_data'] = $this->model_products->all();
		$this->load->view('backend/view_all_products', $data);
	}

	public function create_category()
	{
		$this->form_validation->set_rules('category_name', 'Category Name', 'required');
		

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('backend/form_tambah_category');
                }
                else
                {
                	$data_category = array (
                		'name'		=> set_value('category_name'), 
                	);
                        $this->model_products->create_category($data_category);
                        redirect('admin/products');
                }
	}
}
