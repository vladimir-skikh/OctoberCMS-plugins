<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesAnalyzes3 extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_services_analyzes', function($table)
        {
            $table->renameColumn('analysis_category_id', 'category_id');
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_services_analyzes', function($table)
        {
            $table->renameColumn('category_id', 'analysis_category_id');
        });
    }
}
