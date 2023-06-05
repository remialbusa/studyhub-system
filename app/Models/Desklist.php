<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desklist extends Model
{
    protected $table = 'desk_list'; // Replace with the actual table name

    protected $fillable = [
        'desk_code', 
        'desc', 
        'status'
    ]; // Fillable columns

    use HasFactory;
}

