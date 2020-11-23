<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulesInfo extends Model
{
    use HasFactory;

    protected $table = 'modules_info';

    protected $fillable = array('cards_id', 'modules_id', 'photo', 'description');
}
