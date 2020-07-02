<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesServices10 extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_services_services', function($table)
        {
            $table->string('service_price_second')->nullable();
            $table->renameColumn('service_price', 'service_price_first');
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_services_services', function($table)
        {
            $table->dropColumn('service_price_second');
            $table->renameColumn('service_price_first', 'service_price');
        });
    }
}
