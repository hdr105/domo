<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Domo_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('product_model');
        $this->load->model('category_model');
        $this->load->model('badge_model');
    }

    public function index()
    {
        $data = array();

        $formdata = $this->input->post();
        $data['product_category'] = $this->category_model->get_categories(true, '', '', '', 1);

        $data['badges'] = $this->badge_model->get_badges();

        if (isset($_GET['product_id'])) {
            $data['product'] = $this->product_model->get_products($_GET['product_id'], true);
        }

        if (!empty($formdata)) {

            $this->form_validation->set_rules('product_name', '*Campo obrigatório', 'required', array(
                'required' => '%s '
            ));

            $this->form_validation->set_rules('product_category', '*Campo obrigatório', 'required', array(
                'required' => '%s '
            ));

            $this->form_validation->set_rules('product_subcategory', '*Campo obrigatório', 'required', array('required' => '%s '));

            $this->form_validation->set_rules('product_description', '*Campo obrigatório', 'required', array('required' => '%s '));

            // $this->form_validation->set_rules('title','*Title','required', array('required' => '%s missing'));
            // $this->form_validation->set_rules('subtitle','*Sub Title','required', array('required' => '%s missing'));
            // $this->form_validation->set_rules('description','*Description','required', array('required' => '%s missing'));

            if ($_FILES['product_image']['error'] == 4 && $formdata['old_product_image'] == "") {

                $this->form_validation->set_rules('product_image', '*Campo obrigatório', 'required', array('required' => '%s '));
            }

            // if($_FILES['other_image']['error'] == 4 && $formdata['old_other_image'] == ""){

            // 	$this->form_validation->set_rules('other_image','*Other Image','required', array('required' => '%s missing'));

            // }

            $result = $this->form_validation->run();

            if ($result) {

                $product_image = upload_files($_FILES['product_image'], 'product_image', PRODUCT_IMAGE_UPLOAD_PATH);

                if ($product_image) {

                    $product_image = str_replace(' ', '_', $product_image);

                    $formdata['product_image'] = $product_image;
                } else if ($formdata['old_product_image'] != "") {

                    $formdata['product_image'] = $formdata['old_product_image'];
                } else {

                    $formdata['product_image'] = "";
                }

                $other_image = upload_files($_FILES['other_image'], 'other_image', PRODUCT_IMAGE_UPLOAD_PATH);

                if ($other_image) {

                    $formdata['other_image'] = $other_image;
                } else if ($formdata['old_other_image'] != "") {

                    $formdata['other_image'] = $formdata['old_other_image'];
                } else {

                    $formdata['other_image'] = "";
                }
                if(isset($formdata['product_badges']))
                {
                     $formdata['product_badges'] = json_encode($formdata['product_badges']);
                }
                else
                {
                     $formdata['product_badges'] = "";
                }
               

                if ($formdata['product_id'] != "") {

                    $res = $this->product_model->update_product($formdata);

                    if ($res) {

                        $this->session->set_flashdata("success", "Product updated successfully");

                        redirect(base_url() . "products/view_products");
                    } else {

                        $this->session->set_flashdata("error", "Error while updating product");

                        redirect(base_url() . "products");
                    }
                } else {

                    $res = $this->product_model->add_product($formdata);

                    if ($res) {

                        $this->session->set_flashdata("success", "Product addedd successfully");

                        redirect(base_url() . "products/view_products");
                    } else {

                        $this->session->set_flashdata("error", "Error while adding product");

                        redirect(base_url() . "products");
                    }
                }
            }
        }

        $this->load->view("common/header");
        $this->load->view("common/sidebar");
        $this->load->view("products/add_product", $data);
        $this->load->view("common/footer");
    }

    public function view_products()
    {

        $data['products'] = $this->product_model->get_products();

        $this->load->view("common/header");
        $this->load->view("common/sidebar");
        $this->load->view("products/view_product", $data);
        $this->load->view("common/footer");
    }

    public function delete_product($product_id)
    {

        $this->db->where('product_id', $product_id);
        $res = $this->db->delete('products');

        if ($res) {

            redirect(base_url() . "products/view_products");
        }
    }

}
