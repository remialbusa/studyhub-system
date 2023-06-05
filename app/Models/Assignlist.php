<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignlist extends Model
{
    protected $table = 'assign_list';

    protected $fillable = [
        'student_id', 
        'desk_id', 
        'remarks',
        'status'
    ]; // Fillable columns


    use HasFactory;
}
