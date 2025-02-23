<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;


    protected $fillable = [
        'id',
        'name',
        'photo',
        'profession',
        'description',
        'stars',
        'socials_networks',
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
            'name' => 'string',
            'photo' => 'string',
            'profession' => 'string',
            'description' => 'string',
            'stars'  => 'string',
            'socials_networks' => 'array',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }


    public function getSocialsNetworksAttribute($value)
    {
        if (is_array($value)) {
            return $value;
        }

        return json_decode($value, true);
    }

}
