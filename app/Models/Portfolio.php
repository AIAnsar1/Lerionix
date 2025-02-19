<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Portfolio extends Model
{
    /** @use HasFactory<\Database\Factories\PortfolioFactory> */
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'type',
        'photo',
        'description',
        'project_link',
        'tags_id',
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
            'type' => 'string',
            'photo' => 'string',
            'description' => 'string',
            'project_link' => 'string',
            'tags_id'  => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function tags(): HasOne
    {
        return $this->hasOne(Tags::class);
    }
}
