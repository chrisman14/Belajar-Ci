<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Homes extends CI_Controller
{

    public function index()
    {
        $data = array('nama' => 'Chrisman');
        $this->header();
        $this->load->view('content', $data);
        $this->footer();
    }
    public function profil()
    {
        echo "ini adalah profil";
    }
    public function controllercontact($val = '')
    {
        echo "Halaman Contact " . $val;
    }
    public function nama($val = '', $alamat = '')
    {
        echo "Halo Nama saya " . $val . "Alamat saya " . $alamat;
    }

//-----------vies------------

    public function header()
    {

        $this->load->view('header');

    }
    public function footer()
    {

        $this->load->view('footer');

    }
}
