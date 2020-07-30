<?php

use GuzzleHttp\Client;

class Mahasiswa_model extends CI_model

{


    private $_client;

    public function __construct()
    {

        $this->_client = new Client([
            'base_uri' => 'http://localhost/Restfull-Api-Server/api/'
        ]);
    }

    function get_data_nominal()
    {
        $query = $this->db->query("SELECT jenis_pembayaran,SUM(nominal_pembayaran) AS nominal_pembayaran FROM pembayaran GROUP BY jenis_pembayaran");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function getJmlMahasiswa()
    {

        $response = $this->_client->request('GET', 'mahasiswa');

        $result = json_decode($response->getBody()->getContents(), true);

        return count($result['data']);
    }

    public function getAllMahasiswa()
    {

        $response = $this->_client->request('GET', 'mahasiswa');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
        // return $this->db->get('mahasiswa')->result_array();
    }


    public function getMahasiswaById($id)
    {
        // return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
        $response = $this->_client->request('GET', 'mahasiswa', [
            'query' => [

                'id' => $id
            ]

        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        // $this->db->insert('mahasiswa', $data);
        $response = $this->_client->request('POST', 'mahasiswa', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataMahasiswa($id)
    {
        // $this->db->where('id', $id);
        // $this->db->delete('mahasiswa', ['id' => $id]);
        $response = $this->_client->request('DELETE', 'mahasiswa', [
            'form_params' => [

                'id' => $id
            ]

        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }



    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true),
            "id" => $this->input->post('id', true)
        ];

        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('mahasiswa', $data);
        $response = $this->_client->request('PUT', 'mahasiswa', [
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
