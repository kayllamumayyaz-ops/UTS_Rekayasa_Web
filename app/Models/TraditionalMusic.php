<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraditionalMusic extends Model
{
    use HasFactory;
    protected $table = 'traditional_music';
    protected $fillable = ['title', 'region', 'instrument', 'artist', 'release_year', 'audio_file', 'description'];
}
