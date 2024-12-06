<?php

namespace App\Models;

use CodeIgniter\Model;

class PengembalianModel extends Model
{
    protected $table = 'pengembalian';
    protected $primarykey = 'kode_pinjam';
    protected $allowedFields = ['kode_pinjam', 'kode_buku', 'id_anggota', 'tgl_kembali'];
}
