<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firstcategories', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->string('name', 255)->comment('小項目 例：離散数学');
            $table->integer('secondcategory_id')->unsigned()->comment('secondcategories.idを参照');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));;
                        
            $table->index('secondcategory_id');
            $table
                ->foreign('secondcategory_id')
                ->references('id')
                ->on('secondcategories')
                ->onDelete('cascade')
                ->onUpdate('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firstcategories');
    }
}
