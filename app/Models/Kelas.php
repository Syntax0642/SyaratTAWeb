<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        "id","kelas"
    ];

    public function student()
    {
        return $this->hasMany(Student::class);
    }


}
