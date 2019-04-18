<?php

class Tag_model extends CI_Model {

    public function get_tag() {
        return $this->db->get('tag');
    }

    public function where($where,$limit = FALSE,$offset = FALSE) {
        if ($limit) {
            return $this->db->get_where('tag',$where,$limit,$offset);
        }
        return $this->db->get_where('tag',$where);
    }

    public function delete($id) {
        $this->db->delete('tag',array('id' => $id));
    }

    public function insert() {
        $data = array(
            "show_name" => $this->input->post('show_name'),
            "value_name" => $this->input->post('value_name'),
            "desc" => $this->input->post('desc'),
            "create_time" => date("YmdHis"),
        );
        $this->db->insert('tag',$data);
    }

    public function update($id) {
        $data = array(
            "show_name" => $this->input->post('show_name'),
            "value_name" => $this->input->post('value_name'),
            "desc" => $this->input->post('desc'),
        );
        $this->db->update('tag',$data,array("id" => $id));
    }
}