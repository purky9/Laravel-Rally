<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            
            $table->unsignedBigInteger('member_type_id');
            $table->unsignedBigInteger('racing_team_id')->nullable(); 
            $table->timestamps();

            $table->foreign('member_type_id')->references('id')->on('member_types');
            $table->foreign('racing_team_id')->references('id')->on('racing_teams')->nullable(); 
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
