<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWdesighnersServicesServicesCategories extends Migration
{
    public function up()
    {
        Schema::dropIfExists('wdesighners_services_services_categories');
    }
    
    public function down()
    {
        Schema::create('wdesighners_services_services_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('category_id');
            $table->integer('service_id');
        });
    }
}
