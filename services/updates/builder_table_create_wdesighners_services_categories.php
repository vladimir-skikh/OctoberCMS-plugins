<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWdesighnersServicesCategories extends Migration
{
    public function up()
    {
        Schema::create('wdesighners_services_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('categories');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wdesighners_services_categories');
    }
}
