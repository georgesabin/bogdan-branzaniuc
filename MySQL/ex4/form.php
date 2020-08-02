<?php

class Form
{
    private $method = '';
    private $action = '';

    public function __construct(string $method, string $action)
    {
        $this->method = $method;
        $this->action = $action;
    }

    public function preventXSS($x)
    {
        function testImput($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            return htmlspecialchars($data);
        }
        if (!empty($x)) {
            $x = testImput($x);
            return $x;
        }
    }

    public function build(): string
    {

        $form = '';
        $form .= sprintf('<form action="%s" method="%s">', $this->action, $this->method);
        $form .= '<input type="text" name="db" requierd>';
        $form .= '<input type="submit" value="submit">';
        $form .= '</form>';
        return $form;

    }
}
