<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prediction extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the model if needed
        $this->load->model('Prediction_model');
    }

    // Method to load the prediction view page
    public function index() {
        // Optionally get data from the model
        $data['predictions'] = $this->Prediction_model->get_predictions();

        // Load the view with data
        $this->load->view('prediction_view', $data);
    }
}
