<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWdesighnersServicesCategoriesServices extends Migration
{
    public function up()
    {
        Schema::dropIfExists('wdesighners_services_categories_services');
    }
    
    public function down()
    {
        Schema::create('wdesighners_services_categories_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('category_id');
            $table->integer('service_id');
        });
    }
}
