<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'member_type_id'];

    public function racingTeams()
    {
        return $this->belongsToMany(RacingTeam::class);
    }

    public function memberType()
    {
        
        return $this->belongsTo(MemberType::class);
    }
}