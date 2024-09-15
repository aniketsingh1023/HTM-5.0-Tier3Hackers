<?php
class Company_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Insert company details into the database
    public function register_company($data) {
        return $this->db->insert('companies', $data);
    }
}
