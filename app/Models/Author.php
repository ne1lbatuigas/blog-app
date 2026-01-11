<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'publishcount',
        'bio',
        'affiliation_id',
    ];

    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;

    public function affiliation() {
        return $this->belongsTo(Affiliations::class);
    }
}
