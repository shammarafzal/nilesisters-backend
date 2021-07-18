<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'pdf',
        'pdf_icon',
        'title',
        'contact',
        'edition',
        'format',
        'page_size',
        'page_count',
    ];
}
