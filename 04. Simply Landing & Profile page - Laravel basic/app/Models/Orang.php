<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orang extends Model
{
    protected $data = [
        'nama1' => 'Gojo',
        'npm1' => '2207111111',
        'quotes1' => 'es kiko bagi dua',
        'nama2' => 'Dina Oktavia',
        'npm2' => '220711928',
        'quotes2' => 'yo ndak tau kok tanya saya',
        'nama3' => 'Pug',
        'npm3' => '2207000000',
        'quotes3' => 'If you know, you know'

    ];

    public function getAll()
    {
        return $this->data;
    }
}