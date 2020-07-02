<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesAnalysisPivot extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_services_analysis_pivot', function($table)
        {
            $table->renameColumn('analisis_id', 'analysis_id');
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_services_analysis_pivot', function($table)
        {
            $table->renameColumn('analysis_id', 'analisis_id');
        });
    }
}
