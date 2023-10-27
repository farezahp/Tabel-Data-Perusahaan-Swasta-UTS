<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'no_pendaftaran';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'no_pendaftaran',
        'nama',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'asal_sekolah',
        'agama_id',
        'nilai_ind',
        'nilai_ipa',
        'nilai_mtk',
    ];

}