<?php
class Matakuliah extends CI_Controller
{
 public function index()
 {
 $this->load->view('view_validation');
 }
 public function cetak(){
    $this->form_validation->set_rules('kode', 'Kode Matakuliah',
    'required|min_legth[3]', [
     'required' => 'Kode Matakuliah Harus diisi',
     'min_leght' => 'Kode terlalu pendek'
     ]);
     $this->form_validation->set_rules('nama', 'Nama Matakuliah',
    'required|min_legth[3]', [
     'required' => 'Nama Matakuliah Harus diisi',
     'min_leght' => 'Nama terlalu pendek'
     ]);
     if ($this->form_validation->run() != true) {
     $this->load->view('view-form-matakuliah');
     } else {
     $data = [
     'kode' => $this->input->post('kode'),
     'nama' => $this->input->post('nama'),
     'sks' => $this->input->post('sks')
     ];
     $this->load->view('view-data-matakuliah', $data);
        }
     }
 }