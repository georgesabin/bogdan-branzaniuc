<?php

namespace Classes;

use Classes\AbstractForm;

class ColumnsForm extends AbstractForm
{
    private $numberOfColumns;

    public function __construct(
        string $action,
        string $method,
        int $numberOfColumns
    ) {
        parent::__construct($action, $method);

        $this->numberOfColumns = $numberOfColumns;
    }

    public function buildForm(): string
    {
        $form = $this->startForm($this->action, $this->method);
        /**
         * Aceasta metoda va crea formularul in functie de valoarea input-ului primit de la primul formular
         * ce reprezinta numarul de coloane
         * Formularul va avea:
         *  - 1 input text numele bazei de date
         *  - 1 input text numele tabelei
         *  - n (numarul de coloane primit de la primul form) seturi de forma:
         *      * input text cu name = columnName[]
         *      * select cu name = columnType[] si optiunile lui (VEZI LOGICA METODEI IN AbstractForm)
         *      * input text cu name = columnSize[]
         *  - 1 input submit
         */
        $form .= $this->endForm();

        return $form;
    }
}
