<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

class formtest extends CI_Controller
{
		public function __construct()
        {
            parent::__construct();
        }

        function index()
        {
        	$this->load->view('Templates/header');
        	$this->load->view('pages/sarpras/formtest');
        	$this->load->view('Templates/footer');
        }
}