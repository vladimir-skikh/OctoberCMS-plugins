<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWdesighnersServicesPivot extends Migration
{
    public function up()
    {
        Schema::create('wdesighners_services_pivot', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('category_id');
            $table->integer('service_id');
            $table->primary(['category_id','service_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wdesighners_services_pivot');
    }
}
