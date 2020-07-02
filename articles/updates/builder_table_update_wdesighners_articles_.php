<?php namespace WDesighners\Articles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersArticles extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_articles_', function($table)
        {
            $table->string('article_title');
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_articles_', function($table)
        {
            $table->dropColumn('article_title');
        });
    }
}
