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
        Schema::table('recipes', function (Blueprint $table) {
            $table->string('image')->nullable(); // Column for image path
            $table->string('video')->nullable(); // Column for video URL
        });
    }
    
    public function down()
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropColumn(['image', 'video']);
        });
    }
};
