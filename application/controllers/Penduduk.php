<?php

class Penduduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
    }

    public function index()
    {
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Daftar Penduduk';
        $data['penduduk'] = $this->Penduduk_model->getAllPenduduk();
        // if ($this->input->post('keyword')) {
        //     $data['penduduk'] = $this->Penduduk_model->cariDataPenduduk();
        // }
        $this->load->view('templates/header', $data);
        $this->load->view('penduduk/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Form Tambah Data Penduduk';

        $this->form_validation->set_rules('id_nik', 'ID_NIK', 'required|numeric|trim', [
            'required' => 'Nomor NIK harus di isi!'
        ]);
        $this->form_validation->set_rules('id_kk', 'ID_KK', 'required|numeric|trim', [
            'required' => 'Nomor KK harus di isi!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama lengkap harus di isi!'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_Lahir', 'required', [
            'required' => 'Tempat lahir harus di isi!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_Lahir', 'required', [
            'required' => 'Tanggal lahir harus di isi!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat harus di isi!'
        ]);
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', [
            'required' => 'Pekerjaan harus di isi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('penduduk/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penduduk_model->tambahDataPenduduk();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
            Berhasil ditambahkan! </div>'
            );
            redirect('penduduk');
        }
    }

    public function hapus($id)
    {
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->Penduduk_model->hapusDataPenduduk($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
        Berhasil dihapus! </div>'
        );
        redirect('penduduk');
    }

    public function detail($id)
    {
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Detail Data Penduduk';
        $data['penduduk'] = $this->Penduduk_model->getPendudukById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('penduduk/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Form Ubah Data Penduduk';
        $data['penduduk'] = $this->Penduduk_model->getPendudukById($id);
        $data['jk'] = ['Laki-Laki', 'Perempuan'];
        $data['kewarganegaraan'] = ['WNI', 'WNA'];

        $this->form_validation->set_rules('id_nik', 'ID_NIK', 'required|numeric|trim');
        $this->form_validation->set_rules('id_kk', 'ID_KK', 'required|numeric|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('penduduk/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penduduk_model->ubahDataPenduduk();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
            Berhasil diubah! </div>'
            );
            redirect('penduduk');
        }
    }


    public function print()
    {
        $data['title'] = 'Laporan Data Penduduk Desa Bojongkeding';
        $data['penduduk'] = $this->Penduduk_model->getAllPenduduk();
        $data['total_pndk'] = $this->Penduduk_model->getJmlPenduduk();
        $data['tanggal'] = date('d-m-Y');
        $this->load->view('print_penduduk', $data);
    }

    public function export()
    {
        $data = $this->Penduduk_model->getAllPenduduk();
        $total_pndk = $this->Penduduk_model->getJmlPenduduk();
        $tanggal = date('d-m-Y');

        $pdf = new \TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('', 'B', 12);
        $pdf->Cell(0, 0, "Daftar Penduduk Desa Bojongkeding", 0, 1, 'C');
        $pdf->SetAutoPageBreak(true, 0);

        // Add Header
        $pdf->Ln(10);
        $pdf->SetFont('', 'B', 10);
        $pdf->Cell(10, 8, "Penduduk Tercatat / " . $tanggal, 0, 1, 'L');
        $pdf->Cell(10, 8, "Jumlah Total Data:  " . $total_pndk, 0, 1, 'L');
        $pdf->Cell(10, 8, "No", 1, 0, 'C');
        $pdf->Cell(50, 8, "Nomor NIK", 1, 0, 'C');
        $pdf->Cell(50, 8, "Nama", 1, 0, 'C');
        $pdf->Cell(50, 8, "Alamat", 1, 0, 'C');
        $pdf->Cell(30, 8, "Jenis Kelamin", 1, 0, 'C');
        $pdf->SetFont('', '', 10);
        foreach ($data as $k => $penduduk) {
            $this->addRow($pdf, $k + 1, $penduduk);
        }
        $tanggal = date('d-m-Y');
        $pdf->Output('Laporan penduduk - ' . $tanggal . '.pdf', 'D');
        $pdf->Output('Total - ' . $total_pndk . '.pdf', 'D');
    }
    private function addRow($pdf, $no, $penduduk)
    {
        $pdf->Cell(10, 8, '', 0, 1, 'R');
        $pdf->Cell(10, 8, $no, 1, 0, 'C');
        $pdf->Cell(50, 8, $penduduk['id_nik'], 1, 0, 'C');
        $pdf->Cell(50, 8, $penduduk['nama'], 1, 0, 'L');
        $pdf->Cell(50, 8, $penduduk['alamat'], 1, 0, 'L');
        $pdf->Cell(30, 8, $penduduk['jk'], 1, 0, 'C');
    }
}
