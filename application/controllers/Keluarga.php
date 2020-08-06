<?php

class Keluarga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Keluarga_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
    }

    public function index()
    {
        $data['title'] = 'Daftar Keluarga';
        $data['keluarga'] = $this->Keluarga_model->getAllKeluarga();
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        if ($this->input->post('keyword')) {
            $data['keluarga'] = $this->Keluarga_model->cariDataKeluarga();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('keluarga/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Form Tambah Data Keluarga';

        $this->form_validation->set_rules('id_kk', 'Id_KK', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('keluarga/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Keluarga_model->tambahDataKeluarga();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('keluarga');
        }
    }

    public function hapus($id)
    {
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->Keluarga_model->hapusDataKeluarga($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('keluarga');
    }

    public function detail($id)
    {
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Detail Data Keluarga';
        $data['keluarga'] = $this->Keluarga_model->getKeluargaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('keluarga/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Form Ubah Data Keluarga';
        $data['keluarga'] = $this->Keluarga_model->getKeluargaById($id);
        // $data['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan', 'Teknik Lingkungan'];

        $this->form_validation->set_rules('id_kk', 'Id_KK', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('keluarga/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Keluarga_model->ubahDataKeluarga();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('keluarga');
        }
    }

    public function pdf()
    {
        $data['keluarga'] = $this->Keluarga_model->getAllKeluarga();
        $tanggal = date('d-m-Y');

        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setPrintFooter(false);
        $pdf->setPrintHeader(false);
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        $pdf->AddPage('');
        $pdf->SetFont('', 'B');
        $pdf->Write(0, 'Kependudukan Desa Bojongkeding
        
        ', '', 0, 'C', true, 0, false, false, 0);
        $pdf->SetFont('');
        $pdf->Cell(115, 0, "Laporan Tercatat Pada Tanggal : " . $tanggal, 0, 1, 'L');
        $pdf->SetAutoPageBreak(true, 0);

        $tabel = '
        <table border="1">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nomor KK</th>
                    <th>Jumlah Anggota</th>
                    <th>Ayah</th>
                    <th>Ibu</th>
                </tr>
            </thead>
        </table>';
        $pdf->writeHTML($tabel);
        $tanggal = date('d-m-Y');
        $pdf->Output('file-pdf-' . $tanggal . '.pdf', 'I');
    }
}
