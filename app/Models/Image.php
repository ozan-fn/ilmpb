<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'type',
        'original_name',
        'mime_type',
        'size',
        'order'
    ];

    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }

    public static function getDashboardImages()
    {
        return Image::where('type', 'dashboard')->orderBy('order', 'asc')->get();
    }

    public static function getLayananMudikImages()
    {
        return Image::where('type', 'layanan-mudik')->orderBy('order', 'asc')->get();
    }
    
    public static function getPospamImages()
    {
        return Image::where('type', 'pospam')->orderBy('order', 'asc')->get();
    }
}
