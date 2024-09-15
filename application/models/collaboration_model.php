<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collaboration_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Function to get employees (this can be modified to use a database if needed)
    public function get_employees() {
        return [
            'NEW Team' => ['Employee 1', 'Employee 2', 'Employee 3'],
            'R&D Team' => ['Employee 1', 'Employee 2', 'Employee 3'],
            'New product launch' => ['Employee 1', 'Employee 2', 'Employee 3']
        ];
    }

    // Function to store a message in the database
    public function save_message($message) {
        $data = [
            'message' => $this->db->escape_str($message), // Sanitizing input
            'timestamp' => date('Y-m-d H:i:s')
        ];

        // Insert message into the database
        if ($this->db->insert('messages', $data)) {
            return true;
        } else {
            log_message('error', 'Failed to insert message into database');
            return false;
        }
    }

    // Function to get all messages, ordered by timestamp
    public function get_messages() {
        $this->db->order_by('timestamp', 'ASC');
        $query = $this->db->get('messages');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return []; // Return an empty array if no messages are found
        }
    }
}
