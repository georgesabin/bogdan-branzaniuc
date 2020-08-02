<?php

namespace Classes;

use Classes\AbstractForm;

class NumberOfColumnsForm extends AbstractForm
{
    public function __construct(string $action, string $method)
    {
        parent::__construct($action, $method);
    }

    public function buildForm(): string
    {
        $form = $this->startForm($this->action, $this->method);
        /**
         * Aceasta metoda va crea primul formular
         * Formularul va avea:
         *  - 1 input text numarul de coloane
         *  - 1 input submit
         */

        $form .= $this->endForm();

        return $form;
    }
}
