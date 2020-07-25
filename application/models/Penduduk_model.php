<?php

use GuzzleHttp\Client;

class Penduduk_model extends CI_model

{


    private $_client;

    public function __construct()
    {

        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-server/api/'
        ]);
    }

    // public function getJmlPenduduk()
    // {
    //     $response = $this->_client->request('GET', 'penduduk');

    //     $result = json_decode($response->getBody()->getContents(), true);
    //     $result =  $result->count_all('data')->result_array();
    //     return $result['data'];
    //     return $this->db->count_all('data');
    // }

    public function getAllPenduduk()
    {

        $response = $this->_client->request('GET', 'penduduk');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
        // return $this->db->get('mahasiswa')->result_array();
    }


    public function getPendudukById($id)
    {
        // return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
        $response = $this->_client->request('GET', 'penduduk', [
            'query' => [

                'id' => $id
            ]

        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataPenduduk()
    {
        $data = [
            "id_nik" => $this->input->post('id_nik', true),
            "id_kk" => $this->input->post('id_kk', true),
            "nama" => $this->input->post('nama', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "jk" => $this->input->post('jk', true),
            "status" => $this->input->post('status', true),
            "alamat" => $this->input->post('alamat', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "kewarganegaraan" => $this->input->post('kewarganegaraan', true),
            "agama" => $this->input->post('agama', true)
        ];

        // $this->db->insert('mahasiswa', $data);
        $response = $this->_client->request('POST', 'penduduk', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataPenduduk($id)
    {
        // $this->db->where('id', $id);
        // $this->db->delete('mahasiswa', ['id' => $id]);
        $response = $this->_client->request('DELETE', 'penduduk', [
            'form_params' => [

                'id' => $id
            ]

        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }



    public function ubahDataPenduduk()
    {
        $data = [
            "id_nik" => $this->input->post('id_nik', true),
            "id_kk" => $this->input->post('id_kk', true),
            "nama" => $this->input->post('nama', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "jk" => $this->input->post('jk', true),
            "status" => $this->input->post('status', true),
            "alamat" => $this->input->post('alamat', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "kewarganegaraan" => $this->input->post('kewarganegaraan', true),
            "agama" => $this->input->post('agama', true),
            "id" => $this->input->post('id', true)
        ];

        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('mahasiswa', $data);
        $response = $this->_client->request('PUT', 'penduduk', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    // public function cariDataMahasiswa()
    // {
    //     $keyword = $this->input->post('keyword', true);
    //     $this->db->like('nama', $keyword);
    //     $this->db->or_like('jurusan', $keyword);
    //     $this->db->or_like('nrp', $keyword);
    //     $this->db->or_like('email', $keyword);
    //     return $this->db->get('mahasiswa')->result_array();
    // }
}
