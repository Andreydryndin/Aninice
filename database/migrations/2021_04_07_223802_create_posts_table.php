<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('alias', 50);                            // Название урл
            $table->string('title')->nullable($value = true);              // Название категории
            $table->string('meta_title')->nullable($value = true);
            $table->string('meta_keywords')->nullable($value = true);
            $table->string('meta_description')->nullable($value = true);
            $table->integer('views')->nullable($value = true);
            $table->string('image')->nullable($value = true);
            $table->longText('description')->nullable($value = true);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
