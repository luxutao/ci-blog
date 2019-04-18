<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends CI_Controller {
    public function __construct(){
        $this->need_login = TRUE;
        parent::__construct();
    }

    public function list() {
        $this->load->view('templates/head.php');
        $this->load->view('tag/list.php');
        $this->load->view('templates/foot.php');
    }

    public function delete() {
        $id = $this->input->get('id');
        $this->tag_model->delete($id);
        redirect('tag/list');
    }

    public function create() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('show_name','Showname','required');
        $this->form_validation->set_rules('value_name','Valuename','required');
        $this->form_validation->set_rules('desc','Description','required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/head.php');
            $this->load->view('tag/create.php');
            $this->load->view('templates/foot.php');
        }else {
            $this->tag_model->insert();
            redirect('tag/list');
        }
    }

    public function get() {
        $id = $this->input->get('id');
        $result = $this->tag_model->where(array("id" => $id))->result();
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }

    public function edit() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('show_name','Showname','required');
        $this->form_validation->set_rules('value_name','Valuename','required');
        $this->form_validation->set_rules('desc','Description','required');
        if ($this->form_validation->run() == FALSE) {
            $id = $this->input->get('id');
            $this->load->view('templates/head.php');
            $this->load->view('tag/edit.php',array("id" => $id));
            $this->load->view('templates/foot.php');
        }else {
            $id = $this->input->get('id');
            $this->tag_model->update($id);
            redirect('tag/list');
        }
    }
}