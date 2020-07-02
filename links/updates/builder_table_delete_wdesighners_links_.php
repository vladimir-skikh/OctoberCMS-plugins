<?php namespace WDesighners\Links\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWdesighnersLinks extends Migration
{
    public function up()
    {
        Schema::dropIfExists('wdesighners_links_');
    }
    
    public function down()
    {
        Schema::create('wdesighners_links_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('phone', 191)->nullable();
            $table->string('phone2', 191)->nullable();
            $table->string('phone3', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('email2', 191)->nullable();
        });
    }
}
