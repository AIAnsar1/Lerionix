<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    /** @use HasFactory<\Database\Factories\AboutFactory> */
    use HasFactory;


    protected $fillable = [
        'id',
        'title',
        'socials_networks',
        'questions',
        'address',
        'map',
        'mail',
        'phone',
        'created_at',
        'updated_at',
    ];


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'title' => 'string',
            'socials_networks' => 'array',
            'questions' => 'array',
            'address' => 'string',
            'map' => 'string',
            'mail' => 'string',
            'phone' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
