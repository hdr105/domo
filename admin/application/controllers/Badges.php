<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Badges extends Domo_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('badge_model');
    }

    public function index()
    {
        $data = array();

        $formdata = $this->input->post();

        if (isset($_GET['badge_id'])) {
            $data['badge'] = $this->badge_model->get_badges($_GET['badge_id'], true);
        }

        if (!empty($formdata)) {

            $this->form_validation->set_rules('badge_name', '*Campo obrigatório', 'required', array(
                'required' => '%s '
            ));


            if ($_FILES['badge_image']['error'] == 4 && $formdata['old_badge_image'] == "") {

                $this->form_validation->set_rules('badge_image', '*Campo obrigatório', 'required', array('required' => '%s '));
            }


            $result = $this->form_validation->run();

            if ($result) {

                $badge_image = upload_files($_FILES['badge_image'], 'badge_image', BADGE_IMAGE_UPLOAD_PATH);

                if ($badge_image) {

                    $badge_image = str_replace(' ', '_', $badge_image);

                    $formdata['badge_image'] = $badge_image;
                } else if ($formdata['old_badge_image'] != "") {

                    $formdata['badge_image'] = $formdata['old_badge_image'];
                } else {

                    $formdata['badge_image'] = "";
                }

        

                if ($formdata['badge_id'] != "") {

                    $res = $this->badge_model->update_badge($formdata);

                    if ($res) {

                        $this->session->set_flashdata("success", "Badge updated successfully");

                        redirect(base_url() . "badges/view_badges");
                    } else {

                        $this->session->set_flashdata("error", "Error while updating badge");

                        redirect(base_url() . "badges");
                    }
                } else {

                    $res = $this->badge_model->add_badge($formdata);

                    if ($res) {

                        $this->session->set_flashdata("success", "Badge addedd successfully");

                        redirect(base_url() . "badges/view_badges");
                    } else {

                        $this->session->set_flashdata("error", "Error while adding badge");

                        redirect(base_url() . "badges");
                    }
                }
            }
        }

        $this->load->view("common/header");
        $this->load->view("common/sidebar");
        $this->load->view("badges/add_badge", $data);
        $this->load->view("common/footer");
    }

    public function view_badges()
    {

        $data['badges'] = $this->badge_model->get_badges();

        $this->load->view("common/header");
        $this->load->view("common/sidebar");
        $this->load->view("badges/view_badge", $data);
        $this->load->view("common/footer");
    }

    public function delete_badge($badge_id)
    {

        $this->db->where('badge_id', $badge_id);
        $res = $this->db->delete('badges');

        if ($res) {

            redirect(base_url() . "badges/view_badges");
        }
    }

}
