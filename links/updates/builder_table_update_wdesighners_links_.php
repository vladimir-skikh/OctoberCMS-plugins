<?php namespace WDesighners\Links\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersLinks extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_links_', function($table)
        {
            $table->string('select');
            $table->string('phone', 191)->nullable(false)->default('null')->change();
            $table->string('email', 191)->nullable(false)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_links_', function($table)
        {
            $table->dropColumn('select');
            $table->string('phone', 191)->nullable()->default(null)->change();
            $table->string('email', 191)->nullable()->default(null)->change();
        });
    }
}
