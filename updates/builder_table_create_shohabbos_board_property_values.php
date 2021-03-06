<?php namespace Shohabbos\Board\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShohabbosBoardPropertyValues extends Migration
{
    public function up()
    {
        Schema::create('shohabbos_board_property_values', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('label');
            $table->string('value');
            $table->integer('property_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shohabbos_board_property_values');
    }
}
