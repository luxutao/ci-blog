<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
    public function __construct(){
        $this->need_login = TRUE;
        parent::__construct();
    }

    public function index() {
        $this->load->view('templates/head.php');
        $this->load->view('page/index.php');
        $this->load->view('templates/foot.php');
    }
}