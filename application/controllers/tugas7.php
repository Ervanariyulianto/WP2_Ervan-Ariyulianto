<?php
class tugas7 extends CI_Controller
{
    public function index()
    {
        $this->load->view('viewtugas7');
    }
    public function cetak()
    {
            $data = [
                'Nama' => $this->input->post('Nama'),
                'NIS' => $this->input->post('NIS'),
                'Kelas' => $this->input->post('Kelas'),
                'TanggalLahir' => $this->input->post('tgl'),
                'TempatLahir' => $this->input->post('TempatLahir'),
                'Alamat' => $this->input->post('Alamat'),
                'JenisKelamin' => $this->input->post('kelamin'),
                'Agama' => $this->input->post('Agama'),
            ];
            $this->load->view('viewdatatugas7', $data);
         
         
    }
}
