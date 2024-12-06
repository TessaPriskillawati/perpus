<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table = 'peminjaman';
    protected $primarykey = 'kode_pinjam';
    protected $allowedFields = ['kode_pinjam', 'kode_buku', 'id_anggota', 'nama_anggota', 'tanggal_pinjam', 'tanggal_kembali', 'judul', 'jumlah', 'status'];
    public function find($kode_pinjam = null)
    {
        return $this->where(['kode_pinjam' => $kode_pinjam])->first();
    }
    public function cari($keyword)
    {
        return $this->table('peminjaman')->like('kode_pinjam', $keyword)->orLike('kode_buku', $keyword);
    }
}
