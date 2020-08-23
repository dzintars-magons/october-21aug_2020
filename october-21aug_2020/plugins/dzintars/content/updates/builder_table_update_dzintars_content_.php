<?php namespace Dzintars\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDzintarsContent extends Migration
{
    public function up()
    {
        Schema::table('dzintars_content_', function($table)
        {
            $table->string('text', 500)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dzintars_content_', function($table)
        {
            $table->string('text', 191)->change();
        });
    }
}
