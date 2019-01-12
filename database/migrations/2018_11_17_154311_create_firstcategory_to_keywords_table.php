<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstcategoryToKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firstcategory_to_keywords', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->integer('firstcategory_id')->unsigned()->comment('firstcategories.idを参照');
            $table->integer('keyword_id')->unsigned()->comment('keywords.idを参照');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));;
                        
            $table->index('firstcategory_id');
            $table
                ->foreign('firstcategory_id')
                ->references('id')
                ->on('firstcategories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->index('keyword_id');
            $table
                ->foreign('keyword_id')
                ->references('id')
                ->on('keywords')
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
        Schema::dropIfExists('firstcategory_to_keywords');
    }
}
