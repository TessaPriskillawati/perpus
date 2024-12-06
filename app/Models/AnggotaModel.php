<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $primarykey = 'id_anggota';
    protected $allowedFields = ['id_anggota', 'nama_anggota', 'jenis_kelamin', 'alamat', 'nomor', 'username', 'password'];

    public function cari($keyword)
    {
        return $this->table('anggota')->like('id_anggota', $keyword)->orLike('nama_anggota', $keyword);
    }
}
