<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up() {
        Schema::create('racing_team_team_member', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_member_id');
            $table->unsignedBigInteger('racing_team_id');
            $table->timestamps();
    
            $table->foreign('team_member_id')->references('id')->on('team_members')->onDelete('cascade');
            $table->foreign('racing_team_id')->references('id')->on('racing_teams')->onDelete('cascade');

            $table->unique(['team_member_id', 'racing_team_id']);
            
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('racing_team_team_member');
    }
};
