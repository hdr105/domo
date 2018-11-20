<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slideshow extends Domo_Controller {


	public function __construct() {
		parent::__construct();

		$this->load->model('slideshow_model');

	}


	public function index()
	{
		$data = array();

		$formdata = $this->input->post();
		

		if (isset($_GET['slide_id'])) {
			$data['slide'] = $this->slideshow_model->get_slideshow($_GET['slide_id'],true);
		}

		if (!empty($formdata)) {
			
			$this->form_validation->set_rules('text_1','*Campo obrigatório','required',array(
				'required' => '%s'
			));

			$this->form_validation->set_rules('text_2','*Campo obrigatório','required',array(
				'required' => '%s'
			));

			$this->form_validation->set_rules('text_3','*Campo obrigatório','required', array('required' => '%s'));

			$this->form_validation->set_rules('text_link','*Text Link','required', array('required' => '%s'));


			if($_FILES['slide_image']['error'] == 4 && $formdata['old_slide_image'] == ""){

				$this->form_validation->set_rules('slide_image','*Campo obrigatório','required', array('required' => '%s'));

			}

			$result = $this->form_validation->run();


			if ($result) {



				$slide_image = upload_files($_FILES['slide_image'],'slide_image',SLIDESHOW_IMAGE_UPLOAD_PATH);

				if($slide_image){

					$formdata['slide_image'] = $slide_image;

				}else if ($formdata['old_slide_image'] != ""){

					$formdata['slide_image'] = $formdata['old_slide_image'];

				}else{

					$formdata['slide_image'] = "";
				}


				if ($formdata['slide_id'] != "") {
					
					$res = $this->slideshow_model->update_slideshow($formdata);


					if($res){

						$this->session->set_flashdata("success","Slideshow updated successfully");

						redirect(base_url()."slideshow/view_slideshow");

					}else{

						$this->session->set_flashdata("error","Error while updating slideshow");

						redirect(base_url()."slideshow");
					}


				}else{

					$res = $this->slideshow_model->add_slide($formdata);

					if($res){

						$this->session->set_flashdata("success","Slide addedd successfully");

						redirect(base_url()."slideshow/view_slideshow");

					}else{

						$this->session->set_flashdata("error","Error while adding slide");

						redirect(base_url()."slideshow");
					}
				}


			}
		}

		$this->load->view("common/header");
		$this->load->view("common/sidebar");
		$this->load->view("slideshow/add_images",$data);
		$this->load->view("common/footer");
	}

	public function view_slideshow()
	{

		$data['slideshow'] = $this->slideshow_model->get_slideshow();


		$this->load->view("common/header");
		$this->load->view("common/sidebar");
		$this->load->view("slideshow/view_images",$data);
		$this->load->view("common/footer");
	}


	public function delete_slide($slide_id){

		$this->db->where('slide_id',$slide_id);
		$res = $this->db->delete('slideshow');

		if ($res) {
			
			redirect(base_url()."slideshow/view_slideshow");
		}
	}

}