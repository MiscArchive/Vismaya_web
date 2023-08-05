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
        Schema::create('curriculums', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('syllabus')->nullable();
            $table->string('age')->nullable();
            $table->string('duration')->nullable();
            $table->string('fee')->nullable();
            $table->string('class_size')->nullable();
            $table->string('intervals')->nullable();
            $table->text('description');
            $table->string('title_image')->nullable();
            $table->string('main_image')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curricula');
    }
};
