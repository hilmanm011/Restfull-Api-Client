<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {

        // if ($this->session->userdata('username')) {
        //     redirect('user');
        // }

        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
            'required' => 'Username harus di isi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password harus di isi!'
        ]);


        if ($this->form_validation->run() == false) {

            $data['title'] = 'Halaman Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        //jika user ada
        if ($user) {


            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {


                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        $this->session->set_flashdata(
                            'message',
                            '<div class="alert alert-success" role="alert">
                        Berhasil Login! </div>'
                        );
                        redirect('admin');
                    } else {
                        $this->session->set_flashdata(
                            'message',
                            '<div class="alert alert-success" role="alert">
                        Berhasil Login! </div>'
                        );
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">
                    Password salah!. </div>'
                    );
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">
                Username tidak aktif!. </div>'
                );
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
            Username belum terdaftar!. </div>'
            );
            redirect('auth');
        }
    }

    public function registrasi()
    {
        // if ($this->session->userdata('username')) {
        //     redirect('user');
        // }

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harus di isi!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'Username tersebut sudah terdaftar!',
            'required' => 'Username harus di isi!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'required' => 'Password harus di isi!',
            'min_length' => 'Password minimal 6 karakter!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Halaman Daftar';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/auth_footer');
        } else {

            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'image' => 'default.jpg',
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];


            $this->db->insert('user', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
            Pendaftaran berhasil. Silahkan login! </div>'
            );
            redirect('auth');
        }
    }




    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
        Logout Berhasil! </div>'
        );
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('blocked');
    }
}
