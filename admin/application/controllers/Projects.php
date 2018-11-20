<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends Domo_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('project_model');
        $this->load->model('product_model');
        $this->load->model('category_model');
    }

    public function index()
    {
        $data = array();

        $formdata = $this->input->post();
        $data['project_category'] = $this->category_model->get_categories(true, '', '', '', 2);

        $data['products'] = $this->product_model->get_products();

        if (isset($_GET['project_id'])) {
            $data['project'] = $this->project_model->get_projects($_GET['project_id'], true);
        }

        if (!empty($formdata)) {

            $this->form_validation->set_rules('project_name', '*Campo obrigatório', 'required', array(
                'required' => '%s '
            ));

            $this->form_validation->set_rules('project_category', '*Campo obrigatório', 'required', array(
                'required' => '%s '
            ));

            $this->form_validation->set_rules('project_subcategory', '*Campo obrigatório', 'required', array('required' => '%s '));

            $this->form_validation->set_rules('project_description', '*Campo obrigatório', 'required', array('required' => '%s '));

            // $this->form_validation->set_rules('title','*Title','required', array('required' => '%s missing'));
            // $this->form_validation->set_rules('subtitle','*Sub Title','required', array('required' => '%s missing'));

            // $this->form_validation->set_rules('related_products[]','*Related Products','required', array('required' => '%s missing'));

            // $this->form_validation->set_rules('description','*Description','required', array('required' => '%s missing'));

            if ($_FILES['project_image']['error'] == 4 && $formdata['old_project_image'] == "") {

                $this->form_validation->set_rules('project_image', '*Campo obrigatório', 'required', array('required' => '%s '));
            }

            // if($_FILES['other_image']['error'] == 4 && $formdata['old_other_image'] == ""){

            // 	$this->form_validation->set_rules('other_image','*Other Image','required', array('required' => '%s missing'));

            // }

            $result = $this->form_validation->run();

            if ($result) {
                $proj_images = array();
                $pro_images = $this->projects_images();
                

                if ($pro_images) {
                    foreach ($pro_images as $images) {    
                      array_push($proj_images, $images['file_name']);
                  }

                  $project_image = json_encode($proj_images);
 
                    $formdata['project_image'] = $project_image;
                } else if ($formdata['old_project_image'] != "") {


                    
                    $formdata['project_image'] = $formdata['old_project_image'];
                } else {

                    $formdata['project_image'] = "";
                }

                $other_image = upload_files($_FILES['other_image'], 'other_image', PROJECT_IMAGE_UPLOAD_PATH);

                if ($other_image) {

                    $formdata['other_image'] = $other_image;
                } else if ($formdata['old_other_image'] != "") {

                    $formdata['other_image'] = $formdata['old_other_image'];
                } else {

                    $formdata['other_image'] = "";
                }

                if (isset($formdata['related_products'])) {

                    $formdata['related_products'] = json_encode($formdata['related_products']);
                } else {

                    $formdata['related_products'] = "";
                }

                if ($formdata['project_id'] != "") {

                    $res = $this->project_model->update_project($formdata);

                    if ($res) {

                        $this->session->set_flashdata("success", "Project updated successfully");

                        redirect(base_url() . "projects/view_projects");
                    } else {

                        $this->session->set_flashdata("error", "Error while updating project");

                        redirect(base_url() . "projects");
                    }
                } else {

                    $res = $this->project_model->add_project($formdata);

                    if ($res) {

                        $this->session->set_flashdata("success", "Project addedd successfully");

                        redirect(base_url() . "projects/view_projects");
                    } else {

                        $this->session->set_flashdata("error", "Error while adding project");

                        redirect(base_url() . "projects");
                    }
                }
            }
        }

        $this->load->view("common/header");
        $this->load->view("common/sidebar");
        $this->load->view("projects/add_project", $data);
        $this->load->view("common/footer");
    }

    public function view_projects()
    {

        $data['projects'] = $this->project_model->get_projects();

        $this->load->view("common/header");
        $this->load->view("common/sidebar");
        $this->load->view("projects/view_project", $data);
        $this->load->view("common/footer");
    }

    public function delete_project($project_id)
    {

        $this->db->where('project_id', $project_id);
        $res = $this->db->delete('projects');

        if ($res) {

            redirect(base_url() . "projects/view_projects");
        }
    }

private function set_upload_options()
{   
    //upload an image options
    $config = array();
    $config['upload_path'] = PROJECT_IMAGE_UPLOAD_PATH;
    $config['allowed_types'] = '*';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;

    return $config;
}

public function projects_images()
{       
    $this->load->library('upload');
    $dataInfo = array();
    $files = $_FILES;
    $cpt = count($_FILES['project_image']['name']);
    if($cpt == 1)
    {
        return false;
    }
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['project_image']['name']= $files['project_image']['name'][$i];
        $_FILES['project_image']['type']= $files['project_image']['type'][$i];
        $_FILES['project_image']['tmp_name']= $files['project_image']['tmp_name'][$i];
        $_FILES['project_image']['error']= $files['project_image']['error'][$i];
        $_FILES['project_image']['size']= $files['project_image']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());
        $this->upload->do_upload('project_image');
        $dataInfo[] = $this->upload->data();
    }
    return $dataInfo;
   
}



}
