<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function __construct()
    {
        // date_default_timezone_set("Asia/Jakarta");
        parent::__construct();
        is_logged_in();
        // $this->load->model('Penduduk_model');

        // if (!$this->session->userdata('username')) {
        // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        // Admin belum terdaftar!
        // </div>');
        // redirect("auth");
        // $this->load->library('form_validation');
    }



    public function index()
    {
        $data['title'] = 'Home Informasi Desa Bojongkeding';
        // $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


        $this->load->view('user/header', $data);
        $this->load->view('user/home');
        $this->load->view('user/footer');
    }
}
