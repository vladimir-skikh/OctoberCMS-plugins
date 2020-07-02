<?php namespace WDesighners\Articles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWdesighnersArticles extends Migration
{
    public function up()
    {
        Schema::create('wdesighners_articles_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('article_url');
            $table->text('article_description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wdesighners_articles_');
    }
}
