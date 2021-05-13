<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebhooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attenshun_webhooks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->string('group');
            $table->string('description')->nullable();
            $table->text('webhook');
            $table->text('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attenshun_webhooks');
    }
}
