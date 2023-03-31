<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    public $timestamps = false;
    protected $table = 'pengaduans';
    protected $primaryKey = 'id_pengaduan';
    protected $fillable = ['id_tanggapan','tgl_pengaduan','nik', 'isi_laporan', 'foto'];

    public function tanggapan()
    {
        return $this->belongsTo('App\Tanggapan','id_tanggapan','id_tanggapan');
    }
}

