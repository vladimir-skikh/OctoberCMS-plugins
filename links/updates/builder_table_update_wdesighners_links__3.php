<?php namespace WDesighners\Links\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersLinks3 extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_links_', function($table)
        {
            $table->string('link_href');
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_links_', function($table)
        {
            $table->dropColumn('link_href');
        });
    }
}
