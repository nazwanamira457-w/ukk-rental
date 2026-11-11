<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('Mobil_model');
}

public function index() {
    $mobil = $this->Mobil_model->get_all();

    $data['mobil']    = $mobil;
    $data['total']    = count($mobil);
    $data['tersedia'] = count(array_filter($mobil, function ($m) {
        return strtolower($m['status']) == 'tersedia';
    }));
    $data['disewa']   = $data['total'] - $data['tersedia'];
    $data['pesan']    = $this->input->get('pesan');

    $this->load->view('dashboard', $data);
}

public function detail($id = 0) {
    $mobil = $this->Mobil_model->get_by_id($id);
    if (!$mobil) {
        show_404();
    }
    $this->load->view('detail', ['mobil' => $mobil]);
}

public function hapus($id = 0) {
    if ($this->input->method() !== 'post') {
        show_404();
    }
    $this->Mobil_model->delete($id);
    redirect('dashboard?pesan=dihapus');
}

}