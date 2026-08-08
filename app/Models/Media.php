<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'category_id',
        'file_name',
        'file_path',
        'file_type',
        'extension',
        'file_size',
        'width',
        'height',
        'title',
        'alt_text',
        'caption',
        'description',
        'focus_keyword',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
