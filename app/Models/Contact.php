<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'office_name',
        'address',
        'english_phone',
        'spanish_phone',
        'email',
        'facebook_page_1',
        'facebook_page_2',
        'instagram_page_1',
        'instagram_page_2',
    ];
}
