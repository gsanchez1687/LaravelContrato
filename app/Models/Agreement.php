<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;
    protected $table = 'agreements';
    protected $fillable = [
        'name',
        'agreement',
        'city_id',
        'date_agreement',
        'valor'
    ];
}
