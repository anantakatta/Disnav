<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

        class Sarpras extends CI_Controller {
          public function __construct()
          {
            parent::__construct();

          }
          function Index()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/petakenavigasian');
            $this->load->view('templates/footer');
          }
          function Telkompel()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/telkompel');
            $this->load->view('templates/footer');
          }
          function Bengkel()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/bengkel');
            $this->load->view('templates/footer');
          }
          function Kapal()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/kapal');
            $this->load->view('templates/footer');
          }
          function Pengamatan()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/pengamatan');
            $this->load->view('templates/footer');
          }


        }


?>
