<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

    public function index() {
        $this->load->view('templates/view_head.php');
        $this->load->view('view/index.php');
        $this->load->view('templates/view_foot.php');
    }

    public function detail() {
        $id = $this->input->get('id');
        $resutl = $this->article_model->where(array("id" => $id))->result();
        $data = array();
        foreach ($resutl as $k => $v) {
            foreach ($v as $kk => $vv) {
                $data[$kk] = $vv;
            };
        };
        if (empty($data)) {
            show_404();
        };
        $this->load->view('templates/view_head.php');
        $this->load->view('view/detail.php',$data);
        $this->load->view('templates/view_foot.php');
    }

    public function about() {
        $this->load->view('templates/view_head.php');
        $this->load->view('view/about.php');
        $this->load->view('templates/view_foot.php');
    }

    public function tag() {
        $this->load->view('templates/view_head.php');
        $this->load->view('view/tag.php');
        $this->load->view('templates/view_foot.php');
    }
}