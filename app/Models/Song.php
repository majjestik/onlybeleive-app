<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $table = 'songs';

    protected $primaryKey = 'id';

    protected $fillable = ['numero', 'titre', 'refrain', 'couplet_1', 'couplet_2', 'couplet_3', 'couplet_4','couplet_5'];
}
