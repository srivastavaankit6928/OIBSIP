<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function loadMain()
    {
        $this->load->view('main_page');
    }
}