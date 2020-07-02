<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesDoctors3 extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_services_doctors', function($table)
        {
            $table->string('experience', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_services_doctors', function($table)
        {
            $table->string('experience', 191)->nullable(false)->change();
        });
    }
}
