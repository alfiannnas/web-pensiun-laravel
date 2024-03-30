<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPensiun extends Model
{
    protected $table = 'tb_datapensiun';
    protected $fillable = ['nama', 'tanggal_lahir', 'jabatan', 'pangkat', 'golongan'];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            // Lakukan perhitungan tanggal pensiun di sini berdasarkan tanggal lahir
            // Misalnya, tambahkan 60 tahun ke tanggal lahir
            $model->tanggal_pensiun = date('Y-m-d', strtotime($model->tanggal_lahir . ' +60 years'));
        });
    }
}
