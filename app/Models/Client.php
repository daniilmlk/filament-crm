<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;
use App\Models\Request;

class Client extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'notes'];

    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}

