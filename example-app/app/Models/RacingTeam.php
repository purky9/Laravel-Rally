<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RacingTeam extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    public function teamMembers() {
        return $this->belongsToMany(TeamMember::class);
    }
}
