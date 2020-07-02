<?php namespace WDesighners\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWdesighnersServicesCategories extends Migration
{
    public function up()
    {
        Schema::table('wdesighners_services_categories', function($table)
        {
            $table->string('category_slug');
            $table->renameColumn('categories', 'category_name');
        });
    }
    
    public function down()
    {
        Schema::table('wdesighners_services_categories', function($table)
        {
            $table->dropColumn('category_slug');
            $table->renameColumn('category_name', 'categories');
        });
    }
}
