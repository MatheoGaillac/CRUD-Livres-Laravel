<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Livres extends Model{
    protected $table = 'livres';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'titre',
        'auteur',
        'genre'
    ];
}
?>
