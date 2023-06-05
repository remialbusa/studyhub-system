<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentlist extends Model
{

    protected $table = 'student_list'; // Replace with the actual table name

    protected $fillable = [
        '', 
        '', 
        ''
    ]; // Fillable columns


    use HasFactory;
}
