<?php

namespace Eyuva\WhatsappBtn;


use Illuminate\Support\ServiceProvider;

class WhatsappBtnServiceProvider extends ServiceProvider
{
    public function boot(){
        //
    }

    public function register(){
        $this->app->singleton('whatsapp-btn', function() {
            return new WhatsappBtn();
        });
    }
}