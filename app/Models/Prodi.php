<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    public $timestamps = false;
    protected $table = 'prodis';
    protected $fillable = ['namaprodi'];
    protected $guarded = [];
    use HasFactory;
}
