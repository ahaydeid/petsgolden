<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonials extends Model
{
    use HasFactory;

    protected $table = 'testimonials';

    protected $fillable = [
        'name',
        'testimonial',
        'foto',
    ];
}