<?php

class Article_model extends CI_Model {

    public function get_article() {
        return $this->db->get('article');
    }

    public function where($where,$limit = FALSE,$offset = FALSE) {
        if ($limit) {
            return $this->db->get_where('article',$where,$limit,$offset);
        }
        return $this->db->get_where('article',$where);
    }

    public function delete($id) {
        $this->db->delete('article',array('id' => $id));
    }

    public function insert() {
        $data = array(
            "title" => $this->input->post('title'),
            "subtitle" => $this->input->post('subtitle'),
            "content" => $this->input->post('content'),
            "status" => $this->input->post('status') == "false" ? "0" : "1",
            "create_time" => date("YmdHis"),
        );
        $result = $this->db->insert('article',$data);
        $article_id = $this->db->insert_id();
        foreach ($this->input->post('tag[]') as $k => $v) {
            $this->db->insert('articletag',array("article_id" => $article_id,"tag_id" => $v));
        };
    }

    public function update($id) {
        $data = array(
            "title" => $this->input->post('title'),
            "subtitle" => $this->input->post('subtitle'),
            "content" => $this->input->post('content'),
            "status" => $this->input->post('status') == "false" ? "0" : "1",
        );
        $this->db->update('article',$data,array("id" => $id));
        $this->db->query('delete from articletag where article_id=' . $id);
        foreach ($this->input->post('tag[]') as $k => $v) {
            $this->db->insert('articletag',array("article_id" => $id,"tag_id" => $v));
        };
    }

    public function query($sql) {
        return $this->db->query($sql)->result();
    }

    public function addviews($id) {
        $result = self::where(array("id" => $id))->result();
        $views = intval($result[0]->views) + 1;
        $this->db->update('article',array("views" => $views),array("id" => $id));
    }
}