<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected $fillable = ['libellé'];
    public function university(){
        return $this->belongsToMany(University::class);
    }
}