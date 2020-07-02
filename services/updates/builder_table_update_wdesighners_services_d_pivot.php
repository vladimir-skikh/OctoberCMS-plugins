<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesDPivot extends Migration
{
    public function up()
    {
        Schema::rename('wdesighners_services_doctors_pivot', 'wdesighners_services_d_pivot');    Schema::table('wdesighners_services_d_pivot', function($table)
        {
            $table->primary(['specialty_id','service_id']);
        });
    }
    
    public function down()
    {
        Schema::rename('wdesighners_services_d_pivot', 'wdesighners_services_doctors_pivot');
        Schema::table('wdesighners_services_doctors_pivot', function($table)
        {
            $table->dropPrimary(['specialty_id','service_id']);
        });
    }
}
