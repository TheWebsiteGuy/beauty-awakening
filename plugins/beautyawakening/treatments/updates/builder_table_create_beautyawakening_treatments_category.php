<?php namespace BeautyAwakening\Treatments\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateBeautyawakeningTreatmentsCategory extends Migration
{
    public function up()
    {
        Schema::create('beautyawakening_treatments_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beautyawakening_treatments_category');
    }
}
