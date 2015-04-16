<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model {

	public function daftar_pesanan()
    {
        return $this->hasMany('App\DaftarPesanan');
    }

}
