<?php

namespace Illagrenan\BootstrapAlert;

class AlertType extends \Eloquent\Enumeration\Enumeration
{

    const ERROR   = 'alert-error';
    const SUCCESS = 'alert-success';
    const INFO    = 'alert-info';
    const WARNING = '';

}