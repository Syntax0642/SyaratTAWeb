<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'NIS' ,
        'kelas_id',
        'tgl_lahir',
        'alamat',
    ];

    protected $with = ["kelass"];

    public function kelass()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('nama', 'like', '%'. $filters['search'] . '%')
                ->Orwhere('alamat', 'like', '%'. $filters['search'] . '%');
        }
    }



}
