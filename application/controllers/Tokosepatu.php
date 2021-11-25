<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Tokosepatu extends CI_Controller{

    public function index()
    {
        $this->load->view('Tokosepatu/v_input');
    }
}