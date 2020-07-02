<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesAnalyzes6 extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_services_analyzes', function($table)
        {
            $table->dropColumn('analysis_subcategory');
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_services_analyzes', function($table)
        {
            $table->string('analysis_subcategory', 191)->nullable();
        });
    }
}
