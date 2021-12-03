<?php

namespace App\Models;

class Produk extends Model{
    protected $table = 'produk';

    protected $dates = ['created_at'];

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }

    function getHargaAttribute(){
        return "Rp.".number_format($this->attributes['harga']);
    }

}