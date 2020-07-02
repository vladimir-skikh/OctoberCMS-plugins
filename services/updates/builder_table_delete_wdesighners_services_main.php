<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWdesighnersServicesMain extends Migration
{
    public function up()
    {
        Schema::dropIfExists('wdesighners_services_main');
    }
    
    public function down()
    {
        Schema::create('wdesighners_services_main', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('category', 191)->nullable();
            $table->string('service', 191)->nullable();
            $table->string('price', 191)->nullable();
            $table->string('sub_category', 191)->nullable();
            $table->text('description')->nullable();
            $table->string('category_slug', 191)->nullable();
            $table->string('sub_category_slug', 191)->nullable();
            $table->string('service_slug', 191)->nullable();
        });
    }
}
