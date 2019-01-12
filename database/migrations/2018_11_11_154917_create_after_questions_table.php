<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfterQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('after_questions', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->integer('number')->unsigned()->comment('問題番号');
            $table->text('body')->nullable()->comment('問題文');
            $table->text('commentary')->nullable()->comment('解説');
            $table->integer('thirdcategory_id')->unsigned()->comment('thirdcategories.idを参照');
            $table->integer('divition_id')->unsigned()->comment('divitions.idを参照');
            $table->integer('round_id')->unsigned()->comment('rounds.idを参照');
            $table->integer('examination_id')->unsigned()->comment('examinations.idを参照');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));;
                        
            $table->unique(['number', 'round_id', 'examination_id']);
            
            $table->index('thirdcategory_id');
            $table
                ->foreign('thirdcategory_id')
                ->references('id')
                ->on('thirdcategories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->index('divition_id');
            $table
                ->foreign('divition_id')
                ->references('id')
                ->on('divitions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->index('round_id');
            $table
                ->foreign('round_id')
                ->references('id')
                ->on('rounds')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->index('examination_id');
            $table
                ->foreign('examination_id')
                ->references('id')
                ->on('examinations')
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
        Schema::dropIfExists('after_questions');
    }
}
