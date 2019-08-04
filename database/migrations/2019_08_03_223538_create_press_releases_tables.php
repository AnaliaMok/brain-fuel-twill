<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePressReleasesTables extends Migration
{
    public function up()
    {
        Schema::create('press_releases', function (Blueprint $table) {

            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->text('body')->nullable();

            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();


            // use this column with the HasPosition trait
            // $table->integer('position')->unsigned()->nullable();
        });

        // remove this if you're not going to use any translated field, ie. using the HasTranslation trait. If you do use it, create fields you want translatable in this table instead of the main table above. You do not need to create fields in both tables.
        Schema::create('press_release_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'press_release');
            // add some translated fields
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->text('body')->nullable();
        });

        // remove this if you're not going to use slugs, ie. using the HasSlug trait
        Schema::create('press_release_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'press_release');
        });

        // remove this if you're not going to use revisions, ie. using the HasRevisions trait
        Schema::create('press_release_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'press_release');
        });
    }

    public function down()
    {
        Schema::dropIfExists('press_release_revisions');
        Schema::dropIfExists('press_release_translations');
        Schema::dropIfExists('press_release_slugs');
        Schema::dropIfExists('press_releases');
    }
}
