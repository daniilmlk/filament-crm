<?php

namespace App\Models;
use HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['request_id', 'author_name', 'content'];

    public function request()
    {
        return $this->belongsTo(Request::class);
    }
}
