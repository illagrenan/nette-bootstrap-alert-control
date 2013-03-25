<?php

/**
 * Tento soubor je součástí doplňku "Nette Twitter Bootstrap alert"
 * 
 * Copyright (c) 2013 Václav Dohnal <hello@vaclavdohnal.cz>
 */

namespace Illagrenan\BootstrapAlert;

class AlertType extends \Eloquent\Enumeration\Enumeration
{

    const ERROR   = 'alert-error';
    const SUCCESS = 'alert-success';
    const INFO    = 'alert-info';
    const WARNING = '';

}