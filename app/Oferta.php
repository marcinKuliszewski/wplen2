<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = ['nazwa','typ','adres','wojew','region','telefon','telefon2','email','sniadanie','obiad','kolacja','obiadokolacja','iloscmiejsc',
        'iloscpokoi','ilosclazienek','okolica','cenamin','cenamax','dostod','dostdo','piktogram','dodatkowe','poz_x','poz_y','link','opis','wiecej','inde','user_id','jadlonamiejscu','obowiazkowejadlo'];
}
