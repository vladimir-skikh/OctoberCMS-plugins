<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesServices5 extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_services_services', function($table)
        {
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_services_services', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
