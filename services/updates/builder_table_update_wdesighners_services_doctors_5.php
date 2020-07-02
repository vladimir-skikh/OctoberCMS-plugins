<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesDoctors5 extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_services_doctors', function($table)
        {
            $table->dropColumn('activity');
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_services_doctors', function($table)
        {
            $table->string('activity', 191)->nullable();
        });
    }
}
