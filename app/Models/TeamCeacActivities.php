<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamCeacActivities extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'description'];
}
