<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the model if necessary
        $this->load->model('Sales_model');
    }

    public function monthly_sales() {
        // Fetch 30-day sales data from the model
        $data['sales_data'] = $this->Sales_model->get_30_day_sales();
        
        // Calculate total sales and units
        $data['total_sales'] = array_sum(array_column($data['sales_data'], 'total_sales'));
        $data['total_units'] = array_sum(array_column($data['sales_data'], 'units_sold'));

        // Load the view with sales data
        $this->load->view('monthly_sales_view', $data);
    }
}
