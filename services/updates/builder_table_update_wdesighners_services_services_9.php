<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesServices9 extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_services_services', function($table)
        {
            $table->dropColumn('sub_category_id');
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_services_services', function($table)
        {
            $table->string('sub_category_id', 191);
        });
    }
}
