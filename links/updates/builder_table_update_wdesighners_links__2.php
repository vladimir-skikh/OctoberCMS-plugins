<?php namespace WDesighners\Links\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersLinks2 extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_links_', function($table)
        {
            $table->string('link_value', 191)->default('null');
            $table->string('select', 191)->default('null')->change();
            $table->dropColumn('phone');
            $table->dropColumn('email');
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_links_', function($table)
        {
            $table->dropColumn('link_value');
            $table->string('select', 191)->default(null)->change();
            $table->string('phone', 191)->default('null');
            $table->string('email', 191)->default('null');
        });
    }
}
