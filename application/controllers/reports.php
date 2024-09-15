<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('data_model');  // Load the model that fetches sales data
    }

    // Function to load the Sales Report page
    public function sales() {
        // Fetch sales data from the model
        $data['sales_data'] = $this->data_model->get_sales_data();
        
        // Load the view with sales data
        $this->load->view('sales_report', $data);
    }
}
