<?php namespace Dzintars\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDzintarsContent extends Migration
{
    public function up()
    {
        Schema::create('dzintars_content_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('heading')->nullable();
            $table->string('text')->nullable();
            $table->string('buttontext');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dzintars_content_');
    }
}
