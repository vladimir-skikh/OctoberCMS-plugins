<?php namespace WDesighners\Links\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWdesighnersLinks extends Migration
{
    public function up()
    {
        Schema::create('wdesighners_links_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wdesighners_links_');
    }
}
