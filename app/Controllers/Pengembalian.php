<?php

namespace App\Controllers;

class Pengembalian extends BaseController
{
    public function index()
    {
        $pengembalianmodel = new \App\Models\PengembalianModel();
        $pengembalian = $pengembalianmodel->findAll();
        $data = [
            'title' => 'Pengembalian',
            'Pengembalian' => $pengembalian
        ];
        return view('pages/datakembali', $data);
    }
    public function formpengembalian()
    {
        $pengembalianmodel = new \App\Models\PengembalianModel();
        $pengembalian = $pengembalianmodel->findAll();
        $data = [
            'title' => 'Pengembalian',
            'Pengembalian' => $pengembalian
        ];
        return view('pages/pengembalian', $data);
    }
    public function simpankembali()
    {
        $pengembalianmodel = new \App\Models\PengembalianModel();
        $data = [
            'kode_pinjam' => $this->request->getVar('kode_pinjam'),
            'kode_buku' => $this->request->getVar('kode_buku'),
            'id_anggota' => $this->request->getVar('id_anggota'),
            'tgl_kembali' => $this->request->getVar('tgl_kembali'),
        ];
        $pengembalianmodel->insert($data);
        return redirect()->to('/pengembalian');
    }
}
