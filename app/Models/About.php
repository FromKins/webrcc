<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';
    protected $fillable = [
        'description_history',
        'description_vision',
        'description_mission1',
        'description_mission2',
        'description_mission3',
        'description_ceo',
        'description_secretary',
        'description_treasurer',
        'description_supervisor',
        'description_member1',
        'description_member2'
    ];
}