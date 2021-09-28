<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'post_id',
        'user_id',
        'status',
    ];

    public function getStatusAttribute($attribute){
        return $this->statusOptions()[$attribute] ?? 0;
    }
    public function statusOptions()
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
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
