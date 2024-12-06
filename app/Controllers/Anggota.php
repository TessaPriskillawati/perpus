<?php

namespace App\Controllers;

class Anggota extends BaseController
{
    public function index()
    {
        session();
        $pager = \Config\Services::pager();
        $anggotamodel = new \App\Models\AnggotaModel();
        $keyword = $this->request->getVar('cari');
        if ($keyword) {
            $anggota = $anggotamodel->cari($keyword);
        } else {
            $anggota = $anggotamodel;
        }
        $data = [
            'title' => 'Anggota',
            'Anggota' => $anggota->paginate(10, 'dataanggota'),
            'pager' => $anggota->pager,
        ];
        return view('pages/dataanggota', $data);
    }
    public function formanggota()
    {
        $anggotamodel = new \App\Models\AnggotaModel();
        $anggota = $anggotamodel->findAll();
        $data = [
            'title' => 'Anggota',
            'validation' => \Config\Services::validation()
        ];
        return view('pages/anggota', $data);
    }
    public function simpananggota()
    {
        $anggotamodel = new \App\Models\AnggotaModel();
        $anggota = $anggotamodel->findAll();
        if (!$this->validate([
            'id_anggota' => [
                'rules' => 'required|is_unique[anggota.id_anggota]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah ada.',
                ]
            ],
            'nomor' => [
                'rules' => 'required|is_unique[anggota.nomor]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah ada.',
                ]
            ]
        ])) {
            return redirect()->to('/anggota/formanggota')->withInput();
        }
        $data = [
            'id_anggota' => $this->request->getVar('id_anggota'),
            'nama_anggota' => $this->request->getVar('nama_anggota'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'alamat' => $this->request->getVar('alamat'),
            'nomor' => $this->request->getVar('nomor')
        ];
        $anggotamodel->insert($data);
        return redirect()->to('/anggota');
    }
}
