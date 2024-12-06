<?php

namespace App\Controllers;

class Buku extends BaseController
{
    public function index()
    {
        $bukumodel = new \App\Models\BukuModel();
        $buku = $bukumodel->findAll();
        $data = [
            'title' => 'Buku',
            'Buku' => $buku,
        ];
        return view('pages/databuku', $data);
    }
    public function formbuku()
    {
        session();
        $pager = \Config\Services::pager();
        $bukumodel = new \App\Models\BukuModel();
        $keyword = $this->request->getVar('cari');
        if ($keyword) {
            $buku = $bukumodel->cari($keyword);
        } else {
            $buku = $bukumodel;
        }
        $data = [
            'title' => 'Buku',
            'Buku' => $buku->paginate(2, 'databuku'),
            'pager' => $buku->pager,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/buku', $data);
    }
    public function simpanbuku()
    {
        $bukumodel = new \App\Models\BukuModel();
        if (!$this->validate([
            'kode_buku' => [
                'rules' => 'required|is_unique[buku.kode_buku]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah ada.',
                ]
            ]
        ])) {
            return redirect()->to('/buku/formbuku')->withInput();
        }
        $data = [
            'kode_buku' => $this->request->getVar('kode_buku'),
            'judul' => $this->request->getVar('judul'),
            'tahun' => $this->request->getVar('tahun'),
            'pengarang' => $this->request->getVar('pengarang'),
            'jumlah' => $this->request->getVar('jumlah')
        ];
        $bukumodel->insert($data);
        return redirect()->to('/buku');
    }
}
