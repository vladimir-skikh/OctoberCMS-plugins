<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWdesighnersServicesDoctors extends Migration
{
    public function up()
    {
        Schema::create('wdesighners_services_doctors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('last_name');
            $table->string('specialty');
            $table->string('experience');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wdesighners_services_doctors');
    }
}
