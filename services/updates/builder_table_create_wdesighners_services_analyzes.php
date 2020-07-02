<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWdesighnersServicesAnalyzes extends Migration
{
    public function up()
    {
        Schema::create('wdesighners_services_analyzes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('analysis_name');
            $table->integer('analysis_price');
            $table->string('analysis_time');
            $table->string('analysis_category');
            $table->string('analysis_code');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wdesighners_services_analyzes');
    }
}
