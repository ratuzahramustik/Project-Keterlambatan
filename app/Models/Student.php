<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $filable = [
        'nis',
        'name',
        'rayon_id',
        'rombel_id',
    ];

    public function rombel()
    {
        return $this->belongsTo(Rombel::class, 'rombel_id', 'id');
    }
    public function rayon()
    {
        return $this->belongsTo(Rayon::class, 'rayon_id','id');
    }
    public function lates()
    {
        return $this->hasMany(Late::class, 'student_id', 'id');
    }
}

