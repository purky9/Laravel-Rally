<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberType extends Model
{
    protected $fillable = ['name'];

    public function teamMembers()
    {
        return $this->hasMany(TeamMember::class);
    }
}