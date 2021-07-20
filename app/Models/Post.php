<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'post',
        'is_approved',
        'user_id',
    ];

    public function getIsApprovedAttribute($attribute){
        return $this->isApprovedOptions()[$attribute] ?? 0;
    }
    public function isApprovedOptions()
    {
        return [
            2 => 'Rejected',
            1 => 'Approved',
            0 => 'Pending',
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
