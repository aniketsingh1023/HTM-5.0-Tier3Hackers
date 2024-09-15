<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SentimentAnalysisController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load any required models here if needed in the future
        // $this->load->model('SentimentModel');
    }

    public function index() {
        // Load the Sentiment Analysis view
        $this->load->view('sentiment_analysis');
    }
}
