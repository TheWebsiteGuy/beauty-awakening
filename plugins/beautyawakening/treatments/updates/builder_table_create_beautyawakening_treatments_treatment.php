<?php namespace BeautyAwakening\Treatments\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateBeautyawakeningTreatmentsTreatment extends Migration
{
    public function up()
    {
        Schema::create('beautyawakening_treatments_treatment', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('duration')->nullable();
            $table->string('price')->nullable();
            $table->string('booking_link')->nullable();
            $table->string('disclaimer')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beautyawakening_treatments_treatment');
    }
}
