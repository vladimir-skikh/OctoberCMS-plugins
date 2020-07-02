<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWdesighnersServicesServices extends Migration
{
    public function up()
    {
        Schema::create('wdesighners_services_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('service_name');
            $table->string('service_slug');
            $table->string('service_price');
            $table->text('service_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wdesighners_services_services');
    }
}
