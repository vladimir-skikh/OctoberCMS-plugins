<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesServices13 extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_services_services', function($table)
        {
            $table->string('specialty', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_services_services', function($table)
        {
            $table->string('specialty', 191)->nullable(false)->change();
        });
    }
}
