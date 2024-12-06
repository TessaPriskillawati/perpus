<?php

namespace App\Controllers;

use App\Models\PeminjamanModel;

class Peminjaman extends BaseController
{
    protected $peminjamanmodel;
    public function __construct()
    {
        $this->peminjamanmodel = new PeminjamanModel();
    }
    public function index()
    {
        $peminjamanmodel = new \App\Models\PeminjamanModel();
        $peminjaman = $peminjamanmodel->findAll();
        $data = [
            'title' => 'Peminjaman',
            'Peminjaman' => $peminjaman
        ];
        return view('pages/datapinjam', $data);
    }
    public function formpeminjaman()
    {
        session();
        $pager = \Config\Services::pager();
        $peminjamanmodel = new \App\Models\PeminjamanModel();
        $keyword = $this->request->getVar('cari');
        if ($keyword) {
            $peminjaman = $peminjamanmodel->cari($keyword);
        } else {
            $peminjaman = $peminjamanmodel;
        }
        $data = [
            'title' => 'Peminjaman',
            'Peminjaman' => $peminjaman->paginate(2, 'datapinjam'),
            'pager' => $peminjaman->pager,
            'validation' => \Config\Services::validation()

        ];
        return view('pages/peminjaman', $data);
    }
    public function simpanpinjam()
    {
        $peminjamanmodel = new \App\Models\PeminjamanModel();
        if (!$this->validate([
            'kode_pinjam' => [
                'rules' => 'required|is_unique[peminjaman.kode_pinjam]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah ada.',
                ]
            ]
        ])) {
            return redirect()->to('/peminjaman/formpeminjaman')->withInput();
        }
        $data = [
            'kode_pinjam' => $this->request->getVar('kode_pinjam'),
            'kode_buku' => $this->request->getVar('kode_buku'),
            'id_anggota' => $this->request->getVar('id_anggota'),
            'nama_anggota' => $this->request->getVar('nama_anggota'),
            'tanggal_pinjam' => $this->request->getVar('tanggal_pinjam'),
            'tanggal_kembali' => $this->request->getVar('tanggal_kembali'),
            'judul' => $this->request->getVar('judul'),
            'jumlah' => $this->request->getVar('jumlah'),
            'status' => $this->request->getVar('status')
        ];
        $peminjamanmodel->insert($data);
        return redirect()->to('/peminjaman');
    }
    public function edit($kode_pinjam)
    {
        //$peminjamanmodel = new \App\Models\PeminjamanModel();
        $detail = $this->peminjamanmodel->find($kode_pinjam);
        $data = [
            'title' => 'Edit Peminjaman',
            'detail' => $detail
        ];
        return view('pages/editpeminjaman', $data);
    }
    public function update()
    {
        $peminjamanmodel = new \App\Models\PeminjamanModel();
        $data = [
            'kode_pinjam' => $this->request->getVar('kode_pinjam'),
            'kode_buku' => $this->request->getVar('kode_buku'),
            'id_anggota' => $this->request->getVar('id_anggota'),
            'nama_anggota' => $this->request->getVar('nama_anggota'),
            'tanggal_pinjam' => $this->request->getVar('tanggal_pinjam'),
            'tanggal_kembali' => $this->request->getVar('tanggal_kembali'),
            'judul' => $this->request->getVar('judul'),
            'jumlah' => $this->request->getVar('jumlah'),
            'status' => $this->request->getVar('status')
        ];
        $this->peminjamanmodel->replace($data);
        return redirect()->to('/peminjaman');
    }
}
