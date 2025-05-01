<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;
use App\Models\Client;

class Request extends Model
{
    protected $fillable = ['title', 'description', 'status', 'client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function comments()
{
    return $this->hasMany(Comment::class);
}

}
