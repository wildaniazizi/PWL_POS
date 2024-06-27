<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BarangModel extends Model
{
    protected $table = 'n_kategori';
    protected $primaryKey = 'kategori_id';

    protected $fillable = ['kategori_kode', 'kategori_nama'];
}