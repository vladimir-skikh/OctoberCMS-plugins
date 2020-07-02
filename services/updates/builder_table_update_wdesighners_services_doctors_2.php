<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesDoctors2 extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_services_doctors', function($table)
        {
            $table->renameColumn('last_name', 'middle_name');
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_services_doctors', function($table)
        {
            $table->renameColumn('middle_name', 'last_name');
        });
    }
}
