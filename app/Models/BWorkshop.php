<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BWorkshop extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'number',
        'college',
        "year",
        "course",
        "experience",
        "qna"
    ];
}
