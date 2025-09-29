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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('course_name');
            $table->string('course_name_en')->nullable();

            $table->string('target')->nullable();
            $table->string('target_en')->nullable();

            $table->text('course_text')->nullable();
            $table->text('course_text_en')->nullable();

            $table->string('youtube_url')->nullable();

            // デザイン用（背景色・枠線色など）
            $table->string('background', 32)->nullable();
            $table->string('border', 32)->nullable();

            $table->unsignedInteger('sort')->default(0);
            $table->boolean('display_flg')->default(true)->index();

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日時');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};


