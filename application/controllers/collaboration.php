<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collaboration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Collaboration_model');
        $this->load->helper('url');
        $this->load->library('session');  // For flashdata and session handling
    }

    // Load the collaboration dashboard
    public function index() {
        $data['employees'] = $this->Collaboration_model->get_employees();
        $data['messages'] = $this->Collaboration_model->get_messages();
        
        // Load the view and pass data
        $this->load->view('collaboration_view', $data);
    }

    // Handle sending a message
    public function send_message() {
        // Get the message input and trim any unnecessary spaces
        $message = trim($this->input->post('message', TRUE)); // TRUE applies basic XSS cleaning

        // Check if the message is not empty
        if (!empty($message)) {
            // Save the message to the database
            if ($this->Collaboration_model->save_message($message)) {
                $this->session->set_flashdata('success_message', 'Message sent successfully.');
            } else {
                $this->session->set_flashdata('error_message', 'Failed to send message.');
            }
        } else {
            // If the message is empty, show an error message
            $this->session->set_flashdata('error_message', 'Message cannot be empty.');
        }

        // Redirect back to the collaboration page
        redirect('collaboration');
    }

    // Function to start the video call
    public function start_video_call() {
        redirect('https://signvision.metered.live/hackndore');  // Redirect to video call URL
    }
}
