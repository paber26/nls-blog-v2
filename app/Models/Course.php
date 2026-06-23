<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'highlights' => 'array',
            'disclaimer_sources' => 'array',
            'tags' => 'array',
            'content_sections' => 'array',
        ];
    }
}
