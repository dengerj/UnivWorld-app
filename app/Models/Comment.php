<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['contenu',
    'notation',
    'univerity_id',
    'user_id',
    ];

    public function university(){
        return $this->belongsTo(University::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    


}
