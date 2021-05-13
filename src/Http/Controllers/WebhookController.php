<?php


namespace SimplyUnnamed\Seat\Attenshun\Http\Controllers;


use Seat\Web\Http\Controllers\Controller;

class WebhookController extends Controller
{

    public function index(){

        return view('attenshun::webhooks.index');
    }

}