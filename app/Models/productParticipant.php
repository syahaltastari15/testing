<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productParticipant extends Model
{
    use HasFactory;
    protected $table = "product_participant";
    protected $fillable = [
    'sumber_informasi',
    'merekomendasikan',
    'request_pelatihan',
    'layanan_panitia_sikap',
    'layanan_panitia_sikap_komentar',
    'layanan_panitia_kinerja_kualitas',
    'layanan_panitia_kinerja_kualitas_komentar',
    'materi',
    'materi_komentar',
    'kesan',
    'sertifikat_number',
    'sertifikat_point',
    'tanggal',
];

}
