<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('v_header');
        $this->load->view('v_index');
        $this->load->view('v_footer');
    }
    public function visi()
    {
        $this->load->view('v_header');
        $this->load->view('v_vismis');
        $this->load->view('v_footer');
    }
    public function keahlian()
    {
        $this->load->view('v_header');
        $this->load->view('v_keahlian');
        $this->load->view('v_footer');
    }
    public function struktur()
    {
        $this->load->view('v_header');
        $this->load->view('v_struktur');
        $this->load->view('v_footer');
    }
    public function about()
    {
        $this->load->view('v_header');
        $this->load->view('v_about');
        $this->load->view('v_footer');
    }

    public function login()
    {
        $this->load->view('v_header');
        $this->load->view('v_login');
        $this->load->view('v_footer');
    }
}
?>