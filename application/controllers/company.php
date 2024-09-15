<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Company_model');
        $this->load->library('form_validation');
    }

    // Display registration form
    public function register() {
        $this->load->library('session');
        $this->load->view('company_register');

    }

    // Handle form submission and register company
    public function register_company() {
        // Set validation rules
        $this->form_validation->set_rules('company_name', 'Company Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('franchise_count', 'Franchise Count', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            // Reload the form with validation errors
            $this->load->view('company_register');
        } else {
            // Prepare data for insertion
            $data = array(
                'company_name' => $this->input->post('company_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'country' => $this->input->post('country'),
                'franchise_count' => $this->input->post('franchise_count')
            );

            // Insert company data
            if ($this->Company_model->register_company($data)) {
                $this->session->set_flashdata('success', 'Company registered successfully!');
                redirect('company/register');
            } else {
                $this->session->set_flashdata('error', 'Failed to register company, please try again.');
                $this->load->view('company_register');
            }
        }
    }
}
