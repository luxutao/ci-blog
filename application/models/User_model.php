<?php

class User_model extends CI_Model {
    
    public function login($username, $password) {
        $result = $this->db->get_where("user",array("username" => $username))->result();
        if ($result[0]->password == md5($password)) {
            return $result[0]->id;
        }else {
            return FALSE;
        }
    }

    public function get_row() {
        return $this->db->get('user')->num_rows();
    }

    public function register() {
        $enc_password = md5($this->input->post("password"));
        $data = array(
            "username" => $this->input->post("username"),
            "password" => $enc_password,
            "first_name" => $this->input->post("first_name"),
            "last_name" => $this->input->post("last_name"),
            "create_time" => date("YmdHis"),
        );
        $this->db->insert("user",$data);
    }

    public function check_username_exists($username){
        $result = $this->db->get_where("user", array("username" => $username))->result();
        if(empty($result)){
            return FALSE;
        } else {
            return TRUE;
        }
    }
}