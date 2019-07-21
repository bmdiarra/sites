<?php

class M_Model extends CI_Model {

    public function _construct(){
        parent::_construct();
        $this->load->database();
    }

	function createData(){
		$data = array(
			'composant' => $this->input->post('composant'),
			'prix' => $this->input->post('prix'),
			'description' => $this->input->post('description'),
			'image' => $this->input->post(userfile)
		);
		$this->db->insert('article',$data);
	}

	function getAllData(){
		$query = $this->db->query('SELECT * from article ORDER BY id DESC');
		return $query->result();
	}

}