<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'link_down',
        'link_view',
        'image',
        'free',
        'description',
    ];
}
