<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesAnalyzes5 extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_services_analyzes', function($table)
        {
            $table->boolean('analysis_checkbox')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_services_analyzes', function($table)
        {
            $table->dropColumn('analysis_checkbox');
        });
    }
}
