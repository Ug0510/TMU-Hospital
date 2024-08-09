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
        Schema::create('departments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('url_name'); // Department name
            $table->string('name'); // Department name
            $table->string('bg_image'); // path to the banner image
            $table->text('description'); // Description of the department
            $table->text('research_description'); // Description of the research section
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
