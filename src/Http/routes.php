<?php


use SimplyUnnamed\Seat\Attenshun\Http\Controllers\WebhookController;

Route::group([
    'namespace' => "SimplyUnnamed\Seat\Attenshun\Http\Controller",
    'middleware'=>['web', 'auth'],
    'prefix'=>'attenshun'
], function(){

    Route::get('/webhooks', [WebhookController::class, 'index'])->name('attenshun.webhooks.index');

});