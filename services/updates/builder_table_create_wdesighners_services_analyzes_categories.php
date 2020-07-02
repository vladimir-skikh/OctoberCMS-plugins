<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWdesighnersServicesAnalyzesCategories extends Migration
{
    public function up()
    {
        Schema::create('wdesighners_services_analyzes_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('category_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wdesighners_services_analyzes_categories');
    }
}
