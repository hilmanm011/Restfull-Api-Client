<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        $this->load->model('Penduduk_model');
        is_logged_in();
    }



    public function index()
    {
        $data['title'] = 'Home Informasi Desa Bojongkeding';
        $data['penduduk'] = $this->Penduduk_model->getAllPenduduk();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


        $this->load->view('user/header', $data);
        $this->load->view('user/home', $data);
        $this->load->view('user/footer');
    }
}
