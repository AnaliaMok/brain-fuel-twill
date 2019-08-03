<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogPostsTables extends Migration
{
    public function up()
    {
        // Main table. Holds all NON-translated fields.
        Schema::create('blog_posts', function (Blueprint $table) {

            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            // NOTE: In production, manually create these fields in order to take advantage of bigIncrements for IDs
        });

        // Translations.
        Schema::create('blog_post_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'blog_post');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->text('body')->nullable();
        });

        // ie. using the HasSlug trait
        // holds slug history
        Schema::create('blog_post_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'blog_post');
        });

        // ie. using the HasRevisions trait
        // holds revision history
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
