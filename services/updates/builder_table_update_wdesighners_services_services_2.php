<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesServices2 extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_services_services', function($table)
        {
            $table->string('category');
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_services_services', function($table)
        {
            $table->dropColumn('category');
        });
    }
}
