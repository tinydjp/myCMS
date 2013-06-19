<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Stone_Giant
 * Date: 13-6-17
 * Time: 上午11:16
 * To change this template use File | Settings | File Templates.
 */
class News_Model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function getNews()
    {
        $query = $this->db->get('news');
        return $query->result_array();
    }
}