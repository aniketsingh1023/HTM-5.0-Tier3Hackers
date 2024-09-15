<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SalesReport extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load the SalesReportModel
      //  $this->load->model('SalesReportModel');
    }

    // Method to display the 7-day sales report
    public function index()
    {
        // Fetch the sales data from the model
       // $sales_data = $this->SalesReportModel->get_7_day_sales();

        // Pass the data to the view
        $this->load->view('week_sales');
    }
}
