<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    public $timestamps = true;
    use HasFactory;
    protected $fillable = ['pengajuan_id','user_id','dokumen','nodokumen'];
    protected $table = 'dokumen';
    protected $guarded = [];

           public function user(){
           return $this->belongsTo('App\Models\User');
           }
               public function pengajuan(){
               return $this->belongsTo('App\Models\Pengajuan');
               }
}
