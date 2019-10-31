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
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('image');
            $table->string('title_uz')->nullable();
            $table->string('title_cyrl')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->text('description_uz')->nullable();
            $table->text('description_cyrl')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->longText('body_uz')->nullable();
            $table->longText('body_cyrl')->nullable();
            $table->longText('body_ru')->nullable();
            $table->longText('body_en')->nullable();
            $table->integer('author_id');
            $table->integer('category_id')->nullable();
            $table->integer('banner')->nullable()->default(0);
            $table->string('status')->nullable()->default('unpublished');
            $table->integer('view_count')->nullable()->default(0);
            $table->date('deleted_at')->nullable();
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
