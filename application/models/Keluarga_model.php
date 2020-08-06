<?php

use GuzzleHttp\Client;

class Keluarga_model extends CI_model

{


    private $_client;

    public function __construct()
    {

        $this->_client = new Client([
            'base_uri' => 'http://localhost/Restfull-Api-Server/api/'
        ]);
    }

    // function get_data_nominal()
    // {
    //     $query = $this->db->query("SELECT jenis_pembayaran,SUM(nominal_pembayaran) AS nominal_pembayaran FROM pembayaran GROUP BY jenis_pembayaran");

    //     if ($query->num_rows() > 0) {
    //         foreach ($query->result() as $data) {
    //             $hasil[] = $data;
    //         }
    //         return $hasil;
    //     }
    // }

    public function getJmlKeluarga()
    {

        $response = $this->_client->request('GET', 'keluarga');

        $result = json_decode($response->getBody()->getContents(), true);

        return count($result['data']);
    }

    public function getAllKeluarga()
    {

        $response = $this->_client->request('GET', 'keluarga');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
        // return $this->db->get('mahasiswa')->result_array();
    }


    public function getKeluargaById($id)
    {

        $response = $this->_client->request('GET', 'keluarga', [
            'query' => [

                'id' => $id
            ]

        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataKeluarga()
    {
        $data = [
            "id_kk" => $this->input->post('id_kk', true),
            "jml_anggota" => $this->input->post('jml_anggota', true),
            "ibu" => $this->input->post('ibu', true),
            "ayah" => $this->input->post('ayah', true),
            "date_created" => time()
        ];


        $response = $this->_client->request('POST', 'keluarga', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataKeluarga($id)
    {
        // $this->db->where('id', $id);
        // $this->db->delete('keluarga', ['id' => $id]);
        $response = $this->_client->request('DELETE', 'keluarga', [
            'form_params' => [

                'id' => $id
            ]

        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }



    public function ubahDataKeluarga()
    {
        $data = [
            "id_kk" => $this->input->post('id_kk', true),
            "jml_anggota" => $this->input->post('jml_anggota', true),
            "ibu" => $this->input->post('ibu', true),
            "ayah" => $this->input->post('ayah', true),
            "date_created" => time(),
            "id" => $this->input->post('id', true)
        ];

        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('keluarga', $data);
        $response = $this->_client->request('PUT', 'keluarga', [
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
