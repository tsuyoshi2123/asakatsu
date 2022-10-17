<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDateCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_counts', function (Blueprint $table) {
            $table->foreignId('date_start_id')->constrained('date_starts');
            $table->foreignId('user_id')->constrained('users');
            $table->integer('weekly_count')->default(1);
            $table->integer('month_count')->default(1);
            $table->integer('yearly_count')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('date_counts');
    }
}
