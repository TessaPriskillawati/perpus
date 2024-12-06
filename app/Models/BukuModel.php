<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $primarykey = 'kode_buku';
    protected $allowedFields = ['kode_buku', 'judul', 'tahun', 'pengarang', 'jumlah'];

    public function cari($keyword)
    {
        return $this->table('buku')->like('kode_buku', $keyword)->orLike('judul', $keyword);
    }
}
