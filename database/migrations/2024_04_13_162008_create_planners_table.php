<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('planners', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('username');
            $table->string('platforms')->nullable();
            $table->string('goals')->nullable();
            $table->string('idea')->nullable();
            $table->string('content_pillar')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('progress')->nullable();
            $table->string('visual')->nullable();
            $table->string('visual_det')->nullable();
            $table->string('caption')->nullable();
            $table->string('hastag')->nullable();
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planners');
    }
};
