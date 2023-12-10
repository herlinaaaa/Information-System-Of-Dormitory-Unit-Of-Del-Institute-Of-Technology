<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alergi extends Model
{
    use HasFactory;
    protected $table = "alergi";
    protected $guarded = [''];
    public function profil()
    {
        return $this->belongsTo(Profil::class, 'user_nim', 'nim');
    }
}