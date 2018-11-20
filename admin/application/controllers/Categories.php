<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends Domo_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('category_model');

	}


	public function index()
	{
		$formdata = $this->input->post();

		$data = array();

		$data['parent_category'] = $this->category_model->get_categories(true);

		if (isset($_GET['cat_id'])) {
			$data['category'] = $this->category_model->get_categories('','',$_GET['cat_id'],true);
		}

		if (!empty($formdata)) {
			
			$this->form_validation->set_rules('category_name','*Campo obrigatório','required',array(
				'required' => '%s'
			));

			$this->form_validation->set_rules('category_description','*Campo obrigatório','required',array(
				'required' => '%s'
			));


			$this->form_validation->set_rules('category_scope','*Campo obrigatório','required',array(
				'required' => '%s'
			));

			if (isset($formdata['parent_category']) && $formdata['parent_category'] != 0){
			

			if($_FILES['category_image']['error'] == 4 && $formdata['old_category_image'] == ""){

				$this->form_validation->set_rules('category_image','*Campo obrigatório','required', array('required' => '%s '));

			}

			}
			
			$result = $this->form_validation->run();

			if ($result) {

				$category_image = upload_files($_FILES['category_image'],'category_image',CATEGORY_IMAGE_UPLOAD_PATH);



				if($category_image){

					$formdata['category_image'] = $category_image;

				}else if ($formdata['old_category_image'] != ""){

					$formdata['category_image'] = $formdata['old_category_image'];

				}else{

					$formdata['category_image'] = "";
				}

				if ($formdata['parent_category'] != "" && $formdata['parent_category'] != 0) {
					$parent_cat = $this->category_model->get_categories('','',$formdata['parent_category'],true);

					$formdata['category_scope'] = $parent_cat->category_scope;
				}

				


				if ($formdata['cat_id'] != "") {
					
					$res = $this->category_model->update_category($formdata);


					if($res){

						$this->session->set_flashdata("success","Category updated successfully");

						redirect(base_url()."categories/view_category");

					}else{

						$this->session->set_flashdata("error","Error while updating category");

						redirect(base_url()."categories");
					}


				}else{

					$res = $this->category_model->add_category($formdata);


					if($res){

						$this->session->set_flashdata("success","Category addedd successfully");

						redirect(base_url()."categories/view_category");

					}else{

						$this->session->set_flashdata("error","Error while adding category");

						redirect(base_url()."categories");
					}

				}
				

			}
		}
		$this->load->view("common/header");
		$this->load->view("common/sidebar");
		$this->load->view("category/add_category",$data);
		$this->load->view("common/footer");
	}

	public function view_category()
	{

		$categories = $this->category_model->get_categories();

		foreach ($categories as $key => $value) {
			
			if ($value->parent_category != 0) {
				
				$categories[$key]->parent = $this->category_model->get_categories('','',$value->parent_category,true);

			}
		}
		
		$data['categories'] = $categories;

		$this->load->view("common/header");
		$this->load->view("common/sidebar");
		$this->load->view("category/view_category",$data);
		$this->load->view("common/footer");
	}



	public function get_subcategories(){

		$cat_id = $this->input->post("cat_id");

		$categories = array();

		if ($cat_id != "") {

			$categories = $this->category_model->get_categories('',$cat_id);
		}

		echo json_encode($categories);

	}


	public function delete_cat($cat_id){

		$this->db->where('cat_id',$cat_id);
		$res = $this->db->delete('categories');

		if ($res) {
			
			redirect(base_url()."categories/view_category");
		}
	}


	public function get_categories(){

		$category_scope = $this->input->post("category_scope");

		$categories = array();

		if ($category_scope != "") {

			$categories = $this->category_model->get_categories(true,'','','',$category_scope);
		}

		echo json_encode($categories);
	}
}
