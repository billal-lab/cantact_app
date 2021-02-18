<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cantact extends Model
{
    use HasFactory;

    protected $table = 'cantacts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'created_at',
        'updated_at',
        'firstname',
        'lastname',
        'numberPhone',
        'adresse',
        'email',
        'town',
        'codePostal',
        'description'
    ];
}
