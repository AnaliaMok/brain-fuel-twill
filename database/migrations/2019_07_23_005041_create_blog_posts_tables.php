<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogPostsTables extends Migration
{
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {

            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
        });

        // Translations.
        Schema::create('blog_post_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'blog_post');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        // ie. using the HasSlug trait
        Schema::create('blog_post_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'blog_post');
        });

        // ie. using the HasRevisions trait
        Schema::create('blog_post_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'blog_post');
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_post_revisions');
        Schema::dropIfExists('blog_post_translations');
        Schema::dropIfExists('blog_post_slugs');
        Schema::dropIfExists('blog_posts');
    }
}
