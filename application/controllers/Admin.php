<?php

use phpDocumentor\Reflection\Types\Float_;
use phpDocumentor\Reflection\Types\This;

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{




    public function __construct()
    {

        // date_default_timezone_set("Asia/Jakarta");
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('Penduduk_model');
        is_logged_in();
    }


    public function index()
    {
        $data['total_mhs'] = $this->Mahasiswa_model->getJmlMahasiswa();
        $data['total_pndk'] = $this->Penduduk_model->getJmlPenduduk();
        $data['title'] = 'Home Admin Dashboard';
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();




        // $data = $this->grafik_model->getAllPenduduk()->result();
        // $data['data'] = json_encode($data);

        // $data['total_penduduk'] = $this->db->query('select * from tbl_penduduk')->num_rows();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function blog()
    {
        $data['title'] = 'Home Informasi Desa Bojongkeding';
        // $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


        $this->load->view('user/header', $data);
        $this->load->view('blog/index');
        $this->load->view('user/footer');
    }


    public function kelola_blog()
    {
        $data['title'] = 'Halaman Kelola blog';
        // $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('blog/kelola_blog');
        $this->load->view('templates/footer');
    }
}
