<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    protected $table = 'organisations';

    protected $fillable = [
        'legal_name',
        'description',
        'source',
        'inn',
        'phone_number',
        'head_person_name',
    ];

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'organisation_id', 'id');
    }
}
