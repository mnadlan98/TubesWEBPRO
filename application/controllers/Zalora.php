<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zalora extends CI_Controller {

    public function index()
    {
        $this->load->view('Index_men');
    }

}