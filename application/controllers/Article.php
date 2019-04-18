<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
    public function __construct(){
        $this->need_login = TRUE;
        parent::__construct();
    }

    public function list() {
        $this->load->view('templates/head.php');
        $this->load->view('article/list.php');
        $this->load->view('templates/foot.php');
    }

    public function delete() {
        $id = $this->input->get('id');
        $this->article_model->delete($id);
        redirect('article/list');
    }

    public function create() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('subtitle','Subtitle','required');
        $this->form_validation->set_rules('content','Content','required');
        $this->form_validation->set_rules('status','Status','required');
        $this->form_validation->set_rules('tag[]','Tag[]','required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/head.php');
            $this->load->view('article/create.php');
            $this->load->view('templates/foot.php');
        }else {
            $this->article_model->insert();
            redirect('article/list');
        }
    }

    public function get() {
        $id = $this->input->get('id');
        $a_result = $this->article_model->where(array("id" => $id))->result();
        $t_result = $this->article_model->query('select tag.id,tag.show_name,tag.value_name from tag left join articletag on tag.id=articletag.tag_id where article_id=' . $id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array("a_result" => $a_result,"t_result" => $t_result)));
    }

    public function loading() {
        $limit = $this->input->get('limit');
        $offset = $this->input->get('offset');
        $result = $this->article_model->where(array("status" => 1),$limit,$offset)->result();
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }

    public function edit() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('subtitle','Subtitle','required');
        $this->form_validation->set_rules('content','Content','required');
        $this->form_validation->set_rules('status','Status','required');
        $this->form_validation->set_rules('tag[]','Tag[]','required');
        if ($this->form_validation->run() == FALSE) {
            $id = $this->input->get('id');
            $this->load->view('templates/head.php');
            $this->load->view('article/edit.php',array("id" => $id));
            $this->load->view('templates/foot.php');
        }else {
            $id = $this->input->get('id');
            $this->article_model->update($id);
            redirect('article/list');
        }
    }
}