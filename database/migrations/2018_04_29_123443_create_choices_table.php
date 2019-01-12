<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->integer('question_id')->unsigned()->comment('questions.idを参照');
            $table->integer('choice')->unsigned()->comment('選択肢「1:ア」「2:イ」「3:ウ」「4:エ」');
            $table->text('body')->nullable()->comment('選択肢本体');
            $table->boolean('correct_flag')->comment('正解フラグ');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));;
                        
            $table->index('question_id');
            $table
                ->foreign('question_id')
                ->references('id')
                ->on('questions')
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
        Schema::dropIfExists('choices');
    }
}
