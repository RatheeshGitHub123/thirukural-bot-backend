<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thirukkural extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'Adhigaram_ID',
        'Paal',
        'Iyal',
        'Adhigaram',
        'Kural',
        'Transliteration',
        'Vilakam',
        'Couplet',
        'Section',
        'Parimezhalagar_Urai',
        'M_Varadharajanar',
        'Solomon_Pappaiya',
    ];
}
