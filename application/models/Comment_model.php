<?php

class Comment_model extends CI_Model {
    public function get_comment($id) {
        return $this->db->get_where('comment',array("article_id" => $id));
    }

    public function insert() {
        $avatar_url = scandir('resource/img/avatar_url');
        $avatar = array();
        foreach ($avatar_url as $k => $v) {
            $l = explode('.',$v);
            if (in_array($l[count($l) - 1],array('png','jpg'))) {
                array_push($avatar,$v);
            };
        };
        echo '/resource/img/avatar_url/' . $avatar[array_rand($avatar)];
        $id = $this->input->get('id');
        $data = array(
            "floor" => self::get_comment($id)->num_rows() + 1,
            "email" => $this->input->post('email'),
            "name" => $this->input->post('name'),
            "content" => $this->input->post('content'),
            "create_time" => date("YmdHis"),
            "article_id" => $id,
            "avatar_url" => '/resource/img/avatar_url/' . $avatar[array_rand($avatar)],
        );
        $this->db->insert('comment',$data);
    }
}