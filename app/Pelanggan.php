<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';
    // protected $guarded = [''];
    protected $fillable = ['nama','nohp','alamat','deskripsi'];

    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }
}
