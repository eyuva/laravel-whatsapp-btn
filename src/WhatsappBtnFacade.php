<?php

namespace Eyuva\WhatsappBtn;


use Illuminate\Support\Facades\Facade;

class WhatsappBtnFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'whatsapp-btn';
    }
}