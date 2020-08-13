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
        $this->load->library('form_validation');
        $this->load->model('Keluarga_model');
        $this->load->model('Penduduk_model');
        is_logged_in();
    }


    public function index()
    {
        $data['total_klrg'] = $this->Keluarga_model->getJmlKeluarga();
        $data['total_pndk'] = $this->Penduduk_model->getJmlPenduduk();
        $data['title'] = 'Home Admin Dashboard';
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();




        // $data = $this->grafik_model->getAllPenduduk()->result();
        // $data['data'] = json_encode($data);

        // $data['total_penduduk'] = $this->db->query('select * from tbl_penduduk')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
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
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('blog/kelola_blog');
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('my_user/profile', $data);
        $this->load->view('templates/footer');
    }


    public function edit()
    {
        $data['title'] = 'Setting Akun';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('my_user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->where('username', $username);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile Berhasil di update!</div>');
            redirect('admin/profile');
        }
    }
}
