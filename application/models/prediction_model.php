<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prediction_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load the database
        $this->load->database();
    }

    // Fetch predictions (example function)
    public function get_predictions() {
        // Query database for prediction data (sample)
        $query = $this->db->get('predictions'); // 'predictions' is a sample table name
        return $query->result_array();
    }
}
