<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliations extends Model
{
    protected $fillable = [
        'name', 
        'location', 
        'description'
    ];

    /** @use HasFactory<\Database\Factories\AffiliationsFactory> */
    use HasFactory;

    public function authors() {
        return $this->hasMany(Author::class);
    }
}
